<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $accounts = null;
        $transactions = null;
        $token_config = new APIHandler();

        if (Cache::has('accounts')) {
            $accounts = Cache::get('accounts');
        } else {
            $accounts = $token_config->getData("/account");
            Cache::put('accounts', $accounts, 900);
        }

        if (Cache::has('transactions')) {
            $transactions = Cache::get('transactions');
        } else {
            $transactions = $token_config->getData("/transaction");
            Cache::put('transactions', $transactions, 900);
        }

        return view('app/dashboard', [
            'accounts' => $accounts,
            'transactions' => $transactions,
            'dashboardPage' => true
        ]);
    }
}
