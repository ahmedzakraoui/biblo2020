<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }
   public function ajouterCategorie(){
    return view('ajouter_categorie');
   }

   public function postAjouterCategorie(Request $request) {

    $validData = $request->validate(
        [
        'categorie'=>'required|min:3|unique:categories'
        ]
       );
       Category::create($request->all());
        return redirect()->back()->with('success','Votre Catégorie a été ajouté');
   }
}
