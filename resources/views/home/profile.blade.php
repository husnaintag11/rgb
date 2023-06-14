@extends('home.master')
@section('content')

<div class="col-md-12 bg-dark p-4">
    <div class="text-center text-white">
        <h2>Profile</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 p-4 bg-light">
            {{-- iamge --}}
            <div class="form-group">
                <label for="image">Profile Image:</label>
                <br>
                <div class="container">
                    <img src="{{asset('uploads/profile'.Auth::user()->profile_image)}}" alt="">
                </div>

                <input type="file" name="profile_image" id="image" class="form-control-file">
            </div>
        </div>
        <div class="col-md-8 p-4">
            <div class="bg-dark p-3">
                <div class="text-white text-center">
                    <h4>Change Profile</h4>
                </div>
            </div>
            <div class="card bg-light">

                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- name --}}
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

                        {{-- gender --}}
                        <div class="form-group">
                            <label for="gender">{{ __('Gender') }}</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male"
                                    {{ old('gender') === 'male' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender-male">{{ __('Male') }}</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gender-female"
                                    value="female" {{ old('gender') === 'female' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gender-female">{{ __('Female') }}</label>
                            </div>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">{{ __('Date_of_Birth:')}}</label>
                            <input id="date_of_birth" type="date"
                                class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth" autofocus>

                            @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        {{-- phone number --}}
                        <div class="form-group ">
                            <label for="phone">Phone Number</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone">

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
                                name="address" required autocomplete="address">{{ old('address') }}</textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </form>
                </div>
            </div>

        </div>






    </div>
</div>
<br>

@endsection
{{-- <div class="card bg-light">
                <div class="card-header bg-dark">
                    <h2 class="text-white text-center">Welcome, {{ Auth::user()->name }}</h2>
                </div>
                <div class="card-body">
                    @if (Auth::user()->profile_image)
                    <img src="{{ Storage::url(Auth::user()->profile_image) }}" alt="Profile Image">
                    @else
                    <p>No profile image found.</p>
                    @endif
                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Last Name: {{ Auth::user()->last_name }}</p>
                    <p>Email: {{ Auth::user()->email }}</p>
                    <p>Gender: {{ Auth::user()->gender }}</p>
                    <p>Date_of_birth: {{ Auth::user()->date_of_birth }}</p>
                    <p>Phone: {{ Auth::user()->phone }}</p>
                    <p>Address: {{ Auth::user()->address }}</p>
                </div>
            </div> --}}
