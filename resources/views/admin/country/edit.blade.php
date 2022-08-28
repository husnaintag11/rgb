@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('cout.update',$Category->id) :route ('cout.store') }}" method="post">
    @csrf
    <div class="text-center">


        <h3>Country_id</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>



@endsection
