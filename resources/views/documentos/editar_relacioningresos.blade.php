<div class="row">
<div id="relacioningresos" class="col-10 mx-auto card marco-documento" style='display:none'>
	<br/>
	<div class="documento mx-auto">
		<!--Encabezado -->
		<div class="row">
			<div class="col-1">
				<img class="" src="{{ asset('image/logo.png') }}" width="80" height="80"> 
			</div>
			<div class="col-11">
				<br>
				<p class="text-center">
					<input class="campo-rellernar text-center nombrecli" size="20" type="text" value="{{ $cliente->nombre.' '.$cliente->apellido }}">
				</p>
				<p class="text-center font-weight-bold">
					RELACIÓN DE INGRESOS
				</p>
				<p class="text-center">
					<input class="campo-rellernar text-center" size="40" type="text" name="periodo_rel" id="periodo_rel" placeholder="Periodo" value="{{ $ates->periodo_1 }}">
				</p>
			</div>
		</div>
		<br>
		<!--Cuerpo del Documento -->
			<!--Título -->
		<div class="row">
			<div class="col-8">
				<ul class="nav flex-column mb-2">
              <li class="nav-item">
                <span class="font-weight-bold">Detalles de los Ingresos</span>
              </li>
				</ul>
			</div>
			<div class="col-4">
				<ul class="nav flex-column mb-2">
              <li class="nav-item">
                <span class="font-weight-bold">Bolívares</span>
              </li>
				</ul>
			</div>
		</div>
		<br/>
			<!-- Sueldo -->
		<div class="row">
			<div class="col-8">
				<ul class="nav flex-column mb-2">
              <li class="nav-item">
                <span>1. Sueldo</span>
              </li>
				</ul>
			</div>
			<div class="col-4">
				<ul class="nav flex-column mb-2">
              <li class="nav-item">
              	<span>
					<input class="campo-rellernar montos text-center" size="10" type="text" name="sueldo" id="sueldo" placeholder="Sueldo" value={{ $rel->sueldo }}>
					</span>
              </li>
				</ul>
			</div>
		</div>
	
				<!-- Honorarios Profesionales-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <span>2. Honorarios profesionales</span>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span>
						<input class="campo-rellernar montos text-center" size="10" type="text" name="honorarios" id="honorarios" placeholder="Honorarios" value={{ $rel->honorarios }}>
						</span>
		           </li>
					</ul>
				</div>
			</div>
		
			<!-- Ventas de Mercancias-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <span>3. Ventas de mercancias</span>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span>
						<input class="campo-rellernar montos text-center" size="10" type="text" name="ventas" id="ventas" placeholder="Ventas" value={{ $rel->ventas }}>
						</span>
		           </li>
					</ul>
				</div>
			</div>

			<!-- Alquiler de Inmuebles-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <span>4. Alquiler de inmuebles</span>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span>
						<input class="campo-rellernar montos text-center" size="10" type="text" name="alquiler" id="alquiler" placeholder="Alquiler" value={{ $rel->alquiler }}>
						</span>
		           </li>
					</ul>
				</div>
			</div>

			<!-- Intereses obtenidos-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <span>5. Intereses obtenidos</span>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span>
						<input class="campo-rellernar montos text-center" size="10" type="text" name="intereses" id="intereses" placeholder="Intereses" value={{ $rel->intereses }}>
						</span>
		           </li>
					</ul>
				</div>
			</div>
	
			<!-- Dividendos percibidos-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <span>6. Dividendos percibidos</span>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span>
						<input class="campo-rellernar montos text-center" size="10" type="text" name="dividendos" id="dividendos" placeholder="Dividendos" value={{ $rel->dividendos }}>
						</span>
		           </li>
					</ul>
				</div>
			</div>
			
			<!-- Línea de separación-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<span class="font-weight-bold">
						_____________
						</span>
		           </li>
					</ul>
				</div>
			</div>

			<!-- Total de Ingresos Trimestral-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <p class="font-weight-bold text-right">Total de Ingresos Trimestrales: </p>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<p>
						<input class="campo-rellernar text-center" size="10" type="text" name="total_ingresos" id="total_ingresos" placeholder="Total" value={{ $rel->ingresos }} readonly>
						</p>
		           </li>
					</ul>
				</div>
			</div>
			<p></p>
			<!-- Promedio Mensual-->
			<div class="row">
				<div class="col-8">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		             <p class="text-center">PROMEDIO MENSUAL: </p>
		           </li>
					</ul>
				</div>
				<div class="col-4">
					<ul class="nav flex-column mb-2">
		           <li class="nav-item">
		           	<p>
						<input class="campo-rellernar text-center" size="10" type="text" name="promedio" id="promedio" placeholder="Promedio" value={{ $rel->promedio }} readonly>
						</p>
		           </li>
					</ul>
				</div>
			</div>
			<br>
			<!-- Párrafo y Pie-->
			<div class="row">
				<div class="col">
					<!-- Párrafo -->
					<p class="text-justify">
					LEGITIMACIÓN DE CAPITALES: Todos y cada uno de los ingresos detallados en esta relación que le 
					he facilitado para su revisión, por un monto promedio de Bs. 
					<input class="campo-rellernar text-center" size="10" type="text" name="promedio_text" id="promedio_text" placeholder="Promedio" value={{ $rel->promedio }} readonly>
					mensuales, provienen de actividades legítimas y de comprobable lícito ejercicio. 
					</p><br>

					<!--Firma del Cliente -->
					<p class="text-center font-weight-bold">
					{{ $cliente->nombre.' '.$cliente->apellido }}
					</p>
					<p class="text-center font-weight-bold">
					Cédula de Identidad No. V- {{ $cliente->cedula }}
					</p><br>
	
					<!--Pie -->
					<p class="text-justify font-weight-bold">
					Véase informe del contador público independiente sobre revisión de ingresos de personas
					 naturales elaborado en papel de Seguridad Nro  
					<input class="campo-rellernar" size="20" type="text" name="nro_seg" id="nro_seg" placeholder="Nro. de Seguridad" value={{ $rel->nro_seguridad }}>
					</p>
				</div>
			</div>
	</div>
</div>
</div>
