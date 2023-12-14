<?php

namespace App\Livewire\Transaction;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class Form extends Component
{
    public $transaction;
    public $accounts;
    public $id;
    public $transaction_name;
    public $account_id;
    public $amount;
    public $date;
    public $type;
    public $remarks;

    public function mount()
    {
        if ($this->transaction) {
            $this->id = $this->transaction['id'];
            $this->transaction_name = $this->transaction['transaction_name'];
            $this->account_id = $this->transaction['account']['id'];
            $this->amount = $this->transaction['amount'];
            $this->date = $this->transaction['date'];
            $this->remarks = $this->transaction['remarks'];
            $this->type = $this->transaction['type'] == "in" ? 1 : 0;
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
                    $url = "/transaction/{$this->id}";
                } else {
                    $url = "/transaction";
                }
                $data = $api_config->storeData($url, $validated);
                return $this->redirectRoute('app.transaction.show', ['id' => $data['id']], navigate: true);
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
