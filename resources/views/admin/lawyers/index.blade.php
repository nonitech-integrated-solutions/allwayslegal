@php($i = 1);
@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-12">
        <h4 style="float:left">Lawyers Table</h4>
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
    <table class="table table-bordered p-3 text-center">
        <thead class="text-center">
            <tr>
            <th scope="col">#Id</th>
            <th scope="col">Image</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>        
            <th scope="col">Gender</th>
            <th scope="col">Country</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Province</th>
            <th scope="col">Postal</th>
            <th scope="col">Languages</th>
            <th scope="col">Law Firm</th>
            <th scope="col">Law Firm Reg. No.</th>
            <!-- <th scope="col">Story</th> -->
            </tr>
        </thead>
        <tbody> 
        @foreach($lawyers as $lawyer)
        <tr>
            <th>{{ $i++ }}</th>
            <td class="mt-3"><img src="{{ asset('storage/img/avatar.jpg') }}" 
            alt="{{ $lawyer->name }}" style="width:50px"></td>
            <td>{{ $lawyer->first_name }}</td> 
            <td>{{ $lawyer->last_name }}</td> 
            <td>{{ $lawyer->user->email }}</td> 
            <td>{{ $lawyer->phone }}</td>    
            <td>{{ $lawyer->gender }}</td> 
            <td>{{ $lawyer->country }}</td>  
            <td>{{ $lawyer->address }}</td>
            <td>{{ $lawyer->city }}</td>        
            <td>{{ $lawyer->province }}</td>
            <td>{{ $lawyer->postal }}</td>
            <td>{{ $lawyer->languages }}</td>
            <td>{{ $lawyer->law_firm }}</td>
            <td>{{ $lawyer->law_firm_reg_no }}</td>
            <!-- <td>{{ $lawyer->story }}</td> -->
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mb-4">{{ $lawyers->links() }}</div>
@endsection