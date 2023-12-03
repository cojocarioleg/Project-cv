<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminImagesController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = ImageProduct::with('product')->paginate(10);
        return view('admin.images.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::pluck('title', 'id')->all();
        return view('admin.images.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image',
            'product_id' => 'required|integer',
        ]);

        $data = $request->all();
        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'productImages' );

        ImageProduct::create($data);
        return redirect()->route('images.index')->with('success', 'image is add');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $image = ImageProduct::find($id);
        $products = Product::pluck('title', 'id')->all();
        return view('admin.images.edit', compact('image', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image',
            'product_id' => 'required|integer',
        ]);
        $image = ImageProduct::find($id);
        $data = $request->all();
        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'productImages', $image->image );
        $image->update($data);
        return redirect()->route('images.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = ImageProduct::find($id);
        Storage::delete($image->image);
        $image->delete();
        return redirect()->route('images.index')->with('success', 'image removed');
    }
}
