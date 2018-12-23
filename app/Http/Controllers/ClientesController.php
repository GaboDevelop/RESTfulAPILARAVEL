<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function  getALL(){
        $clientes = Clientes::all();
        return $clientes;
    }

    public function add(Request $request){
        $clientes = Clientes::create($request->all());
        return $clientes;
    }

    public function get($id){
        $clientes = Clientes::find($id);
        return $clientes;
    }

    public function  edit($id, Request $request){
        $clientes = $this->get($id);
        $clientes->fill($request->all())->save();
        return $clientes;
    }

    public  function delete($id){
        $clientes = $this->get($id);
        $clientes->delete();
        return $clientes;
    }

}
