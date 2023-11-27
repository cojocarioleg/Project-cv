<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminSizesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::paginate(20);
        return view('admin.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
       Size::create($request->all());
        return redirect()->route('sizes.index')->with('success', 'size is add');
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
        $size =Size::find($id);
        return view('admin.sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $size =Size::find($id);
        $size->update($request->all());
        return redirect()->route('sizes.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Size::destroy($id);
        return redirect()->route('sizes.index')->with('success', 'size removed');
    }
}
