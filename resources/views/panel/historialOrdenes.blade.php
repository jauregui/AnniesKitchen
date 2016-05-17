@extends('layouts.app')

@section('content')
<form action="/historialPedidos" method="POST">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Historial de pedidos</div>
                   <div class="panel-body">
                      <select name="semana">
                      @foreach ($select as $node)
                        <option value="{{$node['id']}}" {{$node['selected'] or null}}>Semana {{$node['id']}}</option>
                      @endforeach
                      </select>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <button>Enviar</button>
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
</form>
@endsection
