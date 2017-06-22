@extends('admin.admin')
@section('content')
    <h1>Create Portfolio</h1>
    <hr>
    <form action="/portfolio/{{ $portfolio->id }}"  method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label class="form-control-label">Name</label>
        <input class="form-control" type="title" name="name" value=" {{ $portfolio->name }} ">
        <label class="form-control-label">Work</label>
        <select class="form-control" name="work">
            <option>Works</option>
            @foreach($portfolioData as $portfolio )
                <option value=" {{ $portfolio->id }}"> {{ $portfolio->work_name }}</option>
            @endforeach
        </select><br>
        <label class="form-control-label">Image</label>
        <input type="file" name="img" class="btn btn-primary"><br>
        <a href="/team">
            <button type="button" class="btn btn-info">Cancel</button>
        </a>
        <input class="btn btn-success" type="submit" name="submit" value="Edit">
    </form>
@endsection