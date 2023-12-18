<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Livewire\Component;
use Throwable;

class Form extends Component
{
    public $id;
    public $name;
    public $description;
    public $amount;
    public $account;

    public function mount()
    {
        if ($this->account) {
            $this->id = $this->account['id'];
            $this->name = $this->account['name'];
            $this->description = $this->account['description'];
            $this->amount = $this->account['balance'];
        }
    }

    public function submit()
    {
        $validated = $this->validate([
            'name' => 'required',
            'description' => 'nullable',
            'amount' => 'required|numeric',
        ]);

        if ($validated) {
            try {
                $url = "";
                $api_config = new APIHandler(session('user-logged-in'));
                if ($this->id) {
                    $url = "/account/{$this->id}";
                } else {
                    $url = "/account";
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
        return view('livewire.account.form');
    }
}
