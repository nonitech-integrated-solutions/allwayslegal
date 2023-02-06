@extends('templates.main')
@section('content')

@include('lawyer.template.header')
<section class="p-3">
    <!-- <legend class="text-center">Select Practice Areas</legend><hr> -->
    <form method="POST" action="{{ route('lawyer.practice-areas.update', $lawyer->id) }}">
        @method('PATCH')
        @csrf
            <div class="p-5 mt-2" style="background:#fff">
                <div lass="form-card" tyle="background:#fff">       
                    <div class="row">
                        @foreach($areas as $area)                          
                        <div class="col-sm-3 text-center" style="border:1px dashed #ddd">       
                            <div class="checkbox p-3">
                                <label>     
                                <input type="checkbox" name="areas[]"
                                value="{{ $area->id }}" @isset($lawyer) 
                                @if(in_array($area->id, 
                                $lawyer->areas->pluck('id')->toArray())) 
                                checked @endif @endisset"> 
                                <img src="{{ asset('storage/img/areas/'.$area->name.'.'.'png') }}" 
                                alt="{{ $area->name }}" style="width:80px; cursor:pointer">   
                                <h6 class="" style="color:#337ab7; cursor:pointer">{{ $area->name }} Law</h6>
                                @error('area')
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
            </div><hr>
            <div class="text-center">
                <a href="{{ route('lawyer.practice-areas.index') }}" class="btn btn-secondary">Go Back</a>
                <button class="btn" style="background:#337ab7; color:#fff">Save Changes</button>
            </div>
        </div>   
    </form>
</section>

<style type="text/css">
    input[type="checkbox"] {
        zoom:1.4;
    }

</style>

@endsection