@extends('home.master')
@section('content')
{{-- <form action="">


</form> --}}
<form action="{{ isset($Category)? route ('profile.update',$Category->id) :route ('prdct.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf
    <div class="col-lg-12 bg-dark">
        <div class="card-header p-4 text-center text-white">
            <h2>{{ __('Add Listing Data') }}</h2>
        </div>
    </div>



    <p class="card-description">
        Name
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>
    <p class="card-group">
        Add image
    </p>

    <div class="form-group">
        <input class="form-control" type="file" name="image" id="image" accept="image/*" required>
    </div>
    <p class="card-description">
        Add Age
    </p>

    <div class="form-group">
        <input class="form-control" type="number" name="age" id="age" required>
    </div>
    <p class="card-description">
        Add Description
    </p>

    <div class="form-group">
        <textarea class="form-control" name="description" id="description" required></textarea>
    </div>
    <p class="card-group">
        Add Price
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="price" placeholder="Enter the Price">
    </div>
    <p class="card-description">
        Add Type
    </p>

    <div class="form-group">
        <input class="form-control" type="text" name="type" id="type" required>
    </div>
    {{-- Ctegory --}}
    {{-- <p class="card-description">
        Add Category
    </p>

    <div class="form-group">

        <input class="form-control" type="text" name="name" placeholder="Enter the name"
            value="{{$sub_category->name}}">
    </div>
    <h4>Sub-Category Form</h4>
    <p class="card-description">
        Add Sub-Category
    </p>

    <div class="form-group">

        <select class="form-control" name="category_id" class="form-select" id="inlineFormSelectPref">
            @foreach ($categories as $category )

            <option {{$sub_category->category_id==$category->id?'selected':''}} value="{{$category->id}}">
                {{$category->name}}</option>

            @endforeach
        </select>


    </div> --}}
    {{-- country state city --}}


    <p class="card-description">
        Add Country
    </p>

    <div class="form-group">
        <select id="country" class="form-control ">
            <option value="" selected>Choose country</option>
            @if(!empty($country))
            @foreach($country as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
            @endif
        </select>
    </div>

    <p class="card-description">
        Add State
    </p>

    <div class="form-group">
        <select id="state" class="form-control">
            <option value="" selected>Choose State</option>
            {{-- @foreach($state as $state)
            <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach --}}
        </select>
    </div>




    <p class="card-description">
        Add City
    </p>
    <div class="form-group">
        <select id="city" class="form-control">
            <option value="" selected>Choose City</option>
            {{-- @foreach($city as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach --}}
        </select>
    </div>

    <p class="card-description">
        Add Street
    </p>
    <div class="form-group">
        <select id="street" class="form-control">
            <option value="" selected>Choose Street</option>
            {{-- @foreach($city as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach --}}
        </select>
    </div>



    <br>

    <button type="submit" class="btn btn-primary mr-2">save</button>
</form>
<br>


{{-- country cities and state --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>



<script>
    $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
         }
   });

   $(document).ready(function(){
        $("#country").change(function(){
            var country_id = $(this).val();

            if (country_id == "") {
                var country_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-states/") }}/'+country_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    $('#state').find('option:not(:first)').remove();
                    $('#city').find('option:not(:first)').remove();

                    if (response['states'].length > 0) {
                        $.each(response['states'], function(key,value){
                            $("#state").append("<option value='"+value['id']+"'>"+value['name']+"</option>")
                        });
                    }
                }
            });
        });


        $("#state").change(function(){
            var state_id = $(this).val();

            console.log(state_id);

            if (state_id == "") {
                var state_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-cities/") }}/'+state_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    $('#city').find('option:not(:first)').remove();

                    if (response['cities'].length > 0) {
                        $.each(response['cities'], function(key,value){
                            $("#city").append("<option value='"+value['id']+"'>"+value['name']+"</option>")
                        });
                    }
                }
            });
        });

        $("#city").change(function(){
            var city_id = $(this).val();

            console.log(city_id);

            if (city_id == "") {
                var city_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-streets/") }}/'+city_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    $('#street').find('option:not(:first)').remove();

                    if (response['streets'].length > 0) {
                        $.each(response['streets'], function(key,value){
                            $("#street").append("<option value='"+value['id']+"'>"+value['name']+"</option>")
                        });
                    }
                }
            });
        });
    });





</script>

@endsection
