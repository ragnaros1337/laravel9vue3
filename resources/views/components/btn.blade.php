@props(['classes'])
<button class="btn-{{$classes}}" type="button">
    {{ $slot }}
</button>
