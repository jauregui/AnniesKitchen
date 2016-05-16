@extends('layouts.newApp')
@section('content')
<div class="comoFunciona">

	<div class="intro">
		<div align="center" class="i-text">&iquest;C&oacute;mo funciona?</div>
	</div>
</div>

<div class="even">
	<h1 class ="parraf-titulo">Ver</h1>
	<div class = "parraf-text">Para visualizar los platillos disponibles accede a la pestaña "Menú" y en la parte superior 
		selecciona la semana que deseas visualizar, una vez hecho esto en la parte inferior podras observar los platillos 
		disponibles por cada dia de esa semana, asi como una breve descripcion de este.</div>
</div>

<div class="odd col-sm-12">
	<h1 class ="parraf-titulo">Ordenar</h1>
	<div class = "parraf-text">Para ordenar tu pedido ve a la pestaña "Menú y una vez que hayas observado la comida y sepas 
		que vas a pedir, haz click en el boton "Haz tú pedido" ubicado en la parte intferior de la pantalla, una vez hecho 
		esto se desplegara un recuadro en el que deberas elegir los dias para los cuales deseas pedir un platillo, y el 
		numero de platillos que quieres por dia; tambien necesitaras llenar datos personales como tu nombre, telefono y 
		correo. Cuando hayas terminado todo, automaticamente se realizara el calculo del total a pagar de acuerdo a los 
		platillos seleccionado, para finalizar solo haz click en "Enviar".</div>
</div>


<div class="even">
	<h1 class ="parraf-titulo">Entrega</h1>
	<div class = "parraf-text">Al finalizar tu orden, Annie se pondra en contacto contigo para confirmar los platillos que 
		pediste y establecer un punto de entrega.</div>

</div>
@endsection