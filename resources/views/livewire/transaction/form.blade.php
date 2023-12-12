<div>
    <div class="flex justify-between items-center">
        <x-heading-1 value="Create Transaction" />
        <div class="flex items-center">
            <div wire:loading>
                <x-small-spinners />
            </div>
            <x-text-link href="{{ route('app.transaction.index') }}" value="Back" class="text-sm ml-2" />
        </div>
    </div>

    <form wire:submit="submit" class="mt-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 bg-gray-800 p-4 rounded-md">
            <div class="md:col-span-2">
                <x-text-input type="text" wire:model="transaction_name" id="name" class="w-full"
                    placeholder="Transaction name" />
            </div>
            <div class="md:col-span-2">
                <x-select-input wire:model="account_id" id="account_id" class="w-full">
                    <option value="">Source account</option>
                    @foreach ($this->accounts as $account)
                        <option value="{{ $account['id'] }}" @if ($account['id'] == $account_id) selected @endif>{{ $account['name'] }}</option>
                    @endforeach
                </x-select-input>
            </div>
            <div class="">
                <x-text-input type="number" wire:model="amount" id="amount" class="w-full" placeholder="0" />
            </div>
            <div class="">
                <x-text-input type="datetime-local" wire:model="date" id="date" class="w-full"
                    placeholder="date" />
            </div>
            <div class="flex flex-col">
                <div class="mb-1">
                    <x-radio-input wire:model="type" name="type" id="out" value="0" />
                    <x-input-label for="out" value="Outcome" />
                </div>
                <div>
                    <x-radio-input wire:model="type" name="type" id="in" value="1" />
                    <x-input-label for="in" value="Income" />
                </div>
            </div>
            <div class="md:col-span-2">
                <x-text-input type="text" wire:model="remarks" id="remarks" class="w-full"
                    placeholder="Remarks (optional)" />
            </div>
        </div>
        <div class="mt-4">
            <x-button wire:loading.class="opacity-50 cursor-not-allowed"
                wire:loading.attr="disabled">{{ $id ? 'Update' : 'Submit' }}</x-button>
        </div>
    </form>
</div>
