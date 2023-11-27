<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::paginate(20);
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Type::create($request->all());
        return redirect()->route('types.index')->with('success', 'type is add');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = Type::find($id);
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $type = Type::find($id);
        $type->update($request->all());
        return redirect()->route('types.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Type::destroy($id);
        return redirect()->route('types.index')->with('success', 'type removed');
    }
}
