@extends('templates.main')
@section('content')

@include('lawyer.template.header')
<div class="container p-4 mt-3 mb-5" style="background:#fff; color:#337ab7">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Specialized at<h5>
                    <h5 class="">Legal, Political</h5>
                </div>
                <div class="col-sm-6">
                    <h5>Experience</h5>
                    <h5>17+ Years</h5>
                </div>
                <div class="col-12 pt-3 pb-3" style="color:#337ab7">
                    <legend>Practice Areas</legend>  
                    @foreach(Auth::user()->lawyer->areas as $area)
                    <span class="btn btn-sm p-2 border mt-1" style="background:#F0F8FF; color:#337ab7">
                    <b>{{ $area->name }}</b></span>
                    @endforeach
                             
                </div>
            </div>
        </div>     

        <div class="col-md-6" style="font-size:17px; 
            line-height:21.5px">
            {{ Auth::user()->lawyer->area}}
            <strong><p><i class="fa fa-briefcase"></i> 
            Position: Sr. Advocate</p>
            <p><i class="fa fa-building"></i> 
            Law Firm: {{ Auth::user()->lawyer->law_firm_name }}</p>
            <p><i class="fa fa-map-marker"></i> 
            Location: {{ Auth::user()->lawyer->city }}, 
            {{ Auth::user()->lawyer->province }}</p>
            <p><i class="fa fa-phone"></i> 
            Phone: {{ Auth::user()->lawyer->phone }}</p>
            <p><i class="fa fa-envelope"></i> 
            Email: {{ Auth::user()->email }}</p>
            </strong>
        </div>
                
        <div class="col-12 pt-3" style="color:#337ab7">   
            <legend>Experience/Professional Summary</legend>
            <div class="p-4" style="background:#F0F8FF; border-radius:15px; color:gray">
                <p>{{ Auth::user()->lawyer->story }}</p>
            </div>            
        </div>

        <div class="col-md-6 pt-3" style="color:#337ab7">   
            <legend>My Services</legend>  
            @foreach(Auth::user()->lawyer->services as $service)
            <span class="btn btn-sm mt-1 p-2 border" style="background:#F0F8FF; color:#337ab7" disabled>
            <b>{{ $service->title }}</b>
            </span>
            @endforeach
        </div>
    </div>       
</div>

@endsection

