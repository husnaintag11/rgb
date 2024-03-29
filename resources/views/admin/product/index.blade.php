@extends('adminv2.adminv2master')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            @if(session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">&nbsp Pottery Create</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            {{-- <div class="container">
                                <a class="btn btn-primary" href="{{route('prdct.create')}}">Create</a>

                            </div> --}}
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Age</th>
                                    <th>Type</th>
                                    <th>User-Name</th>
                                    <th>Category-Name</th>
                                    <th>Sub-Category_Name</th>
                                    <th>Country-Name</th>
                                    <th>State-Name</th>
                                    <th>City-Name</th>
                                    <th>Street-Name</th>
                                    {{-- <th>Action<th> --}}

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key=> $product)
                                <tr>
                                    <td>{{ ++$key}}</td>
                                    <td>{{ $product->name}}</td>
                                    <td><img src="{{$product->image}}" alt="image"></td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->age}}</td>
                                    <td>{{$product->type}}</td>
                                    <td>{{$product->user_name }}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->sub_category_name}}</td>
                                    <td>{{$product->country_name}}</td>
                                    <td>{{$product->state_name}}</td>
                                    <td>{{$product->city_name}}</td>
                                    <td>{{$product->street_name}}</td>

                                    <td>
                                    {{-- <a class="btn btn-info" href="{{route('prdct.edit',$product->id)}}">Edit </a> --}}

                                    <a class="btn btn-danger" href="{{route('prdct.delete',$product->id)}}">Delete</a>
                                    </td>
                                </tr>

                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection
