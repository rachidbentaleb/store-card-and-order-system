<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function Client(){
        return $this->belongsTo(Client::class);
    }
    public function Produits(){
        return $this->belongsToMany(Produit::class)->withPivot('quantite');
    }


}
