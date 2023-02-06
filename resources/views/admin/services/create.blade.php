@extends('admin.admin_master')
@section('content')
<h4 class="text-center">Create Services</h4>
<form method="POST" action="{{ route('admin.services.store') }}">
    @csrf
    <div class="card-body g-light p-5" style="background:ghostwhite">        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="title">Title</label>
            <input name="title" placeholder="Title" type="text" 
            class="form-control @error('title') is-invalid @enderror" value="">
              @error('title')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          <div class="col-md-6 mb-3">
            <label for="price">Price</label>
            <input name="price" placeholder="Price" type="number" 
            class="form-control @error('price') is-invalid @enderror" value="">
              @error('price')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="service fee">Service fee</label>
            <input name="service_fee" placeholder="Service fee" type="number" 
            class="form-control @error('service_fee') is-invalid @enderror" value="">
              @error('service_fee')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div> 

          <div class="col-md-6 mb-3">
            <label for="service fee tax">Service fee tax</label>
            <input name="service_fee_tax" placeholder="Service fee tax" type="number" 
            class="form-control @error('service_fee') is-invalid @enderror" value="">
              @error('phone')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
              @error('service_fee_tax')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="legal fee">Legal fee</label>
            <input name="legal_fee" placeholder="Legal fee" type="number" 
            class="form-control @error('legal_fee') is-invalid @enderror" value="">
              @error('legal_fee')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="legal fee tax">Legal fee tax</label>
            <input name="legal_fee_tax" placeholder="Legal fee tax" type="number" 
            class="form-control @error('legal_fee_tax') is-invalid @enderror" value="">
              @error('legal_fee_tax')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-12 mb-3">
            <label for="legal fee tax">Description</label>
            <textarea name="description" type="text" placeholder="Service description"
            class="form-control @error('legal_fee_tax') is-invalid @enderror"></textarea>
              @error('legal_fee_tax')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

         
        </div>
       
        <div class="mt-4 text-right">
            <button type="reset" class="btn btn-secondary btn-md">
            <i class="fa fa-refresh"></i> Reset
            </button></small>
            <button type="submit" class="btn btn-success btn-md">Add Service 
            <i class="fa fa-arrow-right"></i></button>
        </div>
    </form>     


@endsection