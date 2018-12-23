<?php

namespace App\Http\Controllers;

use App\Clientes;
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

    public function get($email){
        $idCliente = $this->clientes->getID($email);

        $transacciones = Transacciones::where('cliente_id',$idCliente)->get();


        return $transacciones;
    }

    public function getID($id){
        $transacciones = Transacciones::find($id);
        return $transacciones;
    }


    public function  edit($id, Request $request){
        $transacciones = $this->getID($id);
        $transacciones->fill($request->all())->save();
        return $transacciones;
    }

    public function delete($id){
        $transacciones = $this->getID($id);
        $transacciones->delete();
        return $transacciones;
    }

}
