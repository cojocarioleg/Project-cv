<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contacts.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'grafic' => 'required',
            'phone' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success', 'contact is add');
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
        $contact = Contact::find($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'address' => 'required',
            'grafic' => 'required',
            'phone' => 'required',
        ]);
        $contact = Contact::find($id);
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('success', 'Changes saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect()->route('contacts.index')->with('success', 'contact removed');
    }
}
