<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
    $products = Product::all();

    return view('products.index', [
        'items' => $products
    ]);
    }
    public function store(Request $request) 
    {
        Product::create([
            'name' => $request->name123,
            'price' => $request->price123
        ]);
        return redirect('/products');
    }
}
