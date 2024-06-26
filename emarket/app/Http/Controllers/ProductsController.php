<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller{
    public function index(){
        $produits  = Products::latest()->take(10)->get();
        return view('index',[
            'produits'=>$produits
        ]);
    }
    public function produits(){
        $produits = Products::all();
        return view('produits',[
            'produits'=>$produits,
            'add'=>false
        ]);
    }
    public function info($id){
        $produit = Products::where('id', $id)->first();
        return view('details',compact('produit'));
    }
    public function add(Request $request){
        Products::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'description'=>$request->description,
            'categorie'=>$request->categorie,
            'quantite'=>$request->qte
            
        ]);
        return redirect()->route('produits');
    }   
    public function supprimer($id){
        $produit = Products::where('id', $id)->first();
        $produit->delete();
        return redirect()->route('produits');
    }
    public function formUpdate($id){
        $produit = Products::where('id', $id)->first();
        return view('formulaireModifier',[
            'produit'=>$produit
        ]);
    }
    public function modifie(Request $request){
        $produit = Products::where('id', $request->id)->first();
        $produit->update([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'description'=>$request->description,
            'categorie'=>$request->categorie,
            'quantite'=>$request->qte
        ]);
        $produit->save();
        return redirect()->route('produits');
    
    }
    public function contact(Request $request){

    }
    
    public function search(Request $request){
        $search = $request->search;
        $produits = Products::where('nom', 'like', '%'.$search.'%')->get();
        return view('produitSearch',[
            'produits'=>$produits,
            'search'=>$search
        ]);
    }
    
 
    
}
