@extends('adminv2.adminv2master')
@section('content')

<form action="{{ isset($sub_category->name)? route('sub_cat.update',$sub_category->id):route('sub_cat.store') }}"
    method="post" enctype="multipart/form-data">
    @csrf
    <div class="col">
        <h4>Sub-Category Form</h4>
        <p class="card-description">
            Add Sub-Category
        </p>
        <div class="col-md-6 grid-margin stretch-card form-group">

            <input class="form-control" type="text" name="name" placeholder="Enter the name"
                value="{{$sub_category->name}}">
        </div>
        <h4>Category Form</h4>
        <p class="card-description">
            Add Category
        </p>

        <div class="  col-md-6 grid-margin stretch-card form-group">

            <select class="form-control" name="category_id" class="form-select" id="inlineFormSelectPref">
                @foreach ($categories as $category )

                <option {{$sub_category->category_id==$category->id?'selected':''}} value="{{$category->id}}">
                    {{$category->name}}</option>

                @endforeach
            </select>


        </div>
        <br>
        <button type="submit" class="btn btn-primary mr-2">save</button>


</form>















@endsection
