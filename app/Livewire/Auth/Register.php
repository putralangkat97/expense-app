<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Throwable;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|min:2|max:100',
            'password' => 'required|confirmed'
        ]);

        if ($validated) {
            try {
                $url = env('API_URL');
                $response = Http::acceptJson()
                    ->asForm($validated)
                    ->post("{$url}/register");

                if ($response->successful()) {
                    dd($response->json());
                }
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
