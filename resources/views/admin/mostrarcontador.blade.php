@extends('admin.layoutAdmin')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('contenido')
	<div class="row">
		<div class="col-10 mx-auto">
			<h4 class="card-title"><center>Detalles del Contador</center></h4>		
		</div>
		<div class="col-8 mx-auto card borderRight borderLeft borderTop">
		<br>	
		  <div class="row">
			<br>
			<div class="col-4">
				<p class="font-weight-bold text-center">Nombre y Apellido:</p>
				<p class="text-center">{{$contador->nombre." ".$contador->apellido}}</p>
			</div>
			<div class="col-4">
				<p class="font-weight-bold text-center">Cédula:</p>
				<p class="text-center">{{$contador->cedula}}</p>
			</div>
			<div class="col-4">
				<p class="font-weight-bold text-center">Nro. Colegiado:</p>
				<p class="text-center">{{$contador->nro_colegiado}}</p>
			</div>
		  </div>
		  <div class="row">
				<br>
				<div class="col-4">
					<p class="font-weight-bold text-center">Correo Electrónico:</p>
					<p class="text-center">{{$contador->email}}</p>
				</div>
				<div class="col-4">
					<p class="font-weight-bold text-center">Teléfono:</p>
					<p class="text-center">{{$contador->telefono}}</p>
				</div>
				<div class="col-4">
					<p class="font-weight-bold text-center">Estatus:</p>
					@if($contador->estatus == 0)
					<p class="text-center text-danger"> 
							Por aprobación |
							<a href="{{route('admin.cambiarestatuscontador',['contador'=>$contador,'url'=>'admin.mostrarcontador'])}}" class="btn btn-link">
					<span title="Cambiar Estatus" class="oi oi-transfer text-danger">
							</a>
					@else
					<p class="text-center text-success"">
							Aprobado |<a href="{{route('admin.cambiarestatuscontador',['contador'=>$contador,'url'=>'admin.mostrarcontador'])}}" class="btn btn-link">
					<span title="Cambiar Estatus" class="oi oi-transfer text-success">
					</a>
					@endif 
					</p>
				</div>
			</div>
			<div class="row">
				<br>
				<div class="col-4">
				</div>
				<div class="col-4 mx-auto">
					<form method="POST" action="{{route('admin.destroycontador',['contador'=>$contador])}}">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger">
							Eliminar Contador
						</button>
					</form>
				</div>
				<div class="col-4">
				</div>
		  </div>
			<br>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-10 mx-auto">
			<h4><center>Clientes asociados al Contador</center></h4>
			<br>			
		</div>
		<div class="col mx-auto">
			<div class="table-responsive">
				@yield("contenido")
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center">Nro</th>
		      		<th class="text-center">Cliente</th>
		      		<th class="text-center">Cédula</th>
						<th class="text-center">Teléfono</th>
						<th class="text-center">Email</th>
                </tr>
              </thead>
              <tbody>
					@if($clientes->isNotEmpty())
						@foreach ($clientes as $cliente)
					<tr>
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->id }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $cliente->nombre." ".$cliente->apellido }}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->cedula }}
						</td> 
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->telefono }}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $cliente->email }}
						</td>
		    		</tr>
					@endforeach
              @else
					<tr></tr>
				   <tr>
						<td colspan="6">
							<br>
							<p><center>No tiene clientes registrados</center></p>
						</td>
		    		</tr>	
					@endif
              </tbody>
            </table>
          </div>
		</div>
	</div>



@endsection
