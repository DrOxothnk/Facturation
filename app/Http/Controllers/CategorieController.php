<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $categories=Categorie::all();

                return view('Categorie.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
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
                'nom' => 'required|string'
            ]);
            $produit = Categorie::create([
                'nom' => $request->nom
            ]);

            $produit->save();
            //$categories=Categorie::create($request->all());

            return redirect()->route('admin.categories')->with('success','Categorie Has Been Created successfully');
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
    public function edit(Categorie $categorie)
    {
        return view('categorie.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Categorie $categorie)
    {
        $request->validate([
            'nom' => 'required|string'

        ]);
        $categorie = Categorie::find($categorie->id);
        $categorie->nom = $request->nom;

        $categorie->save();
        return redirect()->route('admin.categories')->with('success','Categorie Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $category)
    {
        $category->delete();
        return redirect()->back()->with('success','Categorie Has Been Deleted successfully');
    }
}
