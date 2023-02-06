<div>
    @if ($selectedConversation)
    <div class="chatbox_header row" style="border-bottom:1px solid gray">

        <div class="pb-2" style="">
             <i class="fa fa-arrow-left"></i> 
    
            <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="" 
            style="border-radius:50%; width:45px" style="float:right; width:30px">
        </div>

        <div class="name" style="float:right">
       
        </div>    

        <div class="info">

            <div class="info_item">
                <i class="bi bi-telephone-fill"></i>
            </div>

            <div class="info_item">
                <i class="bi bi-image"></i>
            </div>

            <div class="info_item">
                <i class="bi bi-info-circle-fill"></i>
            </div>
        </div>
    </div>

    <div class="chatbox_body p-3" style="overflow-y:scroll; min-height:300px; max-height:300px">
        @foreach ($messages as $message) 
        <div wire:key="{{ $message->id }}" class="msg_body | {{ auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }}"
        style="width:80%;max-width:80%;max-width:max-content;background:ghostwhite;margin-bottom:5px;padding:10px;border-radius:10px">
            
            {{ $message->body }}

            <div class="msg_body_footer" style="line-height:1">
                <div class="date text-right">
                  <small><i>{{ $message->created_at->format('m: i a') }}</i></small>
                </div>

                <div class="read text-right">
                    <small><i class="fa fa-check"></i></small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script>
        $('.chatbox_body').on('scroll', function() 
        {
            var top = $('.chatbox_body').scrollTop();
            if (top == 0) {
                window.livewire.emit('loadmore');
            }
        });
    </script>
    <script>
        window.addEventListener('updateHeight', event => {
            let oldHeight = event.detail.height;
            let newHeight = $('.chatbox_body')[0].scrollHeight;
            let height = $('.chatbox_body').scrollTop(newHeight - oldHeight);

            window.livewire.emit('updateHeight', {
                height:height,
            });
        });
    </script>
    @else
    <div class="text-center mt-3 mb-5" style="color:#333">
        <img src="{{ asset('storage/img/chatbox-simple.svg') }}" alt="" 
        style="width:45%; margin:auto; opacity:0.5">
        <h4>Pick up where you left off</h4>
        <h5>Select a conversation to start chatting</h5>
    </div>
    @endif
    <script>
        window.addEventListener('rowChatToBottom', event=>{

            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);
        });
    </script>
</div>
