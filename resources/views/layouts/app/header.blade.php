<div class="max-w-3xl flex justify-between items-center mx-auto px-4 py-8">
    <div class="flex">
        <h1 class="text-xl md:text-4xl text-teal-500">
            <a href="{{ route('app.dashboard') }}" wire:navigate.hover>{{ env('APP_NAME', 'anggitutomo.com') }}</a>
        </h1>
        <x-desktop-menu />
    </div>
    <x-mobile-menu />
</div>
