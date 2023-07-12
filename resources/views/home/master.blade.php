<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    {{-- bootstrap --}}

    <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{-- bootstrap --}}

    {{-- <link rel="stylesheet" href="{{asset('js/bootstrap.bundle.min.js')}}"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- fount --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- css --}}
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    {{-- owl css --}}
    <link rel="stylesheet" href="{{asset('owl_carousal/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('owl_carousal/css/owl.theme.default.min.css')}}">
    {{-- owl js --}}
    <script src="{{asset('owl_carousal/js/jquery.min.js')}}"></script>
    <script src="{{asset('owl_carousal/js/owl.carousel.min.js')}}"></script>
{{-- country --}}
    <meta name="_token" content="{{ csrf_token() }}">


</head>
<title>Pets Stock Bazaar</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">Pets Stock Bazaar</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about"><i class="fa-sharp fa-solid fa-code"></i> About Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contant"><i class="fa-solid fa-phone-volume"></i> Contant Us</a>
                    </li>

                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> {{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><i class="fa-solid fa-registered"></i> {{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest



                </ul>

                <!-- Left Side Of Navbar -->


                <!-- Right Side Of Navbar -->


            </div>
        </div>

    </nav>

    {{-- all content --}}
    <div>
        @yield('content')
    </div>

    {{-- footer --}}

    <footer class="footer  bg-dark">
        <div class="container text-white p-4">
            <div class="row">
                <div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-6 float-left">
                        <div>
                            <strong>
                                <a href="#">
                                    <img src="rgbpics\logo.jpg" height="30" width="30" alt="RGB">
                                </a>
                            </strong>


                            <div class="p-2">
                                <p>Pottery is a fascinating art form that has captivated humanity for thousands of
                                    years. The art of creating ceramic objects from clay has a rich history that spans
                                    across various cultures and civilizations. From ancient civilizations like the
                                    Egyptians and Greeks to modern-day pottery studios, the craft has evolved and
                                    adapted over time. </p>
                            </div>
                            <ul>

                                <span><i class="fa-solid fa-location-dot"></i>  location </span>
                                <br>
                                <span><i class="fa-solid fa-phone-volume"></i>  mobile number </span>
                               <br>
                                <span><a href="#"><i class="fa-sharp fa-solid fa-envelopes-bulk"></i>  info@gmail.com</a></span>


                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 float-left">
                        <div class="adi-footercolumn adi-widget widget_nav_menu adi-widget" id="">
                            <div>
                                <h3>Quick Links</h3>
                            </div>
                            <div class="menu-footer-top-container">
                                <ul id="menu-footer-top">
                                    <a href="#"><i class="fa-solid fa-house"></i><label>Home</label></a>
                                    <br>
                                    <a href="#"><i class="fa-sharp fa-solid fa-code"></i><label>About Us</label></a>
                                    <br>
                                    <a href="#"><i class="fa-solid fa-phone-volume"></i><label>Contact Us</label></a>
                                    <br>
                                    <a href="#"><i class="fa-sharp fa-solid fa-eye"></i><label>Show all</label></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-2 float-left">
                        <div>
                            <div>
                                <h3>Follow Us</h3>
                            </div>
                            <div>

                                <ul>
                                   <span> <a href=""><i class="fa-brands fa-square-whatsapp"></i><label>WhatsApp<label></a></span>
                                   <br>
                                   <span><a href=""><i class="fa-brands fa-square-facebook"></i><label>Facebook<label></a></span>
                                   <br>
                                   <span><a href=""><i class="fa-brands fa-instagram"></i><label>   Instagram</label></a></span>
                                    <br>
                                   <span> <a href=""><i class="fa-brands fa-twitter"></i><label> Twitter</label></a></span>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>
