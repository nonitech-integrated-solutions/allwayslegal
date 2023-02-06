@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-3 p-3" style="background:ghostwhite">
        <div class="row">
            <div class="col-12" style="background:ghostwhite">
                <strong>
                    <div class="card" style="background:#ffffff; border-radius:10px; min-height:500px">
                        <nav id="main-menu-navigation" class="navigation-main" style="color:gray">
                            <div style="background:#337ab7; color:#fff; border-radius:10px; padding:10px" 
                            class="nav-lavel">
                            <i class="fa fa-briefcase fa-2x p-2"></i> <span>Legal needs</span>
                                <p style="font-size:12px" class="p-2">
                                Start by selecting a legal category so we can find you the right lawyers.</p>
                            </div>        
                            <div style="line-height:2" class="nav-lavel p-2"><i class="fa fa-user fa-2x p-2"></i> 
                            <span>Choose a lawyer</span></div>        
                            <div style="line-height:2" class="nav-lavel p-2"><i class="fa fa-file fa-2x p-2"></i> 
                            <span>Case summary</span></div>
                            <div tyle="background:#337ab7; color:#fff; border-radius:10px" class="nav-lavel p-2">
                                <i class="fa fa-check-circle fa-2x p-2"></i> 
                            <span>Confirmation</span></div>
                        </nav>                  
                    </div>
                </strong>  
            </div>       
        </div>
    </div>
    <div class="col-md-9" style="text-decoration:none">     
        <div class="container">
            <div class="row" style="background:#fff">
                <div class="col-md-12 mt-3" style="text-decoration:none">          
                    <h4 class="mb-3" style="color:#337ab7">Select a practice area</h4>
                        <div class="row g-2">  
                            @foreach($areas as $area)
                            <div id="lawyer->id" class="col-md-3 col-sm-4 col-xs-6">   
                                <a href="{{ route('lawyer.selection', $area->id) }}" style="text-decoration:none">          
                                <div class="text-center border p-3" 
                                    style="text-decoration:none; min-height:150px; max-height:150px">          
                                    <img src="{{ asset('storage/img/areas/'.$area->name.'.'.'png') }}" 
                                    alt="{{ $area->name }}" style="width:80px">                        
                                    <h6 style="color:#337ab7">{{ $area->name }}</h6>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>  
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection