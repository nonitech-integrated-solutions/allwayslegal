@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-3 p-4 left-section" style="background:ghostwhite">    
      
        <strong>
            <div class="card" style="background:#ffffff; border-radius:10px; min-height:500px">
                <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                    <div style="color:#337ab7" class="nav-lavel p-2"><i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span></div>                              
                    <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" class="nav-lavel -2"><i class="fa fa-user fa-2x p-2"></i> <span>Choose a lawyer</span>
                        <p style="font-size:12px" class="p-2">We've sorted lawyers based on their areas of experience in your area of need.</p>
                    </div>         
                    <div style="line-height:2" tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2"><i class="fa fa-file fa-2x p-2"></i> <span>Case summary</span></div>
                    <div tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2"><i class="fa fa-check-circle fa-2x p-2"></i> <span>Confirmation</span></div>
                </nav>               
            </div>
        </strong>    
    </div>

    <div class="col-md-9 right-section p-4" style="color:navy">
        <!-- <div tyle="border-radius:30px"> -->
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
                    <h3>{{ $lawyer->first_name }} {{ $lawyer->last_name }}</h3>
                    <p class="pb-1"><i class="fa fa-star"></i> 5 (2) <a href="#">read reviews</a></p>
                    <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-map-marker"></i> {{ $lawyer->city }}, {{ $lawyer->province }}</span>
                    <span class="p-3 border" style="background:ghostwhite; border-radius:20px"><i class="fa fa-comments-o"></i> English {{ $lawyer->languages }}</span>  
                </div>
            </div>
        </div>
        <div>
            <div class="pt-4" style="line-height:1px"> 
                <p>Schedule your call</p>
                <p><small>Times shown in WAT</small></p> 
            </div>
            <div class="card">
                <div class="card-header p-3" style="background:ghostwhite">
                    <small>{{date('Y')}}</small><br>
                    <b>{{date('D, M d')}}</b>
                    <span style="float:right"><i class="fa fa-chevron-right p-1"></i></span>
                    <span style="float:right"><i class="fa fa-chevron-left p-1"></i></span>      
                </div>
            <a href="{{ route('case.summary') }}" style="text-decoration:none">
                <div class="p-4 morning pb-0" style="cursor:pointer">                    
                    <div class="t-3">
                        <div class="pb-2">Morning</div>
                        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 text-center">
                            <div class="col-3">
                            <div class="p-2 border"
                            style="border:1px solid #ddd; background:#ddd">
                            9:00am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:30am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:35am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:40am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:45am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:50am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:55am</div>
                            </div>
                            <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            10:00am</div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="p-4 afternoon pb-0" style="cursor:pointer">
                    <div class="pb-2">Afternoon</div>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 text-center">
                        <div class="col-3">
                        <div class="p-2 border "
                        style="border:1px solid #ddd; background:ghostwhite">
                        12:00pm</div>
                        </div>
                        <div class="col-3">
                        <div class="p-2 border "
                        style="border:1px solid #ddd; background:#ddd">
                        12:30pm</div>
                        </div>
                        <div class="col-3">
                        <div class="p-2 border "
                        style="border:1px solid #ddd; background:ghostwhite">
                        12:35pm</div>
                        </div>
                        <div class="col-3">
                        <div class="p-2 border "
                        style="border:1px solid #ddd; background:#ddd">
                        12:40pm</div>
                        </div>
                        <div class="col-3">
                        <div class="p-2 border "
                        style="border:1px solid #ddd; background:ghostwhite">
                        12:45pm</div>
                        </div>
                    </div>
                    </div>
                <div class="p-4 evening" style="overflow:hidden; cursor:pointer">
                    <div class="pb-2">Evening</div>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 text-center">
                        <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:00pm</div>
                        </div>
                        <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:#ddd">
                            9:30pm</div>
                        </div>
                        <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:ghostwhite">
                            9:35pm</div>
                        </div>
                        <div class="col-3">
                            <div class="p-2 border "
                            style="border:1px solid #ddd; background:ghostwhite">
                            9:40pm</div>
                        </div>
                        <div class="col-3">
                            <div class="p-2 border"
                            style="border:1px solid #ddd; background:ghostwhite">
                            9:40pm</div>
                        </div>
                        <div class="col-3">
                            <div class="p-2 border"
                            style="border:1px solid #ddd; background:ghostwhite">
                            9:40pm</div>
                        </div>       
                    </div>       
                </div>
            </div>
        </a>
        </div>      
    </div>
</div>
@endsection