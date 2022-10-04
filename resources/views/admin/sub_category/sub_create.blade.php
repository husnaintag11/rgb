@extends('admin.adminmaster')
@section('content')

<form action="{{ isset($sub_category->name)? route('sub_cat.update',$sub_category->id):route('sub_cat.store') }}"
    method="post" enctype="multipart/form-data">
    @csrf

    <div class="text-center">

        <h3>Sub_Categorous</h3>

    </div>

    <div class="row container">
        <div class="col-sm-6">
            <label>Name</label>
            <br>
            <input class="shadow-info mb-5 rounded" style="width:400px" type="text" name="name"
                placeholder="Enter the name" value="{{$sub_category->name}}">
        </div>
        <div style="width:400px" class="col-sm-6 ">
            <label>Add Category</label>
            <select name="category_id" class="form-select" id="inlineFormSelectPref">
                @foreach ($categories as $category )

                <option {{$sub_category->category_id==$category->id?'selected':''}} value="{{$category->id}}">
                    {{$category->name}}</option>

                @endforeach
            </select>

        </div>

    </div>

    <div class="text-center">

        <button type="submit" class="btn btn-outline-info">Save</button>

    </div>
</form>


@endsection
