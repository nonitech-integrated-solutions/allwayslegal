@if(session('success'))
<div class="container alert alert-success mt-3" role="alert">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="container alert alert-danger mt-3" role="alert">
    {{ session('error') }}
</div>
@endif

@foreach($errors->all() as $error)
    <div class="container alert alert-danger mt-3" role="alert">
        {{$error}}
    </div>
@endforeach