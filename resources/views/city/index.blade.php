@extends('city.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="col-md-6 offset-11" style="margin: 18px;">
            <a href="{{route('city.create')}}" class="btn btn-success">Create</a>
        </div>
    </div>
</div>

@if($msg = Session::get('add'))
    <div class="alert alert-success">
        <p>{{$msg}}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach($city as $data)
    <tr>
        <!-- for view user record -->
        <td>{{$data->id}}</td>
        <td>{{$data->code}}</td>
        <td>{{$data->name}}</td>
        <td>
        <form action="{{route('city.destroy', $data->id)}}" method="POST">
            <a href="{{route('city.edit', $data->id)}}" class="btn btn-primary">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection