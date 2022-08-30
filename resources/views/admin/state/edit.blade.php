@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('sa.update',$Category->id) :route ('sa.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>State</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <input type="text" name="country_id" value="{{isset($Category)?$Category->country_id:''}}"
            placeholder="Enter the country_id">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
