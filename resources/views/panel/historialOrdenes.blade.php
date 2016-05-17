@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>
                   <div class="panel-body">
                        <table class="table table-condensed">
                          <tr>
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
                          </tr>
                          </table>
                            @foreach ($ordenes as $orden)
                            <table class="table table-condensed " style="text-align: left;">
                              <tr>
                              <td>
                                    {{$orden->nombre}}
                              </td>
                              <td>
                                  {{$orden->apellido}}
                              </td>
                              <td>
                                  {{$orden->telefono}}
                              </td>
                              <td>
                                  {{$orden->comentario}}
                              </td>
                              <td>
                                  {{$orden->qLu}}
                              </td>
                              <td>
                                  {{$orden->qMa}}
                              </td>
                              <td>
                                  {{$orden->qMi}}
                              </td>
                              <td>
                                  {{$orden->qJu}}
                              </td>
                              <td>
                                  {{$orden->total}}
                              </td>
                            </tr>
                          </table>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
