@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('sta.update',$Category->id) :route ('cat.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>City</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <input type="text" name="state_id" value="{{isset($Category)?$Category->state_id:''}}"
            placeholder="Enter the state_id">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
