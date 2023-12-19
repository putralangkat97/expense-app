<?php

namespace App\Livewire\Transaction;

use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    public $accountId;
    public $transactions;
    public $previousUrl;
    public $param = [];

    #[Url]
    public $dashboardPage, $accountPage;

    public function mount()
    {
        if ($this->accountId) {
            $this->transactions = $this->transactions['transactions'];
        }

        if ($this->dashboardPage) {
            $this->param = 'dashboardPage';
        }

        if ($this->accountPage) {
            // dd($this->accountPage);
            $this->param = 'accountPage';
        }
    }

    public function render()
    {
        return view('livewire.transaction.index');
    }
}
