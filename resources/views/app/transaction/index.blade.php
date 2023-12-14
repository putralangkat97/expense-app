<x-app-layout>
    <div class="flex justify-between items-center">
        <x-heading-1 value="All Transactions" />
        <x-text-link href="{{ route('app.transaction.create') }}" value="Add transaction" class="text-sm ml-2" />
    </div>
    <livewire:transaction.index :transactions="$transactions" lazy />
</x-app-layout>
