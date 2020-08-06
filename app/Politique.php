<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politique extends Model
{
    public function scopePolitique($query){

            return $query->where('id_categorie', 2)->get();
    }
}
