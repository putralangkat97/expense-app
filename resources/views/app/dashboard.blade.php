<x-app-layout>
    <livewire:dashboard lazy :accounts="$accounts" />

    {{-- latest transaction --}}
    <div class="mt-10">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Recent Transaction" />
            <x-text-link href="{{ route('app.transaction.index') }}" value="View all" class="text-sm" />
        </div>
        <livewire:transaction.index lazy :transactions="$transactions" :previousUrl="url()->previous()" />
    </div>

    {{-- create transaction --}}
    <div class="fixed bottom-0 w-full left-0 bg-gray-900 py-6 mx-auto">
        <div class="text-center flex mx-11">
            <x-button-link href="{{ route('app.transaction.create') }}" class="">New Transaction</x-button-link>
        </div>
    </div>
</x-app-layout>
