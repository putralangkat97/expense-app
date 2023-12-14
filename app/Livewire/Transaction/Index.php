<?php

namespace App\Livewire\Transaction;

use Livewire\Component;

class Index extends Component
{
    public $accountId;
    public $transactions;

    public function mount()
    {
        if ($this->accountId) {
            $this->transactions = $this->transactions['transactions'];
        }
    }

    public function render()
    {
        return view('livewire.transaction.index');
    }
}
