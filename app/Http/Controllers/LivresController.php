<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class LivresController extends Controller
{
    public function index() {
      $livres = Livre::orderBy('id','desc')->paginate(5);
      return view('welcome',compact('livres'));
    }
    public function ajouterLivre() {
        return view('ajouter_livre');
    }
    public function postAjouterLivre(Request $request ) {
       $validData = $request->validate(
        [
        'titre' => 'required|min:3',
        'auteur' => 'required',
        'categorie'=>'required'
        ]
       );
        Livre::create($request->all());
        return redirect()->back()->with('success','Votre livre a été inseré');
        //return back();
       
    }

    public function voirLivre($id) {
        $livre = Livre::find($id);
        return view('voir_livre',compact('livre'));
    }

    public function supprimerLivre($id){
        $livre = Livre::find($id)->delete();

        return back()->with('success','Livre supprimé avec succès');
    }
}
