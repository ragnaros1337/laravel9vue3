<div class="kugoo-search">
    @php $items = [1 => 'Самокаты',2 => 'Аксессуары'] @endphp
    <x-dropdown :list="$items" :type="'grey'">Везде</x-dropdown>
    <input type="text" class="kugoo-search-field" placeholder="{{$attributes['placeholder']}}">
    <button class="kugoo-search-btn" type="button">
        <span class="material-symbols-outlined">search</span>
    </button>
</div>
