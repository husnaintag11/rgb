@extends('home.master')
@section('content')
<div class="row">
    <div class="col-md-12 bg-dark p-2">
        <div class="text-white text-center">
            <h4>Listing Detail</h4>
        </div>
    </div>

</div>
<br>
{{--image detail --}}
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div id="image-slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($products as $key => $product)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <img src="{{$product->image}}" class="d-block w-100" alt="">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#image-slider" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#image-slider" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>
        <div class="col-lg-4">
            <div class="card bg-light ">
                <div class="form-group">

                    <div class="p-3 container">
                        {{-- profile image --}}

                        @if (Auth::user()->profile_image)
                        <img src="{{asset('uploads/profile/'.Auth::user()->profile_image)}}"
                            class="rounded-circle shadow-6-strong" width="50px" height="50px" alt="Image">
                        @else

                        <img src="{{asset("uploads/profile/admin.png")}}" class="rounded-circle shadow-4-strong"
                            width="16px" height="16px" id="image_preview_container" alt="Image">
                        @endif
                        <span class="p-5"><b>{{ Auth::user()->name }}</span>

                    </div>
                    <h6 class="p-3"><b>Title</h6>
                </div>
            </div>
        </div>
    </div>





    <br>
    @endsection
