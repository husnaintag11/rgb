@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('prdct.update',$Category->id) :route ('prdct.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf

    <h4>Product Form</h4>

    <p class="card-description">
        Add Product
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>
    <p class="card-group">
        Add image
    </p>

    <div class="form-group">
        <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
    </div>
    <p class="card-description">
        Add Age
    </p>

    <div class="form-group">
        <input class="form-control" type="number" name="age" id="age" required>
    </div>
    <p class="card-description">
        Add Description
    </p>

    <div class="form-group">
        <textarea  class="form-control" name="description" id="description" required></textarea>
    </div>
    <p class="card-group">
        Add Price
    </p>

    <div class="form-group">
        <input class="form-control" type="text"  name="price"
            placeholder="Enter the Price">
    </div>
    <p class="card-description">
        Add Type
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="type" id="type" required>
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>
</form>


@endsection







