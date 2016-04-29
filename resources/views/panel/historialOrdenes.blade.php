@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>

                <div class="panel-body">

                    <table>
                    <tr>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Telefono</td>
                    <td>Comentario</td>
                    <td>Cant. Lunes</td>
                    <td>Cant. Martes</td>
                    <td>Cant. Mierc</td>
                    <td>Cant. Jueves</td>
                    <td>Total</td>
                    </tr>
                    @foreach ($ordenes as $orden)
                    <tr>
                    <td>{{$orden->nombre}}</td>
                    <td>{{$orden->apellido}}</td>
                    <td>{{$orden->telefono}}</td>
                    <td>{{$orden->comentario}}</td>
                    <td>{{$orden->qLu}}</td>
                    <td>{{$orden->qMa}}</td>
                    <td>{{$orden->qMi}}</td>
                    <td>{{$orden->qJu}}</td>
                    <td>{{$orden->total}}</td>
                    </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
