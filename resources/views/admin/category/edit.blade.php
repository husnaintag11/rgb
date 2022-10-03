@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('cat.update',$Category->id) :route ('cat.store') }}" method="post">
    @csrf
    <div class="text-center">
        <h3>Categorous</h3>

    </div>


    <h5>Name</h5>
    <div class="text-center ">
    <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="name"
        value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
    <br>
    <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>
@endsection
