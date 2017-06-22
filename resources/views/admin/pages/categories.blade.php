@extends('admin.admin')

@section('content')
    <a href="{{ url('/categoryCreate') }}"><button type="button" class="btn btn-success pull-right">Add Category</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <form action="category/{{ $category->id }}/delete" method="post">
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