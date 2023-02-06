<div>
    @if ($selectedConversation)
    <div class="chatbox_header">

        <div class="return">
             <i class="bi bi-arrow-left"></i> 
        </div>

        <div class="img_container">
            <img src="https://ui-avatars.com/api/?name={{ $receiverInstance->name }}" alt="">
        </div>

        <div class="name">
            {{ $receiverInstance->name }}
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

    <div class="chatbox_body p-5">
        @foreach ($messages as $message) 
        <div wire:key="{{ $message->id }}" class="msg_body | {{ auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver' }}"
        style="width:80%;max-width:80%;max-width:max-content">
            
            {{ $message->body }}

            <div class="msg_body_footer">
                <div class="date">
                   <i>{{ $message->created_at->format('m: i a') }}</i>
                </div>

                <div class="read">
                    <i class="bi bi-check"></i>
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
    <div class="text-center mt-5" style="color:#333">
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
