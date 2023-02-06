@extends('templates.main')
@section('content')

@include('lawyer.template.header')

<div class="container p-3 mb-5" style="background:#fff">
  <form method="POST" action="{{ route('lawyer.profile.update', $lawyer->id) }}">
    @method('PATCH')
    @csrf
    <div class="card-body g-light p-5" style="background:#F0F8FF">        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="first-name">First name *</label>
            <input name="first_name" placeholder="First name" type="text" 
            class="form-control form-control-lg @error('first_name') is-invalid @enderror"
              value="{{ $lawyer->first_name }}">
              @error('first_name')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          <div class="col-md-6 mb-3">
            <label for="last-name">Last name *</label>
            <input name="last_name" placeholder="Last name" type="text" 
            class="form-control form-control-lg @error('last_name') is-invalid @enderror"
              value="{{ $lawyer->last_name }}">
              @error('last_name')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="phone">Phone number *</label>
            <input name="phone" placeholder="Phone number" type="text" 
            class="form-control form-control-lg @error('phone') is-invalid @enderror"
              value="{{ $lawyer->phone }}">
              @error('phone')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div> 
          
          <div class="col-md-6 mb-3 ">
              <label class="fieldlabels">Gender/Sex: *</label>
              <select name="gender" class="form-select form-control @error('gender') 
              is-invalid @enderror mb-0" style="padding:11px">
                  <option>{{ $lawyer->gender }}</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Female">Other</option>
              </select>
              @error('gender')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <div class="col-md-6 mb-3">
            <label for="country">Country *</label>
            <select name="country" 
              class="form-select form-control @error('country') 
              is-invalid @enderror mb-0" style="padding:11px">
                  <option>{{ $lawyer->country }}</option>
                  <option value="Canada">Canada</option>
                  <option value="United-States">United States</option>
                  <option value="United-kingdom">United Kingdom</option>
                  <option value="Nigeria">Nigeria</option>
              </select>
              @error('country')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="last-name">Address</label>
            <input name="address" placeholder="Address" type="text" 
            class="form-control form-control-lg @error('address') is-invalid @enderror"
              value="{{ $lawyer->address }}">
              @error('address')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="last-name">City</label>
            <input name="city" placeholder="City" type="text" 
            class="form-control form-control-lg @error('city') is-invalid @enderror"
              value="{{ $lawyer->city }}">
              @error('city')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="province">Province *</label>
            <input name="province" placeholder="Province" type="text" 
            class="form-control form-control-lg @error('province') is-invalid @enderror"
              value="{{ $lawyer->province }}">
              @error('province')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="postal">Postal Code</label>
            <input name="postal" placeholder="Postal code" type="text" 
            class="form-control form-control-lg @error('postal') is-invalid @enderror"
              value="{{ $lawyer->postal }}">
              @error('postal')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="languages">Alternate language</label>
            <input name="languages" placeholder="Spoken language asides from english" type="text" 
            class="form-control form-control-lg @error('languages') is-invalid @enderror"
              value="{{ $lawyer->language }}">
              @error('spoken_language')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

          <div class="col-md-6 mb-3">
            <label for="law-firm-name">Law firm name *</label>
            <input name="law_firm_name" placeholder="Law firm name" type="text" 
            class="form-control form-control-lg @error('law_firm_name') is-invalid @enderror"
              value="{{ $lawyer->law_firm_name }}">
              @error('law_firm_name')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>
          

          <div class="col-md-6 mb-3">
            <label for="law-firm-reg-no">Law firm reg. no. *</label>
            <input name="law_firm_reg_no" placeholder="Law firm reg. number" type="text" 
            class="form-control form-control-lg @error('last_name') is-invalid @enderror"
              value="{{ $lawyer->law_firm_reg_no }}">
              @error('law_firm_reg_no')
                  <span class="invalid-feedback" role="alert">
                      {{ $message }}
                  </span>
              @enderror 
          </div>

        </div>
        <section style="">
         
                  
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label>Experience/Professional Summary: *</label>
                        <textarea name="experience" class="form-control form-control-lg @error('story') is-invalid @enderror mb-0 pt-0"
                        rows="5" id="experience" title="Experience" style="border-radius:0px!important"
                        placeholder="Share a brief story about your work life and experience... (255 words max)">{{ Auth::user()->story }}</textarea>
                    @error('experience')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror       
                    </div>
                </div>
            </div><hr>            
            <div class="mt-4 text-center">
            <a href="{{ route('lawyer.profile.index' ) }}" class="col-3 btn btn-md" style="background:gray; color:#fff">Back</a> 
            <button type="submit" class="col-3 btn btn-primary btn-md" 
            style="background:#337ab7; color:#fff">Save Changes</button></small>
            </div>                        
          </div>          
        </section>
    </form>     
</div>
@endsection