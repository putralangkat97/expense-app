<div>
    {{-- account card list --}}
    <div class="">
        <x-heading-1 value="Account Detail" />
        <x-account-card class="w-full mt-2" :data="$account" />
    </div>

    {{-- latest transaction --}}
    {{-- <div class="mt-10">
        <div class="flex justify-between items-center">
            <x-heading-1 value="Latest Transaction" />
            <x-text-link href="#" value="View all" class="text-sm" />
        </div>
        <a href="#">
            <x-transaction-card class="mt-2 mb-4" type="out" />
        </a>
        <a href="#">
            <x-transaction-card class="mt-2 mb-4" type="in" />
        </a>
        <a href="#">
            <x-transaction-card class="mt-2 mb-4" type="in" />
        </a>
    </div> --}}
</div>
