<?php

use App\Http\Controllers\CartesController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\CommandesController;
use App\Http\Controllers\ProduitsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('Formulaire-Client', function () {
    return view('Formulaire-Client');
});
Route::get('Formulaire-Produit', function () {
    return view('Formulaire-Produit');
});


Route::get("Listesdesclients",[ClientsController::class,"AffichageDesClients"]);
Route::post("traitementclient",[ClientsController::class,"AjoutDesClients"]);

Route::get("Formulaire-Commande",[CommandesController::class,"AffichageDesClientsetProduits"]);
Route::get("Listesdescommandes",[CommandesController::class,"AffichageDesCommandes"]);
Route::post("traitementcommande",[CommandesController::class,"AjoutDesCommandes"]);

Route::get("Listesdesproduits",[ProduitsController::class,"AffichageDesProduits"]);
Route::post("traitementproduit",[ProduitsController::class,"AjoutDesProduits"]);

Route::get("Formulaire-carte",[CartesController::class,"AffichageDesClients"]);
Route::get("Listesdescartes",[CartesController::class,"AffichageDesCartes"]);
Route::post("traitementcarte",[CartesController::class,"AjoutDesCartes"]);


Route::get("details",[CommandesController::class,"Details"]);
Route::get('Carteclient', [ClientsController::class, 'ListClients']);