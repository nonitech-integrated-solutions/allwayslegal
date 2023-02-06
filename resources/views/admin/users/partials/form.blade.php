@csrf
<!-- <div class="mb-3">
    <label for="name" class="form-label">Name:</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
    value="{{ old('name') }} @isset($user) {{ $user->name }} @endisset">
    @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror 
</div> -->
<div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
    value="{{ old('email') }} @isset($user) {{ $user->email }} @endisset">
    @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
@isset($create)
<div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
    value="{{ old('password') }}">
    @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>
<!-- <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Confirmation:</label>
    <input name="password_confirmation" type="text" class="form-control @error('password_confirmation') is-invalid @enderror">
    @error('confirm_password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div> -->
@endisset<hr>
<section>
<div class="form-card">       
    <div class="row">
        @foreach($roles as $role)  
        <div class="col-sm-4 text-center">       
            <div class="checkbox">
                <label>
                <input type="radio" name="roles[]"
                    value="{{ $role->id }}" @isset($user) 
                    @if(in_array($role->id, 
                    $user->roles->pluck('id')->toArray())) 
                    checked @endif @endisset"> <span class="btn btn-primary">{{ $role->name }}</span>
                    @error('role')
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
</section><hr>
<div class="text-right text-light">
    <a href="{{ route('admin.users.index') }}" 
    class="btn btn-secondary">
    <i class="fa fa-arrow-left"></i> Back</a>
    <button class="btn btn-success">Save 
        <i class="fa fa-save"></i></button>
</div>