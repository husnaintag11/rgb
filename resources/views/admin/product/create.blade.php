@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('prdct.update',$Category->id) :route ('prdct.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf

    <h4>Product Form</h4>

    <p class="card-description">
        Add Product Name
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>

    <p class="card-description">
        Add Image
    </p>
    <div>
        <div class="form-group">
            <input class="form-control"  type="file" id="image" name="image">
        </div>

    </div>
    <p class="card-description">
        Multi Image
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="file"  name="images[]" multiple>
        </div>

    </div>
    <p class="card-description">
        Add Age
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="number" id="age" name="age" value="{{ old('age') }}" required>
        </div>
    </div>
    <p class="card-description">
        Add Price
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="number" id="price" name="price" value="{{ old('price') }}" required>
        </div>

    </div>
    <p class="card-description">
        Add type
    </p>
    <div>
        <div class="form-group">
            <input class="form-control"   type="text" id="type" name="type" value="{{ old('type') }}" required>
        </div>

    </div>
    <p class="card-description">
        Add Description
    </p>
    <div>
        <div class="form-group">
            <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

    </div>



    <br>
        <button type="submit" class="btn btn-primary mr-2">save</button>
</form>


@endsection
