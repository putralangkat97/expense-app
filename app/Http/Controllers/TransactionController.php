<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;
use Illuminate\Support\Facades\Cache;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = null;
        $token_config = new APIHandler();

        if (Cache::has('transactions')) {
            $transactions = Cache::get('transactions');
        } else {
            $transactions = $token_config->getData("/transaction");
            Cache::put('transactions', $transactions, 900);
        }

        return view('app/transaction/index', [
            'transactions' => $transactions,
            'accountPage' => request()->query('accountPage') ?? null,
            'accountId' => request()->query('accountId') ?? null,
        ]);
    }

    public function show(string|int $id)
    {
        $token_config = new APIHandler();
        return view('app/transaction/view', [
            'transaction' => $token_config->getData("/transaction/{$id}"),
            'previousUrl' => url()->previous(),
        ]);
    }

    public function create(string|int $id = null)
    {
        $token_config = new APIHandler();
        if ($id) {
            $transaction = $token_config->getData("/transaction/{$id}");
        }
        $accounts = $token_config->getData("/account");
        return view('app/transaction/create', [
            'transaction' => $transaction ?? null,
            'accounts' => $accounts,
            'previousUrl' => !$id ? url()->previous() : null,
        ]);
    }
}
