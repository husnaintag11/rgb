@extends('admin.adminmaster')
@section('content')


<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card mt-4">
                <div class="card-header p-3">
                    <h5 class="mb-0">Alerts</h5>
                </div>
                <div class="card-body p-3 pb-0">
                    <div class="alert alert-primary alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple primary alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-secondary alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple secondary alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple success alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple danger alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-warning alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple warning alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-info alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple info alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-light alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple light alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="alert alert-dark alert-dismissible text-white" role="alert">
                        <span class="text-sm">A simple dark alert with <a href="javascript:;"
                                class="alert-link text-white">an example link</a>. Give it a click if you
                            like.</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header p-3">
                    <h5 class="mb-0">Notifications</h5>
                    <p class="text-sm mb-0">
                        Notifications on this page use Toasts from Bootstrap. Read more details <a
                            href="https://getbootstrap.com/docs/5.0/components/toasts/" target="
          ">here</a>.
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button"
                                data-target="successToast">Success</button>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                            <button class="btn bg-gradient-info w-100 mb-0 toast-btn" type="button"
                                data-target="infoToast">Info</button>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                            <button class="btn bg-gradient-warning w-100 mb-0 toast-btn" type="button"
                                data-target="warningToast">Warning</button>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                            <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                                data-target="dangerToast">Danger</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="toast fade hide p-2 bg-white" role="alert" aria-live="assertive" id="successToast"
            aria-atomic="true">
            <div class="toast-header border-0">
                <i class="material-icons text-success me-2">
                    check
                </i>
                <span class="me-auto font-weight-bold">Material Dashboard </span>
                <small class="text-body">11 mins ago</small>
                <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                Hello, world! This is a notification message.
            </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-gradient-info" role="alert" aria-live="assertive" id="infoToast"
            aria-atomic="true">
            <div class="toast-header bg-transparent border-0">
                <i class="material-icons text-white me-2">
                    notifications
                </i>
                <span class="me-auto text-white font-weight-bold">Material Dashboard </span>
                <small class="text-white">11 mins ago</small>
                <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast"
                    aria-label="Close"></i>
            </div>
            <hr class="horizontal light m-0">
            <div class="toast-body text-white">
                Hello, world! This is a notification message.
            </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="warningToast"
            aria-atomic="true">
            <div class="toast-header border-0">
                <i class="material-icons text-warning me-2">
                    travel_explore
                </i>
                <span class="me-auto font-weight-bold">Material Dashboard </span>
                <small class="text-body">11 mins ago</small>
                <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                Hello, world! This is a notification message.
            </div>
        </div>
        <div class="toast fade hide p-2 mt-2 bg-white" role="alert" aria-live="assertive" id="dangerToast"
            aria-atomic="true">
            <div class="toast-header border-0">
                <i class="material-icons text-danger me-2">
                    campaign
                </i>
                <span class="me-auto text-gradient text-danger font-weight-bold">Material Dashboard </span>
                <small class="text-body">11 mins ago</small>
                <i class="fas fa-times text-md ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
            </div>
            <hr class="horizontal dark m-0">
            <div class="toast-body">
                Hello, world! This is a notification message.
            </div>
        </div>
    </div>
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
