<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class AbonneController extends Controller
{
    public function index()
    {
        return view('/abonner');
    }
            
    public function store(Request $request)
    {
        if ( ! NewsLetter::isSubscribed($request->email) )
        {
            NewsLetter::subscribePending($request->email);
            return redirect('/abonner')->with('success', 'validé');
        }
        return redirect('/abonner')->with('faillure', 'sorry! you have already subcribe');



        // Newsletter::subscribeOrUpdate($request->input('email'), ['firstName'=>'toto'], 'simplon');
        // return redirect('/abonner');
    }
}