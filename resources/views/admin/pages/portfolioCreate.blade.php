@extends('admin.admin')
@section('content')
    <div class="row">
        <a href="{{url('/portfolios')}}"> <button type="button" class="btn btn-success pull-right">Portfolio</button></a>

        <div class="div-col-md-8">
            <h1>Create Portfolio</h1>
            <hr>
            <form action="/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary"><br>
                <label class="form-control-label">Work</label>
                <select class="form-control" name="work">
                    <option>Works</option>
                    @foreach($data as $work )
                        <option value=" {{ $work->id }}"> {{ $work->work_name }}</option>
                    @endforeach
                </select><br>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection