<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class AdminColorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::paginate(20);
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Color::create($request->all());
        return redirect()->route('colors.index')->with('success', 'Color is add');
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
        $color = Color::find($id);
        return view('admin.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $color = Color::find($id);
        $color->update($request->all());
        return redirect()->route('colors.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Color::destroy($id);
        return redirect()->route('colors.index')->with('success', 'Color removed');
    }
}
