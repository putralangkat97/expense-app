<div class="mb-24">
    @forelse ($transactions as $transaction)
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
