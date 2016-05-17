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
        $semanaNum = ($request->input('semana'));
        $total = ($request->input('qLu',0) + $request->input('qMa',0) + $request->input('qMi',0) + $request->input('qJu',0))*50;
        $pedido = DB::insert('insert into order_ticket (nombre, apellido, telefono, comentario, qLu, qMa, qMi, qJu, total, semanaNum) values (:nombre, :apellido, :telefono, :comentario, :qLu, :qMa, :qMi, :qJu, :total, :semanaNum)',
            ['nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'telefono' => $request->input('telefono'),
            'comentario' => $request->input('comentario', NULL),
            'qLu' => $request->input('qLu',NULL),
            'qMa' =>$request->input('qMa', NULL),
            'qMi' =>$request->input('qMi', NULL),
            'qJu' =>$request->input('qJu', NULL),
            'total' => $total,
            'semanaNum' => $semanaNum
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
        return view('panel.insercionExitosa', ['mensaje' => 'El producto fue insertado con éxito']);
    }

    public function mostrarPedidos(Request $request)
    {
        $semanaNum = ($request->input('semana'));

        $select = array();
        for($i = 1; $i <=52; $i++)
        {
            $select[$i]['id'] = $i;
            if ($i == $semanaNum) {
                $select[$i]['selected'] = 'selected';
            }
        }
        if(empty($semanaNum))
            $semanaNum = 1;
        $ordenes = DB::select('select * from order_ticket where semanaNum=:semanaNum', ['semanaNum' => $semanaNum]);
        return view ('panel.historialOrdenes', ['ordenes' => $ordenes, 'select' => $select]);
    }

    public function insertarMenu(Request $request)
    {

        $existe = DB::select('select semanaNum from menu where semanaNum = :semanaNum;', ['semanaNum' => $request->input('semanaNum')]);
        if(empty($existe)){
            $semana = DB::insert('insert into menu (semanaNum, comidaLunes, comidaMartes, comidaMiercoles, comidaJueves) values (:semanaNum, :comidaLunes, :comidaMartes, :comidaMiercoles, :comidaJueves)',
                ['semanaNum' => $request->input('semanaNum'),
                'comidaLunes' => $request->input('comidaLunes'),
                'comidaMartes' => $request->input('comidaMartes'),
                'comidaMiercoles' => $request->input('comidaMiercoles'),
                'comidaJueves' => $request->input('comidaJueves')]);
            return view('panel.insercionExitosa', ['mensaje' => 'El menú fue insertado con éxito']);
        }
        else {
            $semana = DB::update('update menu set  comidaLunes=:comidaLunes, comidaMartes=:comidaMartes, comidaMiercoles=:comidaMiercoles, comidaJueves=:comidaJueves where semanaNum=:semanaNum',
                ['semanaNum' => $request->input('semanaNum'),
                'comidaLunes' => $request->input('comidaLunes'),
                'comidaMartes' => $request->input('comidaMartes'),
                'comidaMiercoles' => $request->input('comidaMiercoles'),
                'comidaJueves' => $request->input('comidaJueves')]);
            return view('panel.insercionExitosa', ['mensaje' => 'El menú fue editado con éxito']);
        }
    }

    public function crearMenu(Request $request)
    {
        $productos = DB::select('select * from producto');
        return view('panel.crearMenu', ['productos' => $productos]);
    }

    public function mostrarMenu(Request $request)
    {
      $numSemana = ($request->input('semana'));
      if(empty($numSemana)){
        $numSemana = 1;
      }
      $menu = DB::select('select semanaNum as semana, 
            lunes.dish as lunesdish,
            lunes.description as lunesdesc,
            lunes.imgurl as lunesimg,
             martes.dish as martesdish,
             martes.description as martesdesc,
             martes.imgurl as martesimg,
             miercoles.dish as miercolesdish,
             miercoles.description as miercolesdesc,
             miercoles.imgurl as miercolesimg,
             jueves.dish as juevesdish,
             jueves.description as juevesdesc,
             jueves.imgurl as juevesimg
            from menu 
            left join producto as lunes on lunes.idP=menu.comidaLunes
            left join producto as martes on martes.idP=menu.comidaMartes
            left join producto as miercoles on miercoles.idP=menu.comidaMiercoles
            left join producto as jueves on jueves.idP=menu.comidaJueves
            where semanaNum=:numSemana', ['numSemana' => $numSemana]);

            return view('inicio',['menu' => $menu]);
    }
}
