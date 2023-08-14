@extends('adminv2.adminv2master')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">&nbsp Pottery Create</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="p-0">
                        <table class="table align-items-center mb-0 ">
                            <div class="container">
                                <a class="btn btn-primary" href="{{route('slider.create')}}">Create</a>

                            </div>
                            <thead>
                                <tr>
                                    <th>Slider Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                <tr>
                                    <div class="card">
                                        <td><img src="{{ $slider->image }}" alt="Slider Image"
                                                class="rounded float-left img-thumbnail"
                                                style="width: 300px ; height:200px"></td>
                                    </div>
                                   <td>
                                    <a class="btn btn-danger" href="{{route('slider.delete',$slider->id)}}">Delete </a></td>

                                </tr>
                                @endforeach


                            <tbody>





                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
