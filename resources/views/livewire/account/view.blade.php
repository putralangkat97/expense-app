<div class="">
    <div class="flex justify-between items-center">
        <x-heading-1 value="Account Detail" />
        <x-text-link href="{{ route('app.account.edit', $account['id']) }}" value="Edit" class="text-sm ml-2" />
    </div>
    <x-account-card class="w-full mt-2" :data="$account" />
</div>
