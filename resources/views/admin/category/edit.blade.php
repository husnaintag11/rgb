@extends('admin.adminmaster')
@section('content')
<form action="{{ isset($Category)? route ('cat.update',$Category->id) :route ('cat.store') }}" method="post">
    @csrf
    <div>
        <h3>Categorous</h3>
        <input type="text" name="name" value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        <br>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection
