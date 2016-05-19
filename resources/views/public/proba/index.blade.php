@extends('layouts.proba.public')

@section('content')

<div class="fondo_gris">

	<div class="container">

		@include('public.proba.index_components.galeria_md_lg')

		@include('public.proba.index_components.galeria_xs_sm')

	</div>

</div>

<div class="container">

	<div class="row contenido_destacado">

		<div class="col-xs-12 text-center">

			<h2>
				<i>Contenido destacado</i>
			</h2>

		</div>

	</div>

	<div class="row">

		<div class="col-xs-12">
			
			<div class="raya_divisora center-block">
			</div>

		</div>

	</div>

	<div class="row fila_thumbnails">

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/combinatoria.jpg') }}" alt="Tabla de combinaciones">

				<div class="caption">

					<h3 class="text-center">
						Tabla combinatorias
					</h3>

					<p class="text-justify">
						Con esta tabla podrás identificar y resolver fácilmente los ejercicios de permutaciones ordinarias y con repetición, variaciones ordinarias y con repetición, y combinaciones
						ordinarias y con repetición. 
					</p>

					<p>
						<a href="{{ URL::asset('assets/images/proba/index/Tabla_combinaciones.pdf') }}" class="btn btn-primary btn-block" role="button" target="_blank">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/imagen_tabla.jpg') }}" alt="Tabla de distribuciones">

				<div class="caption">

					<h3 class="text-center">
						Tabla de distribuciones
					</h3>

					<p class="text-justify">
						Esta tabla muestra lo siguiente por cada distribución:
						¿qué mide la variable aleatoria?, parametros, función de densidad de probabilidad (fdp), función de distribución acumulada (Fda), Esperanza y Varianza. 
					</p>

					<p>
						<a href="#" class="btn btn-primary btn-block" role="button">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/tabla_test.jpg') }}" alt="Tabla de Prueba de hipótesis">

				<div class="caption">

					<h3 class="text-center">
						Prueba de hipótesis
					</h3>

					<p class="text-justify">
						El resumen de lo más importante del tema "Prueba de hipótesis"<show class="visible-sm-inline">.</show> <hide class="hidden-sm"> se encuentra en esta tabla:
						Casos de cola izquierda, derecha, doble cola; errores tipo I y II, nivel de significancia, potencia de la prueba, y más. </hide>
					</p>

					<p>
						<a href="#" class="btn btn-primary btn-block" role="button">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/tabla_normal_thumb.jpg') }}" alt="Tabla de normal estándar">

				<div class="caption">

					<h3 class="text-center">
						Normal estándar
					</h3>

					<p class="text-justify">
						Se muestran los valores negativos y positivos de la acumulada. 
					</p>

					<p>
						<a href="{{ URL::asset('assets/images/proba/index/Tabla_normal_estandar.pdf') }}" class="btn btn-primary btn-block" role="button" target="_blank">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/tabla_t_student.jpg') }}" alt="Tabla de t de Student">

				<div class="caption">

					<h3 class="text-center">
						T de Student
					</h3>

					<p class="text-justify">
						Valores acumulativos de la distribución t de Student. 
					</p>

					<p>
						<a href="{{ URL::asset('assets/images/proba/index/Tabla_t_de_Student.pdf') }}" class="btn btn-primary btn-block" role="button" target="_blank">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

			<div class="thumbnail">

				<img src="{{ URL::asset('assets/images/proba/index/tabla_chi.jpg') }}" alt="Tabla de chi cuadrada">

				<div class="caption">

					<h3 class="text-center">
						Ji cuadrada
					</h3>

					<p class="text-justify">
						Valores acumulativos de la distribución ji cuadrada.  
					</p>

					<p>
						<a href="{{ URL::asset('assets/images/proba/index/Tabla_chi_cuadrada.pdf') }}" class="btn btn-primary btn-block" role="button" target="_blank">
							Ver tabla
						</a>
					</p>

				</div>

			</div>

		</div>

	</div>

</div>

@endsection