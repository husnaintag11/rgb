@extends('admin.adminmaster')
@section('content')

<form action="{{ isset($Category)? route ('sub_cat.update',$Category->id) :route ('sub_cat.store') }}" method="post">
    @csrf

    <h5>Sub_Categorous</h5>
    <div class="text-center">
        <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="name"
            value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
    </div>
    <h5>Sub_Categorous_id</h5>
    <div class="text-center">
        <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="sub_category_id" value="{{isset($Category)?$Category->category_id:''}}"
            placeholder="Enter the category_id">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
