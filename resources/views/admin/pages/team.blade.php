@extends('admin.admin')
@section('content')
    <a href="{{ url('/memberCreate') }}"><button type="button" class="btn btn-success pull-right">Add Team Member</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Position</th>
            <th>Avatar</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->surname }}</td>
                <td>{{ $team->position->position_name }}</td>
                <td>{{ $team->avatar }}</td>
                <td>
                    <a href="/team/{{ $team->id }}/memberEdit" style="float: left"><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="team/{{ $team->id }}/delete" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection