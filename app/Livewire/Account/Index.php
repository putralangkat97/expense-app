<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class Index extends Component
{
    public $accounts;

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
