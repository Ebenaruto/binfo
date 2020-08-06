<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = [];

    public function actualite()
    {

        return $this->hasMany('App\Actualite');
    }
}
