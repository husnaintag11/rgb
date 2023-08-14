@extends('adminv2.adminv2master')
@section('content')
<form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Slider</h4>

    <p class="card-description">
        Add Slider Image


    </p>




    <div class="form-control  m-2">
        <input type="file" name="image" id="image" accept="image/*" multiple required>
    </div>



    <button type="submit" class="btn btn-primary mr-2">save</button>






</form>

@endsection
