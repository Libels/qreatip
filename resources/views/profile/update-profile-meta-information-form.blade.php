<x-jet-form-section submit="updateProfileMetaInformation">
    <x-slot name="title">
        {{ __('Personalize Profile') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile personalization.') }}
    </x-slot>

    <x-slot name="form">
		<!-- Biography -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bio" value="{{ __('Biography') }}" />
			<x-jet-input id="bio" type="text" class="mt-1 block w-full" wire:model.defer="state.bio" />
            <x-jet-input-error for="bio" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
