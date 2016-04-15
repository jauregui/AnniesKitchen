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
        $pedido = DB::insert('insert into order_ticket (nombre, apellido, telefono, comentario, qLu, qMa, qMi, qJu, total) values (:nombre, :apellido, :telefono, :comentario, :qLu, :qMa, :qMi, :qJu, :total)', 
            ['nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('telefono'),
            'comentario' => $request->input('comentario', NULL),
            'qLu' => $request->input('qLu',NULL),
            'qMa' =>$request->input('qMa', NULL),
            'qMi' =>$request->input('qMi', NULL),
            'qJu' =>$request->input('qJu', NULL),
            'total' => $request->input('total')
            ]);
    }
}
