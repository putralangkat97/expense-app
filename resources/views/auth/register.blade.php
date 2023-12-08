<x-guest-layout>
    <livewire:auth.register />
    <span class="text-gray-800 dark:text-white text-sm">
        Have an account?&nbsp;<x-text-link href="{{ route('login') }}" value="Login" />
    </span>
</x-guest-layout>
