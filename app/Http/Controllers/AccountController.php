<?php

namespace App\Http\Controllers;

use App\Helpers\APIHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class AccountController extends Controller
{
    public function index()
    {
        return view('app/account/index');
    }

    public function show(string|int $id)
    {
        return view('app/account/view', [
            'id' => $id ?? null
        ]);
    }

    public function create(string|int $id = null)
    {
        return view('app/account/create', [
            'id' => $id ?? null,
        ]);
    }
}
