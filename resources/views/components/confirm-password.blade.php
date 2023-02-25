@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
    <x-jet-dialog-modal wire:model="confirmingPassword">
        <x-slot name="title">
             <span class="text-black dark:text-gray-200">
                 {{ $title }}
             </span>
        </x-slot>

        <x-slot name="content" class="dark:bg-gray-800">
             <p class="text-black dark:text-gray-200">
            {{ $content }}
             </p>

            <div class="mt-4" x-data="{}"
                 x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
                <x-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}"
                             x-ref="confirmable_password"
                             wire:model.defer="confirmablePassword"
                             wire:keydown.enter="confirmPassword"></x-input>

                <x-jet-input-error for="confirmable_password" class="mt-2"></x-jet-input-error>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-button class="ml-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
                {{ $button }}
            </x-button>
        </x-slot>
    </x-jet-dialog-modal>
@endonce