@extends('layout')
@section('content')
    <item_card></item_card>
    <div style="display: flex; flex-direction: row; width: 100vw; justify-content: space-evenly; margin: 20px 0;">
        <x-btn :classes="'violet-border big-btn'">Смотреть все</x-btn>
        <x-btn :classes="'violet small-btn'">Оформить заказ</x-btn>
        <x-btn :classes="'grey small-btn'">Для города</x-btn>
        <x-btn :classes="'orange big-btn'">Оформить предзаказ</x-btn>
        @php $items = [1 => 'Сначала дорогие',2 => 'Сначала дешевые'] @endphp
        <x-dropdown :list="$items" :classes="'violet-border'">По цене <span class="material-symbols-outlined">circle</span></x-dropdown>
        <x-btn :classes="'white big-btn'">Перейти в каталог</x-btn>
        @php $items = [1 => 'Самокаты',2 => 'Аксессуары'] @endphp
        <x-dropdown :list="$items" :classes="'grey'">Везде</x-dropdown>
        <x-btn :classes="'violet big-btn btn-catalog'">Каталог <div class="btn-catalog-content"><i class="btn-catalog-icon"></i></div></x-btn>
        <x-link :href="''" :classes="'black'">Сервис</x-link>
        <x-link :href="''" :classes="'violet'">О магазине</x-link>
        <x-socials :height="16"></x-socials>
    </div>
@endsection
