@extends('home.master')
@section('content')

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


        {{-- image --}}
        <div class="row">
            <div class="col-md-5 p-4">
                <div class="form-group">
                    <label for="image">Profile Image:</label>
                    <br>
                    <div class="container">
                        <img src="{{asset('uploads/profile'.Auth::user()->profile_image)}}" alt="">
                    </div>
                    <input type="file" name="profile_image" id="image" class="form-control-file">
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

                    </div>
                    <div class="container">
                        <h6 >I am</h6>


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
