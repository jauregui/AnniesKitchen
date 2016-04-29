@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>
                   <div class="panel-body">             
                        <div class="table">
                            <div class="row header">
                              <div class="cell">
                                Nombre
                              </div>
                              <div class="cell">
                                Apellido
                              </div>
                              <div class="cell">
                                Telefono
                              </div>
                              <div class="cell">
                                Comentario
                              </div>
                              <div class="cell">
                                Cant. Lunes
                              </div>
                              <div class="cell">
                                Cant. Martes
                              </div>
                              <div class="cell">
                                Cant. Miercoles
                              </div>
                              <div class="cell">
                                Cant. Jueves
                              </div>
                              <div class="cell">
                                Total Pedido
                              </div>
                            </div>
                            @foreach ($ordenes as $orden)
                            <div class="row">
                              <div class="cell">
                                {{$orden->nombre}}
                              </div>
                              <div class="cell">
                                {{$orden->apellido}}
                              </div>
                              <div class="cell">
                                {{$orden->telefono}}
                              </div>
                              <div class="cell">
                                {{$orden->comentario}}
                              </div>
                              <div class="cell">
                                {{$orden->qLu}}
                              </div>
                              <div class="cell">
                                {{$orden->qMa}}
                              </div>
                              <div class="cell">
                                {{$orden->qMi}}
                              </div>
                              <div class="cell">
                                {{$orden->qJu}}
                              </div>
                              <div class="cell">
                                {{$orden->total}}
                              </div>
                            </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
