<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Lawyer;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\RoleUser;

class CreateChat extends Component
{   
    public $lawyers;
    public $message;
    public $role_id;

    public function checkConversation ($receiverId)
    {
       
        $checkedConversation = Conversation::where(
            'receiver_id', auth()->user()->id)
                ->where('sender_id', $receiverId)
                    ->where('receiver_id', $receiverId)
                        ->where('sender_id', auth()->user()->id)
                            ->get();


        if (count($checkedConversation) == 0) 
        {

            $createdConversation = Conversation::create(['receiver_id' => $receiverId, 'sender_id' => auth()->user()->id, 'last_time_mesage' => 0]);

            $createdMessage = Message::create(['conversation_id' => $createdConversation->id, 'sender_id' => auth()->user()->id, 'receiver_id' => $receiverId, 'body' => $this->message]);

            $createdConversation->last_time_message = $createdMessage->created_at;
           
            $createdConversation->save();

        }
        elseif (count($checkedConverstaion) >= 1) 
        {

            dd('conversation exists');

        }
    }

    public function render()
    {   
        $this->lawyers = Lawyer::where('id', '!=', auth()->user()->id)->get();

        return view('livewire.chat.create-chat');
    }
}
