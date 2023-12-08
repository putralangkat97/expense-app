<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Throwable;

class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $validated = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if ($validated) {
            try {
                $url = env('API_URL');
                $response = Http::acceptJson()
                    ->asForm()
                    ->post("{$url}/login", $validated);

                if ($response->successful()) {
                    $data = $response->json();
                    Session::put('user-logged-in', $data['results']);

                    $this->redirectRoute('app.dashboard', navigate: true);
                }
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
