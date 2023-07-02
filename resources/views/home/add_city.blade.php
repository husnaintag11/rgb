@extends('home.master')
@section('content')


<div class="container">
    <form method="POST" action="">
        @csrf
        <div class="row">
            <div class="col-md-12 bg-dark p-2">
                <div class="text-white text-center">
                    <h4>Add city</h4>
                </div>
            </div>
        </div>

        <div class="p-5">
            <select class="form-control" id="city" name="city" required>
                <option value="">Select a city</option>
                <option value="category1">lahore</option>
                <option value="category2">karachi</option>
                <option value="category3">islamabad</option>
                <option value="category3">gujranwala</option>
            </select>
        </div>
        <div class="text-end">
            <a type="submit" href="{{'add_state'}}" class=" btn btn-primary">Next</a>
        </div>




    </form>
</div>

<br>

@endsection
