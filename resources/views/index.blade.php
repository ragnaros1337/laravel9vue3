@extends('layout')
@section('content')
    <item_card></item_card>
    <x-btn-violet-border>Смотреть все</x-btn-violet-border>
    <x-btn-violet>Оформить заказ</x-btn-violet>
    <x-btn-grey>Для города</x-btn-grey>
    <x-btn-orange>Оформить предзаказ</x-btn-orange>
{{--    @php $items = [1 => 'Самокаты',2 => 'Аксессуары'] @endphp--}}
{{--    <x-dropdown-grey :list="items">Везде</x-dropdown-grey>--}}
    @php $items = [1 => 'Сначала дорогие',2 => 'Сначала дешевые'] @endphp
    <x-dropdown :list="$items" :classes="'violet-border'">По цене</x-dropdown>
    <x-btn-white>Перейти в каталог</x-btn-white>
    @php $items = [1 => 'Самокаты',2 => 'Аксессуары'] @endphp
    <x-dropdown :list="$items" :classes="'grey'">Везде</x-dropdown>
@endsection
