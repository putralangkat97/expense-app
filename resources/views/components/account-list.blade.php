@props([
    'data' => null,
])

<div {{ $attributes->merge(['class' => 'bg-gray-800 rounded-md px-6 py-4']) }} wire:loading.class="opacity-30" wire:target="delete">
    <div class="flex justify-between">
        <div class="">
            <h3 class="text-lg font-medium text-gray-800 dark:text-white">
                <x-text-link href="{{ route('app.account.show', $data['id']) }}" value="{{ $data['name'] }}" />
            </h3>
            <span class="text-gray-800 dark:text-white">{{ \Illuminate\Support\Number::currency($data['balance'], in: 'IDR') }}</span>
        </div>
        <div class="flex items-center gap-2">
            <a href="{{ route('app.account.edit', $data['id']) }}" wire:navigate.hover>
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-pencil w-6 h-6 text-gray-500 hover:text-sky-500 dark:hover:text-sky-400 transition-hover duration-200"
                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                    <path d="M13.5 6.5l4 4" />
                </svg>
            </a>
            <button wire:click="delete({{ $data['id'] }})">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-trash w-6 h-6 text-gray-500 hover:text-red-500 dark:hover:text-red-400 transition-hover duration-200"
                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 7l16 0" />
                    <path d="M10 11l0 6" />
                    <path d="M14 11l0 6" />
                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                </svg>
            </button>
        </div>
    </div>
</div>
