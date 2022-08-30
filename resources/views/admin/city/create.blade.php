@extends('admin.adminmaster')
@section('content')
<form action="{{ route ('sta.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center ">
        <h2>City</h2>
        <input type="text" name="name" placeholder="Enter the name">
        <br>
        <input type="text" name="state_id" placeholder="Enter the state_id">
        <br>



        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>
</form>


@endsection
