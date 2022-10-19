@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('cat.update',$Category->id) :route ('cat.store') }}" method="post">
    @csrf
    <h4>Category Form</h4>
    <label>Add Category</label>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>

</form>


@endsection
