@extends('admin.admin')
@section('content')
    <form action="/blog/{{ $blog->id }}"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="form-control-label">Title</label>
        <input class="form-control" type="title" name="title" value=" {{ $blog->post_title }} ">
        <label class="form-control-label">Text</label>
        <input class="form-control" type="title" name="text" value=" {{ $blog->post_text }} ">
        <label class="form-control-label">Category</label>
        <select class="form-control" name="category">
            <option>{{ $blog->category->name }}</option>
            @foreach($categoryData as $category )
                <option value=" {{ $category->id }}"> {{ $category->name }}</option>
            @endforeach
        </select><br>
        <label class="form-control-label">Image</label>
        <input type="file" name="img" class="btn btn-primary"><br>
        <a href="/blogs">
            <button type="button" class="btn btn-info">Cancel</button>
        </a>
        <input class="btn btn-success" type="submit" name="submit" value="Edit">
    </form>
@endsection