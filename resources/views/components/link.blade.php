@props(['classes', 'href'])
<a href="{{$href}}" class="link link-{{$classes}}">
    {{$slot}}
</a>
