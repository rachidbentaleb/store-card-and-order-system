<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    public function Client(){
        return $this->belongsTo(Client:: class);
    }
}
