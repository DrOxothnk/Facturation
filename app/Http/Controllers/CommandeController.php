<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes=Commande::all();

        return view('Commande.index',compact('commandes'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commande/create');
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
            'date' => 'required|date',
            'total' => 'required|'

        ]);
        $produit = Commande::create([
            'date' => $request->date,
            'total' => $request->total

        ]);

        $produit->save();
        //$categories=Categorie::create($request->all());

        return redirect()->route('admin.commandes')->with('success','commande Has Been Created successfully');
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
    public function edit(Commande $commande)
    {
        return view('commande.edit',compact('commande'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Commande $commande)
    {


        $request->validate([
            'date' => 'required',
            'total' => 'required'

        ]);
        $commande = Commande::find($commande->id);
        $commande->date = $request->date;
        $commande->total = $request->total;
        $commande->save();
        return redirect()->route('admin.commandes')->with('success','commande Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy(Commande $commande)
     {
         $commande->delete();
         return redirect()->back()->with('success','commande Has Been Deleted successfully');
     }
}
