<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">



    <title>Navbar</title>
</head>

<body>

    <div class="  container bg-primary ">
        <h1 class="py-2 text-center"> RGB</h1>
        <div class="row py-3">
            <div class="col">


                <a class="navbar-brand "><img class="rounded-circle" src="rgbpics/logo.jpg" width="120px" height="120px"
                        alt=""></a>

                <div class=" container text-center col-6 ">

                    <form class="form-inline" action="">
                        <input type="search" class="form-control" placeholder="SEARCH">
                        <button class="btn-warning "><i class='bx bx-search'></i>Search</button>
                    </form>


                </div>

            </div>

        </div>

    </div>
    <div class="container border border-danger mb-5 sticky-top">
        <div class="row py-3 bg-warning ">
            <div class="col">
                <ul class="nav nav-pills nav-fill  ">
                    <li class="nav-item"><a href="/nav" class="nav-link"><i class='bx bxs-home-alt-2'></i>HOME</a></li>


                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class='bx bxs-cat'></i>CATS</a>
                        <div class="dropdown-menu">
                            <a href="/persian" class="dropdown-item">Persian</a>
                            <a href="/siamese" class="dropdown-item">Siamese</a>
                            <a href="/khaomanee" class="dropdown-item">Khao Manee</a>
                            <a href="/catkitten" class="dropdown-item">Cats Kittens</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class='bx bxs-dog'></i>DOGS</a>
                        <div class="dropdown-menu">
                            <a href="/germanshaphered" class="dropdown-item">German shaphered</a>
                            <a href="/labrador" class="dropdown-item">Labrador</a>
                            <a href="/pista" class="dropdown-item">Pista</a>

                        </div>
                    </li>


                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class='bx bxs-dog'></i>BIRDS</a>
                        <div class="dropdown-menu">
                            <a href="/australian" class="dropdown-item">Australian Parrots</a>
                            <a href="/raw" class="dropdown-item">Raw Parrots</a>
                            <a href="/dove" class="dropdown-item">Dove</a>
                            <a href="/fancypigeon" class="dropdown-item">Fancy Pigeons</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class='fa-solid fa-crow'></i>HENS </a>

                        <div class="dropdown-menu">
                            <a href="/bentom" class="dropdown-item">Bentom</a>
                            <a href="/goldenbuff" class="dropdown-item">Golden Buff</a>
                            <a href="/polish" class="dropdown-item">Polish</a>
                            <a href="/milliflower" class="dropdown-item">Milli Flower</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class='fa fa-virus'></i>VIRUSES</a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Nd Plus Ibd Vaccine</a>
                            <a href="" class="dropdown-item">Nobilis ND Lasota</a>
                            <a href="" class="dropdown-item">Gumboro</a>
                            <a href="" class="dropdown-item">Fowl Pox</a>
                        </div>
                    </li>


                    <li class="nav-item"><a href="" class="nav-link"><i class="bx bx-plus-medical"></i>HOSPITALS</a>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa-solid fa-bird"></i>HOSPITALS</a></li>





                </ul>



            </div>


        </div>


    </div>




    <div class=" col text-center">

        <a href=""><img src="rgbpics/INSTAGRAM.jpg" alt="" width="300px" height="250px"></a>
        <a href=""><img src="rgbpics/Whatsapp.jpg" alt="" width="150px" height="150px"></a>

        <h1>JOIN OUR INSTAGRAM PAGE</h1>


    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col py-5">
                <h3>Hen Chicks</h3>
                <a href="/polishchick" class="btn btn-secondary btn-sm">POLISH</a>
                <a href="" class="btn btn-secondary btn-sm">BENTOM</a>
                <a href="/goldenbuffchick" class="btn btn-secondary btn-sm">GOLDEN BUFF</a>
                <a href="/milliflowerchick" class="btn btn-secondary btn-sm">MILLI FLOWER</a>
                <a href="/englishgamechick" class="btn btn-secondary btn-sm">ENGLISH GAME</a>
                <a href="/shamoaseelchick" class="btn btn-secondary btn-sm">SHAMO ASEEL</a>
                <a href="/goldenmesrichick" class="btn btn-secondary btn-sm">GOLDEN MESRI</a>
                <a href="/dogi" class="btn btn-secondary btn-sm">DESI HEN</a>




            </div>

        </div>


    </div>



    <div class=" py-4">
        @yield('content')

</div>

    <div class="container">
        <h1>Catagory</h1>
        <br>
        <div class="row text-center">
            <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/Dog.jpg" alt="" width="100px" height="100px"></a>
       <h5>Dogs</h5>
    </div>

    <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/Hencatg.jpg" alt="" width="100px" height="100px"></a>
       <h5>Hens</h5>
    </div>

    <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/pigeoncatg.jpg" alt="" width="100px" height="100px"></a>
       <h5>Pigeons</h5>
    </div>

    <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/catcatg.jpg" alt="" width="100px" height="100px"></a>
       <h5>Cats</h5>
    </div>

    <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/parrotcatg.jpg" alt="" width="100px" height="100px"></a>
       <h5>Birds</h5>
    </div>

    <div class="col-2">

        <a href=""><img class="rounded-circle" src="rgbpics/vacinecatg.jpg" alt="" width="100px" height="100px"></a>
       <h5>Vacination</h5>
    </div>













    </div>
    </div>





            <footer class="bg-warning text pt-5 pb-4">
                <div class="container text-center text-md-left">
                    <div class="row text-center text-md-left">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h4 class="text-uppercase mb-4 font-weight-bold text-danger">Company Name</h4>
                            <p>The company name is RGB POULTRY ROOM.This company is about poultry products.</p>


                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h4 class="text-uppercase mb-4 font-weight-bold text-danger">About</h4>
                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Customers</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Offices</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Careers</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Shipping method</a>


                            </p>


                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h4 class="text-uppercase mb-4 font-weight-bold text-danger">Products</h4>
                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Hens</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Dogs</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Cats</a>


                            </p>

                            <p>
                                <a href="" class="text-dark" style="text-decoration: none;">Birds</a>


                            </p>


                        </div>

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h4 class="text-uppercase mb-4 font-weight-bold text-danger">Contact us</h4>
                            <p>
                                <i class='bx bxs-home-alt-2' style='color:black'></i>Pakistan,Punjab,Gujranwala


                            </p>

                            <p>



                            </p>

                            <p>
                                <i class='bx bxl-gmail' style='color:black'></i>rgbpoultryroom@gmail.com


                            </p>


                            <p>
                                <i class='bx bxl-skype' style='color:black'></i>03085693307


                            </p>


                        </div>

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h4 class="text-uppercase mb-4 font-weight-bold text-danger">Follow us</h4>
                            <p>
                                <a href=""><i class='bx bxl-facebook-circle'></i></a>


                            </p>

                            <p>
                                <a href=""><i class='bx bxl-twitter'></i></a>


                            </p>

                            <p>
                                <a href=""><i class='bx bxl-instagram-alt ' style='color:#de0d44  '></i></a>


                            </p>

                            <p>
                                <a href=""><i class='bx bxl-whatsapp-square' style='color:#19da12'></i></a>


                            </p>


                        </div>

                        <hr class="mb-4">
                        <div class="mb-4">
                            <div class="row align-items-center">

                                <div class="col-md-7 col-lg-8">
                                    <p>Copyright @2022 All rights reserved by:
                                        <a href=""> <strong class="text-danger">RGB WEB DEVELOPERS</strong></a>
                                    </p>

                                </div>

                            </div>

                        </div>




                    </div>


                </div>




            </footer>

</body>

</html>
