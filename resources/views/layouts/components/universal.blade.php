<div class="col-{{$mobile or ´´}} col-md-{{$tablet or ''}} {{$position or ''}} {{$position2 or ''}} {{$border or ''}}">
    {{--@if($image)
        <img src="{{ asset('images/{{$img}}.{{$ext}}') }}" alt="ARBA" class="img-thumbnail">
    @else--}}
        <h4 class="{{$margin or ''}} {{$color or ''}} {{$size or ''}}">{{$slot}}</h4>
   {{-- @endif--}}
</div>