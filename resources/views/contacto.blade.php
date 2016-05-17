@extends('layouts.newApp')
@section('content')

<div class="contacto">

  <div class="intro">
    <div align="center" class="i-text">Contacto</div>
  </div>
</div>

<div class="odd col-sm-12">
  <h1 class ="parraf-titulo">Escríbenos tus mensajes, sugerencias o peticiones</h1>
  <div class = "parraf-text">
   <form class="form_contact" action="contact.php" method="post">

         <label for="text" class="col-sm-2 control-label">Nombre</label>
         <div class="col-sm-10">
          <input class="form-control "placeholder="Tu Nombre" type="text" name="cf_name" cols="50">
         </div><br><br>

        <label for="email" class="col-sm-2 control-label">Correo</label>
         <div class="col-sm-10">
          <input class="form-control "placeholder="Tu correo" type="text" name="cf_email" cols="50">
         </div><br><br>

         <label for="text" class="col-sm-2 control-label">Mensaje</label>
         <div class="col-sm-10">
          <textarea class="form-control" placeholder="Tu Mensaje" name="cf_message"></textarea><br><br>
        </div>

        <input type="submit" value="Enviar">
        <input type="reset" value="Reset">
      </form>     
  </div>
</div>

<div class="even col-sm-12">
  <h1 class ="parraf-titulo">Datos</h1>
  <div class = "parraf-text">
        <ul>
          <li>Direccion: Distrito B-6 410,Cumbres 1º Sector, 64610, Monterrey, N.L.</li>
          <li>Telefono:8182805191</li>
          <li>Correo Electronico:anniekitchen@gmail.com</li>
          <li>Horario de atencion: 9:00am - 6:00pm</li>
        </ul>
  </div>
</div>


@endsection