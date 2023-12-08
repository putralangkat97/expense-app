@props([
    'image' => '',
    'data' => null,
])

<div
    {{ $attributes->merge(['class' => 'h-[176px] bg-white dark:bg-gray-800 shadow rounded-md px-6 py-4 flex justify-between']) }}>
    <div>
        <h3 class="text-lg md:text-xl font-bold text-gray-800 dark:text-white">
            {{ $data['name'] }}
        </h3>
        <p class="mt-1 text-white">
            {{ \Illuminate\Support\Number::currency($data['balance'], in: 'IDR') }}
        </p>
    </div>
    <div class="flex items-end">
        <div class="text-sm text-gray-800 dark:text-gray-500">more info</div>
    </div>
</div>
