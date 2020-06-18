@extends('master')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre Livre</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
  <input type="submit" class="btn btn-primary" value="Ajouter">
  </div>
</form>
@endsection