<div class="row">

	<div class="col-xs-12">
		
		<p class="titulo_seccion text-center hidden-xs">
			{{ trans('seccion_cinco.educacion_y_experiencia') }}
		</p>
		<p class="titulo_seccion text-center visible-xs-block">
			{{ trans('seccion_cinco.educacion_y_experiencia_xs') }}
		</p>

	</div>

</div>

<div class="row">

	<div class="col-xs-12">
		
		<div class="raya_divisora center-block">
		</div>

	</div>

</div>

<div id="seccion_5">

	<div class="row separacion_fila timeline_xs">

		<div class="hidden-xs col-sm-12">
			
			@include('public.seccion_cinco.componentes.timeline')

		</div>

		<div class="col-xs-12 visible-xs-block">
			
			@include('public.seccion_cinco.componentes.xs')

		</div>

	</div>

</div>