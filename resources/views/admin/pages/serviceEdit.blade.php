@extends('admin.admin')
@section('content')
    <form action="/service/{{ $service->id }}"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="form-control-label">Title</label>
        <input class="form-control" type="title" name="title" value=" {{ $service->service_title }} ">
        <label class="form-control-label">Description</label>
        <textarea rows="10" cols="150" maxlength="150" name="description" class="form-control"> {{ $service->service_description }} </textarea><br>
        <label class="form-control-label">Image</label>
        <input type="file" name="img" class="btn btn-primary"><br>
        <a href="/service">
            <button type="button" class="btn btn-info">Cancel</button>
        </a>
        <input class="btn btn-success" type="submit" name="submit" value="Edit">
    </form>
@endsection