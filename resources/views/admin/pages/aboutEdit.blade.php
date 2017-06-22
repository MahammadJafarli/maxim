@extends('admin.admin')
@section('content')
    <form action="/about/{{ $about->id }}"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="form-control-label">Title</label>
        <input class="form-control" type="title" name="title" value=" {{ $about->about_title }} ">
        <label class="form-control-label">Text</label>
        <textarea rows="10" cols="150" maxlength="150" name="text" class="form-control"> {{ $about->about_text }} </textarea><br>
        <label class="form-control-label">Image</label>
        <input type="file" name="img" class="btn btn-primary"><br>
        <input class="btn btn-success" type="submit" name="submit" value="Edit">
    </form>
    @endsection