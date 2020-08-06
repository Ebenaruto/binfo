<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Categorie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Actualite $actualite)
    {
        $actualites = Actualite::all();
        $categories= Categorie::all();

        return view('/admin.enregistrer',compact('actualite','categories'));
    }
}
