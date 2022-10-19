@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('sta.update',$Category->id) :route ('cat.store') }}" method="post">
    @csrf

    <h4>Category Form</h4>

    <p class="card-description">
        Add Category
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
        <br>
        <input class="form-control" type="text" name="state_id" value="{{isset($Category)?$Category->state_id:''}}"
            placeholder="Enter the state_id">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>









</form>
@endsection
