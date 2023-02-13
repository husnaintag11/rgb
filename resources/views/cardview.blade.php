@extends('rgbmaster')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-5">
            <img src="rgbpics/HEN.jpg" width="350" height="340" alt=""><br><br>
<<<<<<< Updated upstream







    <button class="btn btn-warning"><i class='bx bxs-cart'>Add to Cart</i></button>
    <button class="btn btn-danger"><i class='bx bxs-heart'>Whish List</i></button>







=======
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id">
                @csrf
                <button class="btn btn-warning">Add TO Chart</button>
            </form>
            <br><br>
            <button class="btn btn-danger">&nbsp&nbspBuy Now</button>
>>>>>>> Stashed changes
        </div>

        <div class="line"></div>


        <div class="col-sm-3">
            <h5>FANCY HEN</h5>
            <h6> <span class="badge rounded-pill bg-primary">Silver sbright</span></h6>

<<<<<<< Updated upstream
                <div class="mt-4 info">
                    <h6><b>Description</b></h6>

                    <span class="text1 mt-2 d-block">This hens is silver sbright.And its Male breader</span>
=======
            <div class="mt-3 info">
                <h5><b>Information</b></h5>
>>>>>>> Stashed changes

                <span class="text1 mt-2 d-block">This hens is silver sbright.And its Male breader</span>

                <div class="star mt-0 align-items-center">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
<<<<<<< Updated upstream
                <div class="cost mt-0 text-dark">
                    <hr class="mt-5">
                    <h6> <span class="badge rounded-pill bg-primary">Price</span></h6>

                    <p>RS.3000PKR</p>

=======

            </div>
            <div class="cost mt-0 text-dark">
                <h2> <span class="badge rounded-pill bg-primary">Price</span></h2>
>>>>>>> Stashed changes

                <span>RS.2500 PRK</span>




<<<<<<< Updated upstream
                    <h6> <span class="badge rounded-pill bg-primary">Age</span></h6>
                    <p><img src="rgbpics/Age.ico" alt=""> 6Month</p>
                    <h6> <span class="badge rounded-pill bg-primary">Location</span></h6>
                    <p> <img src="rgbpics/Location.ico" alt="">GUJRANWALA</p>
                    <h6> <span class="badge rounded-pill bg-primary">Phone number</span></h6>
                    <p> <i class='bx bxs-phone' style='color:black'></i></i>03085693307</p>
                </div>
=======

                <h2> <span class="badge rounded-pill bg-primary">Age</span></h2>
                <p><img src="rgbpics/Age.ico" alt=""> 6Month</p>
                <h2> <span class="badge rounded-pill bg-primary">Location</span></h2>
                <p> <img src="rgbpics/Location.ico" alt="">GUJRANWALA</p>
                <h2> <span class="badge rounded-pill bg-primary">Phone number</span></h2>
                <p> <i class='bx bxs-phone' style='color:black'></i></i>03085693307</p>
            </div>
>>>>>>> Stashed changes

        </div>
        <div class="line"></div>


        <div class="col-sm-3">
            <h5>Delivery</h5>
            <h6><i class='bx bx-current-location'>Punjab,Gujranwala,Ali pur chattha road,Dogranwala warraich.</i></h6>
            <hr class="mt-5">
<<<<<<< Updated upstream
            <h5>Services</h5>
<h6><i class='bx bxs-car'> 7 Days Delivery Services</i> </h6>
<h6><i class='bx bxs-backpack'>No Return Pakage avaliable</i></h6>
<h6><i class='bx bxs-message-x'>No Wrranty Avaliable</i></h6>
<hr class="mt-5">
<h5>Payment Method</h5>

<a href=""><p><img src="rgbpics/easy paisa.jpg" alt="" width="55" height=""><img src="rgbpics/jazz cash.jpg" alt="" width="35" height=""><img src="rgbpics/ubl.jpg" alt="" width="55" height=""><img src="rgbpics/hbl.jpg" alt="" width="58" height=""></p></a>



<h6><i class='bx bxs-dollar-circle'>Cash on Delivery Avaliable</i></h6>

=======
            <h5><b><i class='bx bxs-package'>Standary delivery</i>7 Days </b></h5>
            <hr class="mt-5">
            <h5><b><i class='bx bxs-dollar-circle'>Cash on Delivery</i></b></h5>
>>>>>>> Stashed changes


            <div class="mt-3 info">



            </div>


            <hr class="mt-5">



        </div>

    </div>












    <hr class="mt-5">






</div>

</div>

@endsection
