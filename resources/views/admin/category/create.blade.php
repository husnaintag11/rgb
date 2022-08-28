@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('cat.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>Category</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
