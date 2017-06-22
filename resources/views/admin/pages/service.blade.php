@extends('admin.admin')
@section('content')
    <a href="{{ url('/serviceCreate') }}"><button type="button" class="btn btn-success pull-right">Add Service</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
            @foreach($data as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->service_title }}</td>
                    <td>{{ $service->service_description }}</td>
                    <td>{{ $service->service_image }}</td>
                    <td>
                        <a href="/service/{{ $service->id }}/serviceEdit" style="float: left"><button type="button" class="btn btn-primary">Edit</button></a>
                            <form action="service/{{ $service->id }}/delete" method="post">
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