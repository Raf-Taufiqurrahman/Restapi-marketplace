<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);

        return view('admin.stock.index', compact('products'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update(['stock' => $request->stock]);

        return back();
    }
}
