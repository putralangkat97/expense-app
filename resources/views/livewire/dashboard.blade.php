<div class="">
    <x-heading-1 value="Account List" />
    <div class="max-w-[732px] flex gap-4 overflow-x-auto mt-2">
        <a href="{{ route('app.account.create') }}" wire:navigate.hover>
            <div
                class="h-[176px] w-40 rounded-md bg-transparent border-2 border-gray-800 flex mx-auto justify-center items-center">
                <span class="text-gray-800 text-7xl">+</span>
            </div>
        </a>
        @foreach ($accounts as $account)
            <a href="{{ route('app.account.show', $account['id']) }}" wire:navigate.hover>
                <x-account-card class="w-96" :data="$account" />
            </a>
        @endforeach
    </div>
</div>
