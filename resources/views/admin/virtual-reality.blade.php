@extends('admin.adminmaster')

@section('content')



<div class="border-radius-xl mx-2 mx-md-3 position-relative"
    style="background-image: url('/assets/img/vr-bg.jpg'); background-size: cover;">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                target="_blank">
                <img src="/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="dash">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="tables">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="bill">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">receipt_long</i>
                        </div>
                        <span class="nav-link-text ms-1">Billing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="v_r">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">view_in_ar</i>
                        </div>
                        <span class="nav-link-text ms-1">Virtual Reality</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="rtl">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                        </div>
                        <span class="nav-link-text ms-1">RTL</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="notification">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div>
                        <span class="nav-link-text ms-1">Notifications</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account
                        pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="profile">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="sign_in">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign In</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="sign_up">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">assignment</i>
                        </div>
                        <span class="nav-link-text ms-1">Sign Up</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer position-absolute w-100 bottom-0 ">
            <div class="mx-3">
                <a class="btn bg-gradient-primary mt-4 w-100"
                    href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
                    type="button">Upgrade to pro</a>
            </div>
        </div>
    </aside>
    <main class="main-content border-radius-lg h-100">
        <div class="section min-vh-85 position-relative transform-scale-0 transform-scale-md-7">
            <div class="container-fluid">
                <div class="row pt-10">
                    <div class="col-lg-1 col-md-1 pt-5 pt-lg-0 ms-lg-5 text-center">
                        <a href="javascript:;" class="avatar avatar-lg border-0 p-1" data-bs-toggle="tooltip"
                            data-bs-placement="right" title="My Profile">
                            <img class="border-radius-lg" alt="Image placeholder" src="../assets/img/team-1.jpg">
                        </a>
                        <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-2" type="button"
                            data-bs-toggle="tooltip" data-bs-placement="right" title="Home">
                            <i class="material-icons p-2">home</i>
                        </button>
                        <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-0" type="button"
                            data-bs-toggle="tooltip" data-bs-placement="right" title="Search">
                            <i class="material-icons p-2">search</i>
                        </button>
                        <button class="btn btn-white border-radius-lg p-2 mt-n4 mt-md-0" type="button"
                            data-bs-toggle="tooltip" data-bs-placement="right" title="Minimize">
                            <i class="material-icons p-2">more_horiz</i>
                        </button>
                    </div>
                    <div class="col-lg-8 col-md-11 ps-md-5 mb-5 mb-md-0">
                        <div class="d-flex">
                            <div class="me-auto">
                                <h1 class="display-1 font-weight-bold mt-n3 mb-0 text-white">28°C</h1>
                                <h6 class="text-uppercase mb-0 ms-1 text-white">Cloudy</h6>
                            </div>
                            <div class="ms-auto">
                                <img class="w-50 float-end mt-n6 mt-lg-n4"
                                    src="../assets/img/small-logos/icon-sun-cloud.png" alt="image sun">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card move-on-hover overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h6 class="mb-0 me-3">08:00</h6>
                                            <h6 class="mb-0">Synk up with Mark
                                                <small class="text-secondary font-weight-normal">Hangouts</small>
                                            </h6>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="d-flex">
                                            <h6 class="mb-0 me-3">09:30</h6>
                                            <h6 class="mb-0">Gym <br />
                                                <small class="text-secondary font-weight-normal">World Class</small>
                                            </h6>
                                        </div>
                                        <hr class="horizontal dark">
                                        <div class="d-flex">
                                            <h6 class="mb-0 me-3">11:00</h6>
                                            <h6 class="mb-0">Design Review<br />
                                                <small class="text-secondary font-weight-normal">Zoom</small>
                                            </h6>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="bg-gray-100 w-100 text-center py-1"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Show More">
                                        <i class="material-icons text-primary">expand_more</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 mt-4 mt-sm-0">
                                <div class="card bg-gradient-dark move-on-hover">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <h5 class="mb-0 text-white">To Do</h5>
                                            <div class="ms-auto">
                                                <h1 class="text-white text-end mb-0 mt-n2">7</h1>
                                                <p class="text-sm mb-0 text-white">items</p>
                                            </div>
                                        </div>
                                        <p class="text-white mb-0">Shopping</p>
                                        <p class="mb-0 text-white">Meeting</p>
                                    </div>
                                    <a href="javascript:;" class="w-100 text-center py-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Show More">
                                        <i class="material-icons text-white">expand_more</i>
                                    </a>
                                </div>
                                <div class="card move-on-hover mt-4">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <p class="mb-0">Emails (21)</p>
                                            <a href="javascript:;" class="ms-auto" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Check your emails">
                                                Check
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                                <div
                                    class="card card-background card-background-mask-dark move-on-hover align-items-start">
                                    <div class="cursor-pointer">
                                        <div class="full-background"
                                            style="background-image: url('https://images.unsplash.com/photo-1470813740244-df37b8c1edcb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80')">
                                        </div>
                                        <div class="card-body">
                                            <h5 class="text-white mb-0">Night Jazz</h5>
                                            <p class="text-white text-sm">Gary Coleman</p>
                                            <div class="d-flex mt-5">
                                                <button class="btn btn-outline-white rounded-circle p-2 mb-0"
                                                    type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Prev">
                                                    <i class="material-icons p-2 mt-0">skip_previous</i>
                                                </button>
                                                <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0"
                                                    type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Pause">
                                                    <i class="material-icons p-2 mt-0">play_arrow</i>
                                                </button>
                                                <button class="btn btn-outline-white rounded-circle p-2 mb-0"
                                                    type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Next">
                                                    <i class="material-icons p-2 mt-0">skip_next</i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card move-on-hover mt-4">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <p class="my-auto">Messages</p>
                                            <div class="ms-auto">
                                                <div class="avatar-group">
                                                    <a href="javascript:;"
                                                        class="avatar avatar-sm border-0 rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="2 New Messages">
                                                        <img alt="Image placeholder" src="/assets/img/team-1.jpg">
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="avatar avatar-sm border-0 rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="1 New Message">
                                                        <img alt="Image placeholder" src="/assets/img/team-2.jpg">
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="avatar avatar-sm border-0 rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="13 New Messages">
                                                        <img alt="Image placeholder" src="/assets/img/team-3.jpg">
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="avatar avatar-sm border-0 rounded-circle"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="7 New Messages">
                                                        <img alt="Image placeholder" src="/assets/img/team-4.jpg">
                                                    </a>
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
        </div>
    </main>
