<div class="container" style="overflow:hidden">

@php
$legal_needs = "Start by selecting a legal category so we can find you the right lawyers.";
$lawyer_selection = "We've sorted lawyers based on their areas of experience in your area of need.";
$case_summary = "Share important info with your lawyers. Concise notes work best.";
$confirmation = "We've sorted lawyers based on their areas of experience in your area of need.";


@endphp

    <div class="row">
        <div class="col-md-3" tyle="background:ghostwhite">
            <div class="row">
                <div class="col-12 p-4" style="background:ghostwhite">
            
                    <strong>
                        <div class="card" style="background:#ffffff; border-radius:10px; min-height:500px">
                            <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                                <hr>
                                @if ($this->selectedArea && $this->selectedService)
                                <div tyle="line-height:2" class="p-2">
                                <i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span>
                                </div>        
                                @else
                                <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel p-2">
                                <i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span>
                                    <p style="font-size:12px" class="p-2">{{ $legal_needs }}</p>
                                </div>    
                                @endif
                                
                                <hr>

                                @if ($this->selectedService && !$this->schedule)
                                <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel p-2">
                                <i class="fa fa-user fa-2x p-2"></i> <span>Choose lawyer</span>
                                    <p style="font-size:12px" class="p-2">{{ $lawyer_selection }}</p>
                                </div>    
                                @else
                                <div tyle="line-height:2" class="p-2"><i class="fa fa-user fa-2x p-2"></i> 
                                <span>Choose lawyer</span></div>   
                                @endif

                                <hr>

                                @if ($this->schedule == true && !$this->state['time'])      
                                <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px">
                                    <i class="fa fa-calendar fa-2x p-2"></i> <span>Schedule time</span>
                                    <p style="font-size:12px" class="p-2">
                                    Select a convinient date and time to communicate with your lawyer</p>
                                </div>  
                                @else
                                <div tyle="line-height:2" class="nav-lavel p-2">
                                    <i class="fa fa-calendar fa-2x p-2"></i> 
                                <span>Schedule time</span></div>
                                @endif

                                <hr>

                                @if ($this->state['time'] && !$this->hasCaseInfo)      
                                <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px">
                                    <i class="fa fa-file fa-2x p-2"></i> <span>Case summary</span>
                                    <p style="font-size:12px" class="p-2">{{ $case_summary }}</p>
                                </div>  
                                @else
                                <div tyle="line-height:2" class="nav-lavel p-2">
                                    <i class="fa fa-file fa-2x p-2"></i> 
                                <span>Case summary</span></div>
                                @endif

                                <hr>       

                                @if (!$this->hasCaseInfo)
                                <div tyle="line-height:2" class="nav-lavel p-2">
                                    <i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span>
                                </div>
                                @else
                                <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" 
                                class="nav-lavel">
                                <i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span>
                                    <p style="font-size:12px" class="p-2">{{ $confirmation }}</p>
                                </div>   
                                @endif 

                                <hr>
                            </nav>                  
                        </div>
                    </strong>  
                </div>       
            </div>
        </div>
        <div class="col-md-9 mb-4" style="text-decoration:none">     
            <div lass="container">
                <div class="row" tyle="background:ghostwhite">
                    <div class="col-md-12 mt-3" style="text-decoration:none">   
                        <div class="card p-3 mb-2" style="@if($lawyerz) display:none @endif; background:ghostwhite">              
                            <p style="color:navy"><b>Your legal needs</b></p> 
                            <div class="row">        
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example"
                                    wire:model='state.area'>
                                    <option value="">Select practice area</option>
                                    @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{ $area->name }}</option>
                                    @endforeach                     
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example"
                                    wire:model='state.service'>
                                    <option value="">Choose a Service</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->title }} - {{ $service->duration }}mins</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3" style="@if($lawyers) display:none @endif">             
                        @foreach($areas as $area)
                            <div id="lawyer->id" class="col-md-3 col-sm-4 col-xs-6">   
                                <button class="text-center border p-4" 
                                    style="text-decoration:none; min-height:150px; max-height:150px; min-width:185px; background:ghostwhite">
                                    <img src="{{ asset('storage/img/areas/'.$area->name.'.'.'png') }}" 
                                    alt="{{ $area->name }}" style="width:65px; margin:auto">                        
                                    <h6 style="color:#337ab7">{{ $area->name }}</h6>       
                                </button>         
                            </div>
                        @endforeach   
                        </div> 
                      
                        @if($lawyers)    
                        <div class="row g-2 mb-2" style="margin:auto">
                            @if(count($lawyers) == null)
                            <div class="col-12 container">
                                <h2 class="text-center mt-5">
                                    Sorry there are currently no lawyers available for this category.
                                </h2>
                            </div> 
                            @else
                            @foreach($lawyers as $lawyer)
                            <div class="col-6" style="@if($lawyerz) display:none @endif">
                                <button wire:click="getLawyerInfo({{ $lawyer->id }})" style="text-decoration:none; cursor:pointer">
                                    <div class="p-3 border" style="background:ghostwhite; border-radius:20px">
                                        <div class="row p-2 text-left">
                                            <div class="col-md-4 col-xs-12">
                                                <img class="card-img border" src="{{ asset('storage/img/avatar.jpg') }}" alt="No-Image"
                                                    style="border-radius:25%; height:100px">
                                            </div>
                                            <div class="col-md-8 col-sm-12">    
                                                <h5 class="card-title">{{ $lawyer->first_name }}<br>{{ $lawyer->last_name }}</h5>
                                                <i class="fa fa-star"></i> 5 (2)<br>
                                                <i class="fa fa-map-marker"></i> {{ $lawyer->city }}, {{ $lawyer->province }}                
                                            </div>
                                            <div class="text-center p-1 mt-2 border" 
                                            style="background:#fff; border-radius:20px">
                                            Next available: Tuesday September 20
                                            </div>
                                        </div>                    
                                    </div>
                                </button>         
                            </div>
                            @endforeach   
                            @endif                 
                        @endif

                        @if($this->lawyerz)
                        <div style="@if($schedule) display:none @endif" class="container">
                            <!-- <h4 style="color:#337ab7">Lawyer's Description</h4> -->
                            <div class="card p-3 mb-3" style="background:white; border:2px solid #337ab7; border-radius:10px">     
                                <div class="row p-3">     
                                    <div class="col-md-3">
                                        <div class="img p-2 text-center t-3 pb-3 border" 
                                        style="border-radius:20px; background:ghostwhite">
                                            <img src="{{ asset('storage/img/avatar.jpg') }}" alt="No-Image"
                                            style="border-radius:10%; height:100px">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3>{{ $lawyerz->first_name }} {{ $lawyerz->last_name }}</h3>
                                        <p class="pb-1"><i class="fa fa-star"></i> 5 (2) <a href="#">read reviews</a></p>
                                        <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-map-marker"></i> {{ $lawyerz->city }}, {{ $lawyer->province }}</span>
                                        <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-comments-o"></i> English {{ $lawyer->languages }}</span>  
                                    </div>
                                    <div class="col-md-12 pt-3">
                                        <p style="color:gray">
                                            {{ $lawyerz->story }} <a href="#">read more</a><br>         
                                        </p>
                                        <div class="practice-areas"><b>Practice Areas</b>
                                            <div class="pt-3">
                                                @foreach($lawyerz->areas as $area)
                                                <button class="p-2 mb-3 border" style="background:ghostwhite; border-radius:10px; color:#333" disabled>{{ $area->name }}</button>
                                                @endforeach
                                            </div>
                                        </div><br>
                                        <div class="services"><b>Servicess</b>
                                            <div class="pt-3">
                                                @foreach($lawyerz->services as $service)
                                                <button class="p-2 border" style="background:ghostwhite; border-radius:10px; color:#333" disabled>{{ $service->title }}</button>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>
                            <div class="text-right">
                                <button wire:click="goToShedule({{$lawyerz->id}})" class="btn btn-secondary">Continue</button>
                            </div>
                        </div>
                        @endif

                        @if($this->lawyerz)
                        <div style="@if(!$schedule || $this->hasDetailsToBook) display:none @endif" class="container">
                            <!-- <h4 class="mb-3 mt-0" style="color:#337ab7">Pick an available time</h4> -->
                            <div class="card p-3 mb-3">          
                                <div class="row p-3">     
                                    <div class="col-md-3">
                                        <div class="img p-2 text-center t-3 pb-3 border" 
                                        style="border-radius:20px; background:ghostwhite">
                                            <img src="{{ asset('storage/img/avatar.jpg') }}" alt="No-Image"
                                            style="border-radius:10%; height:100px">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3>{{ $lawyerz->first_name }} {{ $lawyerz->last_name }}</h3>
                                        <p class="pb-1"><i class="fa fa-star"></i> 5 (2) <a href="#">read reviews</a></p>
                                        <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-map-marker"></i> {{ $lawyer->city }}, {{ $lawyer->province }}</span>
                                        <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-comments-o"></i> English {{ $lawyer->languages }}</span> 
                                    </div>
                                </div>
                            </div>
                                
                            <div class="pt-4" style="line-height:1px"> 
                                <p>Schedule your call</p>
                                <p><small>Times shown in WAT</small></p> 
                            </div>          
                    
                            <div class="card">      
                                <livewire:booking-calendar 
                                :area="$this->selectedArea"
                                :service="$this->selectedService" 
                                :lawyer="$this->lawyerz" 
                                :key="optional($lawyer)->id" />
                            </div>
                        </div>     
                        @endif     
                        
                        @if ($this->hasDetailsToBook && !$this->hasCaseInfo)
                        <div class="container">
                            <div class="col-md-10 p-3 border" style="background:ghostwhite; border-radius:20px">
                                <div class="row p-4">
                                    <div class="col-md-3 text-center">
                                    <img class="border" src="{{ asset('storage/img/avatar.jpg') }}" alt="No-Image"
                                    style="border-radius:10%; height:85px">
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center">
                                    <h5 class="text-center">{{ $lawyerz->first_name }} {{ $lawyerz->last_name }}</h5>
                                    </div>
                                    <div class="col-md-4 p-2 border" style="background:#fff; border-radius:10px; color:gray">
                                    <small><i class="fa fa-clock-o"></i> 
                                    {{ $this->timeObject->format('D, M j') }},
                                    {{ $this->timeObject->format('g:iA') }}</small><br>
                                    <small><i class="fa fa-phone"></i> (147) 595-0407</small>
                                    </div>
                                </div>
                            </div>

                                <div class="col-md-10 mb-3 mt-3">
                                    <label for="last-name">Case title<span class="text-danger">*</span></label>
                                    <input name="case_title" placeholder="Enter case title" type="text" 
                                    class="form-control @error('state.case_title') is-invalid @enderror"
                                    wire:model.defer="state.case_title">
                                    @error('state.case_title')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror 
                                </div>
                                <div class="col-md-10 mb-3 mt-3">
                                    <label for="last-name">Case notes/summary<span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="50" placeholder="Add your case notes or summary here..." 
                                    class="form-control @error('state.case_note') is-invalid @enderror"
                                    wire:model.defer="state.case_note"></textarea>
                                    @error('state.case_note')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror 
                                </div>
                                <div class="col-lg-5 mb-3">
                                    <input type="file" class="form-control @error('state.case_file') is-invalid @enderror"
                                    wire:model.defer="state.case_file">
                                    @error('state.case_file')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror 
                                </div>
                                
                                <div class="col-md-10 mt-3 p-4 border" style="background:ghostwhite; border-radius:20px; color:gray">
                                    <h5 style="color:#337ab7"><i class="fa fa-question-circle"></i> Example</h5>
                                    <p class="mt-0">
                                        <small>
                                        My business partner and I have spent the last six months developing a computer program that helps
                                        restaurant managers manage their inventory. We want to commercialize this program, 
                                        but we are unsure about some few things. 
                                        <ol>
                                            <li>How do we protect our intellectual property from our competitors?</li>
                                            <li>Do we need to register a patent or a copyright?</li>
                                            <li>What happens if our relationship falls apart?</li> 
                                            <li>Who would own the program in case of a split?</li> 
                                            <li>How would the revenue be split if we split?</li>
                                        </ol>
                                        </small>
                                    </p>
                                </div>

                                <div class="col-md-10 mt-3 d-grid gap-1 d-md-flex justify-content-md-end">
                                    <a href="#" 
                                    class="col-3 btn btn-block" style="background:gray; color:#fff">
                                    <i class="fa fa-chevron-left"></i> Back</a>

                                    <button wire:click="showBill" class="col-3 btn btn-block" 
                                    style="background:#337ab7; color:#fff">
                                    Next <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>  
                            </div>            
                        </div>
                    </div>
                    @endif
                    @if ($this->hasCaseInfo)
                    <div class="col-md-12 right-section mt-3">         
                        <div class="overflow-hidden">
                        <div class="row gx-3">
                            <div class="col-md-4">
                                <div class="p-3 border" style="border-radius:15px; background:ghostwhite">    
                                    <div class="row">
                                        <div class="col-md-3">
                                        <img src="{{ asset('storage/img/avatar.jpg') }}" alt="" style="width:80px">
                                        </div>
                                        <div class="col-md-9" style="list-style:none; color:navy">
                                        <b><li>&nbsp {{ $lawyerz->first_name }}</li> 
                                            <li>&nbsp {{ $lawyerz->last_name }}</li></b>
                                        </div>  
                                    </div>   
                                    <div class="p-2 mt-2 border" style="background:#fff; border-radius:10px; list-style:none; color:gray">      
                                        <li><i class="fa fa-clock-o"></i>  
                                        {{ $this->timeObject->format('D, M j') }},
                                        {{ $this->timeObject->format('g:iA') }}</li>
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
                                <div class="p-3 border" style="background:ghostwhite; border-radius:10px">
                                    
                                    <div class="card p-3">
                                        <table class="table table-borderless align-middle">
                                            <tbody class="p-5">
                                            <tr>
                                                <td colspan="2"><strong>Item</strong></td>
                                                <td style="float:right"><strong>Total</strong></td>     
                                            </tr>
                                            @php ( $total = 
                                                $this->selectedService->service_fee + 
                                                $this->selectedService->service_fee_tax + 
                                                $this->selectedService->legal_fee + 
                                                $this->selectedService->legal_fee_tax                       
                                                ) 
                                            @endphp
                                            <tr style="border-bottom:1px solid #ddd">
                                                <td colspan="2">{{ $this->selectedService->title }}</td>
                                                <td style="float:right">${{ $total }}</td>
                                            </tr>
                                            <tr> 
                                                <td colspan="2">Service Fee</td>
                                                <td style="float:right">${{ $this->selectedService->service_fee }}</td>
                                            </tr>
                                            <tr> 
                                                <td colspan="2">Service Fee Tax</td>
                                                <td style="float:right">${{ $this->selectedService->service_fee_tax }}</td>
                                            </tr>
                                            <tr> 
                                                <td colspan="2">Legal Fee</td>
                                                <td style="float:right">${{ $this->selectedService->legal_fee }}</td>
                                            </tr>
                                            <tr> 
                                                <td colspan="2">Legal Fee Tax</td>
                                                <td style="float:right">${{ $this->selectedService->legal_fee_tax }}</td>
                                            </tr>
                                            <tr style="border-top:1px solid #ddd; padding-bottom:20px"> 
                                                <td colspan="2" style="padding-bottom:10px">
                                                <i class="fa fa-exclamation-circle" 
                                                style="color:#337ab7"></i> <strong>Estimated Total</strong></td>
                                                <td style="float:right"><strong>${{ $total + 25 }}</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>            
                                </div>
                               
                                <div class="mt-3">
                                <h5>Add a payment method</h5>
                                <small>A valid credit card is required to book legal services on AllwaysLegal. 
                                Customers are not billed until their services is complete, but depending
                                on the nature of your service your lawyer may require a deposit or partial
                                payment, with your approval. If your total is $0, you card will not be charged. 
                                </small>

                                <form wire:submit.prevent="$(this).off('click')">
                                <div class="mb-3 pt-3">
                                    <label for="" class="form-label">Name on credit card</label>
                                    <input type="fullName" class="form-control" id="" placeholder="Kevin Gates">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Card Number</label>
                                    <input type="number" wire:model="state.card_number" class="form-control" id="" placeholder="Card number">
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
                            </div>
                            
                            </div>
                            <button wire:click="createBooking" id="confirm" class="btn col-5 mt-3 mb-3" style="background:#337ab7; color:#fff; float:right" disabled>
                                <b>Confirm Booking</b> <i class="fa fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                    </div>                     
                    </div>     
                </div>
            </div>  
        </div>
    </div>
</div>
