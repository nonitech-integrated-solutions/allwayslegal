@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-sm-12 col-md-6 container card mb-5 p-4">       
    <h4 class="text-center">Create new user</h4><hr>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @include('admin.users.partials.form', ['create' => true])
        </form>
    </div>
@endsection