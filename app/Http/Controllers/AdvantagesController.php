<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use Illuminate\Http\Request;

class AdvantagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $advantages = Advantage::paginate(20);
        return view('admin.advantages.index', compact('advantages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.advantages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'advantage_1' => 'required',
            'advantage_2' => 'required',
            'advantage_3' => 'required',
            'advantage_4' => 'required',
            'icon' => 'required'
        ]);
        Advantage::create($request->all());
        return redirect()->route('advantages.index')->with('success', 'advantage is add');
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
        $advantage = Advantage::find($id);
        return view('admin.advantages.edit', compact('advantage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'advantage_1' => 'required',
            'advantage_2' => 'required',
            'advantage_3' => 'required',
            'advantage_4' => 'required',
            'icon' => 'required',
        ]);
        $advantage = Advantage::find($id);
        $advantage->update($request->all());
        return redirect()->route('advantages.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Advantage::destroy($id);
        return redirect()->route('advantages.index')->with('success', 'advantage removed');
    }
}
