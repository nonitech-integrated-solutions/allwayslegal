@extends('templates.main')
@section('content')

@include('lawyer.template.header')

<div class="container p-3 mb-5 text-center g-light" style="background:#F0F8FF; color:#337ab7">
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-group"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/client.png') }}" alt="clients" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/user-group-man-woman.png" alt="clients" style="width:50px"/>
        <h3>47</h3>
        <p>Clients</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-briefcase"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/services.png') }}" alt="services" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/briefcase.png" alt="reviews" style="width:50px"/>
        <h3>47</h3>
        <p>Services</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
         <!-- <i class="fa fa-4x fa-th"></i> -->
         <!-- <img src="{{ asset('storage/img/icons/practice-areas.png') }}" alt="practice-areas" style="width:65px"> -->
         <!-- <img src="https://img.icons8.com/ultraviolet/40/000000/category.png" alt="practice-areas" style="width:50px"/> -->
         <!-- <img src="https://img.icons8.com/ultraviolet/40/000000/folder-tree.png" alt="practice-areas" style="width:50px"/> -->
         <img src="https://img.icons8.com/ultraviolet/40/000000/parallel-tasks.png" alt="practice-areas" style="width:50px"/>
         <h3>154</h3>
        <p>Practice Areas</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-star"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/reviews.png') }}" alt="reviews" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/handshake.png" alt="reviews" style="width:50px"/>
        <!-- <img src="https://img.icons8.com/nolan/64/good-quality.png "/> -->     
        <h3>1,200</h3>
        <p>Reviews</p>
      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-envelope"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/messages.png') }}" alt="messages" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/filled-message.png" alt="messages" style="width:50px"/>
        <h3>47</h3>
        <p>Messages</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-calendar"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/appointments.png') }}" alt="appointments" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/overtime.png" alt="appointments" style="width:50px"/>
        <h3>47</h3>
        <p>Appointments</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
         <!-- <i class="fa fa-4x fa-folder"></i> -->
         <!-- <img src="{{ asset('storage/img/icons/files.png') }}" alt="files" style="width:65px"> -->
         <img src="https://img.icons8.com/ultraviolet/40/000000/opened-folder.png" alt="files" style="width:50px"/>
         <h3>154</h3>
        <p>Files</p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <!-- <i class="fa fa-4x fa-credit-card"></i> -->
        <!-- <img src="{{ asset('storage/img/icons/payments.png') }}" alt="payments" style="width:65px"> -->
        <img src="https://img.icons8.com/ultraviolet/40/000000/card-in-use.png" alt="payments" style="width:50px"/>
        <h3>$77,000</h3>
        <p>Payments</p>
      </div>
    </div>
  </div>
</div>

</div>

@endsection

