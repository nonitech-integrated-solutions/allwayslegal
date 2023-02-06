@php($i = 1);
@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-12">
        <h4 style="float:left">Services Table</h4>
        <a class="btn btn-primary" style="float:right" 
        href="{{ route('admin.services.create') }}" role="button">New 
        <i class="fa fa-plus-circle"></i></a>
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

<div class="-4" style="overflow:auto">
    <table class="table table-bordered p-3 text-center" width="100%">
        <thead>
            <tr>
            <th scope="col">#Id</th>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col" style="width:10%">Service Fee</th>
            <th scope="col" style="width:10%">Service Fee Tax</th>
            <th scope="col" style="width:10%">Legal Fee</th>
            <th scope="col" style="width:10%">Legal Fee Tax</th>
            <th scope="col" style="width:10%">Total</th>
            <th scope="col" style="width:50%">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody> 
        @foreach($services as $service)
        <tr>
            <th>{{ $i++ }}</th>
            <td class="text-left">{{ $service->title }}</td> 
            <td>${{ $service->price }}</td> 
            <td>${{ $service->service_fee }}</td> 
            <td>${{ $service->service_fee_tax }}</td> 
            <td>${{ $service->legal_fee }}</td>  
            <td>${{ $service->legal_fee_tax }}</td>
            <td>${{ $service->price +  
                $service->service_fee + 
                $service->service_fee_tax +
                $service->legal_fee +
                $service->legal_fee_tax }}</td>
            <td class="text-left"><a href="#">
                {{ Str::of($service->description)->limit(50) }}
            </a></td>  
            <td><a href="{{ route('admin.services.edit', $service->id) }}" 
            class="btn btn-md btn-secondary"><i class="fa fa-edit"></i></a></td>
            <td> <button type="button" class="btn btn-md btn-danger"
                onclick="event.preventDefault();
                document.getElementById('delete-service-form-{{ $service->id }}').submit()">
            <i class="fa fa-trash"></i>
                </button>
                <form id="delete-service-form-{{ $service->id }}" 
                action="{{ route('admin.services.destroy', $service->id ) }}" 
                method="POST" style="display:none">
                @csrf
                @method("DELETE")
                </form>
            </td>   
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-12 text-right">{{ $services->links() }}</div>     
@endsection