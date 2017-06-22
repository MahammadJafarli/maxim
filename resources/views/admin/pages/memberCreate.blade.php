@extends('admin.admin')
@section('content')
    <div class="row">
        <a href="{{url('/team')}}"> <button type="button" class="btn btn-success pull-right">Team</button></a>

        <div class="div-col-md-8">
            <h1>Create Member</h1>
            <hr>
            <form action="/create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                <label class="form-control-label">Surname</label>
                <input class="form-control" type="title" name="surname">
                <label class="form-control-label">Position</label>

                <select class="form-control" name="position">
                    <option>Positions</option>
                    @foreach($data as $position )
                        <option value=" {{ $position->id }}"> {{ $position->position_name }}</option>
                    @endforeach
                </select><br>

                <input type="file" name="img" class="btn btn-primary"><br>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection