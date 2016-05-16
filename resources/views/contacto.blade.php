@extends('layouts.inicio')
@section('content')

  <div class="contact-us">

    <div class="contact-info .col-md-8">
        <ul>
          <li>Direccion: Distrito B-6 410,Cumbres 1º Sector, 64610, Monterrey, N.L.</li>
          <li>Telefono:8182805191</li>
          <li>Correo Electronico:anniekitchen@gmail.com</li>
          <li>Horario de atencion: 9:00am - 6:00pm</li>
        </ul>
        <form action="contact.php" method="post">
      <h3> Escríbenos tus mensajes, sugerencias o peticiones a "anniekitchen@gmail.com" o utiliza nuestra forma de contacto </h3>
      Tu nombre<br>
      <input type="text" name="cf_name"><br>
      Tu correo<br>
      <input type="text" name="cf_email"><br>
      Mensaje<br>
      <textarea name="cf_message"></textarea>
      <input type="submit" value="Enviar">
      <input type="reset" value="Reset">
      </form>
    </div>
  </div>

  

@endsection