<div class="">
    <div class="flex justify-between items-center">
        <x-heading-1 value="Account Detail" />
        <x-text-link href="{{ route('app.dashboard') }}" value="Back" class="text-sm ml-2" />
    </div>
    <x-account-list class="w-full mt-2" :data="$account" />
</div>
