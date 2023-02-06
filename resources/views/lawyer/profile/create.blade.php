@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-4 left-section" style="background:ghostwhite">
          <div class="row text-center mt-3">
            <div class="col-12" style="background:ghostwhite">

              <div class="card p-2" style="background:#fff; border-radius:10px">
                <div class="card-body">
                  <h2 style="color:navy">Let's get to know you!</h2>
                  <h5 style="color:#333">
                    <b><small>Why do we need this information?</small></b>
                  </h5>   

                  <p style="color:gray">In order for a client to work with a client, this information is
                    legally required in Canada.
                  </p>

                  <p style="color:gray">We can also use this information to serve you better and recommend more suitable
                    clients. AllwaysLegal does not sell you personal information for
                    any reason.
                  </p>

                </div>
              </div>
              
            </div>

            <!-- <div class="col-12 p-5 bg-light" style="border-top-right-radius:20px">
              
              <div class="section-1 mt-5 b-5">
                <small>Step 1:</small>
                <p><b>Personal Info</b></p>
              </div>

              <div class="section-2 mb-5">
                <small>Step 2:</small>
                <p><b>Business Info</b><br>
                <small>Only for businesses</small></p>
              </div> 
              
              <div class="section-3 mb-5">
                <small>Step 3:</small>
                <p><b>Review Info</b></p>
              </div>
              
            </div> -->
          </div>
    
        </div>
      
        <div class="col-lg-8 right-section mt-3 pb-4">
        <form method="POST" action="{{ route('lawyer.profile.store') }}">
        @csrf
          <div style="border-radius:30px">
            <div class="card" style="border-radius:30px">
              <div class="container pt-2 bg-light">
                <h5 style="color:navy">Personal info</h5>
                <p style="color:#333">You are currently signing up as a Lawyer. 
                  If you want to sign up to be a lawyer on the platform, 
                  <a href="#">click here</a>.<br>This information will show who the account belongs to.</p>
              </div>

              <div class="card-body g-light" style="background:ghostwhite">        
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="first-name">First name <span class="text-danger">*</span></label>
                      <input name="first_name" placeholder="First name" type="text" class="form-control 
                      @error('first_name') is-invalid @enderror"
                        alue="{{ old('first_name') }} @isset($lawyer) {{ $lawyer->first_name }} @endisset">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="last-name">Last name <span class="text-danger">*</span></label>
                      <input name="last_name" placeholder="Last name" type="text" class="form-control 
                      @error('last_name') is-invalid @enderror"
                        alue="{{ old('last_name') }} @isset($lawyer) {{ $lawyer->last_name }} @endisset">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>
                   
                    <div class="col-md-6 mb-3">
                      <label for="phone">Phone number <span class="text-danger">*</span></label>
                      <input name="phone" placeholder="Phone number" type="number" class="form-control 
                      @error('phone') is-invalid @enderror"
                        alue="{{ old('phone') }} @isset($lawyer) {{ $lawyer->phone }} @endisset">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div> 
                    
                    <div class="col-md-6 mb-3 ">
                        <label class="fieldlabels">Gender/Sex: <span class="text-danger">*</span></label>
                        <select name="gender" class="form-select form-control @error('gender') 
                        is-invalid @enderror mb-0">
                            <option value="">--Select Gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="female">Other</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="country">Country <span class="text-danger">*</span></label>
                      <select name="country" 
                        class="form-select form-control @error('country') 
                        is-invalid @enderror mb-0">
                            <option value="">--Select Country--</option>
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
                      <label for="last-name">Address </label>
                      <input name="address" placeholder="Address" type="text" class="form-control 
                      @error('address') is-invalid @enderror"
                        alue="{{ old('address') }} @isset($lawyer) {{ $lawyer->last_name }} @endisset">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="last-name">City </label>
                      <input name="city" placeholder="City" type="text" class="form-control 
                      @error('city') is-invalid @enderror"
                        alue="{{ old('city') }} @isset($lawyer) {{ $lawyer->last_name }} @endisset">
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="province">Province</label>
                      <input name="province" placeholder="Province" type="text" class="form-control 
                      @error('province') is-invalid @enderror"
                        alue="{{ old('province') }} @isset($lawyer) {{ $lawyer->province }} @endisset">
                        @error('province')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="postal">Postal code</label>
                      <input name="postal" placeholder="Postal code" type="text" class="form-control 
                      @error('postal') is-invalid @enderror"
                        alue="{{ old('postal') }} @isset($lawyer) {{ $lawyer->postal }} @endisset">
                        @error('postal')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>
                    
                    <div class="col-md-6 mb-3">
                      <label for="languages">Alternate language</label>
                      <input name="languages" placeholder="Spoken language asides from english" type="text" 
                      class="form-control @error('languages') is-invalid @enderror"
                        alue="{{ old('languages') }} @isset($lawyer) {{ $lawyer->language }} @endisset">
                        @error('spoken_language')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <div class="col-md-6 mb-3">
                      <label for="law-firm-name">Law firm name <span class="text-danger">*</span></label>
                      <input name="law_firm_name" placeholder="Law firm name" type="text" class="form-control 
                      @error('law_firm_name') is-invalid @enderror"
                        alue="{{ old('law_firm_name') }} @isset($lawyer) {{ $lawyer->law_firm_name }} @endisset">
                        @error('law_firm_name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>
                   

                    <div class="col-md-6 mb-3">
                      <label for="law-firm-reg-no">Law firm reg. no. <span class="text-danger">*</span></label>
                      <input name="law_firm_reg_no" placeholder="Law firm reg. number" type="text" class="form-control 
                      @error('last_name') is-invalid @enderror"
                        alue="{{ old('law_firm_reg_no') }} @isset($lawyer) {{ $lawyer->law_firm_reg_no }} @endisset">
                        @error('law_firm_reg_no')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                  </div>
                  <section>
                        <legend><small>Select your areas of practice:</small></legend>
                        <div class="form-card">       
                            <div class="row">
                                @foreach($areas as $area)                         
                                <div class="col-sm-3">       
                                    <div class="checkbox">
                                        <label>
                                          <input type="checkbox" name="areas[]" value="{{ $area->name }}"> {{ $area->name }}
                                          @error('name')
                                              <span class="invalid-feedback" role="alert">
                                                  {{ $message }}
                                              </span>
                                          @enderror                                                         
                                        </label>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="row pt-3">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <legend><small>Experience/Professional Summary: <span class="text-danger">*</span></small>
                                            </legend>
                                            <textarea name="experience" class="form-control @error('story') is-invalid @enderror mb-0 pt-0"
                                            rows="5" id="Experience" title="Experience" style="border-radius:0px!important"
                                            placeholder="Share a brief story about your work life and experience... (250 words max)">
                                          </textarea>
                                          @error('experience')
                                              <span class="invalid-feedback" role="alert">
                                                  {{ $message }}
                                              </span>
                                          @enderror       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                  
                  </div>
             
              </div>   
              
            </div>
            <div class="mt-5 text-center" style="float:right">
              <small><p>By continuing, you accept the AllwaysLegal<br> Terms of Use and Privacy Policy. </p>
              <div class="text-center"><button type="reset" class="col-4 btn btn-md" style="background:gray; color:#fff"><i class="fa fa-refresh"></i> Reset</button> 
                <button type="submit" class="col-4 btn btn-primary btn-md" style="background:#337ab7; color:#fff">Next <i class="fa fa-chevron-right"></i></button></small></div>
            </div>
        </div>  
      </form>    
  </div>
</div>
</div>
@endsection