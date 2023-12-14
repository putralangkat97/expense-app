<?php

namespace App\Livewire\Account;

use Livewire\Component;

class View extends Component
{
    public $account;

    public function render()
    {
        return view('livewire.account.view');
    }
}
