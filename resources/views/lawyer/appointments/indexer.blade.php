@extends('templates.main')
@section('content')

@include('lawyer.template.header')

<div class="container mt-3">
    <form action="{{ route('lawyer.appointment.check') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
            Choose Date
            </div>
            <div class="card-body">      
                <div class="row form-group">
                    <!-- <label for="date" class="col-sm-1 col-form-label">Date</label> -->
                    <div class="col-sm-12">
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" placeholder="Enter date here"
                            name="date">
                            <span class="input-group-append">
                                <span class="input-group-text bg-black d-block">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3 mb-3"><button class="btn" style="background:#337ab7;color:#fff" type="submit">Check</button></div>
    </form>
    @if(isset($date))
        <b><p class="text-center">Your availability for: <span class="text-success">{{ $date }}</span></p></b>
    @endif
    @if(Route::is('lawyer.appointment.check'))
    <form action="{{ route('lawyer.slots.update') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                Choose AM time       
                <span class="container mt-3" style="margin-left:700px">Check/Uncheck
                <input type="checkbox" onclick="for(c in document.getElementsByName('time[]')) 
                    document.getElementsByName('time[]').item(c).checked=this.checked">
                </span>
            </div>      
                
            <div class="card-body">
                <input type="hidden" name="appointmentId" value="{{$appointmentId}}">
                <table class="table table-striped">
                    <tbody>
                        <tr><th scope="row">1</th>
                            <td><input type="checkbox" name="time[]" value="6:00am" 
                            @if(isset($times)) {{$times->contains('time', '6:00am') 
                            ? 'checked' : ''}}@endif> 6:00</td>
                            <td><input type="checkbox" name="time[]" value="6:20am"
                            @if(isset($times)) {{$times->contains('time', '6:20am') 
                            ? 'checked' : ''}}@endif> 6:20</td>
                            <td><input type="checkbox" name="time[]" value="6:40am"
                            @if(isset($times)) {{$times->contains('time', '6:40am') 
                            ? 'checked' : ''}}@endif> 6:40</td>
                        </tr>
                        <tr><th scope="row">2</th>
                            <td><input type="checkbox" name="time[]" value="7:00am"
                            @if(isset($times)) {{$times->contains('time', '7:00am') 
                            ? 'checked' : ''}}@endif> 7:00</td>
                            <td><input type="checkbox" name="time[]" value="7:20am"
                            @if(isset($times)) {{$times->contains('time', '7:20am') 
                            ? 'checked' : ''}}@endif> 7:20</td>
                            <td><input type="checkbox" name="time[]" value="7:40am"
                            @if(isset($times)) {{$times->contains('time', '7:40am') 
                            ? 'checked' : ''}}@endif> 7:40</td>
                        </tr>
                        <tr><th scope="row">3</th>
                            <td><input type="checkbox" name="time[]" value="8:00am"
                            @if(isset($times)) {{$times->contains('time', '8:00am') 
                            ? 'checked' : ''}}@endif> 8:00</td>
                            <td><input type="checkbox" name="time[]" value="8:20am"
                            @if(isset($times)) {{$times->contains('time', '8:20am') 
                            ? 'checked' : ''}}@endif> 8:20</td>
                            <td><input type="checkbox" name="time[]" value="8:40am"
                            @if(isset($times)) {{$times->contains('time', '8:40am') 
                            ? 'checked' : ''}}@endif> 8:40</td>
                        </tr>
                        <tr><th scope="row">4</th>
                            <td><input type="checkbox" name="time[]" value="9:00am"
                            @if(isset($times)) {{$times->contains('time', '9:00am') 
                            ? 'checked' : ''}}@endif> 9:00</td>
                            <td><input type="checkbox" name="time[]" value="9:20am"
                            @if(isset($times)) {{$times->contains('time', '9:20am') 
                            ? 'checked' : ''}}@endif> 9:20</td>
                            <td><input type="checkbox" name="time[]" value="9:40am"
                            @if(isset($times)) {{$times->contains('time', '9:40am') 
                            ? 'checked' : ''}}@endif> 9:40</td>
                        </tr>
                        <tr><th scope="row">5</th>
                            <td><input type="checkbox" name="time[]" value="10:00am"
                            @if(isset($times)) {{$times->contains('time', '10:00am') 
                            ? 'checked' : ''}}@endif> 10:00</td>
                            <td><input type="checkbox" name="time[]" value="10:20am"
                            @if(isset($times)) {{$times->contains('time', '10:20am') 
                            ? 'checked' : ''}}@endif> 10:20</td>
                            <td><input type="checkbox" name="time[]" value="10:40am"
                            @if(isset($times)) {{$times->contains('time', '10:40am') 
                            ? 'checked' : ''}}@endif> 10:40</td>
                        </tr>
                        <tr><th scope="row">6</th>
                            <td><input type="checkbox" name="time[]" value="11:00am"
                            @if(isset($times)) {{$times->contains('time', '11:00am') 
                            ? 'checked' : ''}}@endif> 11:00</td>
                            <td><input type="checkbox" name="time[]" value="11:20am"
                            @if(isset($times)) {{$times->contains('time', '11:20am') 
                            ? 'checked' : ''}}@endif> 11:20</td>
                            <td><input type="checkbox" name="time[]" value="11:40am"
                            @if(isset($times)) {{$times->contains('time', '11:40am') 
                            ? 'checked' : ''}}@endif> 11:40</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><br>
    
        <div class="card">
            <div class="card-header">
                Choose PM time
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr><th scope="row">7</th>
                            <td><input type="checkbox" name="time[]" value="12:00pm"
                            @if(isset($times)) {{$times->contains('time', '12:00pm') 
                            ? 'checked' : ''}}@endif> 12:00</td>
                            <td><input type="checkbox" name="time[]" value="12:20pm"
                            @if(isset($times)) {{$times->contains('time', '12:20pm') 
                            ? 'checked' : ''}}@endif> 12:20</td>
                            <td><input type="checkbox" name="time[]" value="12:40pm"
                            @if(isset($times)) {{$times->contains('time', '12:40pm') 
                            ? 'checked' : ''}}@endif> 12:40</td>
                        </tr>
                        <tr><th scope="row">8</th>
                            <td><input type="checkbox" name="time[]" value="1:00pm"
                            @if(isset($times)) {{$times->contains('time', '1:00pm') 
                            ? 'checked' : ''}}@endif> 1:00</td>
                            <td><input type="checkbox" name="time[]" value="1:20pm"
                            @if(isset($times)) {{$times->contains('time', '1:20pm') 
                            ? 'checked' : ''}}@endif> 1:20</td>
                            <td><input type="checkbox" name="time[]" value="1:40pm"
                            @if(isset($times)) {{$times->contains('time', '1:40pm') 
                            ? 'checked' : ''}}@endif> 1:40</td>
                        </tr>
                        <tr><th scope="row">9</th>
                            <td><input type="checkbox" name="time[]" value="2:00pm"
                            @if(isset($times)) {{$times->contains('time', '2:00pm') 
                            ? 'checked' : ''}}@endif> 2:00</td>
                            <td><input type="checkbox" name="time[]" value="2:20pm"
                            @if(isset($times)) {{$times->contains('time', '2:20pm') 
                            ? 'checked' : ''}}@endif> 2:20</td>
                            <td><input type="checkbox" name="time[]" value="2:40pm"
                            @if(isset($times)) {{$times->contains('time', '2:40pm') 
                            ? 'checked' : ''}}@endif> 2:40</td>
                        </tr>
                        <tr><th scope="row">10</th>
                            <td><input type="checkbox" name="time[]" value="3:00pm"
                            @if(isset($times)) {{$times->contains('time', '3:00pm') 
                            ? 'checked' : ''}}@endif> 3:00</td>
                            <td><input type="checkbox" name="time[]" value="3:20pm"
                            @if(isset($times)) {{$times->contains('time', '3:20pm') 
                            ? 'checked' : ''}}@endif> 3:20</td>
                            <td><input type="checkbox" name="time[]" value="3:40pm"
                            @if(isset($times)) {{$times->contains('time', '3:40pm') 
                            ? 'checked' : ''}}@endif> 3:40</td>
                        </tr>
                        <tr><th scope="row">12</th>
                            <td><input type="checkbox" name="time[]" value="4:00pm"
                            @if(isset($times)) {{$times->contains('time', '4:00pm') 
                            ? 'checked' : ''}}@endif> 4:00</td>
                            <td><input type="checkbox" name="time[]" value="4:20pm"
                            @if(isset($times)) {{$times->contains('time', '4:20pm') 
                            ? 'checked' : ''}}@endif> 4:20</td>
                            <td><input type="checkbox" name="time[]" value="4:40pm"
                            @if(isset($times)) {{$times->contains('time', '4:40pm') 
                            ? 'checked' : ''}}@endif> 4:40</td>
                        </tr>
                        <tr><th scope="row">13</th>
                            <td><input type="checkbox" name="time[]" value="5:00pm"
                            @if(isset($times)) {{$times->contains('time', '5:00pm') 
                            ? 'checked' : ''}}@endif> 5:00</td>
                            <td><input type="checkbox" name="time[]" value="5:20pm"
                            @if(isset($times)) {{$times->contains('time', '5:20pm') 
                            ? 'checked' : ''}}@endif> 5:20</td>
                            <td><input type="checkbox" name="time[]" value="5:40pm"
                            @if(isset($times)) {{$times->contains('time', '5:40pm') 
                            ? 'checked' : ''}}@endif> 5:40</td>
                        </tr>
                        <tr><th scope="row">14</th>
                            <td><input type="checkbox" name="time[]" value="6:00pm"
                            @if(isset($times)) {{$times->contains('time', '6:00pm') 
                            ? 'checked' : ''}}@endif> 6:00</td>
                            <td><input type="checkbox" name="time[]" value="6:20pm"
                            @if(isset($times)) {{$times->contains('time', '6:20pm') 
                            ? 'checked' : ''}}@endif> 6:20</td>
                            <td><input type="checkbox" name="time[]" value="6:40pm"
                            @if(isset($times)) {{$times->contains('time', '6:40pm') 
                            ? 'checked' : ''}}@endif> 6:40</td>
                        </tr>
                        <tr><th scope="row">15</th>
                            <td><input type="checkbox" name="time[]" value="7:00pm"
                            @if(isset($times)) {{$times->contains('time', '7:00pm') 
                            ? 'checked' : ''}}@endif> 7:00</td>
                            <td><input type="checkbox" name="time[]" value="7:20pm"
                            @if(isset($times)) {{$times->contains('time', '7:20pm') 
                            ? 'checked' : ''}}@endif> 7:20</td>
                            <td><input type="checkbox" name="time[]" value="7:40pm"
                            @if(isset($times)) {{$times->contains('time', '7:40pm') 
                            ? 'checked' : ''}}@endif> 7:40</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    
        <div class="card mt-3 mb-3 -3 text-center">
            <div class="card-body">
                <a href="{{ route('lawyer.appointment.index') }}" class="col-2 btn btn-secondary" type="submit">Back</a>
                <button class="col-2 btn" style="background:#337ab7;color:#fff" type="submit">Update</button>
            </div>
        </div>
    <!-- </div>  -->
