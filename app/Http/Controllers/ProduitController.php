<?php

namespace App\Http\Controllers;

use App\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //for ($i = 0; $i < 6; $i += 1) {
        //     $produits[] = Produit::fake();
        //}
        $produits = Produit::all();
        return view("bistro.menu", ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produit = Produit::fake();
        return view("admin.create", ['produit' => $produit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('annuler')) {
            return redirect()->action("ProduitController@accueil");
        }
        $validatedData = $request->validate(Recette::$rules);

        $produit = new Produit();
        $donnees = $request->all();
        $produit->fill($donnees);
        $produit->save();
        return redirect()->action("ProduitController@show", $produit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        return view("bistro.fiche", ['produit' => $produit]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        return view("admin.edit", ['produit' => $produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit)
    {
        if ($request->has('annuler')) {
            return redirect()->action("ProduitController@show", $produit);
        }
        $validatedData = $request->validate(Produit::$rules);

        $donnees = $request->all();
        $produit->fill($donnees);
        $produit->save();
        return redirect()->action("ProduitController@show", $produit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        if ($request->has('annuler')) {
            return redirect()->action("ProduitController@show", $produit);
        }
        $recette->delete();
        return redirect()->action("ProduitController@index");
    }

    public function login()
    {
        return view("admin.login");
    }
    
    public function accueil()
    {
        $count = Produit::all()->count();
        return view("admin.index", ['count' => $count]);
    }

    public function liste()
    {
        $produits = Produit::all();
        return view("admin.liste", ['produits' => $produits]);
    }
}
