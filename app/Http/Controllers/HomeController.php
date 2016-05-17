<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function guardarPedido(Request $request)
    {
        $total = ($request->input('qLu',0) + $request->input('qMa',0) + $request->input('qMi',0) + $request->input('qJu',0))*50;
        $pedido = DB::insert('insert into order_ticket (nombre, apellido, telefono, comentario, qLu, qMa, qMi, qJu, total) values (:nombre, :apellido, :telefono, :comentario, :qLu, :qMa, :qMi, :qJu, :total)',
            ['nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('telefono'),
            'comentario' => $request->input('comentario', NULL),
            'qLu' => $request->input('qLu',NULL),
            'qMa' =>$request->input('qMa', NULL),
            'qMi' =>$request->input('qMi', NULL),
            'qJu' =>$request->input('qJu', NULL),
            'total' => $total
            ]);
        return view('ordenExitosa');
    }

    public function insertarProducto(Request $request)
    {
        $producto = DB::insert('insert into producto (dish, description, imgurl) values (:dish, :description, :imgurl)',
        ['dish' => $request->input('nombreProducto'),
        'description' => $request->input('descripcionProducto'),
        'imgurl' => $request->input('imgUrl')
        ]);
        return view('panel.insercionExitosa');
    }

    public function mostrarPedidos()
    {
        $ordenes = DB::select('select * from order_ticket');
        return view ('panel.historialOrdenes', ['ordenes' => $ordenes]);
    }

    public function insertarMenu(Request $request)
    {
        $semana = DB::insert('insert into menu (semanaNum, comidaLunes, comidaMartes, comidaMiercoles, comidaJueves) values (:semanaNum, :comidaLunes, :comidaMartes, :comidaMiercoles, :comidaJueves)',
            ['semanaNum' => $request->input('semanaNum'),
            'comidaLunes' => $request->input('comidaLunes'),
            'comidaMartes' => $request->input('comidaMartes'),
            'comidaMiercoles' => $request->input('comidaMiercoles'),
            'comidaJueves' => $request->input('comidaJueves')]);
        return view('panel.inicio');
    }

    public function crearMenu(Request $request)
    {
        $productos = DB::select('select * from producto');
        return view('panel.crearMenu', ['productos' => $productos]);
    }

    public function mostrarMenu(Request $request)
    {
      $numSemana = ($request->input('semana'));

    }
}
