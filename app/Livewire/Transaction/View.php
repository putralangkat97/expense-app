<?php

namespace App\Livewire\Transaction;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class View extends Component
{
    public $transaction;

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
