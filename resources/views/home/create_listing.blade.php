@extends('home.master')
@section('content')

<form action="{{asset('add_state')}}">
    <div class="p-2 form-group row container">
        <label for="country" class="col-md-8 col-form-label text-md-left">{{ __('Country') }}</label>

        <div class="col-md-6">
            <select  class="form-control ">
                <option value="" selected>Choose country</option>
                @foreach($categories as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Next</button>
    </div>
</form>







{{-- <form>
    <div class="form-group">
        <label for="country">Country:</label>
        <select class="form-control" id="country">
            <option value="">Select Country</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{ $category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group ">
        <label for="state">State:</label>
        <select class="form-control" id="state" disabled>
            <option value="">Select State</option>
            @foreach ($categories as $category)
            <option value="{{$category->id}}">{{ $category->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="city">City:</label>
        <select class="form-control" id="city" disabled>
            <option value="">Select City</option>

        </select>
    </div>
</form> --}}


<br>


@endsection
