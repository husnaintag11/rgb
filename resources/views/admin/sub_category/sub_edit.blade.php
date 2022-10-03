@extends('admin.adminmaster')
@section('content')

<form action="{{ isset($Category)? route ('sub_cat.update',$Category->id) :route ('sub_cat.store') }}" method="post">
    @csrf
    <div class="text-center">
        <h4>Sub_Categorous</h4>
    </div>
    <div class="row container">
        <div class="col-sm-6">
            <label>Name</label>
            <br>
            <input class="shadow-info mb-5 rounded" style="width:500px" type="text" name="name"
                value="{{isset($Category)?$Category->name:''}}" placeholder="Enter the name">
        </div>

        <div style="width:400px" class="col-sm-6">
            <label>Add Category</label>
            <select name="category_id" class="form-select" id="inlineFormSelectPref">
                @foreach ($categories as $SubCategory )

                <option value="{{$SubCategory->id}}">{{$SubCategory->name}}</option>

                @endforeach
            </select>
        </div>
    </div>



    <div class="text-center">
        <button type="submit" class="btn btn-outline-info">Save</button>
    </div>

</form>
@endsection
