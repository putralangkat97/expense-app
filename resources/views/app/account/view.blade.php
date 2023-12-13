<x-app-layout>
    <livewire:account.view :id="$id" lazy="on-load" />

    {{-- latest transaction --}}
    <div class="mt-10 mb-24">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Recent Transaction" />
            <x-text-link href="{{ route('app.transaction.index') }}" value="View all" class="text-sm" />
        </div>
        <livewire:transaction.index lazy="on-load" :accountId="$id" />
    </div>
</x-app-layout>
