<div class="row">

	<div class="col-xs-12">
		
		<p class="titulo_seccion text-center">
			{{ trans('seccion_tres.habilidades') }}
		</p>

	</div>

</div>

<div class="row">

	<div class="col-xs-12">
		
		<div class="raya_divisora center-block">
		</div>

	</div>

</div>

<div id="seccion_3">

	<div class="hidden-xs">
	@include('public.seccion_tres.componentes.sm_md_lg')
	</div>

	<div class="hidden-sm hidden-md hidden-lg">
	@include('public.seccion_tres.componentes.xs')
	</div>

	<div class="row">

		<div class="col-xs-12">

			<div class="alert alert-blue" role="alert">
				
				<strong>{{ trans('seccion_tres.conocimientos') }}:</strong> Github, Amazon Web Services, CakePHP, jQuery, jQuery UI, Foundation, Metro UI, XML, Python, C++, Java, SQL...  

			</div>

		</div>

	</div>

</div>

