@extends('templates.main')
@section('content')

@include('lawyer.template.header')
<div class="container p-4 mt-3" style="background:#fff">
    <form method="POST" action="{{ route('lawyer.services.update', $lawyer->id) }}">
        @method('PATCH')
        @csrf
            <div class="row" style="color:#337ab7">
                <div class="col-lg-12 col-md-12">
                    <div class="row g-3">
                    @foreach($services as $service)
                    <div class="col-sm-6 col-md-4 col-lg-3 text-center">
                        <div class="checkbox p-3 border" style="background:#F0F8FF; 
                            min-height:150px; max-height:150px">   
                            <label>     
                            <input type="checkbox" name="services[]"
                            value="{{ $service->id }}" @isset($lawyer) 
                            @if(in_array($service->id, 
                            $lawyer->services->pluck('id')->toArray())) 
                            checked @endif @endisset"> 
                            <p style="cursor:pointer"><b>{{ $service->title }}</b></p>
                            <p><small>${{$service->price}}+tax</small></p>
                            <!-- <p><small><a href="#">View Details</a></small></p> -->
                            @error('service')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror                                                         
                            </label>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>    
        </div><hr>
        <div class="text-center pb-4">
            <a href="{{ route('lawyer.services.index') }}" class="btn btn-secondary">Go Back</a>
            <button class="btn" style="background:#337ab7; color:#fff">Save Changes</button>
        </div>
    </form>
</div>

<style type="text/css">
    input[type="checkbox"] {
        zoom:1.4;
    }
</style>

@endsection