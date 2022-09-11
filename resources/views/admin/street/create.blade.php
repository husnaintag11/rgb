@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('st.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>Street</h2>

        <input type="text" name="name" placeholder="Enter the name">
        <br>
        <input type="text" name="city_id" placeholder="Enter the city_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
