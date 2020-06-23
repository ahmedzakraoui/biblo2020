@extends('master')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Livre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->categorie}}</td>
      <td><button type="button" class="btn btn-success">Voir</button>
        <button type="button" class="btn btn-secondary">Editer</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>@endsection


@section('title')
<h1>Page Acceuil</h1>
@endsection