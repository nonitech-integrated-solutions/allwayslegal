@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-3 left-section" style="background:ghostwhite">
    <div class="row">
        <div class="col-12 p-3" style="background:ghostwhite">
            <strong>
                <div class="card" style="background:#ffffff; border-radius:10px; min-height:500px">               
                    <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                        <div style="color:#337ab7" class="nav-lavel p-2"><i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span></div>           
                        <div style="line-height:2; color:#337ab7" tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2">
                        <i class="fa fa-user fa-2x p-2"></i> <span>Choose a lawyer</span></div>               
                        <div style="line-height:2; color:#337ab7" tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2">
                        <i class="fa fa-file fa-2x p-2"></i> <span>Case summary</span></div>
                        <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel -2">
                        <i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span>
                            <p style="font-size:12px" class="p-2">
                            We've sorted lawyers based on their areas of experience in your area of need.
                            </p>
                        </div>
                    </nav>                            
                </div>
            </strong>  
        </div>       
    </div>
    </div>

    <div class="col-md-9 right-section p-3">         
        <div class="overflow-hidden">
        <div class="row gx-3">
            <div class="col-md-4">
            <div class="p-3 border" style="border-radius:15px; background:ghostwhite">

            <div class="row">
                <div class="col-md-3">
                <img src="{{ asset('storage/img/avatar.jpg') }}" alt="" style="width:80px"> 
                </div>
                <div class="col-md-9" style="list-style:none; color:navy">
                <b><li>&nbsp Shenaz</li> 
                    <li>&nbsp Mohammed</li></b>
                </div>  
            </div>   

            <div class="p-2 mt-2 border" style="background:#fff; border-radius:10px; list-style:none; color:gray">      
                <li><i class="fa fa-clock-o"></i> Mon, Aug 8, 5:30pm</li>
                <!-- <li><i class="fa fa-clock-o"></i> 5:30pm</li> -->
                <li><i class="fa fa-phone"></i> (147) 593-0405</li>     
            </div>
            <div class="pt-2" style="list-style:none; font-size:13px; color:gray">
                <li>This is the day and time your lawyer will call you. We suggest a quiet place for max benefit.</li>
                <li class="pb-2 pt-2">You can reschedule or cancel your call by speaking with out Legal Concierge service team.</li>
                <li>Calls can be cancelled up to 2 hours before. Contract reviews require 24hrs notice.</li>
            </div>
            </div>
            </div>
            <div class="col">
            <div class="p-3 border" 
            style="background:ghostwhite; border-radius:10px">
            
                <div class="card p-3">
                <table class="table table-borderless align-middle">
                    <tbody class="p-5">
                    <tr>
                        <td colspan="2"><strong>Item</strong></td>
                        <td style="float:right"><strong>Total</strong></td>       
                    </tr>
                    <tr style="border-bottom:1px solid #ddd">
                        <td colspan="2">Advisor Agreement</td>
                        <td style="float:right">$700.00</td>
                    </tr>
                    <tr> 
                        <td colspan="2">Service Fee</td>
                        <td style="float:right">$100</td>
                    </tr>
                    <tr> 
                        <td colspan="2">Service Fee Tax</td>
                        <td style="float:right">$100</td>
                    </tr>
                    <tr> 
                        <td colspan="2">Legal Fee</td>
                        <td style="float:right">$500</td>
                    </tr>
                    <tr> 
                        <td colspan="2">Legal Fee Tax</td>
                        <td style="float:right">$25</td>
                    </tr>
                    <tr style="border-top:1px solid #ddd; padding-bottom:20px"> 
                        <td colspan="2" style="padding-bottom:10px">
                        <i class="fa fa-exclamation-circle" 
                        style="color:#337ab7"></i> <strong>Estimated Total</strong></td>
                        <td style="float:right"><strong>$750.98</strong></td>
                    </tr>
                    </tbody>
                </table>
                </div>              
            </div>

            <div class="mt-5">
                <h5>Add a payment method</h5>
                <small>A valid credit card is required to book legal services on AllwaysLegal. 
                Customers are not billed until their services is complete, but depending
                on the nature of your service your lawyer may require a deposit or partial
                payment, with your approval. If your total is $0, you card will not be charged. 
                </small>

                <form action="">
                <div class="mb-3 pt-3">
                    <label for="" class="form-label">Name on credit card</label>
                    <input type="fullName" class="form-control" id="" placeholder="Kevin Gates">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Card Number</label>
                    <input type="number" class="form-control" id="" placeholder="Card number">
                </div>
                <div class="form-group row">
                    <label class="col-md-12">Card Exp. Date</label>
                    <div class="col-md-4">
                        <select class="form-control form-select" name="cc_exp_mo">
                            <option value="">-- Month --</option>
                            <option value="01">January</option>
                            <option value="02">Febuary</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="year" name="year" 
                        class="form-control form-select" >
                        <option value="">-- Year --</option>
                           {{ $next= date('Y')+10 }}
                           {{ $now = date('Y') }}
                           @for ($i = $now; $i <= $next; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
    
                    <div class="col-md-4">
                        <input type="number" class="form-control" autocomplete="off" maxlength="3" name="cc_exp_yr"
                        pattern="\d{3}" title="Three digits at back of your card" required="" placeholder="CVC">
                    </div>
                </div> 
            </form>
                <div>
                <small>
                    Credit card is stored and payments are processed securely using <a href="#">Stripe.</a><br><br>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                    onchange="document.getElementById('confirm').disabled = !this.checked">
                    <label class="form-check-label" for="flexCheckChecked">
                        I authorize AllwaysLegal to send instructions to the financial institution that issed 
                        my card to take payments from my card account in accordance with the terms of my 
                        agreement with you.<br>
                        I agree to the terms of <a href="#">retainer.</a>
                    </label>
                    </div>    
                </small>
               <a href="{{ route('case.summary') }}" class="btn col-5 mt-5" style="background:gray; color:#fff">
                <i class="fa fa-arrow-left"></i> <b>Go Back</b></a>
                <button id="confirm" class="btn col-5 mt-5" 
                style="background:#337ab7; color:#fff; float:right" disabled>
                <b>Confirm Booking</b> <i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
            </div>
        </div>
    </div>                     
    </div>     
</div>
</div>
@endsection