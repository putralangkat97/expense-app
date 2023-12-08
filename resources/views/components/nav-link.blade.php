@props([
    'href' => '',
    'value' => '',
    'active' => false,
])

<?php
    $class = $active == 1 ? "bg-teal-600 text-white" : "bg-transparent dark:text-white";
?>

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'flex items-center gap-x-3.5 py-2 px-3 text-sm rounded-md ' . $class]) }} wire:navigate.hover>
    {{ $value }}
</a>
