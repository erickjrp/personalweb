@extends('layouts.proba.public')

@section('content')

<div class="fondo_gris">

	<div class="container">

		<div class="row">

			<div class="hidden-xs hidden-sm col-md-5 col-lg-4">

				<img class="center-block img-responsive" src="{{ URL::asset('assets/images/proba/index/teacher.png') }}">

			</div>

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">

				<!--Carrusel-->

				<div id="temas" class="carousel slide" data-ride="carousel" data-interval="false">
					<!-- Indicators -->
					<ol class="carousel-indicators carrusel-indicadores">
						<li data-target="#temas" data-slide-to="0" class="active marcadores"></li>
						<li data-target="#temas" data-slide-to="1" class="marcadores"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">

							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Fundamentos de Probabilidad
											</h3>
										</div>
										<div class="panel-body">

											Introducción a la Teoría de la probabilidad: Experimento aleatorio, evento y espacio muestral. Definición de probabilidad. Propiedades de la probabilidad de un suceso. Ley aditiva de probabilidad. Probabilidad condicional. Ley multiplicativa. Dependencia e independencia de sucesos. Teorema de Bayes.
											
											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Variables aleatorias
											</h3>
										</div>
										<div class="panel-body">
											
											Definición de variables aleatorias. Variables aleatorias discretas y continuas. Distribución de probabilidad. Esperanza y Varianza de una variable aleatoria. Función generadora de momentos. Transformación de una variable aleatoria.

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Distribuciones
											</h3>
										</div>
										<div class="panel-body">

											Distribuciones con nombre propio. Distribuciones discretas: Bernoulli, Geométrica, Binomial, Binomial negativa, Hipergeométrica, Uniforme y Poisson. Distribuciones Continuas especiales: Uniforme, Exponencial, Gamma, Normal.

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

							</div>
							
						</div>
						<div class="item">

							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Variables aleatorias: caso bidimensional
											</h3>
										</div>
										<div class="panel-body">

											Distribución de probabilidad Conjunta. Funciones de probabilidad y de densidad conjunta. Función de probabilidad y de densidad marginal. Probabilidad condicional. Esperanza y Varianza. Dependencia e Independencia de variables aleatorias, Covarianza y correlación.

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-12 col-lg-10 col-lg-offset-1">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Teorema Central del Límite e Intervalos de Confianza
											</h3>
										</div>
										<div class="panel-body cuerpo_panel">

											Introducción a las muestras aleatorias y distribuciones de muestreo de estadísticas (media y varianza muestral). Estadística Descriptiva. Intervalos para la media. 

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

							</div>

							<div class="row">

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-lg-offset-1">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Prueba de Hipótesis
											</h3>
										</div>
										<div class="panel-body">

											Errores tipo I y II. Potencia de la Prueba. Significancia.

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">

									<div class="panel panel-primary">
										<div class="panel-heading">
											<h3 class="panel-title text-center">
												Cadenas de Markov
											</h3>
										</div>
										<div class="panel-body">

											Clasificación de estados, vector de probabilidades límite.

											<a href="#">
												Ver detalles
											</a>

										</div>
									</div>

								</div>

							</div>
							
						</div>

					</div>

					<!-- Controls -->
					<a class="left carousel-control carrusel_sin_sombra" href="#temas" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left flechas" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control carrusel_sin_sombra" href="#temas" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right flechas" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<!--Finaliza carrusel-->

				

			</div>

		</div>

	</div>

</div>

@endsection