{{-- desktop --}}
<div class="hidden md:block relative" x-data="{ activeMenu: false }">
    <button id="" type="button"
        class="inline-flex justify-center items-center gap-2 font-medium text-gray-800 dark:text-white shadow-sm transition-all text-sm"
        @click="activeMenu = !activeMenu">
        <img class="inline-block h-12 w-12 rounded-full shadow-sm"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
    </button>
    <div class="absolute transition-[opacity,margin] duration-[0.1ms] w-32 z-10 mt-2 top-12 end-0 bg-white dark:bg-gray-800 shadow-lg p-2 rounded-md"
        x-show="activeMenu" @click.outside="activeMenu = false" x-transition:leave.duration.200ms
        x-transition:enter.duration.200ms>
        <a class="flex items-center gap-x-3.5 py-1 px-3 text-sm text-gray-800 dark:text-gray-200 dark:hover:text-white"
            href="{{ route('logout') }}">
            Logout
        </a>
    </div>
</div>

{{-- mobile --}}
<div class="md:hidden relative -mb-2.5" x-data="{ activeMenu: false }">
    <button id="" type="button"
        class="inline-flex justify-center items-center gap-2 font-medium text-gray-800 dark:text-white shadow-sm transition-all text-sm"
        @click="activeMenu = !activeMenu">
        <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
            alt="Image Description" />
    </button>
    <div class="absolute transition-[opacity,margin] duration-[0.1ms] w-32 z-10 mt-2 top-8 end-0 bg-white dark:bg-gray-800 shadow-lg p-2 rounded-md"
        x-show="activeMenu" @click.outside="activeMenu = false" x-transition:leave.duration.200ms
        x-transition:enter.duration.200ms>
        {{-- <x-nav-link href="{{ route('app.dashboard') }}" value="Dashboard"
            active="{{ request()->routeIs('app.dashboard') }}" /> --}}
        {{-- <x-nav-link href="{{ route('app.account.index') }}" value="Account"
            active="{{ request()->routeIs('app.account*') }}" /> --}}
        {{-- <x-nav-link href="{{ route('app.transaction.index') }}" value="Transaction"
            active="{{ request()->routeIs('app.transaction*') }}" /> --}}
        <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 dark:text-gray-200 dark:hover:text-white"
            href="{{ route('logout') }}">
            Logout
        </a>
    </div>
</div>
