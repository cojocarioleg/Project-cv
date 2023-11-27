<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Color;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Size;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::with(
            'category',
            'colors',
            'offers',
            'sizes',
            'types',
        )->paginate(6);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $colors = Color::pluck('title', 'id')->all();
        $sizes = Size::pluck('title', 'id')->all();
        $offers = Offer::pluck('title', 'id')->all();
        $types = Type::pluck('title', 'id')->all();

        return view('admin.products.create', compact(
            'categories',
            'colors',
            'sizes',
            'offers',
            'types'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'products');
        $product = Product::create($data);
        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);
        $product->types()->sync($request->types);
        $product->offers()->sync($request->offers);

        return redirect()->route('products.index')->with('success', 'Product is add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $colors = Color::pluck('title', 'id')->all();
        $sizes = Size::pluck('title', 'id')->all();
        $offers = Offer::pluck('title', 'id')->all();
        $types = Type::pluck('title', 'id')->all();
        return view('admin.products.edit', compact(
            'product',
            'categories',
            'colors',
            'sizes',
            'offers',
            'types'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StoreProductRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->all();


        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'products', $product->image);

        $product->update($data);
        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);
        $product->types()->sync($request->types);
        $product->offers()->sync($request->offers);

        return redirect()->route('products.index')->with('success', 'Product is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->tags()->sync([]);
        Storage::delete($product->thumbnail);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Статья удалена');
    }
}
