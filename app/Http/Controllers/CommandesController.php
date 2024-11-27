<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Commande;
use App\Models\Produit;
use DB;
use Illuminate\Http\Request;
use SoapClient;

class CommandesController extends Controller
{
    public function AffichageDesClientsetProduits(){
        $affichageClient=Client::all();
        $affichageProduit=Produit::all();
        return view("Formulaire-Commande", compact('affichageClient', 'affichageProduit'));
    }

    public function AffichageDesCommandes(){
        $affichage=Commande::all();
        return view("Listesdescommandes")->with("commandes",$affichage);
    }

    public function AjoutDesCommandes(Request $req){


    $commande = new Commande();
    $commande->dateCommande = $req->dateCommande;
    $commande->typeCommande = $req->typeCommande;
    $commande->client_id = $req->client_id;
    $commande->save();

    // Associer plusieurs produits avec leurs quantités
    $listeProduits = [];
    foreach ($req->produit_id as $index => $produit_id) {
        $listeProduits[$produit_id] = ['quantite' => $req->quantite[$index]];
    }
    $commande->produits()->attach($listeProduits);

    // Récupérer toutes les commandes avec les relations nécessaires
    $commandes = Commande::with('client', 'produits')->get();

    // Retourner la vue avec la liste des commandes
    return view('Listesdescommandes', compact('commandes'));
    }

    public function Details(Request $req){
        $id = $req->query('id');
        $commande = Commande::with('produits')->find($id);
    
        return view("Listesdetails", ["produits" => $commande->produits]);
    }
}
