
@extends('admin.admin')
@section('content')
    <a href="{{ url('blogCreate') }}">
        <button type="button" class="btn btn-success pull-right">Add Blog</button>
    </a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Category</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->post_title }}</td>
                <td>{{ $blog->post_text }}</td>
                <td>{{ $blog->category_id }}</td>
                <td>{{ $blog->post_image }}</td>
                <td>
                    <a href="/blog/{{ $blog->id }}/blogEdit"><button type="button" class="btn btn-primary">Edit</button></a>
                    <form action="blog/{{ $blog->id }}/delete" method="post">
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