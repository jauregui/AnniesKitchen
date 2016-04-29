@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Insertar Productos</div>
                <div class="panel-description">Aqu&iacute; podr&aacute;s dar de alta los productos para los men&uacute;s</div>
				<form method="POST" action="/insertarProducto" >
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    <div class="form-group row">
					    <div class="col-sm-4">
					    	<label>Nombre producto</label>
					    	<input type="text" name="nombreProducto" placeholder="Albóndigas con espaguetti" required/>
					    </div>
					    <div class="col-sm-4">
					    	<label>Descripci&oacute;n del producto</label>
					    	<input type="text" name="descripcionProducto" placeholder="En éste campo va la descripción del producto" required/>
					    </div>
					    <div class="col-sm-4">
					    	<label> URL de imagen </label>
					    	<input type="text" name="imgUrl" placeholder="Aquí se pone la dirección de la imagen" required/>
					    </div>
				    </div>

				    <div class= "col-sm-8">
					    <button type="submit" class="btn btn-secondary">Enviar</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

@endsection