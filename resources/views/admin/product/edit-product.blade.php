@extends('admin.master')

@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 style="text-align: center;">{{Session::get('message')}}</h1>
                    {{--<h1>{{session::get('message')}}</h1>--}}
                    <form action="{{route('update-product')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Catagorey Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="catagorey_id">
                                    <option>---Select Catagorey---</option>
                                    @foreach($catagories as  $catagorey)
                                        <option value="{{$catagorey->id}}">{{$catagorey->catagorey_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    <option>---Select Brand---</option>
                                    @foreach($brands as  $brand)
                                        <option value="{{$brand->id}}">{{$brand ->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" value="{{$product->product_name}}" name="product_name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_price}}" name="product_price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Quantity</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_quantiy}}" name="product_quantity" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Skew</label>
                            <div class="col-md-9">
                                <input type="number" value="{{$product->product_skew}}" name="product_skew" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Short Description</label>
                            <div class="col-md-9">
                                <textarea  value="{{$product->product_short_description}}" name="product_short_description" class="form-control" rows="4" style="resize: vertical"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Long Description</label>
                            <div class="col-md-9">
                                <textarea  value="{{$product->product_long_description}}" id="editor" name="product_long_description" class="form-control" rows="6" style="resize: vertical"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 ">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" value="{{$product->product_image}}" name="product_image" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <input type="radio" name="publish_status" checked value="{{$product->publish_status}}">Published
                                <input type="radio" name="publish_status"  value="{{$product->publish_status}}">Unpublished
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" class="btn btn-danger btn-block" name="btn" value="Updae product Info">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection