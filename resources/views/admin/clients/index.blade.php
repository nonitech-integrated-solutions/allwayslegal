@php($i = 1);
@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="b-4">
            <h3 style="float:left">Clients Table</h3>
            <!-- <a class="btn btn-lg btn-success" style="float:right" 
            href="{{ route('admin.clients.create') }}" role="button">CREATE <i class="fa fa-add"></i></a> -->
        </div>
        <div class="input-group pt-4">
            <div class="form-outline col-lg-11 col-md-11 col-sm-10">
                <input type="search" id="form1" class="form-control 
                form-control-lg" placeholder="Enter keyword here......">
            </div>
            <button type="button" class="btn btn-primary col-lg-1 col-md-1 col-sm-1">
                <i class="fas fa-search fa-2x"></i>
            </button>
        </div>
    </div>
</div>

<div class="-4">
    <table class="table table-bordered p-3 text-center">
        <thead class="text-center">
            <tr>
            <th scope="col">#Id</th>
            <th scope="col">Image</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">province</th>
            <th scope="col">postal</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
            <th scope="col">business</th>
            <th scope="col">position</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($clients as $client)
        <tr>
            <th>{{ $i++ }}</th>
            <td class="mt-3"><img src="{{ asset('storage/img/avatar.jpg') }}" 
            alt="{{ $client->name }}" style="width:50px"></td>
            <td>{{ $client->first_name }}</td> 
            <td>{{ $client->last_name }}</td>           
            <td>{{ $client->address }}</td>
            <td>{{ $client->city }}</td>
            <td>{{ $client->province }}</td>  
            <td>{{ $client->postal }}</td>
            <td>{{$client->user->email}}</td>     
            <td>{{ $client->phone }}</td>  
            <td>{{ $client->business }}</td>  
            <td>{{ $client->position }}</td>       
        </tr>
        @endforeach
        </tbody>
    </table>
    <div>{{ $clients->links() }}</div>
@endsection