<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
        ]);
        return redirect()->route('home');
    }

    public function adjust(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = (int) $request->quantity;
        $action = $request->action;

        if ($action === 'add') {
            $product->quantity += $quantity;
            $category = 'penambahan';
        } elseif ($action === 'sold') {
            $product->quantity -= $quantity;
            $category = 'terjual';
        } elseif ($action === 'return') {
            $product->quantity -= $quantity;
            $category = 'retur';
        } else {
            return back()->withErrors(['Invalid action']);
        }

        $product->save();

        // Transaction::create([
        //     'product_id' => $product->id,
        //     'quantity' => $quantity,
        //     'category' => $category,
        // ]);

        return redirect()->route('home');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('home');
    }
}
