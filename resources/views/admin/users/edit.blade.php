@extends('admin.admin_master')
@section('content')
<div class="col-sm-12 col-md-6 container card mb-5 p-4">    
    <h4 class="text-center">Modify user</h4><hr>
    <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
        @method('PATCH')
        @include('admin.users.partials.form')
    </form>
@endsection