<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Network::paginate(20);
        return view('admin.networks.index', compact('networks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.networks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required'
        ]);
        Network::create($request->all());
        return redirect()->route('networks.index')->with('success', 'network is add');
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
        $network =Network::find($id);
        return view('admin.networks.edit', compact('network'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);
        $network =Network::find($id);
        $network->update($request->all());
        return redirect()->route('networks.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Network::destroy($id);
        return redirect()->route('networks.index')->with('success', 'network removed');
    }
}
