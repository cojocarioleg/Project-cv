<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Type;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    public function index(Request $request, $category)
    {
        $paginate = 1;
        $paginate = isset($request->paginate) ? $request->paginate : 3;


        $shopCategory = Category::where('slug', $category)->first();
        $products = Product::where('category_id', $shopCategory->id)->paginate($paginate);
        $types = Type::all();
        $colors = Color::all();
        $sizes = Size::all();



        if (isset($request->orderBy)) {
            switch ($request->orderBy) {
                case "1":
                    $products = Product::where('category_id', $shopCategory->id)->orderBy('title')->paginate($paginate);
                    break;
                case "2":
                    $products = Product::where('category_id', $shopCategory->id)->orderBy('title', 'desc')->paginate($paginate);
                    break;
                case "3":
                    $products = Product::where('category_id', $shopCategory->id)->orderBy('price')->paginate($paginate);
                    break;
                case "4":
                    $products = Product::where('category_id', $shopCategory->id)->orderBy('price', 'desc')->paginate($paginate);
                    break;
                default:
                    $products = Product::where('category_id', $shopCategory->id)->paginate($paginate);
            }
        }


        if ($request->ajax()) {
            return view('web.layouts.products', ['products' => $products])->render();
        }

        return view('web.categories.index', compact('shopCategory', 'types', 'colors', 'sizes', 'products'));
    }

    public function sort(Request $request, $category)
    {
    }
}
