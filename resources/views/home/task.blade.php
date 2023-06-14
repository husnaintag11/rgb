@extends('home.master')
@section('content')





<div class="container">


    <h3 class="text-primary">Select Grade/Class</h3>
    <label>#Select Grade/Class</label>
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($cards as $cardNumber => $cardColor)
            <div class="col-md-2">
                <div class="card {{ $cardColor }}">
                    <div class="card-body ">
                        <h2 class="card-title text-center rounded-bottom">
                            <br>{{ $cardNumber }}
                        </h2>

                        <div class="container">
                            <footer class="card rounded-bottom ">
                                <small class="text-center">
                                    Book
                                </small>
                            </footer>
                        </div>

                    </div>

                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
</div>
<br><br>
@endsection
