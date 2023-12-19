<div class="">
    <div class="flex justify-between items-center">
        <x-heading-1 value="Transaction Details" />
        <div class="flex items-center">
            <div wire:loading>
                <x-small-spinners />
            </div>
            <x-text-link href="{{ $previousUrl }}" value="Back" class="text-sm" />
        </div>
    </div>
    <x-transaction-detail :data="$transaction" />
    <div class="flex mt-3">
        <x-button-link href="{{ route('app.transaction.edit', ['id' => $transaction['id'], 'view' => true]) }}" class="text-center">Edit</x-button-link>
    </div>
    <div class="mt-3" wire:click="delete({{ $transaction['id'] }})">
        <x-button-danger wire:loading.class="opacity-50 cursor-not-allowed"
            wire:loading.attr="disabled">Delete</x-button-danger>
    </div>
</div>
