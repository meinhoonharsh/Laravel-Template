<x-jet-form-section submit="updatePassword" class="mt-4 pt-4">
    <x-slot name="title">
        Update Mobile Number
    </x-slot>

    <x-slot name="description">
        Verify your mobile number before updating to profile
    </x-slot>

    <x-slot name="form">
        <div class="col-6 sm:col-span-4">
            {{ __('Current Password') }}
            <input id="current_password" type="password" class="form-control mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-6 sm:col-span-4">
            {{ __('New Password') }}
            <input id="password" type="password" class="form-control mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="col-6 sm:col-span-4">
            {{ __('Confirm Password') }}
            <input id="password_confirmation" type="password" class="form-control mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <button class="btn btn-primary">
            {{ __('Save') }}
        </button>
    </x-slot>
</x-jet-form-section>
