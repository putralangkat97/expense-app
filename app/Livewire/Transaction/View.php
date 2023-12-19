<?php

namespace App\Livewire\Transaction;

use App\Helpers\APIHandler;
use Livewire\Attributes\Url;
use Livewire\Component;
use Throwable;

class View extends Component
{
    #[Url]
    public $transactionPage, $accountPage;
    // public $accountPage;

    public $transaction;
    public $route;
    public $previousUrl;

    public function mount()
    {
        if ($this->transactionPage) {
            $this->route = 'app.transaction.index';
        } else if ($this->accountPage) {
            $this->route = 'app.account.show';
        } else {
            $this->route = 'app.dashboard';
        }
    }

    public function delete($id)
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            $token_config->deleteData("/transaction/{$id}");
            return $this->redirectRoute('app.dashboard', navigate: true);
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.transaction.view');
    }
}
