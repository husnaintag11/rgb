@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('address.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>Address_id</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>
        <input type="text" name="street_id" placeholder="Enter the street_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
