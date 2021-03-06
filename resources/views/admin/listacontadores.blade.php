@extends('admin.layoutAdmin')

@section('titulo')
	Sistema SIGEADCON
@endsection

@section('contenido')
	<div class="row">
		<div class="col mx-auto">
			<h4><center>Lista de Contadores registrados en el Sistema</center></h4>
			<br>
			<div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th class="text-center">Nombre y Apellido</th>
						<th class="text-center">Cédula</th>
		      		<th class="text-center">Nro Colegiado</th>
						<th class="text-center">Correo</th>
		      		<th class="text-center">Estatus</th>
						<th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
 				  @if($contadores->isNotEmpty())
					@foreach ($contadores as $contador)
					<tr>
						<td class="text-center" style="vertical-align:middle;">
							{{ $contador->nombre." ".$contador->apellido }}
						</td>
						<td class="text-center" style="vertical-align:middle;">
							{{ $contador->cedula }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $contador->nro_colegiado }}
						</td>
					   <td class="text-center" style="vertical-align:middle;">
							{{ $contador->email }}
						</td>
						@if($contador->estatus == 0) 
							<td class="text-center text-danger" style="vertical-align:middle;"> 
									Por aprobación 
							</td>
						@else
							<td class="text-center text-success" style="vertical-align:middle;">
									Aprobado
							</td>
							@endif 
					   <td class="text-center" style="vertical-align:middle;">
						  <a href="{{route('admin.mostrarcontador',['contador'=>$contador])}}" class="btn btn-link">
								<span title="Ver Contador" class="oi oi-eye text-danger">
							</a>|
							<a href="{{route('admin.cambiarestatuscontador',['contador'=>$contador, 'url'=>'admin.listacontadores'])}}" class="btn btn-link">
								<span title="Cambiar Estatus" class="oi oi-transfer text-danger">
							</a>
					   </td>
		    		</tr>	
					@endforeach
              @else
					<tr></tr>
				   <tr>
						<td colspan="6">
							<br>
							<p><center>No hay resultados de búsqueda o no hay contadore registrados</center></p>
						</td>
		    		</tr>		
				  @endif
              </tbody>
            </table>
          </div>
		</div>
	</div>
@endsection
