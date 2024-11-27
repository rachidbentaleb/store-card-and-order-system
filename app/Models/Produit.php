<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function Commandes(){
        return $this->belongsToMany(Commande::class)->withPivot('quantite');
    }
} 
