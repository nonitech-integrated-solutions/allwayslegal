@extends('templates.main')
@section('content')

@include('lawyer.template.header')
    <div class="container p-4 mt-3" style="background:#fff; color:#337ab7">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="row g-2">
                @foreach($services as $service)
                <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                    <div class="p-3 border" style="background:#F0F8FF; min-height:150px; max-height:150px">   
                        <p><b>{{ $service->title }}</b></p>
                        <p><small>${{$service->price}}+tax</small></p>
                        <!-- <p><small><a href="#">View Details</a></small></p> -->
                    </div>
                </div>
                @endforeach
                </div>
            </div>
            <!-- <div class="col-md-3"> -->
            <div class="col-md-3" style="text-decoration:none; color:#337ab7">    
                <!-- <h5 class="mb-3 text-center" style="olor:#337ab7">My Services</h5> -->
                @foreach(Auth::user()->lawyer->services as $service)
                <div class="card col-md-12 col-lg-12 p-2 text-center mb-1" 
                style="background:#F0F8FF; border:2px solid #ddd" disabled>
                    <b tyle="border:1px solid #fff">{{ $service->title }}</b>
                    <!-- <b style="border:1px solid #fff">{{ $service->title }}</b> -->
                </div>
                @endforeach

                <div class="text-center">
                    <a class="btn mt-2" style="background:#337ab7; color:#fff" 
                    href="{{ route('lawyer.services.edit', Auth::user()->lawyer->id) }}">
                    <b>UPDATE SERVICE</b> 
                    <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>      
            <!-- </div> -->
        </div>
    </div>
</div>

@endsection