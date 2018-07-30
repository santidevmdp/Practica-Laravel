<div class="col-{{$mobile or ´´}} col-md-{{$tablet or ''}} {{$position or ''}} {{$border or ''}}">
        {{--@if(file_exists($path.strtolower($image).'.'.$ext))--}}
                <img src="/images/{{strtolower($image)}}.{{$ext or 'png'}}" alt="{{$image}}" class="img-thumbnail" />
        {{--@else
                <h4 class="{{$margin or ''}} {{$color or ''}} {{$size or ''}}">{{$slot}}</h4>
        @endif--}}
</div>