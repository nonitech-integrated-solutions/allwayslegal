@csrf
<div class="form-outline mb-3">
<input type="email" name="email" id="form3Example3" 
class="form-control form-control-lg"
    placeholder="Enter a valid email address" />
</div>

<div class="ol-md-6 mb-3 ">
<select name="role" class="form-control 
form-control-lg @error('role') 
is-invalid @enderror mb-0">
    <option>---- choose a role ----</option>
    <option value="3">I am a Client</option>
    <option value="2">I am a Lawyer</option>
</select>
@error('role')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
</div>

<!-- Password input -->
<div class="form-outline mb-3">
    <input type="password" name="password" 
    id="form3Example4" class="form-control form-control-lg"
    placeholder="Enter password" />
</div>

<div class="d-flex justify-content-between align-items-center">
<!-- Checkbox -->
<div class="form-check mb-0">
    <input class="form-check-input me-2" 
    type="checkbox" value="" id="form2Example3" />
    <label class="form-check-label" for="form2Example3">
    Remember me
    </label>
</div>
<a href="#!" class="text-body">Forgot password?</a>
</div>

<div class="text-center text-lg-start mt-4 pt-2">
<button class="btn btn-primary btn-lg"
    style="padding-left: 2.5rem; padding-right: 2.5rem">Register</button>
<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
    class="link-danger">Login</a></p>
</div>