<div class="kugoo-rating">
    <div class="rating-text">Открыть в приложении</div>
    <div class="rating-stars" data-confirm="false">
        @for ($i = 1; $i <= 5; $i++)
        <div class="star-container" id="mark-{{$i}}">
            <input type="checkbox" class="left-half" id="star-{{$i}}-left">
            <input type="checkbox" class="right-half" id="star-{{$i}}-right">
            <label for="star-{{$i}}-left" class="left-half-label"></label>
            <label for="star-{{$i}}-right" class="right-half-label"></label>
            <svg class="star" width="20" height="20" viewBox="0 0 32 32">
                <use xlink:href="#star" mask=url("#half")></use>
                <use xlink:href="#star" fill="none" stroke="grey"></use>
            </svg>
        </div>
        @endfor
        <svg class="star active" width="20" height="20" viewBox="0 0 32 32">
            <use xlink:href="#star" mask=url("#half")></use>
            <use xlink:href="#star" fill="none" stroke="grey"></use>
        </svg>
        <span class="rating-stars-count">2к</span>
    </div>
    <svg class="reusable-star" style="width: 0; height: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <defs>
            <mask id="half">
                <rect x="0" y="0" width="32" height="32" fill="grey" />
                <rect x="50%" y="0" width="32" height="32" fill="black" />
            </mask>

            <mask id="full">
                <rect x="0" y="0" width="32" height="32" fill="grey" />
{{--                <rect x="50%" y="0" width="32" height="32" fill="black" />--}}
            </mask>

            <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                <path d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
            </symbol>
        </defs>
    </svg>
</div>
