@extends('admin.admin')

@section('content')
    <a href="{{ url('/positionCreate') }}"><button type="button" class="btn btn-success pull-right">Add Position</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $position)
            <tr>
                <td>{{ $position->id }}</td>
                <td>{{ $position->position_name }}</td>
                <td>
                    <form action="position/{{ $position->id }}/delete" method="post">
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