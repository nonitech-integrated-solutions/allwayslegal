<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\PayPalService;

use App\Resolvers\PaymentPlatformResolver;

class PaymentController extends Controller
{   
    protected $paymentPlatformResolver;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
      //  $this->middleware('auth');

       $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

    /**
     * Obtain a payment details.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pay(Request $request)
    {   
        
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_platform' => ['required', 'exists:payment_platforms,name']
        ];

    //  $request->validate($rules);
  
        $paymentPlatform = $this->paymentPlatformResolver
            ->resolveService($request->payment_platform);

       session()->put('paymentPlatformId', $request->payment_platform);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolveService(session()->get('paymentPlatformId'));

            return $paymentPlatform->handleApproval();
        }

        return redirect()
            ->route('payment')
            ->withErrors('We cannot retrieve your payment platform. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()
            ->route('payment')
            ->withErrors('You cancelled the payment.');
    }
}
