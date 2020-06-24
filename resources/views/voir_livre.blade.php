@extends('master')
@section('content')
<div class="card text-center">
  <div class="card-header">
    <h2>Auteur : {{$livre->auteur}}</h2>
  </div>
  <div class="card-body">
    <h2 class="card-title">Titre : {{$livre->titre}}</h2>
    <p class="card-text">{{$livre->description}}</p>
    <a href="{{route('acceuil')}}" class="btn btn-primary">Retour a la page d'acceuil</a>
  </div>
  <div class="card-footer text-muted">
    {{$livre->created_at->diffForHumans()}}
  </div>
</div>
@endsection