<div>
    <div class="flex justify-between items-center">
        <x-heading-1 value="Account List" />
        <div class="flex items-center">
            <div wire:loading>
                <x-small-spinners />
            </div>
            <x-text-link href="{{ route('app.account.create') }}" value="Create account" class="text-sm ml-2" />
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
        @foreach ($accounts as $account)
            <x-account-list class="w-full" :data="$account" />
        @endforeach
    </div>
</div>
