<?php

namespace App\Livewire\Transaction;

use App\Helpers\APIHandler;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Throwable;

class Form extends Component
{
    public $id;
    public $transaction_name;
    public $account_id;
    public $amount;
    public $date;
    public $type;
    public $remarks;

    public function mount()
    {
        if ($this->id) {
            $api_config = new APIHandler(session('user-logged-in'));
            try {
                $response = $api_config->getData("/transaction/" . $this->id);
                $this->id = $response['id'];
                $this->transaction_name = $response['transaction_name'];
                $this->account_id = $response['account']['id'];
                $this->amount = $response['amount'];
                $this->date = $response['date'];
                $this->remarks = $response['remarks'];
                $this->type = $response['type'] == "in" ? 1 : 0;
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    #[Computed]
    public function accounts()
    {
        try {
            $token_config = new APIHandler(session('user-logged-in'));
            return $token_config->getData('/account');
        } catch (Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function submit()
    {
        $validated = $this->validate([
            'transaction_name' => 'required|min:2|max:100',
            'account_id' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required',
            'remarks' => 'nullable'
        ]);

        if ($validated) {
            try {
                $validated['type'] = $this->type == 1 ? "in" : "out";
                $validated['date'] = date('Y-m-d H:i:s', strtotime($validated['date']));
                $url = "";
                $api_config = new APIHandler(session('user-logged-in'));
                if ($this->id) {
                    $url = '/transaction/' . $this->id;
                } else {
                    $url = '/transaction';
                }
                $api_config->storeData($url, $validated);
                return $this->redirectRoute('app.dashboard', navigate: true);
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    public function render()
    {
        return view('livewire.transaction.form');
    }
}
