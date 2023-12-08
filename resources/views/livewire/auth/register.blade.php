<div class="mb-5">
    <form wire:submit="register">
        <div class="mb-3">
            <x-input-label for="name" value="Name" />
            <x-text-input type="name" wire:model="name" id="name" class="w-full mt-2" placeholder="Your name" />
        </div>
        <div class="mb-3">
            <x-input-label for="email" value="Email" />
            <x-text-input type="email" wire:model="email" id="email" class="w-full mt-2" placeholder="Email address" />
        </div>
        <div class="mb-5">
            <x-input-label for="password" value="Password" />
            <x-text-input type="password" wire:model="password" id="password" class="w-full mt-2"
                placeholder="Your password" />
        </div>
        <div class="mb-5">
            <x-input-label for="password_confirmation" value="Password Confirmation" />
            <x-text-input type="password_confirmation" wire:model="password_confirmation" id="password_confirmation" class="w-full mt-2"
                placeholder="Confirm password" />
        </div>

        <div class="mb-3">
            <x-button>Register</x-button>
        </div>
    </form>
</div>