</form>
@else
<div class="text-right">
<h5 class="text-left">Your timeslot list: <span style="background:#337ab7;border-radius:50%;padding:10px;color:#fff">{{ $timeSlots->total() }}</span></h5>
<a href="{{ route('lawyer.appointment.create') }}" class="btn btn-primary">Add Slot <i class="fa fa-plus-circle"></i></a>
</div>    
<table class="table table-striped text-center">
    <thead style="color:gray">
        <tr>
        <th scope="col">#</th>
        <th scope="col"><i class="fa fa-user"></i> Creator</th>
        <th scope="col"><i class="fa fa-calendar"></i> Date</th>
        <th scope="col"> View/Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($timeSlots as $timeSlot)
        <tr>
        <th scope="row">{{ $timeSlot->id }}</th>
        <td>{{ $timeSlot->lawyer->first_name }} {{ $timeSlot->lawyer->last_name }}</td>
        <td>{{ $timeSlot->date }}</td>
        <td>
            <form action="{{ route('lawyer.appointment.check') }}" method="POST">
            @csrf
                <input type="hidden" name="date" value="{{ $timeSlot->date }}">
                <button type="submit" class="btn" 
                style="background:#337ab7;color:#fff"><b>View/Update</b></button>
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table><hr>
    {{ $timeSlots->links(); }}

@endif
<style type="text/css">
    input[type="checkbox"] {
        zoom:1.5;
    }
    body {
        font-size:20px;
    }
</style>

@endsection