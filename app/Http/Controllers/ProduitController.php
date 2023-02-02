<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
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
           //select * from prodiuts;
            // $produits=Produit::all();
             //pour avoir les produits et les categories y lié (jointure)
      $produits=Produit::with('categories')->get();
            //categorie : nom du fonction dans model produit
            //pour afficher le contenue de la requete
            //dd($produits);
            return view('Produit.index',compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categorie::all();
       return view('Produit.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            'name' => 'required|string',
            'quantite' => 'required',
            'prix' => 'required',
        ]);
        $produit = Produit::create([
            'name' => $request->name,
            'quantite' => $request->quantite,
            'prix' => $request->prix,
            'id_cat' =>$request->id_cat,
        ]);

        $produit->save();
        //$produit=Produit::create($request->all());

        return redirect()->route('admin.produits')->with('success','Produit Has Been Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //dd($produit);
        $categories=Categorie::all();
        return view('Produit.edit',compact('produit','categories')) ;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produit )
    {

       /* $produit->validate([
            'name' => 'required',
            'quantite' => 'required',
            'prix' => 'required',

        ]);

        $produit->update($request->all());

        return redirect()->route('admin.produits'); */


      $request->validate([
            'name' => 'required|string',
            'quantite' => 'required',
            'prix' => 'required',
        ]);
        $produit = Produit::find($produit->id);
        $produit->name = $request->name;
        $produit->quantite = $request->quantite;
        $produit->prix = $request->prix;
        $produit->id_cat = $request->id_cat;
        $produit->save();
        return redirect()->route('admin.produits')->with('success','Produit Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->back()->with('success','Produit Has Been Deleted successfully');
    }
}
