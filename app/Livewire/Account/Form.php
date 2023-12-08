<?php

namespace App\Livewire\Account;

use App\Helpers\APIHandler;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Throwable;

class Form extends Component
{
    public $id;
    public $name;
    public $description;
    public $amount;

    public function mount()
    {
        if ($this->id) {
            $api_config = new APIHandler(session('user-logged-in'));
            try {
                $response = $api_config->getData("/account/" . $this->id);
                $this->id = $response['id'];
                $this->name = $response['name'];
                $this->description = $response['description'];
                $this->amount = $response['balance'];
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
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
                    $url = '/account/' . $this->id;
                } else {
                    $url = '/account';
                }
                $api_config->storeData($url, $validated);
                return $this->redirectRoute('app.account.index', navigate: true);
            } catch (Throwable $th) {
                dd($th->getMessage());
            }
        }
    }

    public function render()
    {
        if (!$this->id) {
            sleep(1);
        }
        return view('livewire.account.form');
    }
}
