@extends('templates.main')
@section('content')
@include('lawyer.template.header')
<div class="container mt-3 p-3" style="background:#fff; border: solid #ddd 1px; border-radius:10px">
    <div class="row" style="height:100%">
        <div class="col-3" style="border-right:2px solid #ddd">
           
            @livewire('chat.chat-list')

        </div>
        <div class="col-9" tyle="max-height:500px">

            @livewire('chat.chatbox')

            <div class="row pl-3 pr-3" style="border-top:1px solid #ddd; height:50px">
   
                <input type="text" class="form-control mt-3 ml-auto col-10" placeholder="type message here.....">

                <button class="btn btn-primary col-1 mt-3 ml-2">Send</button>
            </div>
        </div>
    </div>

</div>
@endsection