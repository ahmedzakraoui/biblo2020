@extends('master')
@section('content')
<form method="POST" action="{{route('post_ajouter_categorie')}}">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom Catégorie :</label>
    <input type="text" name="categorie" value="{{ old('categorie')}}" class="form-control">
  </div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>
@endsection