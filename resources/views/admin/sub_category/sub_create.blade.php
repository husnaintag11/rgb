@extends('admin.adminmaster')
@section('content')

<form action="{{ route ('sub_cat.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="text-center">
        <h3>Sub_Categorous</h3>
    </div>
    <label>Name</label>
    <div class="container">
        <input class="shadow-info mb-5 rounded" style="width:500px" type="text" name="name"
            placeholder="Enter the name">

        <select  name="category_id" id="">

            @foreach ($categories as $category )

            <option class="" value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>

        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-info">Save</button>
        </div>
    </div>


</form>


@endsection
