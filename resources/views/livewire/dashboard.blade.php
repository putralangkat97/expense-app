<div>
    {{-- account card list --}}
    <div class="">
        <x-heading-1 value="Account List" />
        <div class="max-w-[732px] flex gap-4 overflow-x-auto mt-2">
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
    <div class="mt-10 mb-24">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Recent Transaction" />
            <x-text-link href="{{ route('app.transaction.index') }}" value="View all" class="text-sm" />
        </div>
        <livewire:transaction.index lazy="on-load" />
    </div>
</div>
