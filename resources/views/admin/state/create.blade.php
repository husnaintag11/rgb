@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('sa.update',$Category->id) :route ('sa.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf

    <h4>State Form</h4>

    <p class="card-description">
        Add State
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
        <br>
        <input class="form-control" type="text" value="{{isset($Category)?$Category->country_id:''}}" name="country_id"
            placeholder="Enter the country_id">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>


</form>


@endsection
