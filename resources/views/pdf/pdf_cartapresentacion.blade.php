<!-- Encabezado -->
		<div class="row">
			<div class="col">
				<img class="" src="/var/www/html/sigeadcon/public/image/logo.jpg" width="80" height="80"> 
			</div>
			<div class="col">
				<br>
				<p class="text-center font-weight-bold">
					CARTA DE PRESENTACIÓN
				</p>
			</div>
		</div>
		<div class="subir-10">
			<div>
				<p class="text-right">
					{{ $cart->fecha }}
				</p>
				<p class="text-justify">
					Licenciado {{ $contador->nombre.' '.$contador->apellido  }}
					<br>
					{{ $cart->direccion }}
				</p>
				<p class="text-justify">
					Estimado Licenciado				
				</p>
				<p class="text-justify">
					En relación a la revisión que ha realizado sobre mis ingresos por un monto de Bs. {{ $rel->ingresos }} por el periodo comprendido entre el {{ $cart->periodo }} me es grato confirmarle lo siguiente: 
				</p>
				<p class="text-justify">
					Reconozco que es de mi responsabilidad la determinación del monto de los ingresos por Bs.	{{ $rel->ingresos }}. Su responsabilidad es la de confrontar tales montos con la documentación presentada.		
				</p>
				<p class="text-justify">
					La documentación que soporta tales ingresos está representada {{ $cart->soporte }}			
				</p>
				<p class="text-justify">
					Todos los ingresos presentados por mí provienen de actividades legítimas y licitas, todas comprobables.			
				</p>
				<p class="text-center">
				Atentamente,
				</p><br>

				<!--Firma del Cliente -->
				<p class="text-center font-weight-bold">
					{{ $cliente->nombre.' '.$cliente->apellido }}
				</p>
				<p class="text-center font-weight-bold">
					Cédula de Identidad No. V- {{ $cliente->cedula }}
				</p><br>
			</div>
		</div>
