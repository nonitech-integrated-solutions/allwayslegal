@include('admin.body.header')
@include('admin.body.sidebar')
@include('admin.body.top-nav')

<div class="content-wrapper">
    <div class="content">
    @include('partials.alerts')						 
    @yield('content')
    </div>
</div>

@include('admin.body.footer');