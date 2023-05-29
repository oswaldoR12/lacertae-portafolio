<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmergencyCallReceived;
use App\Http\Requests\RegisterRequest;



class UsuarioController extends Controller
{
    /*
    * Buscar si existe el usuario
     */
    public function enviarCorreo(Request $request)
    {
    
        $prueba['nombres'] = 'os';
        $prueba['apellidos'] = 'rivas';
        $administracion = 'oswaldo.r.profesional@gmail.com';
        Mail::to($administracion)->send(new EmergencyCallReceived($prueba));
       

    }
    	public function create(RegisterRequest $request) 
		{
	    	return response()->json([	            	
				'error' => 'Algo ha salido mal Nat'
			], 422);
		
			$usuario = User::create([
				'name' => 				 $request->nombres,
				'apellidos' =>		 	 $request->apellidos,
				'cliente' => 			 $request->cliente,
				'dni' => 				 $request->dni,
				'email' => strtolower(	 $request->email),
				'password' => Hash::make($request->password),
				// 'empresa' => ($data['empresa'] === null) ? 'MRW' : $data['empresa'],
				// 'agente' => ($data['empresa'] === null) ? true : false,
				// 'franquiciado' => isset($data['franquiciado']) ? $data['franquiciado'] : false,
				'retencion' => 0,
				'suscripcion' => isset($request->suscripcion) ? true : false,
			]);

			if ($usuario != null) {
				// Crear carrito
				$carrito = Carrito::create([
					'users_id' => $usuario->id,
				]);

				if (in_array(config('app.env'), ['local', 'testing'])) {
					// Crear monedero
					$monedero = Monedero::insert([
						['moneda_id' => 1, 'usuario_id' => $usuario->id],
						['moneda_id' => 2, 'usuario_id' => $usuario->id],
						// ['moneda_id' => 3, 'usuario_id' => $usuario->id, 'saldo' => 0],
					]);
				}

				// if ($carrito != null && $monedero != null)
				if ($carrito != null)
					
					return response()->json([
						'registro' => true
					]);
				}
			return response()->json([	            	
				'error' => 'Algo ha salido mal'
			], 422);
		}
		


}