<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Admin;
use App\Categorie;
use App\Politique;

class AdminsController extends Controller
{

    public function index(){
        $categories = Categorie::all();
        $actualites = Actualite::all();

        return view('admin.index',compact('actualites','categories'));
        

    }
    public function create(Actualite $actualite){

        $categories = Categorie::all();
        $actualites = Actualite::all();
        
        return view('admin.enregistrer',compact('categories','actualite'));
    }

    public function store(){

        $actualite= Actualite:: create($this->validator());
        $this->storeImage($actualite);
        return back();

    }

    public function show(Actualite $actualites){

      
        return view('admin.show',compact('actualites'));

    }

    public function edit(Actualite $actualite){

        $categories = Categorie::all();
        $actualites = Actualite::all();


        return view('admin.edit',compact('actualite','categories'));

    }

    public function update(Actualite $actualite){
         
        $categories = Categorie::all();
        $actualites = Actualite::all();

        $actualite->update($this->validator());
        $this->storeImage($actualite);

        return view('admin.index', compact('actualites'));

    }

    public function politique(){

            $actualites= Actualite::politique()
        
            return view('rubriques.politique');
            
    }



    public function economie()
    {

        return \view('rubriques.economie');
    } 

    private function validator(){

        return request()->validate([

            'Titre' => 'required',
            'Auteur' => 'required',
            'Contenu' => 'required',
            'photo' => 'sometimes|image|max:3000',
            'id_categorie' => 'required|integer'


        ]);
    }

    private function storeImage(Actualite $actualite){

        if (request('photo')){

            $actualite->update([
                'photo'=>request('photo')->store('image','public')
            ]);
        }

    }

}

