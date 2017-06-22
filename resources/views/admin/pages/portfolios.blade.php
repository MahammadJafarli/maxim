@extends('admin.admin')
@section('content')
    <a href="{{ url('/portfolioCreate') }}"><button type="button" class="btn btn-success pull-right">Add Portflio</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $portfolio)
            <tr>
                <td>{{ $portfolio->id }}</td>
                <td>{{ $portfolio->name }}</td>
                <td>{{ $portfolio->work_id }}</td>
                <td>{{ $portfolio->image }}</td>
                <td>
                    <a href="/portfolio/{{ $portfolio->id }}/portfolioEdit" style="float: left"><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="portfolio/{{ $portfolio->id }}/delete" method="post">
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