@extends('admin.adminmaster')
@section('content')

<form action="{{ route ('sub_cat.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>Category</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>
        <input type="text" name="category_id" placeholder="Enter the category_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
