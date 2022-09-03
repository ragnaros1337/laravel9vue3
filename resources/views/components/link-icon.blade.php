@if ($attributes->has('href'))
    <a href="{{$attributes['href']}}" class="link-icon-base . {{$attributes['class']}}">
        {{$slot}}
    </a>
@else
    <a href=" " class="link-icon-base . {{$attributes['class']}}">
        {{$slot}}
    </a>
@endif
