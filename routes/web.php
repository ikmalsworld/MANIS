<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
// use App\Http\Controllers\TransactionController;

Route::get('/', [StockController::class, 'index'])->name('home');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::post('/stocks/adjust/{id}', [StockController::class, 'adjust'])->name('stocks.adjust');
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->name('stocks.destroy');
//Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');


