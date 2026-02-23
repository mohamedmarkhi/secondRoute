<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        echo 'Hell now';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //twjjed l form li ghan3emmruha
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //tan3emmru fiha dkchi
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tatbyyen resource li exacte b specified id 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //tatmodifier whd i id unique (tayemchi l update(next step) machi taytenregistra f DB)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //tatakhed dkchi li tmodifya f 'edit' bach nseftuh l DB) 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete specified by id
    }
}
