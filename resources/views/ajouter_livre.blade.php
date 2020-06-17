@extends('master')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Titre Livre</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Catégorie</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Informatique</option>
      <option>Mathématique</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
</form>

@endsection