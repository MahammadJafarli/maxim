@extends('admin.admin')
@section('content')
    <div class="row">
        <button type="button" class="btn btn-success pull-right"><a href="{{url('/positions')}}">Positions</a></button>
        <div class="div-col-md-8">
            <h1>Create Position</h1>
            <hr>
            <form action="/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name"><br>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection