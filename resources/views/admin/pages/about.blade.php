
@extends('admin.admin')
@section('content')
    <button type="button" class="btn btn-success pull-right"><a href="{{url('/aboutCreate')}}">About Create</a></button>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Title</th>
            <th>Text</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
            <tbody>
                @foreach($data as $about)
                    <tr>
                        <td>{{ $about->about_title }}</td>
                        <td>{{  $about->about_text }}e</td>
                        <td>{{ $about->about_image }}</td>
                        <td>
                            <a href="/about/{{ $about->id }}/aboutEdit">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    @endsection
