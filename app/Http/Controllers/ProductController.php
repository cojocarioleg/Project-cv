<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($product)
    {
        $product = Product::where('slug', $product)->first();
        $advatages = Advantage::orderBy('id', 'desc')->take(3)->get();
        $products = Product::orderBy('id', 'desc')->take(4)->get();
        return view('web.product.index', compact('product', 'advatages', 'products'));
    }
}
