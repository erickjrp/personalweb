<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Erick Ramírez</title>

  <!-- Bootstrap -->
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--Full page-->
  <link href="{{ URL::asset('assets/fullpage/jquery.fullPage.css') }}" rel="stylesheet">
</head>
<body>

  <div id="fullpage">
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
    <div class="section">Some section</div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
  <!--Full page-->
  <script type="text/javascript" src="{{ URL::asset('assets/fullpage/jquery.fullPage.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#fullpage').fullpage();
    });
  </script>
</body>
</html>