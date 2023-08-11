@extends('home.master')
@section('content')

{{-- body --}}
{{--bg color card and text  --}}
<div class="container-fluid">
    <div class="row justify-content-center align-items-center  bg-secondary bg-darken-xs  text-white"
        style="height: 100vh;  ">
        <div class="">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-6 p-5">
                        <div class="mt-5 ">
                            <h1>Name Your Need</h1>
                            <h1 class="font-weight-bold">You Will Get <span class="text-danger">EveryThing </span></h1>
                            <p class="p-2 fount-size-5">Consectetur adipisicing elit sed dotem eiusmod tempor incune ut
                                labore
                                etdolore maigna aliqua enim. </p>
                        </div>
                        {{-- Search button --}}
                        <a class="btn btn-danger btn-lg" href="">Get Search</a> &emsp;&emsp;
                        <a class="text-white  btn-lg btn btn-outline-danger border border-white" href="">Get Search </a>
                    </div>
                    {{-- card  --}}
                    <div class="col-lg-6 ">
                        <div class="card mt-4 p-5">
                            <h3 class="text-dark ">More Than 60K Live Listings <br><span
                                    class="text-dark font-weight-bold ">
                                    From</span><span class="text-danger font-weight-bold"> Categories Items</span></h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="search" class="form-control" placeholder="SEARCH HERE...." name=""
                                        id="">
                                </div>
                                <div class="col-lg-12">
                                    <select name="" class="form-control mt-3" id="">
                                        <option value="">ANIMAL</option>
                                        <option value="">BIRDS</option>
                                    </select>
                                </div>

                                <div class="col-lg-3 mt-3">
                                    <a class="btn btn-danger" href="">Search </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- scroll images --}}

<div class="col-12 col-md-12 ">
    <div class=" card container ">
        <div class="owl-carousel owl-theme " id="slider1">

            @foreach ($sub_category as $sub_category)
            <div class="card container" style="height: 9.3rem">
                <div class="item">
                    <img src="{{ $sub_category->image}}"
                        height="120px" width="120px">
                    <span  class="text-center ml-5 p-5">{{$sub_category->name}}</span>
                </div>
                <div class="card-footer">

                </div>

            </div>
            @endforeach

        </div>
    </div>

</div>
<br><br><br><br><br><br>
{{-- varifield items --}}


<div class="">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://a-z-animals.com/media/2022/01/red-eared-slider-turtle.jpg" height="350px" width="350px" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://a-z-animals.com/media/2022/01/red-eared-slider-turtle.jpg" height="350px" width="350px" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://a-z-animals.com/media/2022/01/red-eared-slider-turtle.jpg" height="350px" width="350px" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</div>




{{-- <div class="container  p-4">

    <div class="row align-items-center p-1 m-2">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
            <div>
                <div>
                    <div class="text-danger">
                        <h2>Items </h2>
                    </div>

                    <h3>item are compined hen e.t.c<br> lahore and gujranwala</h3>
                </div>
                <div>
                    <p>Elit sed iusmod tempor incididunt utnabore etna dolore agna enimad mini veniam quista
                        nostrud
                        exercitation<i> ullamco laboris nisitio</i> aliquip commodo consequat oluptate velit
                        esse
                        cillum dolore.</p>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/QVBpwMrTYoE" frameborder="0" allow="accelerometer; autoplay; en
                    crypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                </iframe>
            </div>


        </div>
    </div>

    <hr>

</div> --}}

<br><br>
{{-- featuer add --}}
<div class="container">

    <h6 class="display-6">Featured Ads </h6>

    <a href="#"><i>All View</i> </a>
    <br><br>



</div>

<div class="container">
    <div class="owl-carousel owl-theme" id="slider2">
        <div class="card ">
            <div class="item ">
                <img href="#" src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                    class="card-arrow" alt="Arrow Picture" alt="">

                <div class="card-body">
                    <a href="#">Animals</a>
                    <br>
                    <span class="text-dark" href="#">Office From another city</span>
                    <br>
                    <span class="text-danger ">Price On call</span>
                    <br>
                    <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                    <br>
                    <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
                </div>
                <div class="card-footer">
                    <small class="text-muted">

                    </small>
                </div>


            </div>
        </div>
        <div class="card ">
            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">
                <div class="card-body">
                    <a href="#">Animals</a>
                    <br>
                    <span class="text-dark " href="#">Office From another city</span>
                    <br>
                    <span class="text-danger ">Price On call</span>
                    <br>
                    <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                    <br>
                    <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
                </div>
                <div class="card-footer">
                    <small class="text-muted"></small>
                </div>

            </div>
        </div>
        <div class="card ">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark" href="#">Office From another city</span>
                <br>
                <span class="text-danger">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">
            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">
            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg" alt="">
            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>
        <div class="card">

            <div class="item">
                <img href="#" src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                    alt="">

            </div>
            <div class="card-body">
                <a href="#">Animals</a>
                <br>
                <span class="text-dark " href="#">Office From another city</span>
                <br>
                <span class="text-danger ">Price On call</span>
                <br>
                <span class=" text-muted "><i class="fa-solid fa-location-arrow"></i>&nbspIndia</span>
                <br>
                <span class="text-muted"><i class="fa-solid fa-calendar-days"></i>&nbspDecember</span>
            </div>
            <div class="card-footer">
                <small class="text-muted"></small>
            </div>

        </div>

    </div>

</div>




