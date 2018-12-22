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
}
