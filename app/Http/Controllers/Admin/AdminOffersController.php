<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class AdminOffersController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers = Offer::paginate(20);
        return view('admin.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
       Offer::create($request->all());
        return redirect()->route('offers.index')->with('success', 'offer is add');
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
        $offer =Offer::find($id);
        return view('admin.offers.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);
        $offer =Offer::find($id);
        $offer->update($request->all());
        return redirect()->route('offers.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Offer::destroy($id);
        return redirect()->route('offers.index')->with('success', 'Offer removed');
    }
}
