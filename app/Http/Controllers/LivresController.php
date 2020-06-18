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
}
