<div>
    <ul class="list-group w-75 mx-auto mt-3 container-fluid">
    @foreach ($lawyers as $lawyer)
        <li class="list-group-item list-group-item-action" 
        wire:click='checkConversation({{$lawyer->id}})'>{{ $lawyer->first_name }}</li>
    @endforeach
    </ul>
</div>
