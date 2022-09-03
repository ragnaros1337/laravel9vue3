@if ($attributes->has('href'))
    <a href="{{$attributes['href']}}" class="kugoo-link . {{$attributes['class']}}" style="{{$attributes['style']}}">
        {{$slot}}
    </a>
@else
    <a href=" " class="kugoo-link . {{$attributes['class']}}" style="{{$attributes['style']}}">
        {{$slot}}
    </a>
@endif

