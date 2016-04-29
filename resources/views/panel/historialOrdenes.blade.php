@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>
                   <div class="panel-body">
                    <!--<div class="CSSTableGenerator">
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
                    </div>-->
              
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
