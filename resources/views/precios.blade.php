@extends('layouts.newApp')
@section('content')
<div class="precios">

	<div class="intro">
		<div align="center" class="i-text">Precios</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="even col-xs-4">
		<h1 class ="parraf-titulo">Precio</h1>
		<div class = "parraf-text">El precio individual por pedido es de $50 MX.</div>
		</div>
		<div class="odd col-xs-4">
		<h1 class ="parraf-titulo">Paquete 1</h1>
		<div class = "parraf-text">Con más de 4 pedidos, obten un 10% de descuento.</div>
		</div>
		<div class="even col-xs-4">
		<h1 class ="parraf-titulo">Paquete 2</h1>
		<div class = "parraf-text">Con más de 8 pedidos, obten un 20% de descuento.</div>

		</div>
	</div>
</div>
@endsection