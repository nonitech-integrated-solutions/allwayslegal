<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'AllwaysLegal') }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <!-- Styles -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @livewireStyles

        @stack('styles')
    </head>
    <body>
             
    <nav class="navbar navbar-light bg-light p-3 shadow-lg ixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" 
                class="d-inline-block align-text-top"> -->
                <strong style="color:#337ab7">AllwaysLegal</strong> 
            </a>
            @if (Route::has('login'))
                <div lass="hidden fixed top-0 right-4 px-6 py-4 sm:block" style="text-decoration:none">
                @auth
                    <span class="dropdown show">
                       <a class="btn btn-lg dropdown-toggle btn-block" 
                       href="#" role="button" 
                       style="background:#337ab7; color:#fff"
                        id="dropdownMenuLink" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-user"></i> 
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Dashboard</a>
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Messages</a>
                            <a class="dropdown-item" href="#">Account </a>
                        </div>
                    </span>
                    
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary text-sm text-gray-700 dark:text-gray-500 underline"><b>LOGIN</b>
                        <i class="fa fa-chevron-right"></i></a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
                </div>
            @endif
        </div>    
    </nav>    

    @can('logged-in')
    <!-- <nav class="navbar navbar-light bg-light p-3 shadow-lg ixed-top">
        <div class="container">       
            <div lass="hidden fixed top-0 right-4 px-6 py-4 sm:block">       
                <a href="{{ route('admin.users.index') }}" style="text-decoration:none"
                class="text-sm text-gray-700 dark:text-gray-500 underline">ADMIN DASHBOARD</a>             
            </div>         
        </div>    
    </nav>  -->
    @endcan    

    <main>
        @include('partials.alerts')
    
        @yield('content')
      
    </main>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

@livewireScripts    

@stack('scripts')
</body>
</html>
