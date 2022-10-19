@extends('adminv2.adminv2master')
@section('content')
<form action="{{ route ('cout.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <h4>Country Form</h4>

    <p class="card-description">
        Add Country
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Enter the name">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>





    </form>


@endsection
