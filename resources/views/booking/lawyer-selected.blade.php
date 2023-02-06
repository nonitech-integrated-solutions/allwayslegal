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
                <div class="col-md-12 pt-3">
                    <p style="color:gray">
                        {{ $lawyer->story }} <a href="#">read more</a><br>         
                    </p>
                    <div class="practice-areas"><b>Practice Areas</b>
                        <div class="p-4 border" style="border-radius:10px">
                             @foreach($lawyer->areas as $area)
                            <span class="p-2 border" style="background:ghostwhite; border-radius:10px">{{ $area->name }}</span>
                            @endforeach
                            <!-- <span class="p-2 border" style="background:ghostwhite; border-radius:10px">Real Estate</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="text-right"><a href="{{ route('lawyer.schedule', $lawyer->id) }}" class="btn btn-secondary">Continue</a></div>
</div>
@endsection