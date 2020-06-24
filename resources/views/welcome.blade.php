@extends('master')
@section('content')
{{$livres->links()}}
<h2>{{$livres->count()}} Livres affiché(s) sur {{$livres->total()}} </h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Livre</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach($livres as $livre)
    <tr>
      <th scope="row">{{$livre->id}}</th>
      <td>{{$livre->titre}}</td>
      <td>{{$livre->categorie}}</td>
      <td>
      <a class="btn btn-success" href="{{route('voir_livre',$livre->id)}}">Voir</a>
        <a href="#"  class="btn btn-secondary">Editer</a>
        <a href="{{route('supprimer_livre',$livre->id)}}" class="btn btn-danger">Supprimer</button>
        </td>
    </tr>
    @endforeach
  </tbody>
  
</table>
{{$livres->links()}}
@endsection


@section('title')
<h1>Page Acceuil</h1>
@endsection