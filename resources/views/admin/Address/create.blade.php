@extends('adminv2.adminv2master')
@section('content')
<form action="{{ route ('address.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <h4>Address Form</h4>

    <p class="card-description">
        Add Address
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Enter the name">
        <br>
        <input class="form-control" type="text" name="street_id" placeholder="Enter the street_id">

    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>






</form>


@endsection
