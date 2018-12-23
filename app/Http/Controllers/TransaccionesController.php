<?php

namespace App\Http\Controllers;

use App\Transacciones;
use Illuminate\Http\Request;

class TransaccionesController extends Controller
{
    protected $clientes;

    public function __construct()
    {
        $this->clientes = new ClientesController();
    }


    public function  getALL(){
        $transacciones = Transacciones::all();
        return $transacciones;
    }

    public function add(Request $request){
        $idCliente = $this->clientes->getID($request['email']);


        $transacciones = Transacciones::create([
            'monto' => $request['monto'],
            'fecha_compra' => $request['fecha_compra'],
            'cliente_id' => $idCliente
        ]);

        return $transacciones;
    }
}
