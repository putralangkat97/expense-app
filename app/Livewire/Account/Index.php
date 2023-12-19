<?php

namespace App\Livewire\Account;

use Livewire\Component;

class Index extends Component
{
    public $accounts;

    public function render()
    {
        return view('livewire.account.index');
    }
}
