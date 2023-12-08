@props([
    'type' => '',
    'data' => null,
])

<div class="mt-2 bg-gray-100 dark:bg-gray-800 w-full h-20 rounded-md flex mx-auto items-center justify-center">
    <span class="{{ $type == 'in' ? 'text-green-500 dark:text-green' : 'text-red-500 dark:text-red-400' }} text-2xl">
        {{ $type == 'in' ? '+' : '-' }} {{ \Illuminate\Support\Number::currency($data['amount'], in: 'IDR') }}
    </span>
</div>
<div class="bg-gray-100 dark:bg-gray-800 p-4 mt-2 rounded-md">
    <div class="">
        <span class="text-gray-300">
            Transaction Name
        </span>
        <p class="text-white font-medium text-lg">{{ $data['transaction_name'] }}</p>
    </div>
    <div class="mt-4">
        <span class="text-gray-300">
            Source Account
        </span>
        <p class="text-white font-medium text-lg">{{ $data['account']['name'] }}</p>
    </div>
    <div class="mt-4">
        <span class="text-gray-300">
            Transaction Date
        </span>
        <p class="text-white font-medium text-lg">{{ date('d F Y h:i A', strtotime($data['date'])) }}</p>
    </div>
    <div class="mt-4">
        <span class="text-gray-300">
            Remarks
        </span>
        <p class="text-white font-medium text-lg">{{ $data['remarks'] ?? "-" }}</p>
    </div>
</div>
