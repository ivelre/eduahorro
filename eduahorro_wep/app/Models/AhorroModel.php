<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AhorroModel extends Model
{
    protected $table = 'ahorro';
     public $timestamps = false;

     public static function getAhorroCliente($user){
     	return \DB::table('ahorro')
                     ->where('cliente_id', '=', $user)
                     ->groupBy(DB::raw('MONTH(fecha_deposito)'))
                     ->get();
     }
}
