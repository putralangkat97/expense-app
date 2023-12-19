<?php

namespace App\Livewire\Transaction;

use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    public $accountId;
    public $transactions;
    public $previousUrl;

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
