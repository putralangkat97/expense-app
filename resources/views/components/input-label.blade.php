@props([
    'for' => $for ?? '',
    'value' => $value ?? '',
])

<label for="{{ $for }}" class="text-gray-800 dark:text-white">{{ $value }}</label>
