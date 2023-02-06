@extends('admin.admin_master')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="b-4">
                <h3 style="float:left">Users Table</h3>
               
                <a href="{{ route('admin.users.create') }}" class="btn" 
                style="float:right; background:#337ab7; color:#fff">
                New <i class="fa fa-plus-circle"></i>
                </a>
              
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
    
    <div class="ard">
        <table class="table table-bordered text-center" id="myTable">
            <thead>
                <tr>
                <th scope="col">Sn.</th>
                <th scope="col">Image</th>
                <th scope="col" onclick="sortTable(0)">Full Name</th>
                <th scope="col">Email</th>    
                <th scope="col" onclick="sortTable(1)">Role</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead> 
            <tbody> 
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>

                        @if($user->profile_photo_path == null)
                        <td class="mt-3"><img src="{{ asset('storage/img/avatar.jpg') }}" 
                         alt="{{ $user->first_name }}" style="width:50px; border-radius:50%"></td>
                        @else
                        <td class="mt-3"><img src="{{ asset('storage/'.$user->profile_photo_path) }}" 
                         alt="{{ $user->first_name }}" style="width:50px; border-radius:50%"></td>
                        @endif       
                        
                        <td>
                        @if($user->lawyer)
                          {{ $user->lawyer->first_name }} {{ $user->lawyer->last_name }} 
                        @elseif($user->client)
                          {{ $user->client->first_name }} {{ $user->client->last_name }} 
                        @else($user->lawyer == null || $user->client == null)  
                          {{ 'Not Available' }}
                        @endif              
                        </td>

                        <td>{{ $user->email }}</td>   
                        
                        <td>@foreach($user->roles as $role)
                        
                        {{ $role->name  }}

                        @endforeach</td>

                        <td scope="col">{{ $user->created_at }}</td>
                        <td scope="col">{{ $user->updated_at }}</td>
                      
                        <td> 
                            <a href="{{ route('admin.users.edit', $user->id) }}" type="button" 
                            class="btn btn-sm btn-secondary text-light" role="button">
                            <i class="fa fa-edit"></i></a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" 
                            data-target="#exampleModal">
                                <i class="fa fa-trash"></i>  
                            </button>
                            <form id="delete-user-form-{{ $user->id }}" 
                            action="{{ route('admin.users.destroy', $user->id ) }}" 
                            method="POST" style="display:none">
                            @csrf
                            @method("DELETE")
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="">{{ $users->links() }}</div>            
    </div>   


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete the user?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="event.preventDefault();
        document.getElementById('delete-user-form-{{ $user->id }}').submit()">Confirm
        </button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
@endsection

       
    
