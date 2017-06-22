@extends('admin.admin')
@section('content')
    <form action="/team/{{ $team->id }}"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="form-control-label">Name</label>
        <input class="form-control" type="title" name="name" value=" {{ $team->name }} ">
        <label class="form-control-label">Surname</label>
        <input class="form-control" type="title" name="surname" value=" {{ $team->surname }} ">
        <label class="form-control-label">Position</label>
        <select class="form-control" name="position">
            <option>Positions</option>
            @foreach($positionData as $position )
                <option value=" {{ $position->id }}"> {{ $position->position_name }}</option>
            @endforeach
        </select><br>
        <label class="form-control-label">Avatar</label>
        <input type="file" name="img" class="btn btn-primary"><br>
        <a href="/team">
            <button type="button" class="btn btn-info">Cancel</button>
        </a>
        <input class="btn btn-success" type="submit" name="submit" value="Edit">
    </form>
@endsection