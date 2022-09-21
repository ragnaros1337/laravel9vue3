<a @if ($attributes->has('href'))href="{{$attributes['href']}}" @endif class="link-icon-base {{$attributes['class']}}">
    {{$slot}}
</a>

