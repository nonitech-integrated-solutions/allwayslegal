@csrf
<div class="mb-3">
    <label for="name" class="form-label">Names:</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
    value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset">
    @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror 
</div>
@isset($create)
<div class="mb-3">
    create
</div>
@endisset
<div class="mb-3">
    
</div>  
<div>
    <button class="btn btn-lg btn-success col-3" style="float:right">Submit</button>
</div>