<div class="calendar-ui">
    <div class="card-header text-center p-3" style="background:ghostwhite">  
        <div>
            @if ($this->weekIsGreaterThanCurrent)
            <button wire:click="decrementCalendarWeek" style="float:left"><i class="fa fa-chevron-left p-1"></i></button>      
            @endif
            <b>{{ $this->calendarStartDate->format('F Y') }}</b>          
            <button wire:click="incrementCalendarWeek" style="float:right"><i class="fa fa-chevron-right p-1"></i></button>     
        </div>

        @foreach($this->calendarWeekInterval as $day)
        <button wire:click="setDate({{ $day->timestamp }})">  
            <div class="text-center p-2">               
                <small>{{ $day->format('D') }}</small>
            </div> 
            <div class="text-center p-2 calendar-navigation" 
            style="border:1px solid #337ab7; border-radius:50%;
            {{ $date === $day->timestamp ? 'background:#337ab7; color:#fff' : '' }}">               
                <span>{{ $day->format('d') }}</span>   
            </div>   
        </button>    
        @endforeach
    </div>
     
    <div class="p-4 morning pb-0">                         
        @if ($this->availableTimeSlots->count())  
        <div style="cursor:pointer; width:100%; height:500px; white-space: nowrap; overflow: scroll; overflow-x: hidden">
            <!-- <div class="pb-2">Morning</div> -->
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 text-center p-3">
                @foreach ($this->availableTimeSlots as $slot)
                    <div class="col-3">
                        <div class="slot p-2 border" style="background:#337ab7; color:#fff">
                            <input type="radio" name="time" id="time_{{ $slot->timestamp }}" value="{{ $slot->timestamp }}"
                            wire:model="time" class="sr-only">
                            <label for="time_{{ $slot->timestamp }}" style="cursor:pointer">
                                <b>{{ $slot->format('g:i A') }}</b>
                                @if ($slot->timestamp == $time)
                                <i class="fa fa-check" style="color:fff"></i>
                                @endif
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>   
        </div>
        @else
        <div class="p-5">
            <h4 class="text-center">Sorry there are currently no available slots for that day!</h4> 
        </div>         
        @endif
    </div>
</div>