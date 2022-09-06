@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('address.update',$Category->id) :route ('address.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>Categorous</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <input type="text" name="street_id" value="{{isset($Category)?$Category->street_id:''}}"
            placeholder="Enter the street_id">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
