<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    //     echo 'Hell now';
    // }

    public function index()
    {
        $TousLesProduits = Produit::all();
        return view('Articles.index',compact('TousLesProduits'));
    }   

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tatyben form bach tcreate new resource
        return view('Articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //tan3emmru fiha dkchi
        echo $request->title; 
        echo $request->content;
        echo $request->author;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //tatbyyen resource li exacte b specified id 
        // return "je suis dans show et l'id est : " . $id;

        $p = Produit::findOrFail($id);

        return view('Articles.shows', ['unProduit' => $p]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Prod = Produit::findOrFail($id);
        return view( 'Articles.edit', compact('Prod'));
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
