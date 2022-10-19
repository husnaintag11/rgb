@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('cout.update',$Category->id) :route ('cout.store') }}" method="post">
    @csrf
    <h4>Country Form</h4>

    <p class="card-description">
        Add Country
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="name" value="{{isset($Category)?$Category->name:''}}"
            placeholder="Enter the name">
    </div>
    <br>
    <button type="submit" class="btn btn-primary mr-2">save</button>

</form>



@endsection
