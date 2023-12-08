<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class View extends Component
{
    public $id;
    public $account;

    public function mount()
    {
        if ($this->id) {
            try {
                $token_config = new APIHandler(session('user-logged-in'));
                $this->account = $token_config->getData('/account/' . $this->id);
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    public function render()
    {
        return view('livewire.account.view');
    }
}
