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

			return view('checador.index', compact('usuario'));
		}
	} 
    
    public function checar($id){

    	$idUsuario = $id;

		$check = Check::where('status','no_concluida')->where('user_id', $idUsuario)->get();

		//si no hay un check sin concluir crea uno nuevo
		if(empty($check->last())){
			
			$check = new Check();

	    	$check->user_id = $idUsuario;
	    	$check->horaEntrada = date('H:i:s');
	    	$check->horaSalida = date('H:i:s');
	    	$check->fecha = date('Y-m-d');
	    	$check->duracion = date('H:i:s');

	    	if($check->save()){
	    		return redirect('home')->with('Check guardado', 'Check guardado');
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

			if($check->save()){
				return redirect('home')->with('Salida registrada', 'Salida registrada');
			}
		}    	


    	
    }
}
