@extends('home.master')
@section('content')
@if(session('message'))
    <div class="alert alert-success">{{ session('message')}}</div>
@endif
<div class="col-md-12 bg-dark p-4">

    <div class="text-center text-white">
        <h2>Profile</h2>
    </div>
</div>
<br>



<div class="container">
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 bg-dark p-2">
                <div class="text-white text-center">
                    <h4>Change Profile</h4>
                </div>
            </div>

        </div>

        {{-- make listing --}}
        <div class="p-2 text-end">
            <a type="submit" class="btn btn-primary" href="{{ route('add_listing')}}">listing Create</a>
        </div>

        {{-- image --}}
        <div class="row">
            <div class="col-md-5 p-4">
                <div class="form-group">
                    <label for="image">Profile Image:</label>

                    <div class="p-3 container">
                        <img src="{{asset('uploads/profile/'.Auth::user()->profile_image)}}" width="300px"
                            height="300px" alt="Image">
                    </div>
                    <input type="file" name="profile_image" class="p-3 form-control-file">
                </div>
            </div>



            <div class="col-md-7 p-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" id="name" class="form-control"
                                value="{{ Auth::user()->last_name }}" required>
                        </div>
                        {{-- phone number --}}
                        <div class="form-group ">
                            <label for="phone">Phone Number</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        {{-- address --}}
                        <div class="form-group">
                            <label for="address">Address</label>


                            <textarea id="address" class="form-control @error('address') is-invalid @enderror"
                                name="address">{{ old('address') }}</textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    {{-- gender --}}
                    <div class="container">
                        <h6>I am</h6>

                        <div class=" p-3 form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male"
                                    {{ old('gender') === 'male' ? 'checked' : '' }}>
                                <label class="pr-5 form-check-label" for="gender-male">{{ __('Male') }}</label>

                                <input class=" form-check-input" type="radio" name="gender" id="gender-female"
                                    value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender-female">{{ __('Female') }}</label>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                    </div>
                    {{-- name --}}
                    <div class="m-4">
                        <button type="submit" class="btn btn-primary">Create Profile</button>
                    </div>
                </div>

            </div>


        </div>


    </form>
</div>

<br>
@endsection
