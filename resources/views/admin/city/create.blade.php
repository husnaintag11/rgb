@extends('adminv2.adminv2master')
@section('content')
<form action="{{ route ('sta.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <h4>City</h4>
    <p class="card-description">
        Add City
    </p>
    <div class="form-group">

        <input class="form-control" type="text" name="name" placeholder="Enter the name">
        <br>
        <input class="form-control" type="text" name="state_id" placeholder="Enter the state_id">
        <br>
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>


</form>


@endsection
