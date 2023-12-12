<?php

namespace App\Livewire\Transaction;

use App\Helpers\APIHandler;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Throwable;

class Index extends Component
{
    public $accountId;

    #[Computed]
    public function transactions()
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            if ($this->accountId) {
                $data = $token_config->getData('/account/' . $this->accountId . '/transaction');
                return $data['transactions'];
            } else {
                return $token_config->getData('/transaction');
            }
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.transaction.index');
    }
}
