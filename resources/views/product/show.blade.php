@extends('product.layout')

@section('content')
<h1> Product List </h1>
 <div style="padding-left: 80%">
            <a class="btn btn-success" href="{{ route('product.index' ) }}">Back</a>
        </div>

<div class="row">
    <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Product Name:</strong>
        {{ $data->product_name }}
        </div>

    <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Product Code:</strong>
        {{ $data->product_code }}
        </div>

    <div class="col-xs-9 col-sm-9 col-md-9">
        <strong>Product Details:</strong>
        {{ $data->details }}
        </div>
</div>
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <img src="{{ URL::to($data->logo) }}" height="300px" width="400px">
        </div>
</div>
@endsection
