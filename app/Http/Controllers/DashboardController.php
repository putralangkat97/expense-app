<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $token_config = new APIHandler();
        return view('app/dashboard', [
            'accounts' => $token_config->getData("/account"),
            'transactions' => $token_config->getData("/transaction"),
            'dashboardPage' => true
        ]);
    }
}
