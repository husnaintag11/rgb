@extends('admin.adminmaster')
@section('content')

<form action="{{ isset($Category)? route ('sub_cat.update',$Category->id) :route ('sub_cat.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>Categorous</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <input type="text" name="category_id" value="{{isset($Category)?$Category->category_id:''}}"
            placeholder="Enter the category_id">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
