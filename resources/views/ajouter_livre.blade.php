@extends('master')
@section('content')
<form method="POST" action="{{route('post_ajouter_livre')}}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre Livre</label>
    <input type="text" name="titre" value="{{ old('titre')}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Auteur</label>
    <input type="text" name="auteur" value="{{ old('auteur')}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Catégorie</label>
    <input type="text" value="{{ old('categorie')}}" name="categorie" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control"  rows="3">{{ old('description')}}</textarea>
  </div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>
@endsection