<br><br>
{{-- RECent add --}}
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="container">
                <h5 class="display-6">Recent Add</h5>
            </div>

            <hr class="hr-light">
            <div class="card flex-row flex-wrap col-md-12">
                <div class="owl-carousel owl-theme col-md-4" id="slider3">
                    <div class="card border-0">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                </div>

                <div class="card-block px-1 col-md-8">
                    <h5><a href="#" class="card-title">Hen</a></h5>
                    <h6>Price Of hen</h6>
                    <p class="card-text">The hen has two slender legs two eyes and a strong beak. It has a red
                        crest
                        on its
                        head, which looks
                        very beautiful </p>
                </div>

            </div>
            <br><br>
            {{-- slider4 --}}
            <div class="card flex-row flex-wrap col-md-12 shadow-card">
                <div class="owl-carousel owl-theme col-md-4" id="slider4" onmouseover="addShadow(this)"
                    onmouseout="removeShadow(this)">
                    <div class="card border-0">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                    <div class="card border-0 ">
                        <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/camera1-255x200.jpg"
                            alt="" />
                    </div>
                </div>

                <div class="card-block px-1 col-md-8">
                    <h5><a href="#" class="card-title">Hen</a></h5>
                    <h6>Price Of hen</h6>
                    <p class="card-text">The hen has two slender legs two eyes and a strong beak. It has a red
                        crest
                        on its
                        head, which looks
                        very beautiful </p>
                </div>

            </div>
            <br><br><br>
            {{-- top caegories --}}
            <div class="container d-flex ">
                <h4 class="display-6">Add By Location</h4>
                <hr>
            </div>
            <br><br>
            <div class="container ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card  ">

                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-09.jpg"
                                class="card-img-center" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-09.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-10.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br><br>
            <div class="container ">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card  ">

                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-09.jpg"
                                class="card-img-center" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-09.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-10.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h6 class="card-title text-center">Paris</h6>
                                <div class="text-center">
                                    <small class="text-muted text-center">(11&nbspAds)</small>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br><br>

        </div>





        {{-- Staff Pick --}}
        <div class="col-md-4 ">
            <h5 class="display-6">Staff pick</h5>
            <hr class="hr-light">
            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class="  px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>
            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class="  px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>

            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class="  px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>

            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class="  px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>

            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class="  px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>

            <div class="card flex-row flex-wrap custom-card">
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/car1-100x100.jpg" alt=""
                        height="70px" width="70px" alt="" />

                    <div class=" px-3 col-md-10">
                        <h6><a href="#" class="card-title">Hen</a></h6>
                        <p class="card-text">The hen has two slender</p>
                        <h5 class="text-danger">Price Of hen</h5>

                    </div>
                </div>

            </div>

            <br>
            {{-- Top Categories --}}

            <h4 class="display-6">Top Categories</h4>


            <hr class="hr-light">
            <div class="container">
                <div class="card">
                    <div class="custom-card ">
                        <div class="d-flex px-6 justify-content-start align-items-center col-md-8">
                            <img class="card"
                                src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-05-1.png"
                                alt="Animals">

                            <div class="col-md-4 ">
                                <div class="card-body d-flex">
                                    <h6><a href="#" class="card-title ">Animal</a></h6>
                                    <div class=" container d-flex  mx-5 ">
                                        <small class=" mx-5 text-muted">(11&nbspAds)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex px-6 justify-content-start align-items-center col-md-8">
                            <img class="card"
                                src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-05-1.png"
                                alt="Animals">

                            <div class="col-md-4 ">
                                <div class="card-body d-flex">
                                    <h6><a href="#" class="card-title ">Animal</a></h6>
                                    <div class=" container d-flex  mx-5 ">
                                        <small class=" mx-5 text-muted">(11&nbspAds)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex px-6 justify-content-start align-items-center col-md-8">
                            <img class="card"
                                src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-05-1.png"
                                alt="Animals">

                            <div class="col-md-4 ">
                                <div class="card-body d-flex">
                                    <h6><a href="#" class="card-title ">Animal</a></h6>
                                    <div class=" container d-flex  mx-5 ">
                                        <small class=" mx-5 text-muted">(11&nbspAds)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex px-6 justify-content-start align-items-center col-md-8">
                            <img class="card"
                                src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-05-1.png"
                                alt="Animals">

                            <div class="col-md-4 ">
                                <div class="card-body d-flex">
                                    <h6><a href="#" class="card-title ">Animal</a></h6>
                                    <div class=" container d-flex  mx-5 ">
                                        <small class=" mx-5 text-muted">(11&nbspAds)</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex px-6 justify-content-start align-items-center col-md-8">
                            <img class="card"
                                src="https://classipro.theme-zilla.com/wp-content/uploads/2020/12/img-05-1.png"
                                alt="Animals">

                            <div class="col-md-4 ">
                                <div class="card-body d-flex">
                                    <h6><a href="#" class="card-title ">Animal</a></h6>
                                    <div class=" container d-flex  mx-5 ">
                                        <small class=" mx-5 text-muted">(11&nbspAds)</small>
                                    </div>
                                </div>
                            </div>

                        </div>




                    </div>
                </div>
            </div>
        </div>


    </div>
</div>





{{-- js --}}
<script>
    $(document).ready(function () {


        $('#slider1').owlCarousel({
            dots: false,
            loop: true,
            margin: 0,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
        // $('#slider1').owlCarousel({
        //     items: 4,
        //     loop: true,
        //     dots: false,

        //     margin: 0,

        //     nav: true,
        //     responsive: {
        //         0: {
        //             items: 1
        //         },
        //         600: {
        //             items: 3
        //         },
        //         1000: {
        //             items: 5
        //         }
        //     }

    })


    $(document).ready(function () {
        $('#slider2').owlCarousel({
            items: 4,
            dots: true,
            margin: 30,
            loop: true,

            autoplay: true,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }

        });

    })

    $(document).ready(function () {
        $('#slider3').owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

    })

    $(document).ready(function () {
        $('#slider4').owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });


    })

</script>

@endsection
