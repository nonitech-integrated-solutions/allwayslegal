<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand" style="background:#337ab7">
        <a href="{{ url('/dashboard') }}">

        <!--<svg
            class="brand-icon"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid"
            width="30"
            height="33"
            viewBox="0 0 30 33"
        >
            <g fill="none" fill-rule="evenodd">
            <path
                class="logo-fill-blue"
                fill="#7DBCFF"
                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
            </g>
        </svg>-->
        <span class="brand-name">ADMIN DASHBOARD</span>
        </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

        <!-- sidebar menu -->
        <ul class="nav sidebar-inner" id="sidebar-menu">
            <li  class="has-sub active expand" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-home" style="color:#337ab7"></i>
                <span class="nav-text">HOME</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="dashboard"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                    <li  class="" >
                        <a class="sidenav-item-link" href="#">
                        <span class="nav-text">Slider Section</span>        
                        </a>
                    </li>
                   
                    <li  class="" >
                    <a class="sidenav-item-link" href="#">
                    <span class="nav-text">Clients Section</span>        
                    </a>
                    </li>

                    <li  class="" >
                    <a class="sidenav-item-link" href="#">
                    <span class="nav-text">Call-To-Action Section</span>        
                    </a>
                    </li>
                </div>
            </ul>
            </li>
          
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" 
            data-toggle="collapse" data-target="#ui-elements"
                aria-expanded="false" aria-controls="ui-elements">
                <i class="mdi mdi-image-filter-none"></i>
                <span class="nav-text">App Menu</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="ui-elements"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                        
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{ route('admin.users.index') }}">
                    <span class="nav-text">All Users</span>
                    </a>
                </li>               
               
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{ route('admin.practice-areas.index') }}">
                    <span class="nav-text">Practice Areas</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{ route('admin.services.index') }}">
                    <span class="nav-text">Services</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{ route('admin.lawyers.index') }}">
                    <span class="nav-text">Lawyers</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="{{ route('admin.clients.index') }}">
                    <span class="nav-text">Clients</span>
                    </a>
                </li>        

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="#">
                    <span class="nav-text">Appointments</span>
                    </a>
                </li>
                          
                </div>
            </ul>
            </li>

            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#services-menu"
                aria-expanded="false" aria-controls="services-menu">
                <i class="mdi mdi-shuffle-variant"></i>
                <span class="nav-text">Booking System</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="services-menu"
                data-parent="#sidebar-menu">
                <div class="sub-menu">  
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Schedules</span>
                        </a>
                    </li>   
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Appointments</span>
                        </a>
                    </li>        
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Unavailable Slots</span>
                        </a>
                    </li>  
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Admin Lawyers</span>
                        </a>
                    </li>    
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Lawyer ~ Services</span>
                        </a>
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="#"
                        data-turbolinks="false">
                        <span class="nav-text">Booking Services</span>
                        </a>
                    </li>              
                </div>
            </ul>
            </li>
            <li  class="has-sub" >
            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact-page"
                aria-expanded="false" aria-controls="contact-page">
                <i class="mdi mdi-email"></i>
                <span class="nav-text">Contact Page</span> <b class="caret"></b>
            </a>
            <ul  class="collapse"  id="contact-page"
                data-parent="#sidebar-menu">
                <div class="sub-menu">
                        
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="#">
                    <span class="nav-text">Contact Profile</span>
                    </a>
                </li>

                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="#">
                    <span class="nav-text">Contact Message</span>
                    </a>
                </li>                  
                </div>
            </ul>
            </li>
        </ul>
    </div>

    <hr class="separator" />

   
    </div>
</aside>