<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivresController extends Controller
{
    public function index() {
      $livres = Livre::all();
      return view('welcome',compact('livres'));
    }
    public function ajouterLivre() {
        return view('ajouter_livre');
    }
    public function postAjouterLivre(Request $request ) {
       $validData = $request->validate(
        [
        'titre' => 'required|min:3',
        'categorie'=>'required'
        ]
       );
        Livre::create($request->all());
        return redirect()->back()->with('success','Votre livre a été inseré');
        //return back();
       
    }
}
