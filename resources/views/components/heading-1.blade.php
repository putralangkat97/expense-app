@props(['value' => ''])

<h1 {{ $attributes->merge(['class' => 'text-2xl text-gray-800 dark:text-white']) }}>{{ $value }}</h1>
