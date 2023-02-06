@extends('templates.main')
@section('content')
<div class="container">
      
  <form method="POST" action="#">
    @include('client.profile.partials.form', ['show' => true, 'edit' => true])
  </form>
       
</div>
@endsection