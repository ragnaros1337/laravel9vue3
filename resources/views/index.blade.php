@extends('layout')
@section('content')
    <item_card></item_card>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <layout_vue></layout_vue>
    </div>
@endsection
<script>
    import LayoutVue from "../js/components/layoutVue";
    export default {
        components: {LayoutVue}
    }
</script>
