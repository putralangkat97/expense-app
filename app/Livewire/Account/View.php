<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class View extends Component
{
    public $account;
    public $previousUrl;

    public function delete($id)
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            $token_config->deleteData("/account/{$id}");
            return $this->redirectRoute('app.dashboard', navigate: true);
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.account.view');
    }
}
