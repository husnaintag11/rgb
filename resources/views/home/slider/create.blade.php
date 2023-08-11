@extends('adminv2.adminv2master')
@section('content')
<form action="" method="post"
    enctype="multipart/form-data">
    @csrf
    <h4>Slider</h4>

    <p class="card-description">
        Add Slider
    </p>


    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>






</form>

@endsection
