@extends('master')
@section('content')
<form method="POST" action="{{route('post_editer_livre',$livre->id)}}">
  @csrf
  @if($errors->first('titre'))
     <span class="alert alert-danger">{{$errors->first('titre')}}</span>
     <p>
    @endif
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre Livre</label>
    <input type="text" name="titre" value="{{ old('titre',$livre->titre)}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Auteur</label>
    <input type="text" name="auteur" value="{{ old('auteur',$livre->auteur)}}" class="form-control">
  </div>
  @if($errors->first('auteur'))
     <span class="alert alert-danger">{{$errors->first('auteur')}}</span>
     <p>
    @endif
  
  <div class="form-group">
      <label for="sel1">Choisir Categorie :</label>
      <select class="form-control" name="category_id">
        @foreach($categories as $cat)
        <option value="{{$cat->id}}"
         {{$cat->id == $livre->category->id ? 'selected' : ''}}>
         {{$cat->categorie}}</option>
        @endforeach
      </select>
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea name="description" class="form-control"  rows="3">
    {{ old('description',$livre->description)}}
    </textarea>
  </div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Modifier">
  </div>
</form>
@endsection