<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacciones extends Model
{
    protected $table = 'Transacciones';
    protected $fillable = array('monto','fecha_compra','cliente_id');
}
