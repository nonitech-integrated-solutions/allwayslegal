<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use App\Events\MessageSent;

class Chatbox extends Component
{   

    public $selectedConversation;
    public $receiver;
    public $messages;
    public $paginateVar = 10;
    public $height;

 //  protected $listeners = ['loadConversation', 'pushMessage', 'loadmore', 'updateHeight', 'broadcastedMessageReceived'];

    public function getListeners ()
    {
       $auth_id = auth()->user()->id;

        return [
            "echo-private:chat.{$auth_id},MessageSent"=>'broadcastedMessageReceived',
            'loadConversation', 'pushMessage', 'loadmore', 'updateHeight'
        ];
    }

    function broadcastedMessageReceived ()
    {
        dd('test');
    }

    public function pushMessage($messageId)
    {

        $newMessage = Message::find($messageId);
        $this->messages->push($newMessage);

        $this->dispatchBrowserEvent('rowChatToBottom');
    }

    function loadmore ()
    {

        $this->paginateVar = $this->paginateVar +10;

        $this->messages_count = Message::where('conversation_id', $this->selectedConversation->id)->count();

        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messages_count - $this->paginateVar)
                ->take($this->paginateVar)->get();

        $height = $this->height;

        $this->dispatchBrowserEvent('updateHeight', ($height));
    }

    function updateHeight ($height)
    {
      $this->height = $height;
    }

    public function loadConversation(Conversation $conversation, User $receiver)
    {
       // dd($conversation, $receiver);
        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;

        $this->messages_count = Message::where('conversation_id', $this->selectedConversation->id)->count();

        $this->messages = Message::where('conversation_id', $this->selectedConversation->id)
            ->skip($this->messages_count - $this->paginateVar)
                ->take($this->paginateVar)->get();

                $this->dispatchBrowserEvent('chatSelected');
    }

    public function render()
    {
        return view('livewire.chat.chatbox');
    }
}
