@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('sa.update',$Category->id) :route ('sa.store') }}" method="post">
    @csrf

    <h4>State Form</h4>

    <p class="card-description">
        Add State
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
        <br>
        <input type="text" name="country_id" value="{{isset($Category)?$Category->country_id:''}}"
            placeholder="Enter the country_id">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>

</form>
@endsection
