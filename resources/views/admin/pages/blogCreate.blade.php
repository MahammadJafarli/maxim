@extends('admin.admin')
@section('content')
    <div class="row">
        <a href="{{url('/blogs')}}"> <button type="button" class="btn btn-success pull-right">Blogs</button></a>

        <div class="div-col-md-8">
            <h1>Create Blog</h1>
            <hr>
            <form action="/blog-create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Title</label>
                <input class="form-control" type="title" name="title">
                <label class="form-control-label">Text</label>
                <textarea name="text" class="form-control"></textarea><br>
                <label class="form-control-label">Image</label>
                <select class="form-control" name="category">
                    <option>Categories</option>
                    @foreach($data as $category )
                        <option value=" {{ $category->id }}"> {{ $category->name }}</option>
                    @endforeach
                </select><br>

                <input type="file" name="img" class="btn btn-primary"><br>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection