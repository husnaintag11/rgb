@extends('home.master')
@section('content')
{{-- <form action="">


</form> --}}
<form action="{{ isset($Category)? route ('prdct.update',$Category->id) :route ('prdct.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12 bg-dark">
        <div class="card-header p-4 text-center text-white">
            <h2>{{ __('Add Listing Data') }}</h2>
        </div>
    </div>

    <h4>Listing data</h4>

    <p class="card-description">
       Listing Form
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>
    <p class="card-group">
        Add image
    </p>

    <div class="form-group">
        <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
    </div>
    <p class="card-description">
        Add Age
    </p>

    <div class="form-group">
        <input class="form-control" type="number" name="age" id="age" required>
    </div>
    <p class="card-description">
        Add Description
    </p>

    <div class="form-group">
        <textarea  class="form-control" name="description" id="description" required></textarea>
    </div>
    <p class="card-group">
        Add Price
    </p>

    <div class="form-group">
        <input class="form-control" type="text"  name="price"
            placeholder="Enter the Price">
    </div>
    <p class="card-description">
        Add Type
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="type" id="type" required>
    </div>

    {{-- country state city --}}

        <label for="country" class="col-md-8 col-form-label text-md-left">{{ __('Country') }}</label>

        <div class="col-md-6">
            <select  class="form-control ">
                <option value="" selected>Choose country</option>
                @foreach($country as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>


        <label for="State" class="col-md-8 col-form-label text-md-left">{{ __('State') }}</label>

        <div class=" col-md-6">
            <select  class="form-control">
                <option value="" selected>Choose State</option>
                @foreach($state as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
        </div>


        <label for="City" class="col-md-8 col-form-label text-md-left">{{ __('City') }}</label>

        <div class="col-md-6">
            <select  class="form-control">
                <option value="" selected>Choose City</option>
                @foreach($city as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

    <br>

    <button type="submit" class="btn btn-primary mr-2">save</button>
</form>
<br>
@endsection
