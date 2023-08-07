@extends('home.master')
@section('content')
@if(session('message'))
<div class="alert alert-success">{{ session('message')}}</div>
@endif
<div class="col-md-12 bg-dark p-4">

    <div class="text-center text-white">
        <h2>{{ Auth::user()->name }}</h2>
    </div>
</div>
<br>
<div class="container">
    <form action="{{ route('profile.update') }}" method="POST" id="profile_setup_frm" enctype="multipart/form-data">
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

                    <div class="p-3 container">
                        {{-- profile image --}}
                        @if (Auth::user()->profile_image)
                        <img src="{{asset('uploads/profile/'.Auth::user()->profile_image)}}"
                            class="rounded-circle shadow-6-strong" width="200px" height="200px" alt="Image">
                        @else
                        <img src="{{asset("uploads/profile/admin.png")}}" class="rounded-circle shadow-4-strong"
                            width="160px" height="160px" id="image_preview_container" alt="Image">
                        @endif

                    </div>
                    <input type="file" name="profile_image" id="profile_image" class="form-control">
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

                    </div>


                    <div class="m-4">
                        <button type="submit" id="btn" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>




{{-- data --}}


<h2 class="text-center"><b>Your Listing List</h2>


<div class="container">
    <div class="row">
        @foreach ($products as $product )
        <div class="col-sm-3  ">
            <div class="card">

                <a href="/profile/detail"><img src="{{$product->image}}" class="card-arrow" alt="Arrow Picture" alt="" height="200px"
                        width="260px"></a>

                <div class="card-body">
                    <a href="#">
                        <h5>{{$product->name}}</h5>
                    </a>
                 <span class="text-dark" >{{$product->category_name}}</span>
                    <br>
                    <span class="text-danger ">Price On call</span>
                    <br>
                    <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbsp{{$product->country_name}}</span>
                    <br>
                    <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbsp{{$product->type}}</span>
                </div>
                <div class="card-footer">
                    <small class="text-muted">

                    </small>
                </div>



            </div>
        </div>




        @endforeach
    </div>
</div>
<br>

@endsection
