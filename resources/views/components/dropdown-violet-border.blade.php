@props(['list'])
<div class="dropdown-violet-border">
    <button class="dropdown-violet-border-btn small-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
{{--        <mat-icon fontSet="material-symbols-rounded">face</mat-icon>--}}
    </button>
    <ul class="dropdown-menu dropdown-violet-border-menu">
        @foreach($list as $key => $value)
            <li><a class="dropdown-item dropdown-violet-border-item" href="">{{$value}}</a></li>
        @endforeach
    </ul>
</div>

