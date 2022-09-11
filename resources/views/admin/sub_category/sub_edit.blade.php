@extends('admin.adminmaster')
@section('content')

<form action="{{ isset($Category)? route ('sub_cat.update',$Category->id) :route ('sub_cat.store') }}" method="post">
    @csrf

    <div class="text-center">
        <h4>Sub_Categorous</h4>
    </div>
    <br>
    <div class="container">
        <input class="shadow-info mb-5 rounded" style="width:500px" type="text" name="name"
            value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>



    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>


</form>
@endsection
