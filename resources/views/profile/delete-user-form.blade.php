<x-jet-action-section>
    <x-slot name="title">
        {{ __('Fiók törlése') }}
    </x-slot>

    <x-slot name="description">
        {{ __('A fiókod végleges törlése') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Ha törlöd a fiókodat az egy végleges döntés. Ha törlöd a fiókodat minden adat elveszik.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Fiók törlése') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Fiók törlése') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Biztosan kitörlöd a fiókodat? Ez egy nem visszavonható lépés és minden adatod elveszik. Kérlek írd be a jelszavadat, ha tényleg szeretnéd törölni a fiókodat.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Jelszó') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Mégsem') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Fiók törlése') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
