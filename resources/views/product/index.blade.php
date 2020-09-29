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

            <tr>
            <th width="150px"> Product Name </th>
            <th width="100px"> Product Code </th>
            <th width="200px"> Details </th>
            <th width="150px"> Product Image </th>
            <th width="350px"> Action </th>
            </tr>

             @foreach ($product as $pro)
                <tr>
                <td> {{ $pro->product_name }} </td>
                <td> {{ $pro->product_code }} </td>
                <td> {{ $pro->details }} </td>
                <td> <img src="{{ URL::to($pro->logo) }}" height="70px" width="80px"> </td>
                <td> <a href="{{ URL::to('show/product/'.$pro->id) }}" class="btn btn-info" >Sh<i class="fas fa-eye"></i>w</a>
                    <a href="{{ URL::to('edit/product/'.$pro->id) }}" class="btn btn-primary"><i class="fas fa-edit">Edit</i></a>
                    <a href="{{ URL::to('delete/product/'.$pro->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')"><i class="fas fa-trash">Delete</i></a> </td>
                </tr>
             @endforeach
    </table>
    {{ $product->links() }}
@endsection
