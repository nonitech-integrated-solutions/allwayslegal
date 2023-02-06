@extends('admin.admin_master')
@section('content')
<h5 class="text-center">Create Practice Area</h5>
<div class="card-body col-sm-12 col-md-6 g-light p-5" style="background:ghostwhite; margin:auto"> 
       
    <div class="row">
        <div class="col-md-12 mb-5">
            @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title:</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }} @isset($area) {{ $area->name }} @endisset">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea name="description" type="text" class="form-control @error('description') is-invalid @enderror"
            value="{{ old('description') }} @isset($area) {{ $area->description }} @endisset"></textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input name="image" type="file" class="form-control-file @error('image') is-invalid @enderror"
            value="{{ old('image') }} @isset($area) {{ $area->image }} @endisset">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div><hr>

        <div class="text-right text-light">
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left"></i> Back</a>
            <button class="btn btn-success">
            Submit <i class="fa fa-arrow-right"></i></button>
        </div>    
    </div>
</div>
@endsection