<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use DB;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function AffichageDesProduits(){
        $affichage=Produit::all();
        return view("Listesdesproduits")->with("produits",$affichage);
    }

    public function AjoutDesProduits(Request $req){
        DB::table('produits')->insert([
            'designation' => $req->designation,          
            'prix' => $req->prix,     
            'categorie' => $req->categorie
        ]);

        $affichage=Produit::all();
        return view("Listesdesproduits")->with("produits",$affichage);
    }
}
