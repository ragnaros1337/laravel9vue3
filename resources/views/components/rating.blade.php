<div class="kugoo-rating">
    <div class="rating-text">{{ $attributes['data-title'] }}</div>
    <div class="rating-stars">
        @for ($i = 1; $i <= 5; $i++)
        <div class="star-container	" id="mark-{{$i}}">
            <label for="star-{{$i}}-left" class="left-half-label"></label>
            <label for="star-{{$i}}-right" class="right-half-label"></label>
            <svg class="star" data-check="false" width="20" height="20" viewBox="0 0 32 32">
                <use xlink:href="#star" mask=url("#half")></use>
                <use xlink:href="#star" fill="none" stroke="grey"></use>
            </svg>
        </div>
        @endfor
        @php
            use Illuminate\Support\Facades\DB;
            $user_count = DB::table('kugoo_app_user_ratings')->count();
            if($user_count > 1000)
            	$user_count = floor($user_count / 1000) . 'K';
            $average_mark = number_format(DB::table('kugoo_app_user_ratings')->average('mark'), 1, '.', '');
        @endphp
        <div class="rating-stars-info">
            @if($attributes['data-counter'] === 'true')
                <span class="rating-stars-count">{{ $user_count }}</span>
            @endif
            @if($attributes['data-average'] === 'true')
                <span class="rating-stars-average">{{ $average_mark }}</span>
            @endif
        </div>
    </div>
    <svg class="reusable-star" style="width: 0; height: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <defs>
            <mask id="half">
                <rect x="0" y="0" width="32" height="32" fill="grey" />
                <rect x="50%" y="0" width="32" height="32" fill="black" />
            </mask>

            <mask id="full">
                <rect x="0" y="0" width="32" height="32" fill="grey" />
            </mask>

            <mask id="half_active">
                <rect x="0" y="0" width="32" height="32" fill="white" />
                <rect x="50%" y="0" width="32" height="32" fill="black" />
            </mask>

            <mask id="full_active">
                <rect x="0" y="0" width="32" height="32" fill="white" />
            </mask>

            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
            </symbol>
        </defs>
    </svg>
</div>
