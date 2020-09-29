<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Master Page</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('/main/css/bootstrap.min.css') }}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('/main/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('/main/css/style.css') }}">

</head>
<body>
    <div class="container">
    <br><br><br>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')
</div>
  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('/main/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('/main/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('/main/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('/main/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
