<button class="{{$attributes['class']}}" type="button"
    @if($attributes->has('data-fz')) style="font-size: {{$attributes['data-fz']}}px" @endif>
    {{ $slot }}
</button>
