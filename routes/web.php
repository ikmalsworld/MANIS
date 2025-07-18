<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

Route::get('/', [StockController::class, 'index'])->name('home');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::post('/stocks/adjust/{id}', [StockController::class, 'adjust'])->name('stocks.adjust');
Route::delete('/stocks/{id}', [StockController::class, 'destroy'])->name('stocks.destroy');



