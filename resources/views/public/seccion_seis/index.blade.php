<div class="row">

	<div class="col-xs-12">
		
		<p class="titulo_seccion text-center">
			Contacto
		</p>

	</div>

</div>

<div class="row">

	<div class="col-xs-12">
		
		<div class="raya_divisora_blanca center-block">
		</div>

	</div>

</div>

<div id="seccion_6">

	<div class="row separacion_fila contacto_fila_xs">

		<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

			{!! Form::open(array('url' => array('/enviarcorreo'), 'method' => 'POST')) !!}

				<div class="form-group">
					<label for="name">
						<i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
						Nombre
					</label>
					<input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre y apellido" required>
				</div>

				<div class="form-group">
					<label for="email">
						<i class="fa fa-at fa-fw" aria-hidden="true"></i>
						Correo electrónico
					</label>
					<input type="email" class="form-control" id="email" name="correo" placeholder="correo@ejemplo.com" required>
				</div>

				<div class="form-group">
					<label for="mensaje">
						<i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i>
						Mensaje
					</label>
					<textarea class="form-control" id="mensaje" name="mensaje" rows="6" required></textarea>
				</div>

				<button type="submit" class="btn btn-default btn-block">
					<i class="fa fa-paper-plane-o fa-fw" aria-hidden="true"></i>
					Enviar mensaje
				</button>

			{!! Form::close() !!}

		</div>

	</div>

</div>
