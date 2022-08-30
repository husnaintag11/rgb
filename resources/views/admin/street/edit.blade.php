@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('st.update',$Category->id) :route ('st.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>Street</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <input type="text" name="city_id" value="{{isset($Category)?$Category->city_id:''}}"
            placeholder="Enter the city_id">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
