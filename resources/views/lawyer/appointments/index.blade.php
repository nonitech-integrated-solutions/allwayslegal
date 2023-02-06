@extends('templates.main')
@section('content')

@include('lawyer.template.header')

<div class="container mt-3">
    
<div style="width:100%; height:100%; white-space: nowrap; overflow-x: scroll"> 
<table class="table table-striped table-bordered text-center">
    <thead style="background:#337ab7; color:#fff">
        <tr>
        <th scope="col">Sn.</th>
        <th scope="col"> Area</th>
        <th scope="col"> Service</th>
        <th scope="col"> Client name</th>
        <th scope="col"> Date</th>
        <th scope="col"> Start time</th>
        <th scope="col"> End time</th>
        <th scope="col"> Created On</th>
        <th scope="col"> Details</th>
        <th scope="col"> Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($appointments as $key => $appointment)
        <tr>  
        <th scope="row">{{ $appointments->firstItem() + $key }}</th>
        <td>Area</td>
        <td>{{ $appointment->service_id }}</td>
        <td>{{ $appointment->client_name }}</td>
        <td>{{ date_format($appointment->date, "d/m/Y") }}</td>
        <td>{{ date_format($appointment->start_time, "H:i:s") }}</td>
        <td>{{ date_format($appointment->end_time, "H:i:s") }}</td>
        <td>{{ date_format($appointment->created_at, "d/m/Y H:i:s") }}</td>
        <td>
            <form action="{{ route('lawyer.appointment.check') }}" method="POST">
            @csrf
                <input type="hidden" name="date" value="{{ $appointment->date }}">
                <button type="submit" class="btn" 
                style="background:#337ab7;color:#fff"><b><i class="fa fa-eye"></i></b></button>
            </form>
        </td>
        <td><i class="fa fa-check" style="color:green"></i></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div><hr>
<div class="mt-4">{{ $appointments->links(); }}</div>
@endsection