@extends('product.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product List</h2>
            <hr>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif

        <div style="padding-left: 80%">
            <a class="btn btn-success"  href="{{ route('create.product' ) }}"><i class="fa fa-plus" aria-hidden="true"></i>        New Product</a>
        </div>
    </div>

</div>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th width="150px"> Product Name </th>
            <th width="100px"> Product Code </th>
            <th width="200px"> Details </th>
            <th width="150px"> Product Image </th>
            <th width="350px"> Action </th>
            </tr>
        </thead>

             @foreach ($product as $pro)
                <tr><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Product - Home</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
@include('product.index')
@yield('content')

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

                <td> {{ $pro->product_name }} </td>
                <td> {{ $pro->product_code }} </td>
                <td> {{ $pro->details }} </td>
                <td> <img src="{{ URL::to($pro->logo) }}" height="70px" width="80px"> </td>
                <td> <a href="{{ URL::to('show/product/'.$pro->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ URL::to('edit/product/'.$pro->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ URL::to('delete/product/'.$pro->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">Delete</a> </td>
                </tr>
             @endforeach

    </table>


@endsection
