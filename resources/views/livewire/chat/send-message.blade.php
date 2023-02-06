<div>
    <form wire:submit.prevent="sendMessage" action="">
        <div class="chatbox_footer">
            <div class="custom_form_group">
                <div class="m-auto" style="font-size:25px; cursor:pointer">
                <i id="example" class="bi bi-emoji-smile"></i> 
                <i class="bi bi-paperclip"></i>
                </div>
                <input type="text" class="control" id="example" placeholder="Type a message..."
                wire:model="body">
                <button type="submit" class="submit ml-2">Send</button>
            </div>           
        </div>
    </form>
</div>

