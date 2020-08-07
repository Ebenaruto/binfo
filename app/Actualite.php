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

    
    public function scopePolitique($query){

            return $query->where('id_categorie', 2)->get();
    }

    public function scopeEconomie($query){
        return $query->where('id_categorie', 3)->get();
    }

    public function scopeSociete($query)
    {
        return $query->where('id_categorie', 4)->get();
    }

    public function scopeCooperation($query)
    {
        return $query->where('id_categorie', 5)->get();
    }

    public function scopeCulture($query)
    {
        return $query->where('id_categorie', 6)->get();
    }
}
