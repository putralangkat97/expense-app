@props([
    'disabled' => false,
    'checked' => false
])

<input {{ $disabled ? 'disabled' : '' }} type="radio" {{ $attributes->merge(['class' => 'mr-1 shrink-0 h-4 w-4 text-teal-500 focus:ring-teal-500']) }} />
