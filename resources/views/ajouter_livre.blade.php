@extends('master')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre Livre</label>
    <input type="text" name="titre" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Auteur</label>
    <input type="text" name="auteur" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Catégorie</label>
    <input type="text" name="categorie" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control"  rows="3"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>
@endsection