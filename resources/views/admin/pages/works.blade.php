@extends('admin.admin')

@section('content')
    <a href="{{ url('/workCreate') }}"><button type="button" class="btn btn-success pull-right">Add Work</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $work)
            <tr>
                <td>{{ $work->id }}</td>
                <td>{{ $work->work_name }}</td>
                <td>
                    <form action="work/{{ $work->id }}/delete" method="post">
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