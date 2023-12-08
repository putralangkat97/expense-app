@props([
    'href' => '',
])

<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'w-full bg-teal-600 hover:bg-teal-700 active:bg-teal-800 rounded-md text-white py-3 px-4 font-medium']) }}
    wire:navigate.hover
>
    {{ $slot }}
</a>
