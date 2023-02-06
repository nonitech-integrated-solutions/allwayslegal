@extends('templates.main')
@section('content')

<div class="container" style="width:500px">


<div class="mt-5">

    <h3 class="text-center mb-5">Payment System</h3>
        
    <form action="{{ route('pay') }}" method="POST" id="paymentPlatform">
        @csrf
        <div class="form-group row">

        <div class="mb-3 col-6">
            <label for="" class="form-label">Amount to pay</label>
            <input type="number" min="5" step="0.01" name="value" 
            value="{{ mt_rand(500, 100000) / 100 }}" class="form-control" id="pay-button">
        </div>

        <div class="mb-3 col-6">
            <label for="" class="form-label">Currency</label>
            <select class="custom-select" name="currency" required> 
                @foreach($currencies as $currency)
                    <option value="{{ $currency->iso }}">
                        {{ strtoupper($currency->iso) }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row mt-3">
            <div class="col-12 form-group" id="toggler">
                <div lass="btn-group btn-group-toggle" data-toggle="buttons" style="text-align:center">
                <h5>Select your desired payment platform</h5>       
                @foreach($paymentPlatforms as $paymentPlatform)
                <label type="radio" class="btn btn-outline-secondary rounded m-2 p-1">
                    <input type="radio" name="payment_platform" value="{{ $paymentPlatform->name }}" 
                    data-target="#{{ $paymentPlatform->name }}Collapse" data-toggle="collapse" required>
                    <img class="img-thumbnail" src="{{ asset($paymentPlatform->image) }}">
                </label>
                @endforeach
                </div>
                @foreach ($paymentPlatforms as $paymentPlatform)
                <div id="{{ $paymentPlatform->name }}Collapse" class="collapse" data-parent="#toggler">
                    @includeIf ('components.' . strtolower($paymentPlatform->name) . '-collapse')
                </div>
                @endforeach
                </div>
            </div>
        </div>
       
        <div class="text-center">
            <button id="confirm" class="btn col-5 mb-5" type="submit" 
            style="background:#337ab7; color:#fff">
            <b>Confirm Booking</b> <i class="fa fa-arrow-right"></i>
            </button>                       
        </div>


        </div>
        
    </form>
 
    
    </div>
</div>     

</div>
@endsection


