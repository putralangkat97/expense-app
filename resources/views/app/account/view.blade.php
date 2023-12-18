<x-app-layout>
    <livewire:account.view :account="$account" lazy />

    {{-- latest transaction --}}
    <div class="mt-10 mb-24">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Account Transactions" />
            <x-text-link href="{{ route('app.transaction.index') }}" value="View all" class="text-sm" />
        </div>
        <livewire:transaction.index lazy :accountId="$account['id']" :transactions="$transactions" />
    </div>
</x-app-layout>
