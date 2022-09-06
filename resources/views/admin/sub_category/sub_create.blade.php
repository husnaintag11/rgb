@extends('admin.adminmaster')
@section('content')

<form action="{{ route ('sub_cat.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h3>Sub_Categorous</h3>

    </div>
    <h5>Name</h5>
    <div class="text-center">


        <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="name"
            placeholder="Enter the name">
        <br>
    </div>
    <h5>Category_id</h5>
    <div class="text-center">


        <input class="shadow-info mb-5 rounded" style="width:1050px" type="text" name="category_id"
            placeholder="Enter the category_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
