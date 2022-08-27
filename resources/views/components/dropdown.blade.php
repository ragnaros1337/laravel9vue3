@props(['list', 'classes'])
<div class="dropdown dropdown-{{$classes}}">
    <button class="dropdown-{{$classes}}-btn dropdown-btn small-btn dropdown-toggle" type="button"
            data-bs-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
{{--        <mat-icon fontSet="material-symbols-rounded">face</mat-icon>--}}
    </button>
    <ul class="dropdown-menu dropdown-{{$classes}}-menu">
        @foreach($list as $key => $value)
            <li><a class="dropdown-item dropdown-{{$classes}}-item" href="">{{$value}}</a></li>
        @endforeach
    </ul>
</div>

