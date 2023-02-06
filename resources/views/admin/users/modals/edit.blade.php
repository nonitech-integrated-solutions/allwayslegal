<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="updateUserLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modify User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('admin.users.store') }}" method="POST">
      <div class="modal-body">
@csrf
<div class="mb-3">
    <label for="email" class="form-label">User Email:</label>
    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror"
    value="{{ $user->email }}  ">
    @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div>

<!-- <div class="mb-3">
    <label for="password" class="form-label">User Password:</label>
    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
    value="" placeholder="Enter user's password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div> -->
<!-- <div class="mb-3">
    <label for="password_confirmation" class="form-label">Password Confirmation:</label>
    <input name="password_confirmation" type="text" class="form-control @error('password_confirmation') is-invalid @enderror">
    @error('confirm_password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
    @enderror
</div> -->

<div class="mb-3 d-flex">
    @foreach($roles as $role)
        <div class="form-check p-4">
            <input class="form-check-input" name="roles[]"
            type="radio" value="{{ $role->id }} 
            @isset($user) @if(in_array($role->id, 
            $user->roles->pluck('id')->toArray())) 
            checked @endif @endisset">  
            <label class="form-check-label" for="{{ $role->name }}">
                <strong style="font-size:18px">{{ $role->name }}</strong>
            </label>
        </div>
    @endforeach
</div>  
<!-- <div>
    <button class="btn btn-lg btn-success col-3" style="float:right">Submit</button>
</div> -->

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>