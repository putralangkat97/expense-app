<div class="">
    <div class="flex justify-between items-center">
        <x-heading-1 value="Transaction Details" />
        <div class="flex items-center">
            <div wire:loading>
                <x-small-spinners />
            </div>
            <x-text-link href="{{ route('app.transaction.edit', $id) }}" value="Edit Transaction" class="text-sm" />
        </div>
    </div>
    <x-transaction-detail :data="$transaction" />
    <div class="mt-3" wire:click="delete({{ $id }})">
        <x-button-danger wire:loading.class="opacity-50 cursor-not-allowed" wire:loading.attr="disabled">Delete</x-button-danger>
    </div>
</div>
