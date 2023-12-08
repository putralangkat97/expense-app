<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('app/transaction/index');
    }

    public function show(string|int $id)
    {
        return view('app/transaction/view', [
            'id' => $id
        ]);
    }

    public function create(string|int $id = null)
    {
        return view('app/transaction/create', [
            'id' => $id ?? null,
        ]);
    }
}
