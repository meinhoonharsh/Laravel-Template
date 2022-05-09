<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <style>
        .shadow{
            box-shadow:none !important;
        }
    </style>

    @include('partials/dashside')
    <div class="p-1 my-container active-cont">
        @include('partials/navdash')
        <div class="row m-0 p-0">
            <div class="col-md-10">
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')
                    @endif

                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="">
                            @livewire('profile.update-password-form')
                        </div>
                    @endif

                    <div class="mt-4 pt-4">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>