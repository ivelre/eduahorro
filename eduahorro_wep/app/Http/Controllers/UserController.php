<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\clienteModel;
use App\Models\AhorroModel;

use App\Http\Requests;

class UserController extends Controller
{
    public function webServicesUsers()
    {

    	$user = UserModel::all();

		return $user->toJson();
    }

    public function graficaAhorro($id)
    {
    	
    	$ahorros = AhorroModel::getAhorroCliente($id);

    	dd($ahorros);

	
    }
}
