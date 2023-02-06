@csrf
<div class="card-body p-5" style="background:ghostwhite">     
    @isset($edit)
    <strong>
   <div class="row mb-5 container" style="color:gray">
        <div class="col-md-2">
            <img src="{{ asset('storage/img/client_avatar.png') }}" alt=""
            style="width:120px; border-radius:20px; border:4px solid #ddd">
        </div>
        <div class="col-md-5 pt-3" style="line-height:17px">
            <p>Upload Your Profile Photo</p>
            <P>Pick a photo that clearly shows your face.</P>
            <input name="" type="file" class="form-control">
        </div>
    </div>
    </strong>
    @endisset
    <h5 style="color:navy">Personal info</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="first-name">First name <span class="text-danger">*</span></label>
            <input name="first_name" placeholder="First Name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror"
            value="@isset($edit) {{ old('first_name') }} @isset($client) {{ $client->first_name }} @endisset @endisset" 
            @isset($show) disabled @endisset>
            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-md-6 mb-3">
            <label for="last-name">Last name <span class="text-danger">*</span></label>
            <input name="last_name" placeholder="Last Name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror"
            value="@isset($edit) {{ old('last_name') }} @isset($client) {{ $client->last_name }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('last_name')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-md-6 mb-3">
            <label for="phone">Phone number <span class="text-danger">*</span></label>
            <input name="phone" placeholder="Phone number" type="text" class="form-control form-control-lg @error('phone') is-invalid @enderror"
            value="@isset($edit) {{ old('phone') }} @isset($client) {{ $client->phone }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>     
        <div class="col-md-6 mb-3">
                      <label for="country">Country <span class="text-danger">*</span></label>
                      <select name="country" class="form-select form-control @error('country') 
                        is-invalid @enderror mb-0" style="padding:11px" required @isset($show) disabled @endisset>
                            <option selected>@isset($edit) {{ old('country') }} {{ $client->country }} @else Select.... @endisset</option>
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
            <label for="address">Address</label>
            <input name="address" placeholder="Address" type="text" class="form-control form-control-lg @error('address') is-invalid @enderror"
            value="@isset($edit) {{ old('address') }} @isset($client) {{ $client->address }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('address')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-md-6 mb-3">
            <label for="city">City</label>
            <input name="city" placeholder="City" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror"
            value="@isset($edit) {{ old('city') }} @isset($client) {{ $client->city }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('city')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-md-6 mb-3">
            <label for="province">Province</label>
            <input name="province" placeholder="province" type="text" class="form-control form-control-lg @error('province') is-invalid @enderror"
            value="@isset($edit) {{ old('province') }} @isset($client) {{ $client->province }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('province')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
        <div class="col-md-6 mb-3">
            <label for="postal-code">Postal code</label>
            <input name="postal" placeholder="Postal Code" type="text" class="form-control form-control-lg @error('postal') is-invalid @enderror"
            value="@isset($edit) {{ old('postal') }} @isset($client) {{ $client->postal }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('postal')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
           
    </div>

    <div class="row mt-4">
        <div class="col-md-6 mb-3">
            <label for="business-type">Select your business type</label>
            <select name="business" class="form-select form-control" style="padding:11px" 
            aria-label="Default select example" required @isset($show) disabled @endisset>
            <option selected>@isset($edit) {{ old('business') }} {{ $client->business }} @else Select.... @endisset</option>
            <option value="Hospitality">Hospitality</option>
            <option value="Civil-Service">Civil-Service</option>
            <option value="Education">Education</option>
            <option value="Health-Care">Health-Care</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="Position / title">Position / title</label>
            <input name="position" placeholder="Your position / title" type="text" class="form-control form-control-lg @error('position') is-invalid @enderror"
            value="@isset($edit) {{ old('position') }} @isset($client) {{ $client->position }} @endisset @endisset"
            @isset($show) disabled @endisset>
            @error('position')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
            @enderror 
        </div>
            </div>
        </div>      

        </div>
        @isset($create)
        <div class="mt-3 text-center" style="float:right">
            <p><small>By continuing, you accept the AllwaysLegal<br> Terms of Use and Privacy Policy.</small></p>
            <div class="text-center">
                <button type="reset" class="btn btn-md" style="background:gray; color:#fff"><i class="fa fa-refresh"></i> Reset</button> 
                <button type="submit" name="submit" class="btn btn-primary btn-md" 
                style="background:#337ab7; color:#fff">Submit <i class="fa fa-chevron-right"></i></button>
            </div>
        </div>
        @endisset
        @isset($edit)
        <div class="mt-5 mb-5 text-center" style="@isset($show) display:none; @endisset">
            <div class="text-center">
            <button type="submit" name="submit" 
            class="btn btn-primary btn-md col-3 p-3" 
            style="background:#337ab7; color:#fff; font-size:18px">
            Save and update</button>
            </div>
        </div>
        @endisset
    </div>
</div>