@extends('layouts.inicio')
@section('content')

<div class="container">
	<div class="col-md-6">
	<form class="form-horizontal" role="form" method="post" action="index.php">
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="name" name="name" placeholder="Nombre y apellido" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Correo</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@dominio.com" value="">
			</div>
		</div>
		<div class="form-group">
			<label for="message" class="col-sm-2 control-label">Mensaje</label>
			<div class="col-sm-10">
				<textarea class="form-control" rows="4" name="Mensaje"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="human" name="human" placeholder="Respuesta">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				
			</div>
		</div>
	</form>
	</div>
</div>
@endsection