<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;
use App\Category;

class LivresController extends Controller
{
  
    public function index() {
      $livres = Livre::orderBy('id','desc')->paginate(5);
      return view('welcome',compact('livres'));
    }
    public function ajouterLivre() {
        $categories = Category::all();
        return view('ajouter_livre',compact('categories'));
    }
    public function postAjouterLivre(Request $request ) {
       $validData = $request->validate(
        [
        'titre' => 'required|min:3',
        'auteur' => 'required',
        'category_id'=>'required'
        ]
       );
        Livre::create($request->all());
        return redirect()->back()->with('success','Votre livre a été inseré');
        //return back();
       
    }

    public function editerLivre($id){
        $livre = Livre::find($id);
        return view('editer_livre',compact('livre'));
    }

    public function postEditerLivre(Request $request, $id){
         $validData = $request->validate(
            [
            'titre' => 'required|min:3',
            'auteur' => 'required',
            'category_id'=>'required'
            ]
           );
           $livre = Livre::find($id)->update($validData);
           return back()->with('success','Livre edité avec succès');

       
    }

    public function voirLivre($id) {
        $livre = Livre::find($id);
        return view('voir_livre',compact('livre'));
    }

    public function supprimerLivre($id){
        Livre::find($id)->delete();
        return back()->with('success','Livre supprimé avec succès');
    }
    public function chercherParCategorie($idCat){
        $livres = Livre::where('category_id', $idCat)->orderBy('id','desc')->paginate(5);
       return view('welcome',compact('livres'));
    }
}
