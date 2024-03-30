<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contatto;
use App\Http\Requests\StoreContattoRequest;
use App\Http\Requests\UpdateContattoRequest;
use App\Http\Controllers\Controller;

class ContattoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contatto = Contatto::all();
        return view('admin.contatto.index', compact('contatto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContattoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contatto $contatto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contatto $contatto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContattoRequest $request, Contatto $contatto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contatto $contatto)
    {

        $contatto->delete();
        return redirect()->route('admin.contatto.index');
    }
}
