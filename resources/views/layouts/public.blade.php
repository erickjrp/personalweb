<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  
  <title>Erick Ramírez</title>

  <!-- Bootstrap -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <!--Full page-->
  <link href="{{ URL::asset('assets/fullpage/jquery.fullPage.css') }}" rel="stylesheet">
  <!--Estilos propios-->
  <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
</head>
<body>

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

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <!--Full page-->
  <script type="text/javascript" src="{{ URL::asset('assets/fullpage/jquery.fullPage.js') }}"></script>
  <!--Javascript propio-->
  <script type="text/javascript" src="{{ URL::asset('assets/js/javascript.js') }}"></script>
  
</body>
</html>