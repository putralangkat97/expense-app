<div class="px-2 hidden md:flex md:gap-4 ml-10">
    <x-nav-link href="{{ route('app.dashboard') }}" value="Dashboard" active="{{ request()->routeIs('app.dashboard') }}" />
    <x-nav-link href="{{ route('app.account.index') }}" value="Account" active="{{ request()->routeIs('app.account*') }}" />
    <x-nav-link href="{{ route('app.transaction.index') }}" value="Transaction" active="{{ request()->routeIs('app.transaction*') }}" />
</div>
