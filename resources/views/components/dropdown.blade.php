@props(['list', 'classes'])
<div class="dropdown kugoo-dropdown dropdown-{{$classes}}">
    <button class="dropdown-{{$classes}}-btn kugoo-dropdown-btn small-btn dropdown-toggle" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
    </button>
    <ul class="dropdown-menu kugoo-dropdown-menu dropdown-{{$classes}}-menu">
        @foreach($list as $key => $value)
            <li><a class="dropdown-item kugoo-dropdown-item dropdown-{{$classes}}-item" href="">{{$value}}</a></li>
        @endforeach
    </ul>
</div>

