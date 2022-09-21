<div class="kugoo-search">
    @php $items = [1 => 'Самокаты',2 => 'Аксессуары'] @endphp
    <x-dropdown :list="$items" :type="'grey'" style="padding: 5px 15px">Везде</x-dropdown>
    <input type="text" class="kugoo-search-field" placeholder="{{$attributes['placeholder']}}">
    <button class="kugoo-search-btn" type="button">
{{--        TODO:SVG search--}}
        <span class="material-symbols-outlined">search</span>
    </button>
</div>
