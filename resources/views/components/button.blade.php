<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-teal-600 hover:bg-teal-700 active:bg-teal-800 rounded-md text-white py-3 px-4 font-medium']) }}
>
    {{ $slot }}
</button>
