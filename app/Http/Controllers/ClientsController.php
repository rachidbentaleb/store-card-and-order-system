<?php

namespace App\Http\Controllers;

use App\Models\Client;
use DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function AffichageDesClients(){
        $affichage=Client::all();
        return view("Listesdesclients")->with("clients",$affichage);
    }

    public function AjoutDesClients(Request $req){
        DB::table('clients')->insert([
            'nom' => $req->nom,          
            'prenom' => $req->prenom,     
            'sexe' => $req->sexe,  
            'ville' => $req->ville
        ]);

        $affichage=Client::all();
        return view("Listesdesclients")->with("clients",$affichage);
    }


    public function ListClients(Request $req)
    {
        $id = $req->query('id'); 
        $client = Client::with('carte')->find($id);
        
        return view('Listcartes', compact('client'));
    }
}
