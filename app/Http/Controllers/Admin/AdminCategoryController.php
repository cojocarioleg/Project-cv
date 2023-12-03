<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(20);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = $request->all();
        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'categoires' );

        Category::create($data);
        return redirect()->route('categories.index')->with('success', 'Category is add');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);
        $category = Category::find($id);
//
        $data = $request->all();
        $data['image'] = ImageHelper::uploadImage($request, $nameFolder = 'categoires', $category->image );
        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category is updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id, Request $request)
    {
        $category = Category::find($id);
        Storage::delete($category->image);
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'the category is removed');
    }
}
