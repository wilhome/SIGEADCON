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

class ContadorController extends Controller
{
    public function validar()
	 {	
			
		$data = request()->all();
		
		$contador = Contador::where([
			'nro_colegiado' => $data['nro_colegiado'],
			'password' => $data['password']
		])->get()->first();		

		if (empty($contador)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Usuario o contraseña incorrecta'
				]);
		}else{
			session(['contador' => $contador]);
		}
		if ($contador->estatus==false){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Aun no ha sido aprobado'
				]);
		}
			return redirect()->route('usuario.inicio');
	}	

	public function inicio()
	{	
			$contador = session()->get('contador');
			$clientes = Cliente::where([
				'nro_colegiado_cont' => $contador['nro_colegiado'],
			])->get();
			return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
			
	}

	public function crearcliente(){
		$contador = session()->get('contador');
		return view('user.creacliente')
			->with('contador', $contador);
	}

	public function agregarcliente()
	{	
			$data = request()->all();
			$contador = session()->get('contador'); 
			Cliente::create([
			'nombre' => $data['nombrecli'],
			'apellido' => $data['apellidocli'],
			'cedula' => (int) $data['cedulacli'],
			'email' => $data['emailcli'],
			'telefono' => $data['telfcli'],
			'nro_colegiado_cont' => $contador->nro_colegiado,
			]);

			return redirect()->route('usuario.inicio',array(
				'contador' => $contador, 
			));		
	}
	
	public function buscarcliente(){
	
		$data = request()->all();	
		$contador = session()->get('contador'); 
		$clientes = Cliente::where([
			'nombre' => $data['buscarcli'],
			'nro_colegiado_cont'=> $contador->nro_colegiado
			])->get();
		if($clientes->isNotEmpty()){
			return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
		}else
		{
			$clientes = Cliente::where([
			'cedula' => (int) $data['buscarcli'],
			'nro_colegiado_cont'=> $contador->nro_colegiado
			])->get();
			if($clientes->isNotEmpty()){
				return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
			}else{
				$clientes = Cliente::where([
				'apellido' => $data['buscarcli'],
				'nro_colegiado_cont'=> $contador->nro_colegiado
				])->get();
				return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
			}
		}
	}
	public function destroycliente($id){
		
		$cliente = Cliente::where([
		'id'=>$id,
		])->get()->first();

		$id_reldoc = RelDoc::where([
			'cedula_cli' => $cliente->cedula,
		])->get();
		
		foreach ($id_reldoc as $id_doc){
			RelDoc::destroy($id_doc->id);

			$id_cart = RelacionIngresos::where([
			'id_doc' => $id_doc->id,
			])->get()->first();
			CartaPresentacion::destroy($id_cart->id);	
			
			$id_rel = RelacionIngresos::where([
			'id_doc' => $id_doc->id,
			])->get()->first();
			RelacionIngresos::destroy($id_rel->id);

			$id_ates = Atestiguamiento::where([
			'id_doc' => $id_doc->id,
			])->get()->first();
			Atestiguamiento::destroy($id_ates->id);
		}		

		Cliente::destroy($id);

		$contador = session()->get('contador');
		$clientes = Cliente::where([
			'nro_colegiado_cont' => $contador['nro_colegiado'],
		])->get();
		return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
	}

	public function editarcliente($id){
		
		$cliente = Cliente::where([
			'id' => $id,
		])->get()->first();

		$contador = session()->get('contador');
		return view('user.editarcliente',['contador'=>$contador, 'cliente' => $cliente]);
	}

	public function updatecliente(Cliente $cliente){
		
		$data = request()->all();
		$contador = session()->get('contador'); 

		$cliente->nombre = $data['nombrecli'];
		$cliente->apellido = $data['apellidocli'];
		$cliente->cedula = (int) $data['cedulacli'];
		$cliente->email = $data['emailcli'];
		$cliente->telefono = $data['telfcli'];
		$cliente->nro_colegiado_cont = $contador->nro_colegiado;
		$cliente->save();

		$clientes = Cliente::where([
				'nro_colegiado_cont' => $contador['nro_colegiado'],
			])->get();
			return view('user.inicio',['contador'=>$contador, 'clientes' => $clientes]);
	}

	public function mostrarcliente(Cliente $cliente){
		$contador = session()->get('contador');
		$documentos = RelDoc::where([
			'nro_colegiado' => $contador->nro_colegiado,
			'cedula_cli' => $cliente->cedula,
		])->orderBy('updated_at','des')->get();
		return view('user.mostrarcliente',['contador' => $contador, 'cliente' => $cliente,'documentos' => $documentos]);
	}

	public function mostrarperfil(){
		$contador = session()->get('contador'); 
		return view('user.verperfil',['contador'=>$contador]);
	}

	public function editarperfil(){
		$contador = session()->get('contador'); 
		return view('user.editarperfil',['contador'=>$contador]);
	}

	public function updatecontador(Contador $contador){
		$data = request()->all();

		$contador->nombre = $data['nombrecont'];
		$contador->apellido = $data['apellidocont'];
		$contador->cedula = (int) $data['cedulacont'];
		$contador->email = $data['emailcont'];
		$contador->telefono = $data['telfcont'];
		$contador->nro_colegiado = $contador->nro_colegiado;
		$contador->institucion_univ = $data['inst_cont'];
		$contador->ano = $data['ano_grad'];
		$contador->save();
		
		$contador = Contador::where([
			'nro_colegiado' => $data['nro_colegiado'],
		])->get()->first();

		session(['contador' => $contador]);

		return view('user.verperfil',['contador'=>$contador]);
	}

	public function registrarcontador(){
		$data = request()->all();

		$contador = Contador::where([
			'nro_colegiado' => $data['nro_colegiado'],		
		])->get()->first();
		if (!empty($contador)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Nro. de Colegiado ya registrado',
				]);
		}

		$contador = Contador::where([
			'cedula' => $data['cedulacont'],		
		])->get()->first();
		if (!empty($contador)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Usuario ya registrado',
				]);
		}

		$contador = Contador::where([
			'email' => $data['emailcont'],		
		])->get()->first();
		if (!empty($contador)){
			return redirect()
				->route('home')
				->withErrors([
					'msj_error_home' => 'Usuario ya registrado',
				]);
		}

		Contador::create([
			'nombre' => $data['nombrecont'],
			'apellido' => $data['apellidocont'],
			'cedula' => (int) $data['cedulacont'],
			'email' => $data['emailcont'],
			'telefono' => $data['telfcont'],
			'nro_colegiado' => $data['nro_colegiado'],
			'institucion_univ' => $data['inst_cont'],
			'ano' => $data['ano_grad'],
			'password' => $data['password']
			]);

		return view('success');
	}

	private function mensaje_error_home($mensaje){

	}
	
}
