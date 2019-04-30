@extends('admin.master')

@section('body')
<br/>
    <div class="row">
    <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-body">
        <h1 style="text-align: center;">{{Session::get('message')}}</h1>
        {{--<h1>{{session::get('message')}}</h1>--}}
    <form action="{{route('new-catagorey')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
        <label class="control-label col-md-3 ">Catagorey Name</label>
            <div class="col-md-9">
        <input type="text" name="catagorey_name" class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-md-3 ">Catagorey Details</label>
        <div class="col-md-9">
            <textarea type="text" name="catagorey_details" class="form-control" rows="4" style="resize: vertical"></textarea>
        </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Publication Status</label>
            <div class="col-md-9">
                <input type="radio" name="publish_status" checked value="1">Published
                <input type="radio" name="publish_status"  value="0">Unpublished
            </div>
        </div>
            <div class="form-group">

                <div class="col-md-9 col-md-offset-3">
                    <input type="submit" class="btn btn-success btn-block" name="btn" value="Save Catagorey Info">
                </div>
            </div>

    </form>
    </div>
    </div>
    </div>
    </div>

@endsection