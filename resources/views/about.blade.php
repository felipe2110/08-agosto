@extends('layouts.template')
@section('title',"Acerca de")
@section('imagen')
<img src="https://cdn.forbes.co/2021/07/Disney-Encanto-Nueva-1280x720-1.jpg" class="rounded" alt="..." width="100%" height="550px" >
@endsection

@section('content')
<div class="p-3 mb-2  text-black" style="background-color: #e3f2fd;">
    <h1 class="text-center">Acerca de Nosotros </h1>
</div>
<p>The Walt Disney Company legalmente antes Disney Associates, Ltd., Walt Disney Productions, Inc. y Disney Enterprises, Inc., también conocida simplemente como Disney, es el conglomerado de medios de comunicación y entretenimiento estadounidense más grande del mundo. Fundada por Walt Disney y Roy O. Disney. Con sede en Burbank, California. El 16 de octubre de 1923, el estudio empezaría a competir en 1928 contra Fleischer Studios con Steamboat Willie y con los cortometrajes Silly Symphonies; y en 1930 empezaría la producción de Snow White and the Seven Dwarfs, que sería estrenada en 1937, la cual tuvo éxito al poco tiempo de fundarse la compañía, con un valor de producción de 1 250 000 dólares. Este largometraje haría que la compañía empezara a tener reconocimiento, hasta el día de hoy.</p>
<br />
<div class="p-3 mb-2 bg-dark text-white">
    <h1 class="text-center">Indicadores 2021 </h1>
</div>
<div class="col">
    <h6>Marcas con la mejor imagen y reputación entre los consumidores a nivel mundial en 2021</h6>
    <div class="progress">
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
    </div>
    <br />
    <h6>Ranking de las empresas con el mayor valor de marca a nivel mundial en 2021</h6>
    <div class="progress">
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
    </div>
    <br />
    <h6>Ranking de las principales empresas de medios de comunicación del mundo en función del valor de mercado</h6>
    <div class="progress">
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
    </div>
</div>
@endsection
