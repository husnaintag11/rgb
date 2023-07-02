@extends('home.master')
@section('content')


<div class="container">
    <form method="POST" action="">
        @csrf
        <div class="row">
            <div class="col-md-12 bg-dark p-2">
                <div class="text-white text-center">
                    <h4>Add Province</h4>
                </div>
            </div>
        </div>

        <div class="p-5">
            <select class="form-control" id="province" name="province" required>
                <option value="">Select a province</option>
                <option value="category1">Punjab</option>
                <option value="category2">Sindh</option>
                <option value="category3">Khyber Pakhtunkhwa</option>
                <option value="category3">Balochistan</option>
            </select>
        </div>
        <div class="text-end">
            <a type="submit" href="{{route('add_city')}}" class=" btn btn-primary">Next</a>
        </div>




    </form>
</div>

<br>

@endsection
