<?php

namespace App\Http\Controllers;

use App\Models\Panier;

use App\Models\Produit;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        //sta3malna merthod Query Builder bach nakhdo data mn produit ou panier
        //darna jointure bach njm3o 2deux table dyalna mn b3ad khdina koulchi dyal product ou panier
        //dyal user li connecte (Auth::user())  ou siftnahom l panier
        $user = Auth::user()->id;
        $produits =DB::table('paniers')
        ->join('produits','paniers.id_Produit','produits.id_Product')
        ->select('produits.*','paniers.*')
        ->where('paniers.id_user',$user)
        ->get();
        return view('Panier',compact('produits'));
    }
   public function AjoutePanier(Request $request){
    //khdna la quantite li tatjina mn details ou darbna b prix bach nakhdou total de pruduit
    //ou mn b3d thakakna mn produit wach kayn f table panier
    //fi halat malkahch rad dir insert li f stare (34,35,36,37,38)
    //ou halte la kante produit f table panier zadna ir f quantite dyalou ou mn total produit 
    $total=$request->Prix * $request->input('quantity');
    $produit=Panier::where('id_Produit',$request->produit)->get();
    if($produit->count()==0){
        $panier=new Panier();
        $panier->id_Produit=$request->produit;
        $panier->id_user=Auth::user()->id;
        $panier->quantité=$request->input('quantity');
        $panier->TotalPrix=$total;
        $panier->save();
    }else{
        foreach($produit as $item){
            $item->quantité=$item->quantité + $request->input('quantity');
            $item->TotalPrix +=$total;
            $item->save();
        }
    }
    return redirect()->route('view', ['id' => $request->produit]);
}
}
