<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $advantages = Advantage::orderBy('id', 'desc')->take(4)->get();
        $products = Product::all();
        $about = About::first();
        return view('web.home.index', compact('advantages', 'products', 'about'));
    }
}
