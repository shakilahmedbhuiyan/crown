<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
         <span class="text-black dark:text-gray-200">
             {{ __('Update Password') }}
         </span>
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </x-slot>

    <x-slot name="form" class="dark:bg-gray-800">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="current_password" value="{{ __('Current Password') }}"></x-jet-label>
            <x-input id="current_password" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.current_password" autocomplete="current-password"></x-input>
            <x-jet-input-error for="current_password" class="mt-2"></x-jet-input-error>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password" value="{{ __('New Password') }}"></x-jet-label>
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password"
                         autocomplete="new-password"></x-input>
            <x-jet-input-error for="password" class="mt-2"></x-jet-input-error>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"></x-jet-label>
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full"
                         wire:model.defer="state.password_confirmation" autocomplete="new-password"></x-input>
            <x-jet-input-error for="password_confirmation" class="mt-2"></x-jet-input-error>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-jet-form-section>
