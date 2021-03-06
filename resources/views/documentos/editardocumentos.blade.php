@extends('user.layoutUser')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('nav_sup')
	
@endsection

@section('contenido')
	
	<div class="row">
		<div class="col-10 mx-auto">
			
			<h4><center>Creando Documentos para el Cliente {{ $cliente->nombre." ".$cliente->apellido }}</center></h4>
			<br>			
		</div>
		<div class="col mx-auto" >
			<ul class="nav nav-tabs mx-auto">
			  <li class="nav-item">
				 <a class="nav-link active" id="tabs-atestiguamiento" href="#">Informe Atestiguamiento</a>
			  </li>
			  <li class="nav-item">
				 <a class="nav-link" id="tabs-relacioningreso" href="#">Relación de Ingresos</a>
			  </li>
			  <li class="nav-item">
				 <a class="nav-link" id="tabs-cartapresentacion" href="#">Carta de Presentación</a>
			  </li>
			</ul>
		</div>
	</div>
	<br>
	<div>
		<form method="POST" action="{{ route('documento.actualizardocumento',['cliente'=>$cliente, 'id_doc'=>$ates->id_doc]) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		@include('documentos.editar_atestiguamiento')
		@include('documentos.editar_relacioningresos')
		@include('documentos.editar_cartapresentacion')

			<div class="col mx-auto px-3">
				<div class="row mx-auto">
					<div class="col-3 mx-auto">
						<button class="btn btn-lg btn-danger btn-block" size="10" type="submit">Actualizar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<br>

@endsection
