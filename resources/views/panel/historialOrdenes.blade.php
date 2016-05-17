@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>
                   <div class="panel-body">
                        <table class="table table-condensed">
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                Comentario
                            </th>
                            <th>
                                Cant. Lunes
                            </th>
                            <th>
                                Cant. Martes
                            </th>
                            <th>
                                Cant. Miercoles
                            </th>
                            <th>
                                Cant. Jueves
                            </th>
                            <th>
                                Total Pedido
                            </th>
                            @foreach ($ordenes as $orden)
                            <th>
                                  {{$orden->nombre}}
                            </th>
                            <th>
                                {{$orden->apellido}}
                            </th>
                            <th>
                                {{$orden->telefono}}
                            </th>
                            <th>
                                {{$orden->comentario}}
                            </th>
                            <th>
                                {{$orden->qLu}}
                            </th>
                            <th>
                                {{$orden->qMa}}
                            </th>
                            <th>
                                {{$orden->qMi}}
                            </th>
                            <th>
                                {{$orden->qJu}}
                            </th>
                            <th>
                                {{$orden->total}}
                            </th>
                          </table>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
