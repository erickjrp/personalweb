<div class="row">

	<div class="col-xs-12">
		
		<p class="titulo_seccion text-center">
			{{ trans('seccion_dos.sobre_mi') }}
		</p>

	</div>

</div>

<div class="row">

	<div class="col-xs-12">
		
		<div class="raya_divisora center-block">
		</div>

	</div>

</div>

<div id="seccion_2">

	<div class="row separacion_fila">

		<div class="hidden-xs col-xs-offset-3 col-sm-4 col-sm-offset-0 col-md-3 col-lg-3">
			
			<img src="{{ URL::asset('assets/images/seccion_dos/sobre_mi.jpg') }}" class="img-responsive img-rounded center-block imagen_sobre_mi" alt="Erick Ramírez">

		</div>

		<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">

			<p class="texto_sobre_mi text-justify">
				{{ trans('seccion_dos.primer_parrafo') }}
				<br /><br />
				{{ trans('seccion_dos.segundo_parrafo') }}
			</p>

		</div>

	</div>

	<div class="row separacion_intereses hidden-xs">

		<div class="col-sm-4 col-md-4 col-lg-4">
			
			<p class="titulo_intereses">
				<i class="fa fa-music fa-fw" aria-hidden="true"></i>
				{{ trans('seccion_dos.titulo_musica') }}
			</p>
			<p class="text-justify texto_intereses">
				{{ trans('seccion_dos.musica') }}
			</p>

		</div>

		<div class="col-sm-4 col-md-4 col-lg-4">
			
			<p class="titulo_intereses">
				<i class="fa fa-futbol-o fa-fw" aria-hidden="true"></i>
				{{ trans('seccion_dos.titulo_deporte') }}
			</p>
			<p class="text-justify texto_intereses">
				{{ trans('seccion_dos.deporte') }}
			</p>

		</div>

		<div class="col-sm-4 col-md-4 col-lg-4">
			
			<p class="titulo_intereses">
				<i class="fa fa-graduation-cap fa-fw" aria-hidden="true"></i>
				{{ trans('seccion_dos.titulo_ensenanza') }}
			</p>
			<p class="text-justify texto_intereses">
				{{ trans('seccion_dos.ensenanza') }}
			</p>

		</div>

	</div>

</div>