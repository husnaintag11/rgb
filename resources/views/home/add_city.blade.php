@extends('home.master')
@section('content')

<form action="{{asset('listing')}}" >
    <div class="p-2 form-group row">
        <label for="City" class="col-md-8 col-form-label text-md-left">{{ __('City') }}</label>

        <div class="col-md-6">
            <select  class="form-control">
                <option value="" selected>Choose City</option>
                @foreach($categories as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="text-center">
        <button class="btn btn-primary">Next</button>
    </div>
</form>










<br>


@endsection
