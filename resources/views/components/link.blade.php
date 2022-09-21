<a @if($attributes->has('href'))href="{{$attributes['href']}}" @endif class="kugoo-link {{$attributes['class']}}" style="{{$attributes['style']}}">
        {{$slot}}
        @if($attributes->has('mark'))
            <span class="kugoo-link-mark">{{$attributes['mark-value']}}</span>
        @endif
</a>


