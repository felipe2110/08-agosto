@extends('layouts.template')
@section('title',"Inicio")
@section('imagen')
<img src="https://lumiere-a.akamaihd.net/v1/images/5x2_logo_66471cb8.png" class="rounded" alt="..." width="100%">
@endsection

@section('content')
<div class="p-3 mb-2 bg-dark text-white"><h1 class="text-center">Proximos estrenos </h1></div>
<div class="row">
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7Dsn_StsqmKhfqVwt7YOhYaiZPDGElX2cUHbR3hn5QmhmVEEohvJMmIhFdozFAAUEH-U&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pelicula 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ver Trailer</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7Dsn_StsqmKhfqVwt7YOhYaiZPDGElX2cUHbR3hn5QmhmVEEohvJMmIhFdozFAAUEH-U&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pelicula 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ver Trailer</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7Dsn_StsqmKhfqVwt7YOhYaiZPDGElX2cUHbR3hn5QmhmVEEohvJMmIhFdozFAAUEH-U&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pelicula 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Ver Trailer</a>
            </div>
        </div>
    </div>
</div>
@endsection
