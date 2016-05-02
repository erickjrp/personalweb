<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.png') }}">
  
  <title>Erick Ramírez</title>

  <!-- Bootstrap -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Full page -->
  <link href="{{ URL::asset('assets/fullpage/jquery.fullPage.css') }}" rel="stylesheet">
  <!-- Fullscreen modal -->
  <link href="{{ URL::asset('assets/css/fullscreen_modal.css') }}" rel="stylesheet">
  <!-- Hover Effect -->
  <link href="{{ URL::asset('assets/css/hovereffect.css') }}" rel="stylesheet">
  <!-- Estilos propios -->
  <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
  <!-- Timeline -->
  <link href="{{ URL::asset('assets/css/component.css') }}" rel="stylesheet">
</head>
<body>

  @include('layouts.public_components.header')

  <div id="fullpage">

    <div class="section seccion_uno">

      <div class="container">

        @include('public.seccion_uno.index')
        
      </div>

    </div>

    <div class="section seccion_dos">

      <div class="container">

        @include('public.seccion_dos.index')

      </div>

    </div>

    <div class="section seccion_tres">

      <div class="container">

        @include('public.seccion_tres.index')

      </div>

    </div>

    <div class="section seccion_cuatro">

      <div class="container">

        @include('public.seccion_cuatro.index')

      </div>

    </div>

    <div class="section seccion_cinco">

      <div class="container">

        @include('public.seccion_cinco.index')

      </div>

    </div>

    <div class="section seccion_seis">

      <div class="container">

        @include('public.seccion_seis.index')

      </div>

    </div>

    <div class="section fp-auto-height">

      <div class="container">

        @include('public.seccion_siete.index')

      </div>

    </div>

  </div>

  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        @include('public.seccion_cuatro.componentes.modales')

      </div>

    </div>

  </div>

  

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Full page -->
  <script type="text/javascript" src="{{ URL::asset('assets/fullpage/jquery.fullPage.js') }}"></script>
  <!-- Fullscreen modal -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/fullscreen_modal.js') }}"></script>
  <!-- Javascript propio -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/javascript.js') }}"></script>
  <!-- Timeline -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/modernizr.custom.js') }}"></script>
  
</body>
</html>