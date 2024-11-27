<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function Carte(){
        return $this->hasOne(Carte::class);
    }
    public function Commandes(){
        return $this->hasMany(Commande::class);
    }
}
