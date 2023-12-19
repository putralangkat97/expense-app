<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;
use Illuminate\Support\Facades\Cache;

class AccountController extends Controller
{
    public function index()
    {
        $token_config = new APIHandler();
        $accounts = null;
        if (Cache::has('accounts')) {
            $accounts = Cache::get('accounts');
        } else {
            $accounts = $token_config->getData("/account");
            Cache::put('accounts', $accounts, 900);
        }

        return view('app/account/index', [
            'accounts' => $accounts,
        ]);
    }

    public function show(string|int $id)
    {
        $token_config = new APIHandler();
        return view('app/account/view', [
            'account' => $token_config->getData("/account/{$id}"),
            'transactions' => $token_config->getData("/account/{$id}/transaction"),
            'accountPage' => true,
        ]);
    }

    public function create(string|int $id = null)
    {
        if ($id) {
            $token_config = new APIHandler();
            $account = $token_config->getData("/account/{$id}");
        }
        return view('app/account/create', [
            'account' => $account ?? null,
            'previousUrl' => url()->previous()
        ]);
    }
}
