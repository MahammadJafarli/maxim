@extends('admin.admin')
@section('content')
    <div class="row">
        <a href="{{url('/service')}}"> <button type="button" class="btn btn-success pull-right">Services</button></a>

        <div class="div-col-md-8">
            <h1>Create Service</h1>
            <hr>
            <form action="/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Title</label>
                <input class="form-control" type="title" name="title">
                <label class="form-control-label">Description</label>
                <textarea name="description" class="form-control"></textarea><br>
                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary"><br>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
    @endsection