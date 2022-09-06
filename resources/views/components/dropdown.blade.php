@props(['list', 'type'])
<div class="dropdown kugoo-dropdown dropdown-{{$type}}">
    <button class="dropdown-{{$type}}-btn kugoo-dropdown-btn small-btn dropdown-toggle" style="{{$attributes['style']}}" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
    </button>
    <ul class="dropdown-menu kugoo-dropdown-menu dropdown-{{$type}}-menu">
        @foreach($list as $key => $value)
            <li><a class="dropdown-item kugoo-dropdown-item dropdown-{{$type}}-item" href="">{{$value}}</a></li>
        @endforeach
    </ul>
</div>

