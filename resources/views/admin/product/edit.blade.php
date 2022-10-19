@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('prdct.update',$Category->id) :route ('prdct.store') }}" method="post">
    @csrf

    <h4>Product Form</h4>

    <p class="card-description">
        Add Product
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>

    @endsection
