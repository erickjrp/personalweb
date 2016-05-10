<div id="seccion_7">

	<div class="espaciado_footer">

		<div class="row">

			<div class="col-xs-12 text-center">

				<a href="https://www.facebook.com/erick.ramirez1991" target="_blank">
					<img src="{{ URL::asset('assets/images/seccion_siete/facebook.png') }}" class="inline-block" alt="Facebook">
				</a>

				<a href="https://twitter.com/Erickjrp" target="_blank">
					<img src="{{ URL::asset('assets/images/seccion_siete/twitter.png') }}" class="inline-block" alt="Twitter">
				</a>

				<a href="https://www.instagram.com/erickjrp/" target="_blank">
					<img src="{{ URL::asset('assets/images/seccion_siete/instagram.png') }}" class="inline-block" alt="Instagram">
				</a>

			</div>

		</div>

		<div class="row derechos_reservados">

			<div class="col-xs-12 text-center">

				<strong>

					© 2016 Erick Ramírez. {{ trans('seccion_siete.derechos') }}.

				</strong>

			</div>

		</div>

		<div class="row">

			<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 text-center">

				<hr>

			</div>

		</div>

		<div class="row">

			<div class="col-xs-12 text-center">

				{!! Form::open(array('url' => array('/language'), 'method' => 'POST', 'class' => 'form-inline')) !!}

					<div class="form-group">

						<label for="idioma">
							{{ trans('seccion_siete.idioma') }}:
						</label>

						<select class="form-control input-sm" id="idioma" name="idioma">

							<option value="en" @if($language == 'en') selected @endif>
								English (US) 
							</option>

							<option value="es" @if($language == 'es') selected @endif>
								Español (ES)
							</option>

						</select>

					</div>

					<button type="submit" class="btn btn-default btn-sm">
						<i class="fa fa-language fa-fw" aria-hidden="true"></i>
						{{ trans('seccion_siete.seleccionar') }}
					</button>

				{!! Form::close() !!}

			</div>

		</div>

	</div>

</div>