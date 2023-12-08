<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Throwable;

class Index extends Component
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

    public function delete($id)
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            $token_config->deleteData("/account/{$id}");
            unset($this->accounts);
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.account.index');
    }
}
