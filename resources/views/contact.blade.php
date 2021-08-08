@extends('layouts.template')
@section('title',"Contacto")
@section('imagen')
<img src="https://theme.zdassets.com/theme_assets/2086391/ac4ec1df0a4cb54135d309343730b4d0f5d1775c.jpg" class="rounded" alt="..." width="100%">
@endsection
@section('content')

<div class="p-3 mb-2  text-black" style="background-color: #e3f2fd;">
    <h1 class="text-center">Contactenos </h1>
</div>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

@endsection
