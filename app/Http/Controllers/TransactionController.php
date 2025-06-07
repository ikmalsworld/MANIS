<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::with('product')->latest();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $transactions = $query->get();
        return view('transactions', compact('transactions'));
    }
}
