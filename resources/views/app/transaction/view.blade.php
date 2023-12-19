<x-app-layout>
    {{-- account card list --}}
    <livewire:transaction.view :transaction="$transaction" :previousUrl="$previousUrl" lazy />
</x-app-layout>
