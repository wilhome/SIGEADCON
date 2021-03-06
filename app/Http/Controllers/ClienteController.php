<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contador;
use App\Cliente;
use App\TipoDoc;
use App\RelDoc;
use App\Atestiguamiento;
use App\RelacionIngresos;
use App\CartaPresentacion;

class ClienteController extends Controller
{
	public function consulta()
	{	
			$data = request()->all();
			
			$cliente = Cliente::where([
				'cedula' => $data['cedula'],
			])->get()->first();

			if(empty($cliente)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Cliente no registrado'
				]);}

			$infos = DB::select('SELECT a.nombre, a.apellido, b.nro_colegiado, b.id, b.estatus, b.created_at FROM contadores a, reldoc b WHERE a.nro_colegiado=b.nro_colegiado AND b.cedula_cli=?', [$cliente->cedula]);
		
			return view('cliente.consultacliente',['cliente' => $cliente, 'infos' => $infos]);
			
	}
}
