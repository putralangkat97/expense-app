<div>
    <div class="">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Create Account" />
            <div class="flex items-center">
                <div wire:loading>
                    <x-small-spinners />
                </div>
                <x-text-link href="{{ route('app.account.index') }}" value="Back" class="text-sm ml-2" />
            </div>
        </div>

        <form wire:submit="submit" class="mt-2">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-800 p-4 rounded-md">
                <div class="">
                    <x-text-input type="text" wire:model="name" id="name" class="w-full"
                        placeholder="Account name" />
                </div>
                <div class="">
                    <x-text-input type="number" wire:model="amount" id="amount" class="w-full"
                        placeholder="Balance" />
                </div>
                <div class="md:col-span-2">
                    <x-text-input type="text" wire:model="description" id="description" class="w-full"
                        placeholder="Description (optional)" />
                </div>
            </div>
            <div class="mt-4">
                <x-button wire:loading.class="opacity-50 cursor-not-allowed"
                    wire:loading.attr="disabled">{{ $id ? 'Update' : 'Submit' }}</x-button>
            </div>
        </form>
    </div>
</div>
