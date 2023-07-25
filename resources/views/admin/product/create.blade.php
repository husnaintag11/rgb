@extends('adminv2.adminv2master')
@section('content')
<form action="{{ isset($Category)? route ('prdct.update',$Category->id) :route ('prdct.store') }}" method="post"
    enctype="multipart/form-data">
    @csrf

    <h4>Product Form</h4>

    <p class="card-description">
        Add Product Name
    </p>

    <div class="form-group">
        <input class="form-control" type="text" value="{{isset($Category)?$Category->name:''}}" name="name"
            placeholder="Enter the name">
    </div>

    <p class="card-description">
        Add Image
    </p>
    <div>
        <div class="form-group">
            <input class="form-control"  type="file" id="image" name="image">
        </div>

    </div>
    <p class="card-description">
        Multi Image
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="file"  name="images[]" multiple>
        </div>

    </div>
    <p class="card-description">
        Add Age
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="number" id="age" name="age" value="{{ old('age') }}" required>
        </div>
    </div>
    <p class="card-description">
        Add Price
    </p>
    <div>
        <div class="form-group">
            <input class="form-control" type="number" id="price" name="price" value="{{ old('price') }}" required>
        </div>

    </div>
    <p class="card-description">
        Add type
    </p>
    <div>
        <div class="form-group">
            <input class="form-control"   type="text" id="type" name="type" value="{{ old('type') }}" required>
        </div>

    </div>
    <p class="card-description">
        Add Description
    </p>
    <div>
        <div class="form-group">
            <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

    </div>

 {{-- country state and cite street --}}
 {{-- <p class="card-description">
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

    </select>
</div>




<p class="card-description">
    Add City
</p>
<div class="form-group">
    <select id="city" class="form-control">
        <option value="" selected>Choose City</option>

    </select>
</div>

<p class="card-description">
    Add Street
</p>
<div class="form-group">
    <select id="street" class="form-control">
        <option value="" selected>Choose Street</option>

    </select>
</div> --}}


    <br>
        <button type="submit" class="btn btn-primary mr-2">save</button>
</form>

{{-- js country cities and state --}}

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script> --}}


{{-- country state city and street jquery --}}
{{-- <script>
    // token generate
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(document).ready(function () {
        $("#country").change(function () {
            var country_id = $(this).val();

            if (country_id == "") {
                var country_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-states/") }}/' + country_id,
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    $('#state').find('option:not(:first)').remove();
                    $('#city').find('option:not(:first)').remove();

                    if (response['states'].length > 0) {
                        $.each(response['states'], function (key, value) {
                            $("#state").append("<option value='" + value['id'] +
                                "'>" + value['name'] + "</option>")
                        });
                    }
                }
            });
        });


        $("#state").change(function () {
            var state_id = $(this).val();

            console.log(state_id);

            if (state_id == "") {
                var state_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-cities/") }}/' + state_id,
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    $('#city').find('option:not(:first)').remove();

                    if (response['cities'].length > 0) {
                        $.each(response['cities'], function (key, value) {
                            $("#city").append("<option value='" + value['id'] +
                                "'>" + value['name'] + "</option>")
                        });
                    }
                }
            });
        });

        $("#city").change(function () {
            var city_id = $(this).val();

            console.log(city_id);

            if (city_id == "") {
                var city_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-streets/") }}/' + city_id,
                type: 'post',
                dataType: 'json',
                success: function (response) {
                    $('#street').find('option:not(:first)').remove();

                    if (response['streets'].length > 0) {
                        $.each(response['streets'], function (key, value) {
                            $("#street").append("<option value='" + value['id'] +
                                "'>" + value['name'] + "</option>")
                        });
                    }
                }
            });
        });
    });

</script> --}}
@endsection
