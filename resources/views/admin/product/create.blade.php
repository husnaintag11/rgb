@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('pro.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>Product</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
