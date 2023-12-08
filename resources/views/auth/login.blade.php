<x-guest-layout>
    <livewire:auth.login />
    <span class="text-gray-800 dark:text-white text-sm">
        Have an account?&nbsp;<x-text-link href="{{ route('register') }}" value="Register" />
    </span>
</x-guest-layout>
