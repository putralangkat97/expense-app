<x-app-layout>
    <livewire:dashboard lazy />

    {{-- create transaction --}}
    <div class="fixed bottom-0 w-full left-0 bg-gray-900 py-6 mx-auto">
        <div class="text-center flex mx-11">
            <x-button-link href="{{ route('app.transaction.create') }}" class="">New Transaction</x-button-link>
        </div>
    </div>
</x-app-layout>
