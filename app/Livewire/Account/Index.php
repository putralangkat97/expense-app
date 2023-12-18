<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class Index extends Component
{
    public $accounts;

    public function render()
    {
        return view('livewire.account.index');
    }
}
