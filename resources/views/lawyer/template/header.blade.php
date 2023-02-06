
<div class="container g-light pb-2 p-3" style="min-height:200px; background:#F0F8FF">

    <div class="row pt-2 pb-2">
        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
            <img src="https://ui-avatars.com/api/?background=337ab7&color=fff&name={{auth()->user()->name}}" alt="{{ auth()->user()->name }}"
            style="border-radius:50%; width:100px">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-9" style="color:#337ab7">
            <h3 class="pt-3 pb-2">
            {{ Auth::user()->lawyer->first_name }} 
            {{ Auth::user()->lawyer->last_name }}
            </h3>
            <!-- <b><i class="fa fa-2x fa-briefcase"></i> Sr. Advocate</b>&nbsp&nbsp -->
            <b><i class="fa fa-2x fa-building"></i> {{ Auth::user()->lawyer->law_firm_name }}</b> 
            <b><i class="fa fa-2x fa-map-marker"></i>{{ Auth::user()->lawyer->city }}, {{ Auth::user()->lawyer->province }}</b><br>
            @isset($index)
            <a class="btn col-md-6 col-lg-2 mt-3" style="background:#337ab7; color:#fff" 
            href="{{ route('lawyer.profile.edit', Auth::user()->lawyer->id ) }}">Edit Profile</a>     
            @else
            <a class="btn col-md-6 col-lg-2 mt-3" style="background:#337ab7; color:#fff" 
            href="{{ route('lawyer.profile.index') }}">View Profile</a>
            @endisset
        </div>
    </div>

    <div class="container p-2 g-light" style="background:#F0F8FF">
        <div class="row">
            <div class="col-md-12">
                <div class="row g-2">
                    <div class="container text-center">
                        <a class="btn" style="background:#337ab7; color:#fff" 
                        href="{{ route('lawyer.index') }}">Dashboard</a>
                        <a class="btn" style="background:#337ab7; color:#fff" href="{{ route('lawyer.appointment.index') }}">Appointments</a>  
                        <a class="btn" style="background:#337ab7; color:#fff" href="{{ route('lawyer.schedules.index') }}">Time Slots</a>
                        <a class="btn" style="background:#337ab7; color:#fff" href="{{ route('lawyer.practice-areas.index') }}">Practice Areas</a>
                        <a class="btn" style="background:#337ab7; color:#fff" href="{{ route('lawyer.services.index') }}">Services</a>    
                        <a class="btn" style="background:#337ab7; color:#fff" href="{{ route('lawyer.messages.index') }}">Messages</a>
                        <a class="btn" style="background:#337ab7; color:#fff" href="#">Reviews</a> 
                    </div>    
                </div>      
            </div>
        </div>     
    </div>

