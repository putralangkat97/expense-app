@props([
    'href' => '',
    'value' => ''
])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'text-teal-600 hover:text-teal-500 transition-hover duration-200']) }} wire:navigate.hover>{{ $value }}</a>
