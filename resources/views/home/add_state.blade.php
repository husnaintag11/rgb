@extends('home.master')
@section('content')

<form action="{{asset('add_city')}}" >
    <div class="p-2 form-group row">
        <label for="State" class="col-md-8 col-form-label text-md-left">{{ __('State') }}</label>

        <div class=" col-md-6">
            <select  class="form-control">
                <option value="" selected>Choose State</option>
                @foreach($categories as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
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
