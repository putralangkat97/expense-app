<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

Route::middleware(['api-web'])
    ->group(function () {
        Route::get('/', function () {
            return view('auth/login');
        })->name('login');

        Route::get('/register', function () {
            return view('auth/register');
        })->name('register');
    });


Route::middleware(['api-guard'])->get('/logout', function () {
    session()->flush();
    Cache::flush();
    return redirect()->route('login');
})->name('logout');

Route::middleware(['api-guard'])
    ->prefix('app')
    ->name('app.')
    ->group(function () {
        Route::controller(\App\Http\Controllers\DashboardController::class)
            ->prefix('dashboard')
            ->group(function () {
                Route::get('/', 'dashboard')->name('dashboard');
            });
        Route::controller(\App\Http\Controllers\AccountController::class)
            ->prefix('account')
            ->group(function () {
                Route::get('/', 'index')->name('account.index');
                Route::get('/new', 'create')->name('account.create');
                Route::get('/view/{id}', 'show')->name('account.show');
                Route::get('/edit/{id}', 'create')->name('account.edit');
            });
        Route::controller(\App\Http\Controllers\TransactionController::class)
            ->prefix('transaction')
            ->group(function () {
                Route::get('/', 'index')->name('transaction.index');
                Route::get('/new/', 'create')->name('transaction.create');
                Route::get('/view/{id}', 'show')->name('transaction.show');
                Route::get('/edit/{id}', 'create')->name('transaction.edit');
            });
    });
