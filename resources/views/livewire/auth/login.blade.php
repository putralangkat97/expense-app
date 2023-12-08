<div class="mb-5">
    <form wire:submit="login">
        <div class="mb-3">
            <x-input-label for="email" value="Email" />
            <x-text-input type="email" wire:model="email" id="email" class="w-full mt-2" placeholder="Email address" />
        </div>
        <div class="mb-5">
            <x-input-label for="password" value="Password" />
            <x-text-input type="password" wire:model="password" id="password" class="w-full mt-2"
                placeholder="Your password" />
        </div>

        <div class="mb-3">
            <x-button>Login</x-button>
        </div>
    </form>
</div>
