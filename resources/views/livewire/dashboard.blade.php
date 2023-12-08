<div>
    {{-- account card list --}}
    <div class="">
        <x-heading-1 value="Account List" />
        <div class="max-w-[732px] flex gap-4 overflow-x-scroll mt-2">
            <a href="{{ route('app.account.create') }}" wire:navigate.hover>
                <div
                    class="h-[176px] w-40 rounded-md bg-transparent border-2 border-gray-800 flex mx-auto justify-center items-center">
                    <span class="text-gray-800 text-7xl">+</span>
                </div>
            </a>
            @foreach ($this->accounts as $account)
                <a href="{{ route('app.account.show', $account['id']) }}" wire:navigate.hover>
                    <x-account-card class="w-96" :data="$account" />
                </a>
            @endforeach
        </div>
    </div>

    {{-- latest transaction --}}
    <div class="mt-10">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Recent Transaction" />
            <x-text-link href="{{ route('app.transaction.index') }}" value="View all" class="text-sm" />
        </div>
        @forelse ($this->transactions as $transaction)
            <a href="{{ route('app.transaction.show', $transaction['id']) }}" wire:navigate.hover>
                <x-transaction-card class="mt-2 mb-4" :type="$transaction['type']" :data="$transaction" />
            </a>
        @empty
            <div class="bg-gray-200 dark:bg-gray-800 rounded-md px-6 py-4 w-full mt-2 outline-dashed outline-gray-800">
                <div class="flex justify-center items-center">
                    <span class="text-gray-800 dark:text-gray-500">No transaction.</span>
                </div>
            </div>
        @endforelse
    </div>
</div>
