
<div class="mb-5 mt-5 p-5 container col-6 m-auto text-center" style="background:ghostwhite; color:gray">
    <div class="mb-2"><img src="/img/success-icon-main.png" alt="" style="width:150px"></div>
    <h4 style="font-family:cursive">Appointment Confirmed</h4>
    <p style="font-size:18px">
    {{ $appointment->client_name }} thanks for your booking!!<br>
    You are currently booked with {{ $appointment->lawyer->first_name }}<br>
    <b>Service:</b> {{ $appointment->service->title }}<br> 
    <b>Duration:</b> {{ $appointment->service->duration }} mins<br>
    An email confirmation has been sent to the email address below:
    <br>{{ $appointment->client_email }}</p>
    <!-- <p style="font-size:24px; color:navyblue; font-weight:700">
    March 16, 2022 11:00 AM</p> -->
    <p style="font-size:24px; color:navyblue; font-weight:700">
    {{ $appointment->date->format('D jS M Y') }} 
    {{ $appointment->start_time->format('g:i A') }}</p><hr>
   <br>
    @if (!$appointment->isCancelled())     
    <button class="p-2 btn btn-block btn-danger ext-light"
    onClick="if (window.confirm('Are you sure you want to cancel booking?')) {
    @this.call('cancelBooking')}">Cancel Appointment</button>
    @endif
    @if ($appointment->isCancelled())
        <p style="color:red"><b>Your booking has been cancelled!</b></p>
    @endif
</div>  

