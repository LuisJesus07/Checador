<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Check;
use App\User;
use Auth;
use DateTime;

class CheckController extends Controller
{

	public function index(Request $request){

		$usuario = User::where('matricula', $request['matricula'])->get()->first();
	

		if(empty($usuario)){
			return redirect()->back()->with('error','No existe ese usuario');
		}else{

			$idUsuario = $usuario->id;
			$check = Check::where('status','no_concluida')->where('user_id', $idUsuario)->get();

			//si no hay un check sin concluir crea uno nuevo
			if(empty($check->last())){
				
				$check = new Check();

		    	$check->user_id = $idUsuario;
		    	$check->horaEntrada = date('H:i:s');
		    	$check->horaSalida = date('H:i:s');
		    	$check->fecha = date('Y-m-d');
		    	$check->duracion = date('H:i:s');

		    	$checkEntrada = true;

		    	if($check->save()){
		    		return view('checador.index', compact('usuario','checkEntrada'));
		    	}

			}else{
				//si no se ha concluido la actividad checar la salida
				$idCheckPendiente =  $check->last()->id;

				$check = Check::find($idCheckPendiente);

				$entrada = new DateTime($check->horaEntrada);
				$salida = new DateTime(date('H:i:s'));
				$duracion = $entrada->diff($salida);

				$check->horaSalida = date('H:i:s');
				$check->duracion = $duracion->format('%H:%i:%s');
				$check->status = "concluida";

				$checkSalida = true;

				if($check->save()){
					return view('checador.index', compact('usuario', 'checkSalida'));
				}
			}

			//return view('checador.index', compact('usuario'));
		}
	} 
    
    
}
