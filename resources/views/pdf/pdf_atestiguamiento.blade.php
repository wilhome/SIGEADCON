		<!-- Encabezado -->
		<div class="row">
			<div class="col">
				<img class="" src="/var/www/html/sigeadcon/public/image/logo.jpg" width="80" height="80"> 
			</div>
			<div class="col">
				<br>
				<p class="text-center font-weight-bold">
					INFORME DE ATESTIGUAMIENTO SOBRE INGRESOS
				<br>
					  DE PERSONAS NATURALES
				</p>
			</div>
		</div>
		<!--Cuerpo de la Página -->
		<div class="subir-10">
			<div>
				<!--Institución-->
				<p class="text-justify font-weight-bold">
					<span>Señores:</span>
					<br>
					<span>{{ $ates->institucion }}</span>
				</p>
				
				<p class="text-justify">
				He sido contratado para informar sobre los ingresos detallados en la relación adjunta, para el periodo entre el {{ $ates->periodo_1 }}, del ciudadano {{ strtoupper($cliente->nombre)." ".strtoupper($cliente->apellido) }}, titular de la cédula de identidad No. V–{{ $cliente->cedula }}, correspondientes a sus actividades dedicadas {{ $ates->actividad }}.
				</p>

				<p class="text-justify">
				{{ strtoupper($cliente->nombre)." ".strtoupper($cliente->apellido) }} es responsable de la información suministrada y de la determinación del monto de los ingresos. 
				</p>
			
				<p class="text-justify">
				Mi responsabilidad consiste en expresar una conclusión sobre la procedencia de dichos ingresos, con base en mis procedimientos, los cuales fueron realizados de conformidad con la Norma Internacional para Trabajos de Atestiguamiento, distintos de auditorías y revisión de estados financieros, número 3000 (NITA 3000). 
				</p>

				<p class="text-justify">
				Un trabajo de atestiguamiento para informar sobre los ingresos de personas naturales implica llevar a cabo procedimientos de auditoria para obtener evidencia sobre la procedencia de dichos ingresos. La norma prevé que cumpla con los requerimientos éticos, y que planifique y realice mis procedimientos para obtener una seguridad razonable de que los ingresos presentados en la relación adjunta tienen una procedencia adecuada. Los procedimientos seleccionados dependen del juicio del auditor independiente, lo cual incluye la revisión de los documentos que demuestran la procedencia adecuada de los ingresos. 
				</p>
				
				<p class="text-justify">
				Mi conclusión se ha formado sobre la base de la evidencia obtenida. Los criterios que utilice para formar mi conclusión son los relacionados con la procedencia de los ingresos presentados en la relación adjunta perteneciente al ciudadano {{ strtoupper($cliente->nombre)." ".strtoupper($cliente->apellido) }} correspondiente al periodo comprendido entre el {{ $ates->periodo_2 }}. En conclusión, respecto a todo lo importante, los ingresos presentados en la relación adjunta tienen una procedencia adecuada. 
				</p>

				<p class="text-justify">
				Este informe está dirigido únicamente para {{ $ates->motivo }}.
				</p>
				<br>
				<!--Firma del Contador -->
				<p class="text-center font-weight-bold">
				Lic. {{ $contador->nombre.' '.$contador->apellido }}
				<br>
				No. {{ $contador->nro_colegiado }} del Distrito Capital
				</p>
	
				<p class="text-justify">
				{{ $ates->fecha }}
				</p>
	
			</div>
		</div>
	
