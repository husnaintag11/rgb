@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('sa.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>State</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>
        <input type="text" name="country_id" placeholder="Enter the country_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
