<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;

class AccountController extends Controller
{
    public function index()
    {
        $token_config = new APIHandler(session('user-logged-in'));
        return view('app/account/index', [
            'accounts' => $token_config->getData("/account"),
        ]);
    }

    public function show(string|int $id)
    {
        $token_config = new APIHandler(session('user-logged-in'));
        return view('app/account/view', [
            'account' => $token_config->getData("/account/{$id}"),
            'transactions' => $token_config->getData("/account/{$id}/transaction")
        ]);
    }

    public function create(string|int $id = null)
    {
        if ($id) {
            $token_config = new APIHandler(session('user-logged-in'));
            $account = $token_config->getData("/account/{$id}");
        }
        return view('app/account/create', [
            'account' => $account ?? null,
        ]);
    }
}
