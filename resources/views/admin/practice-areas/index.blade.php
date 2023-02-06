@php($i = 1);
@extends('admin.admin_master')
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <h4 style="float:left">Practice Areas Table</h4>
        <a class="btn btn-success" style="float:right; background:#337ab7" 
        href="{{ route('admin.practice-areas.create') }}" role="button">New 
        <i class="fa fa-plus-circle"></i></a>
    </div>
</div>

<div class="-4">
    <table class="table table-bordered p-3 text-center">
        <thead class="text-center">
            <tr>
            <th scope="col">#Id</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
        <tr>
            <th>{{ $i++ }}</th>
            <td class="mt-3"><img src="{{ asset('storage/img/areas/'.$area->name.'.'.'png') }}"
            alt="{{ $area->name }}" style="width:50px"></td>
            <td style="line-height:50px">{{ $area->name }} Law</td>
            <td>{{ $area->created_at }}</td>
            <td>{{ $area->updated_at }}</td>
            <td lass="text-center" style="line-height:50px">
                <button class="btn btn-sm btn-primary" style="color:#ddd"> <i class="fa fa-eye"></i></button>
                <a class="btn btn-sm btn-secondary text-light"
                href="{{ route('admin.practice-areas.edit', $area->id) }}" role="button">
                    <i class="fa fa-edit"></i></a>
                <button type="button" class="btn btn-sm btn-danger"
                data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-trash"></i>
                </button>
                <form id="delete-area-form-{{ $area->id }}"
                action="{{ route('admin.practice-areas.destroy', $area->id ) }}"
                method="POST" style="display:none">
                @csrf
                @method("DELETE")
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $areas->links() }}

@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete the practice area?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" onclick="event.preventDefault();
        document.getElementById('delete-area-form-{{ $area->id }}').submit()">Confirm
        </button>
      </div>
    </div>
  </div>
</div>