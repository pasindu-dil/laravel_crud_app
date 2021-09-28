@extends('city.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h3>Add new record</h3>
        </div>
        <div class="float-right">
            <a href="{{route('city.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<form action="{{route('city.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" class="form-control" placeholder="Enter city code..." name="code">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" placeholder="Enter city name..." name="name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save" name="save">
            </div>
        </div>
    </div>
</form>

@endsection