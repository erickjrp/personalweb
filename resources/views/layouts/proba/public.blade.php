<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/favicon.png') }}">
  
  <title>Probabilidad - Erickjrp</title>

  <!-- Bootstrap -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Estilos propios -->
  <link href="{{ URL::asset('assets/css/proba_styles.css') }}" rel="stylesheet">
</head>
<body>

  <div class="container">

    @include('public.proba.index')

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <!-- Javascript propio -->
  <script type="text/javascript" src="{{ URL::asset('assets/js/proba_javascript.js') }}"></script>
  
</body>
</html>