</div>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="material-icons">clear</i>
                </button>
            </div>
            <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">
            <!-- Sidebar Backgrounds -->
            <div>
                <h6 class="mb-0">Sidebar Colors</h6>
            </div>
            <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors my-2 text-start">
                    <span class="badge filter bg-gradient-primary active" data-color="primary"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-success" data-color="success"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-warning" data-color="warning"
                        onclick="sidebarColor(this)"></span>
                    <span class="badge filter bg-gradient-danger" data-color="danger"
                        onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <!-- Sidenav Type -->
            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark"
                    onclick="sidebarType(this)">Dark</button>
                <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent"
                    onclick="sidebarType(this)">Transparent</button>
                <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white"
                    onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
            <!-- Navbar Fixed -->
            <div class="mt-3 d-flex">
                <h6 class="mb-0">Navbar Fixed</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
            </div>
            <hr class="horizontal dark my-3">
            <div class="mt-2 d-flex">
                <h6 class="mb-0">Light / Dark</h6>
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                        onclick="darkMode(this)">
                </div>
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-info w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
            <a class="btn btn-outline-dark w-100"
                href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View
                documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
                    data-icon="octicon-star" data-size="large" data-show-count="true"
                    aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                    class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>
<!--   Core JS Files   -->
<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/material-dashboard.min.js?v=3.0.4"></script>




@endsection
