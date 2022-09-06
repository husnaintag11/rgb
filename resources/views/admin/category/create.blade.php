@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('cat.store') }}" method="post" enctype="multipart/form-data">
    @csrf

<div class="text-center">
    <h3>Category</h3>
</div>

    <h5>Name</h5>

    <div class="text-center ">

        <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="name"
            placeholder="Enter the name">
        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
