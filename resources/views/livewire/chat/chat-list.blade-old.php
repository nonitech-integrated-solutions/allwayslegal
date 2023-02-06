<div>

    <div class="chatlist_header">

        <div class="title" style="font-familiy:">
            AllwaysLegal
        </div> 


        <div class="img_container">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{auth()->user()->name}}" alt="">
        </div> 

    </div>

    <div class="chatlist_body" style="overflow-y:scroll; max-height:480px; direction:rtl">
        @if (count($conversations) > 0)
            @foreach ($conversations as $conversation)
                   
            <div style="direction:ltr" class="chatlist_item" wire:key="{{ $conversation->id }}" wire:click="$emit('chatUserSelected', {{ $conversation }}, {{ $this->getChatUserInstance($conversation, $name = 'id') }})">

                <div class="chatlist_img_container">
                    <img src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($conversation, $name = 'name') }}" alt="">
                    <div class='status-circle'>
                    </div>
                </div>

                <div class="chatlist_info">
               
                    <div class="top_row">   
                        <div class="list_username">{{ $this->getChatUserInstance($conversation, $name='name') }}</div>
                        <i class="date">{{ $conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans() }} ago</i>
                    </div>

                    <div class="bottom_row">
                        
                        <div class="message_body text-truncate">
                            {{ $conversation->messages->last()->body }}               
                        </div>
                        
                        <div class="unread_count">
                            56
                        </div>
                    </div>
              
                </div>
            </div>
      
            @endforeach      
        @else

        <h1>You have no conversations.</h1>

        @endif
       
    </div>

</div>

