<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $guarded = [];

    public function categorie()
    {

        return $this->belongsToMany('App\Categorie');
    }
}
