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
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button type="button" class="btn btn-success">Voir</button>
        <button type="button" class="btn btn-secondary">Editer</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
        </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Livre 2</td>
      <td>Otto</td>
      <td>
        <button type="button" class="btn btn-success">Voir</button>
        <button type="button" class="btn btn-secondary">Editer</button>
        <button type="button" class="btn btn-danger">Supprimer</button>
     </td>
    </tr>
  </tbody>
</table>@endsection


@section('title')
<h1>Page Acceuil</h1>
@endsection