@extends('layouts.inicio')
@section('content')

<!--<div>
<h1>Tu orden fue realizada con &eacute;xito.</h1>
</div> -->

<div class="success">¡&Eacutexito! Tú orden fue realizada satisfactoriamente, se te enviara un correo
   para confirmar el lugar de entrega.</div>

<style>
body{
  background:url('https://pixabay.com/static/uploads/photo/2014/06/11/17/00/cook-366875_960_720.jpg');
}
.info, .success, .warning, .error, .validation {
border: 1px solid;
margin: 10px 0px;
padding:15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
}

.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('http://www.desertfitnessgroup.com/wp-content/themes/DesertFitness/images/icon_success.gif');
font-family:Arial, Helvetica, sans-serif; 
font-size:24px;
}
</style>


@endsection
