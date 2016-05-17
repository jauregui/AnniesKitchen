@extends('layouts.inicio')
@section('content')

<link href="../images/comida.png" rel="shortcut icon">
<form action="/menu" method="POST">
<center>
  Selecciona la semana que deseas visualizar: <input type="week" id="myWeek" onchange="cambiaSemana()"><button>Enviar</button>
  <input type="hidden" id="semanaNum" name="semanaNum" value="">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</center>
</form>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ $menu[0]->lunesimg or null }}" alt="..." style="height:400px;  position:relative; left:100px;" id="imagenLunes">
      <div class="carousel-caption">
        <center>
        <h1>LUNES</h1>
        <h2 id="comidaLunes">{{ $menu[0]->lunesdish or null }}</h2>
        <h3>$50</h3>
    <p style="width:350px;" id="descripcionLunes">{{ $menu[0]->lunesdesc or null }}</p>
      </center>
      </div>
    </div>
    <!--Separador -->
    <div class="item">
      <img src="{{ $menu[0]->martesimg or null }}" alt="..." style="height:400px; position:relative; left:100px;" id="imagenMartes">
      <div class="carousel-caption">
       <center>
        <h1 >MARTES</h1>
        <h2 id="comidaMartes">{{ $menu[0]->martesdish or null }}</h2>
        <h3>$50</h3>
    <p style="width:350px;" id="descripcionMartes">{{ $menu[0]->martesdesc or null }}</p>
      </center>
        ...
      </div>
    </div>
    ...
    <!--Separador -->
    <div class="item">
      <img src="{{ $menu[0]->miercolesimg or null }}" alt="..." style="height:400px; position:relative; left:100px;" id="imagenMiercoles">
      <div class="carousel-caption">
       <center>
        <h1 >MIERCOLES</h1>
        <h2 id="comidaMiercoles">{{ $menu[0]->miercolesdish or null }}</h2>
        <h3>$50</h3>
    <p style="width:350px;" id="descripcionMiercoles">{{ $menu[0]->miercolesdesc or null }}</p>
      </center>
      </div>
    </div>
<!--Separador -->
    <div class="item">
      <img src="{{ $menu[0]->juevesimg or null }}" alt="..." style="height:400px; position:relative; left:100px;" id="imagenJueves">
      <div class="carousel-caption">
       <center>
        <h1 >JUEVES</h1>
        <h2 id="comidaJueves">{{ $menu[0]->juevesdish or null }}</h2>
        <h3>$50</h3>
    <p style="width:350px;" id="descripcionJueves">{{ $menu[0]->juevesdesc or null }}</p>
      </center>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="modal">Haz tu pedido</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pedido</h4>
      </div>
      <div class="modal-body">

  @include('partials.form')
  </div>
</div>
</div>
</div>

<script>
  $("#myWeek").on("change", function(){
    //var semana contiene el numero de semana
    var semana=document.getElementById("myWeek").value[6]+document.getElementById("myWeek").value[7];
    var semana = parseInt(semana);
    $('#semanaNum').val(semana);

    //el nombre de las comidas
    var comLunes="Nueva Comida Lunes"
    var comMartes="Nueva Comida Martes"
    var comMiercoles="Nueva Comida Miercoles"
    var comJueves="Nueva Comida Jueves"

    //contienen los url de las imagenes de la base de datos
    var imgLunes="http://vignette1.wikia.nocookie.net/clubpenguin/images/8/86/Tacos_Puffle_Food.png/revision/latest?cb=20131104013815&path-prefix=es"
    var imgMartes="http://vignette2.wikia.nocookie.net/bravestwarriors/images/f/f4/PIzza.png/revision/latest?cb=20121123053932"
    var imgMiercoles="http://vignette4.wikia.nocookie.net/clubpenguin/images/5/55/Pin_de_Queso.png/revision/latest?cb=20120625212729&path-prefix=es"
    var imgJueves="http://losdejalisco.com/movil/images/site/enchiladas.png"

    //la descripcion de las comidas
    var desLunes="otra descripcion Lunes";
    var desMartes="otra descripcion Martes";
    var desMiercoles="otra descripcion Miercoles";
    var desJueves="otra descripcion Jueves";

document.getElementById("comidaLunes").innerHTML=semana;
document.getElementById("comidaMartes").innerHTML=comMartes;
document.getElementById("comidaMiercoles").innerHTML=comMiercoles;
document.getElementById("comidaJueves").innerHTML=comJueves;

document.getElementById("imagenLunes").src=imgLunes;
document.getElementById("imagenMartes").src=imgMartes;
document.getElementById("imagenMiercoles").src=imgMiercoles;
document.getElementById("imagenJueves").src=imgJueves;

document.getElementById("descripcionLunes").innerHTML=desLunes;
document.getElementById("descripcionMartes").innerHTML=desMartes;
document.getElementById("descripcionMiercoles").innerHTML=desMiercoles;
document.getElementById("descripcionJueves").innerHTML=desJueves;

  });
</script>
@endsection
