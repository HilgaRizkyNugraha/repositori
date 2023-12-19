<?php

namespace App\Http\Controllers;

use App\Models\Repositori;
use Illuminate\Http\Request;

class Repositoricontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repositories = Repositori::all();
        $data = [
            'repositories' => $repositories
        ];
        return view('repositori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repositori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'description' => 'required',
        ]);
        $new = Repositori::create($request -> all());
        return redirect()->route('repositori.index')->with('success', $new->title . ' added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $repositori = Repositori::find($id); 
        return view('repositori.edit', compact('repositori'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //dd($request->all());
        $repositories = Repositori::find($id);
        $repositories->update($request->all());
        return redirect()->route('repositori.index')->with('success', $repositories->title . ' updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $repositories = Repositori::find($id);
        $repositories->delete();
        return redirect()->route('repositori.index')->with('success', $repositories->title . ' deleted successfully');
    }
}
