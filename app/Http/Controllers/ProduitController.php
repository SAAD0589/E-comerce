<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    public function Home(){
        //tankhod 3 mn Product ou radi Affichome f Page Test
        $produits=Produit::take(3)->get();
        return view('test',compact('produits'));
    }
    
    public function index(){
        //sta3mlna methode de pagination bach ibka it affichage b 5 b 5
        $produits=Produit::paginate(5);
            return view('AffichageProduit',compact('produits'));
        
        
    }
    public function Show($id){
        //darna find bach nhadou product li brina
        $produit=Produit::find($id);
        return view('Details',compact('produit'));
    }
}
