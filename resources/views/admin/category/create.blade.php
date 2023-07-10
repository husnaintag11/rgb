@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('cat.update',$Category->id) :route ('cat.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <h4>Category Form</h4>
    <
    <br>
    <p class="card-description">
        Add Category
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>

</form>
@endsection
