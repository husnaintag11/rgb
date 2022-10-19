@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('st.update',$Category->id) :route ('st.store') }}" method="post">
    @csrf

    <h4>Street Form</h4>

    <p class="card-description">
        Add Street
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
        <br>
        <input class="form-control" type="text" name="city_id" value="{{isset($Category)?$Category->city_id:''}}"
            placeholder="Enter the city_id">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>
</form>
@endsection
