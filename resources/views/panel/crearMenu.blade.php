@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Crear Men&uacute;</div>
                <div class="panel-description">Aqu&iacute; puedes dar de alta el men&uacute; semanal</div>
				<form method="POST" action="/insertarMenu" >
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    <div class="form-group row">
					    <div class="col-sm-4">
					    	<label>Número semana</label>
					    	<select name="semanaNum" id="semanaNum">
					    	@for($i=1; $i <= 52; $i++)
					    		<option value="{{$i}}">Semana {{$i}}</option>
							@endfor
							</select>
					    </div>
				    </div>
				    <div class="row form-group">
				    	<div class="col-sm-3">
				    		<label>Comida del d&iacute;a lunes:</label>
			    			<select name="comidaLunes" id="comidaLunes">
			    			@foreach($productos as $p)
			    				<option value="{{$p->idP}}">{{$p->dish}}</option>
			    			@endforeach
			    			</select>
				    	</div>
				    	<div class="col-sm-3">
				    		<label>Comida del d&iacute;a martes:</label>
			    			<select name="comidaMartes" id="comidaMartes">
			    			@foreach($productos as $p)
			    				<option value="{{$p->idP}}">{{$p->dish}}</option>
			    			@endforeach
			    			</select>
				    	</div>
				    	<div class="col-sm-3">
				    		<label>Comida del d&iacute;a mi&eacute;rcoles:</label>
			    			<select name="comidaMiercoles" id="comidaMiercoles">
			    			@foreach($productos as $p)
			    				<option value="{{$p->idP}}">{{$p->dish}}</option>
			    			@endforeach
			    			</select>
				    	</div>
				    	<div class="col-sm-3">
				    		<label>Comida del d&iacute;a jueves:</label>
			    			<select name="comidaJueves" id="comidaJueves">
			    			@foreach($productos as $p)
			    				<option value="{{$p->idP}}">{{$p->dish}}</option>
			    			@endforeach
			    			</select>
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