<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('partials/dashside2')
    <div class="my-container active-cont">
        @include('partials/navdash')
    </div>
</x-app-layout>
