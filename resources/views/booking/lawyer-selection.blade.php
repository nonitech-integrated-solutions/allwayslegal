@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
  <div class="col-md-3 p-3 left-section" style="background:ghostwhite">
    <div class="row">
      <div class="col-12" style="background:ghostwhite">
          <strong>
              <div class="card" style="background:#ffffff; border-radius:10px; min-height:500px">
                <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                    <div style="color:#337ab7" class="nav-lavel p-2"><i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span></div>                              
                    <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel -2"><i class="fa fa-user fa-2x p-2"></i> <span>Choose a lawyer</span>
                        <p style="font-size:12px" class="p-2">We've sorted lawyers based on their areas of experience in your area of need.</p>
                    </div>         
                    <div style="line-height:2" class="nav-lavel p-2"><i class="fa fa-file fa-2x p-2"></i> <span>Case summary</span></div>
                    <div tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2"><i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span></div>
                </nav>               
              </div>
          </strong>  
      </div>       
    </div>
  </div>
          
      <div class="col-md-9 right-section p-3" style="color:navy">
        <!-- <div tyle="border-radius:30px"> -->
          <div class="card p-3 mb-3" style="background:ghostwhite">     
            <form action="">
              <p style="color:navy"><b>Your legal needs</b></p> 
                <div class="row">        
                  <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>{{ $lawyer_area->name }}</option>  
                      @foreach($areas as $area)
                      <option value="{{ $area->id }}">{{ $area->name }}</option>
                      @endforeach                    
                    </select>
                  </div>
                  <div class="col-md-6">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Advice Session</option>
                      <option value="1">Advisor Agreement</option>
                      <option value="2">Commercial Lease Service</option>
                      <option value="3">Common Equity Financing</option>
                    </select>
                  </div>
                </div>
            </form>        
        </div>

        <!-- @foreach($area->lawyers as $lawyer)
          <p>{{ $lawyer->first_name }}</p>
        @endforeach -->
   
        <div class="row g-3">
          @if(count($lawyer_area->lawyers) == null)
          <div class="col-6 container pt-4">
              <h4 lass="text-center">
                Sorry there are currently no lawyers available in this area at the moment.
              </h4>
           </div> 
          @else
          @foreach($lawyer_area->lawyers as $lawyer)
          <div class="col-6" style="cursor:pointer">
          <a href="{{ route('lawyer.selected', $lawyer->id) }}" style="text-decoration:none">
            <div class="p-3 border" style="background:ghostwhite; border-radius:20px">
              <div class="row p-2">
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
          </a>      
          </div>
          @endforeach
          @endif
        </div>  
   
      </div>  
    </div>
  </div>  

</div>
@endsection