@extends('layout')
@section('content')
    <item_card></item_card>
    <x-btn-violet-border>Смотреть все</x-btn-violet-border>
    <x-btn-violet>Оформить заказ</x-btn-violet>
    <x-btn-grey>Для города</x-btn-grey>
    <x-btn-orange>Оформить предзаказ</x-btn-orange>
    <x-dropdown-grey>Везде</x-dropdown-grey>
    @php $list = [1 => 'Сначала дорогие',2 => 'Сначала дешевые'] @endphp
    <x-dropdown-violet-border :list="$list">По цене</x-dropdown-violet-border>
@endsection
