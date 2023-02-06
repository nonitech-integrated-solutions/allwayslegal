@extends('templates.main')
@section('content')

@include('lawyer.template.header')

    <div class="container p-4">
        <div class="row p-4" style="background:#fff">
            <div class="col-md-9 p-3" style="text-decoration:none">          
                <!-- <iv class="container" style="border-radius:30px">      -->
                    <!-- <h4 class="mb-3" style="color:#337ab7">Practice Areas</h4> -->
                    <div class="row g-2">  
                        @foreach($areas as $area)
                        <div id="lawyer->id" class="area-box col-md-3 col-sm-4 col-xs-6">             
                            <div class="text-center order p-3" 
                                style="text-decoration:none; min-height:150px; max-height:150px">          
                                <img src="{{ asset('storage/img/areas/'.$area->name.'.'.'png') }}" 
                                alt="{{ $area->name }}" style="width:80px">                        
                                <h6 style="color:#337ab7">{{ $area->name }}</h6>
                            </div>
                        </div>
                        @endforeach   
                    </div>   
                    <div class="mt-3">{{ $areas->links() }}</div> 
                <!-- </div> -->
            </div>

            <div class="col-md-3 p-3 text-center" style="text-decoration:none">    
                <!-- <h4 class="mb-3" style="color:#337ab7">My Practice Areas</h4> -->
                @foreach(Auth::user()->lawyer->areas as $area)
                <span class="col-md-12 btn ext-light mb-1 border" style="background:#F0F8FF; color:#337ab7; cursor:default" disabled><b>{{ $area->name }}</b></span>
                @endforeach

                <a href="{{ route('lawyer.practice-areas.edit', Auth::user()->lawyer->id) }}" 
                class="btn mt-2 text-light" style="background:#337ab7; color:#fff">
                <b>UPDATE PRACTICE</b> 
                <i class="fa fa-arrow-right"></i></a>
            </div>            
        </div>
    </div>            
</div>         

@endsection