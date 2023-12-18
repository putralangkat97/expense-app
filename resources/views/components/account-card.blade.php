@props([
    'image' => '',
    'data' => null,
    'dashboard' => false,
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
    @if (!$dashboard)
        <div class="flex items-center self-end">
            <a href="{{ route('app.account.edit', $data['id']) }}">
                <span
                    class="text-sm text-gray-800 dark:text-gray-500 dark:hover:text-gray-300 transition-hover duration-200">Edit</span>
            </a>
            &nbsp;<span class="dark:text-gray-500">|</span>&nbsp;
            <a href="{{ route('app.account.edit', $data['id']) }}" class="flex items-end">
                <span
                    class="text-sm text-gray-800 dark:text-gray-500 dark:hover:text-gray-300 transition-hover duration-200">Delete</span>
            </a>
        </div>
    @else
        <div class="flex items-end">
            <span class="text-sm text-gray-800 dark:text-gray-500">more Info</span>
        </div>
    @endif
</div>
