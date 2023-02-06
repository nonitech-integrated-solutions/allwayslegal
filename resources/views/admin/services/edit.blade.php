@extends('admin.admin_master')
@section('content')
<h4 class="text-center">Modify Services</h4>
<form method="POST" action="{{ route('admin.services.update', $service->id) }}">
    @csrf
    @method('PATCH')
    <div class="card-body g-light p-5" style="background:ghostwhite">        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input name="title" placeholder="Title" type="text" 
            class="form-control @error('title') is-invalid @enderror"
              value="{{ old('title') }} @isset($service) {{ $service->title }} @endisset">
              @error('title')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          <div class="col-md-6 mb-3">
            <label for="last-name">Price $</label>
            <input name="price" placeholder="Price" type="text" 
            class="form-control @error('price') is-invalid @enderror"
              value="{{ old('price') }} @isset($service) {{ $service->price }} @endisset">
              @error('price')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="service fee">Service fee $</label>
            <input name="service_fee" placeholder="Service fee" type="text" 
            class="form-control @error('service_fee') is-invalid @enderror"
              value="{{ old('phone') }} @isset($service) {{ $service->service_fee }} @endisset">
              @error('service_fee')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div> 

          <div class="col-md-6 mb-3">
            <label for="service fee tax">Service fee tax $</label>
            <input name="service_fee_tax" placeholder="Service fee tax" type="text" 
            class="form-control @error('phone') is-invalid @enderror"
              value="{{ old('phone') }} @isset($service) {{ $service->service_fee_tax }} @endisset">
              @error('service_fee_tax')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="legal fee">Legal fee $</label>
            <input name="legal_fee" placeholder="Legal fee" type="text" 
            class="form-control @error('legal_fee') is-invalid @enderror"
              value="{{ old('legal_fee') }} @isset($service) {{ $service->legal_fee }} @endisset">
              @error('legal_fee')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="legal fee tax">Legal fee tax $</label>
            <input name="legal_fee_tax" placeholder="Legal fee tax" type="text" 
            class="form-control @error('legal_fee_tax') is-invalid @enderror"
              value="{{ old('legal_fee_tax') }} @isset($service) {{ $service->legal_fee_tax }} @endisset">
              @error('legal_fee_tax')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-12 mb-3">
            <label for="description">Description</label>
            <textarea name="description" type="text" placeholder="Service description" row="5"
            class="form-control @error('description') is-invalid @enderror">{{ $service->description }}</textarea>
              @error('description')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

         
        </div><hr>
       
        <div class="mt-4 text-right">
            <button type="submit" class="btn btn-success btn-md">
            <i class="fa fa-save fa-2x"></i> Save Changes 
            </button></small>
        </div>
    </form>     

@endsection