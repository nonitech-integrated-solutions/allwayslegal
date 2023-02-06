@extends('templates.main')
@section('content')
<div class="container">
  <form method="POST" action="{{ route('client.profile.update', $client->id) }}">
    @method('PATCH')
    @include('client.profile.partials.form', ['edit' => true])
  </form>    
</div>
@endsection



