@extends('admin.master')

@section('body')

    <br/>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Catagorey Name</th>
                            <th>Brand Details</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product skew</th>
                            <th>Product Short Description </th>
                            <th>Product Long Description </th>
                            <th>Product Image </th>
                            <th>Publication Status </th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr class="odd gradeX">
                                <td>{{$product->catagorey_id}}</td>
                                <td>{{$product->brand_id}}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>{{ $product->product_quantity }}</td>
                                <td>{{ $product->product_skew }}</td>
                                <td>{{ $product->product_short_description }}</td>
                                <td>{{ $product->product_long_description }}</td>
                                <td>{{ $product->product_image}}</td>
                                <td>{{ $product->publish_status }}</td>

                                <td class="center">
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-info btn-xs">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>


                                </td>
                                @endforeach
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection