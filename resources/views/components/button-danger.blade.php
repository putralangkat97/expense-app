<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-red-600 dark:bg-red-700 hover:bg-red-700 dark:hover:bg-red-800 active:bg-red-800 dark:active:bg-red-900 rounded-md text-white py-3 px-4 font-medium']) }}
>
    {{ $slot }}
</button>
