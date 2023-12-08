@props([
    'type' => null,
    'data' => null,
])

<?php
$arrow_class = '';
$text_class = '';
if ($type == 'in') {
    $text_class = 'text-green-400';
} else {
    $text_class = 'text-red-400';
}
?>

<div {{ $attributes->merge(['class' => 'bg-gray-800 rounded-md px-6 py-4 w-full']) }}>
    <div class="flex justify-between">
        <div class="">
            <h3 class="text-lg font-medium text-gray-800 dark:text-white">{{ $data['transaction_name'] }}</h3>
            <p class="text-gray-500">{{ $data['account']['name'] }}</p>
        </div>
        <div class="flex items-center gap-2">
            @if ($type == 'in')
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="{{ 'icon icon-tabler icon-tabler-arrow-narrow-down w-8 h-8 text-green-600 dark:text-green-500' }}"
                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M16 15l-4 4" />
                    <path d="M8 15l4 4" />
                </svg>
            @else
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="{{ 'icon icon-tabler icon-tabler-arrow-narrow-up w-8 h-8 text-red-600 dark:text-red-500' }}"
                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M16 9l-4 -4" />
                    <path d="M8 9l4 -4" />
                </svg>
            @endif
            <span class={{ $text_class }}>{{ $type == 'in' ? '+' : '-' }}
                {{ \Illuminate\Support\Number::currency($data['amount'], in: 'IDR') }}</span>
        </div>
    </div>
</div>
