<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Currency;

use App\Models\paymentPlatform;

class PaymentSystemController extends Controller
{
    public function index()
    {
    
    $currencies = Currency::all();

    $paymentPlatforms = paymentPlatform::all();

    return view('payment-system')->with([

        'currencies' => $currencies,
        'paymentPlatforms' => $paymentPlatforms
    ]);
    
    }
}
