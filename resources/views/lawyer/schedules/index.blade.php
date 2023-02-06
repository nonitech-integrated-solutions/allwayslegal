@extends('templates.main')
@section('content')

@include('lawyer.template.header')

<div class="container mt-3">
    
    <div class="mt-3 mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Add <i class="fa fa-plus-circle"></i>
        </button>
        <h5 class="text-left" style="float:right">Total: 
        <span style="background:#337ab7;border-radius:50%;padding:5px;color:#fff">
        {{ $schedules->total() }}</span></h5>
    </div>

<div style="width:100%; height:100%; white-space: nowrap; overflow-x: scroll"> 
    <table class="table table-striped table-bordered text-center">
        <thead style="background:#337ab7; color:#fff">
            <tr>
            <th scope="col">Sn.</th>
            <th scope="col">Date</th>
            <th scope="col">Start time</th>
            <th scope="col">End time</th>
            <th scope="col">Created On</th>
            <th scope="col">Action</th>
        </thead>
        <tbody>
            @foreach($schedules as $key => $schedule)
            <tr>  
            <th scope="row">{{ $schedules->firstItem() + $key }}</th>
            <td>{{ date_format($schedule->date, "d/m/Y") }}</td>
            <td>{{ date_format($schedule->start_time, "H:i:s") }}</td>
            <td>{{ date_format($schedule->end_time, "H:i:s") }}</td>
            <td>{{ date_format($schedule->created_at, "d/m/Y H:i:s") }}</td>
            <td>
            <!-- <button class="btn btn-sm btn-primary" style="color:#ddd"> <i class="fa fa-eye"></i></button> -->
            <a class="btn btn-sm btn-secondary text-light"
            href="{{ route('lawyer.schedules.edit', $schedule->id) }}" role="button">
            <i class="fa fa-edit"></i>
            </a>
            <button type="button" class="btn btn-sm btn-danger"
            onclick="event.preventDefault();
            document.getElementById('delete-schedule-{{ $schedule->id }}').submit()">
            <i class="fa fa-trash"></i>
            </button>
            <form id="delete-schedule-{{ $schedule->id }}" 
            action="{{ route('lawyer.schedules.destroy', $schedule->id ) }}" 
            method="POST" style="display:none">
            @csrf
            @method("DELETE")
            </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div><hr>

<div class="mt-4">{{ $schedules->links(); }}</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ route('lawyer.schedules.store') }}" method="POST">
            @csrf
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Schedule</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body container">     
                <div class="row">
                    <div class="col-12 mb-4">
                        <label for="" class="mb-0">Date</label>
                        <input type="date" name="date" class="col-12 form-control @error('date') is-invalid @enderror">
                        @error('date')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>
                
                    <div class="col-6">
                        <label for="" class="mb-0">Start Time</label>
                        <input type="time" name="start_time" class="col-12 form-control @error('start_time') is-invalid @enderror">
                        @error('start_time')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <div class="col-6">
                        <label for="" class="mb-0">End Time</label>
                        <input type="time" name="end_time" class="col-12 form-control @error('end_time') is-invalid @enderror">
                        @error('end_time')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror 
                    </div>

                    <input type="hidden" name="lawyer_id" value="{{ auth::user()->id }}">
                </div>     
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">   
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>  
    </div>
  </div>
</div>

@endsection



