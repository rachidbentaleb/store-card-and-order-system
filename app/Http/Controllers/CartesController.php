<?php

namespace App\Http\Controllers;

use App\Models\Carte;
use App\Models\Client;
use DB;
use Illuminate\Http\Request;

class CartesController extends Controller
{
    public function AffichageDesClients(){
        $affichage=Client::all();
        return view("Formulaire-carte")->with("carte",$affichage);
    }

    public function AffichageDesCartes(){
        $affichage=Carte::all();
        return view("Listesdescartes")->with("carte",$affichage);
    }

    public function AjoutDesCartes(Request $req){
        DB::table('cartes')->insert([
            'dateCreation' => $req->dateCreation,          
            'points' => $req->points,     
            'client_id' => $req->client_id
        ]);

        $affichage=Carte::all();
        return view("Listesdescartes")->with("carte",$affichage);
    }
}
