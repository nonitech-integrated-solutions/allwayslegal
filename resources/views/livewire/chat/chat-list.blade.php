<div>

    <div class="row p-2 mb-2" style="border-bottom:1px solid gray">

        <div class="col-9" style="font-familiy:">
            AllwaysLegal
        </div> 


        <div class="img_container col-3">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{auth()->user()->name}}" alt=""
            style="border-radius:50%">
        </div> 

    </div>

    <div class="chatlist_body p-2" style="overflow-y:scroll; max-height:480px; direction:rtl; cursor:pointer">
        @if (count($conversations) > 0)
            @foreach ($conversations as $conversation)
                   
            <div style="direction:ltr; height:70px; background:ghostwhite; border-radius:10px" 
            class="chatlist_item row mb-1 ml-2 pt-3" wire:key="{{ $conversation->id }}" 
            wire:click="$emit('chatUserSelected', {{ $conversation }}, {{ $this->getChatUserInstance($conversation, $name = 'id') }})">

                <div class="chatlist_img_container col-3">
                    <img src="https://ui-avatars.com/api/?name={{ $this->getChatUserInstance($conversation, $name = 'name') }}" alt="" 
                    style="border-radius:50%">
                    <div class='status-circle'>
                    </div>
                </div>

                <div class="chatlist_info col-9">
               
                    <div class="top_row row">   
                        <div class="list_username col-6">{{ $this->getChatUserInstance($conversation, $name='name') }}</div>
                        <div class="col-6"><small><i class="date">{{ $conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans() }} ago</i></small></div>
                    </div>

                    <div class="bottom_row row">
                        
                        <div class="message_body text-truncate col-9">
                           <small>{{ $conversation->messages->last()->body }}</small>             
                        </div>
                        
                        <div class="unread_count col-3" style="background:#ddd">
                            <small>12</small>
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

