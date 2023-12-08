<?php

namespace App\Livewire;

use App\Helpers\APIHandler;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Throwable;

class Dashboard extends Component
{
    #[Computed]
    public function accounts()
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            return $token_config->getData('/account');
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    #[Computed]
    public function transactions()
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            return $token_config->getData('/transaction');
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
