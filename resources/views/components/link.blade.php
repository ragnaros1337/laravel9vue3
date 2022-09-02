@props(['classes', 'href'])
@if( !(strlen($href) > 0) )
    $href='';
@endif
<a href="{{$href}}" class="kugoo-link {{$classes}}">
    {{$slot}}
</a>
