@extends('templates.main')
@section('content')
<div class="container mt-5 mb-5">
    <div class="row gx-3">
    
        <div class="col-md-6">

        <!-- <div class="card p-2">
        <img src="{{ asset('storage/img/avatar.png') }}" alt="" style="width:80px">
        <div class="container">
            <h5><b>John Doe</b></h5>
        </div>
        </div> -->
            <div class="p-3" style="background:ghostwhite; border:2px #337ab7 solid">        
        
            <div class="row">
                <div class="col-1">
                <b style="font-size: 24px" for="">$-</b>
                </div>
                <div class="col-11">
                <p><b>Unable to fetch your credits</b>
                    <br>Please check back later <button class="col-4 btn" 
                    style="float:right; background:#337ab7; color:#fff">Refer</button></p>
                </div>    
            </div>                 

            </div>

            <div class="container mt-4">
                <h3 style="color:#337ab7">Ongoing</h3>

                <p>These are your active and upcoming services</p>

                <p>You have no services booked yet</p>
            </div>

        </div>

        <div class="col-md-6">
            <div class="p-3" style="background:ghostwhite; border:2px #337ab7 solid">
                    
                <p><b>Talk to a lawyer</b>
                    <br>Book an advice session <a href="{{ route('practice.areas') }}"><button class="col-4 btn" 
                    style="float:right; background:#337ab7; color:#fff">BOOK NOW <i class="fa fa-arrow-right"></i></button></a>
                </p>
            
            </div>

            <div class="container mt-4">
        <h3 style="color:#337ab7">Your Lawyers</h3>
        <p>See your previous lawyers or hire a preious one</p>

        <p>You have no previous lawyers available yet</p>

        <!-- <div class="col-md-6 p-4 text-center"
        style="background:ghostwhite; border:2px #337ab7 solid;
        cursor:pointer"><a href="{{ route('practice.areas') }}"> 
            <div><i class="fa fa-plus-circle fa-2x"
                style="color:#337ab7"></i>
            </div>
            <b style="color:#337ab7">Hire a new lawyer</b></a>
        </div> -->
    </div>

        </div>
    </div>

    <!-- <div class="container mt-4">
        <h3 style="color:#337ab7">Ongoing</h3>

        <p>These are your active and upcoming services</p>

        <p>You have no services booked yet</p>
    </div>

    <div class="container mt-4">
        <h3 style="color:#337ab7">Your Lawyers</h3>
        <p>See your previous lawyers or hire a preious one</p>
        <div class="col-md-6 p-4 text-center"
        style="background:ghostwhite; border:2px #337ab7 solid;
        cursor:pointer"><a href="{{ route('practice.areas') }}"> 
            <div><i class="fa fa-plus-circle fa-2x"
                style="color:#337ab7"></i>
            </div>
            <b style="color:#337ab7">Hire a new lawyer</b></a>
        </div>
    </div> -->
    <div>

    </div>
    <div class="container mt-4">
    <h3 style="color:#337ab7">More</h3>
    <p>AllwaysLegal offers upfront fixed prices on popular legal services for businesses.</p>
    </div>

    <div class="container">
        <div class="row g-2">
            @foreach($services as $service)
            <div class="col-4">
                <div class="p-3 border" style="background:ghostwhite">   
                    <p><b>{{ $service->title }}</b></p>
                    <p><small><b>Price:</b> ${{$service->price}}+tax</small></p>
                   
                    <p><small><a href="#" data-toggle="modal" data-target="#exampleModal{{ $service->id }}">View Details</a></small></p>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $service->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ $service->description }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            @endforeach
        </div>
    </div>
</div>
@endsection