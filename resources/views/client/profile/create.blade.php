@extends('templates.main')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-4 left-section" style="background:ghostwhite">
      <div class="row text-center">
        <div class="col-12" style="background:ghostwhite">

          <div class="card p-2 mt-4" style="background:#fff; border-radius:10px">
            <div class="card-body">
              <h2 style="color:navy">Let's get to know you!</h2>
              <h5 style="color:#333">
                <b><small>Why do we need this information?</small></b>
              </h5>   

              <p style="color:gray">In order for a lawyer to work with a client, this information is
                legally required in Canada.
              </p>

              <p style="color:gray">We can also use this information to serve you better and recommend more suitable
                lawyers for your business. AllwaysLegal does not sell you personal information for
                any reason.
              </p>

            </div>
          </div>
          
        </div>
      </div>

    </div>
      
  <div class="col-lg-8 right-section mt-4 mb-4">
    <div style="border-radius:30px">
      <div class="card">
          <form method="POST" action="{{ route('client.profile.store') }}">   
          @include('client.profile.partials.form', ['create' => true])
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection