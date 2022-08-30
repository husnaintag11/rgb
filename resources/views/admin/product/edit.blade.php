@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('pro.update',$Category->id) :route ('pro.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>Product</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
