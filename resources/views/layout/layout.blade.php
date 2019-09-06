<!DOCTYPE html>
<html lang="en">

<head>
    <title>Engineers </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link href="{{ asset('assets/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

  @include('layout.header')


    <div class="site-section services-1-wrap">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <!-- END services -->

    <div class="site-section">
        <div class="block-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="{{ asset('assets/images/about_1.jpg') }}" alt="Image " class="img-fluid img-overlap">
                    </div>
                    <div class="col-lg-5 ml-auto">
                        <h3 class="section-subtitle">Why Choose Us</h3>
                        <h2 class="section-title mb-4">More than <strong>50 year experience</strong> in industry</h2>
                        <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

                        <div class="row my-5">
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Expert in Builings</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Modern Design</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center">
                                <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white">Leading In Floor Planning</h4>
                                    <p class="text-white">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>



                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END block-2 -->












    <div class="py-5 bg-primary block-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-white">Subscribe To Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, reprehenderit!</p>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="form-subscribe d-flex">
                        <input type="text" class="form-control form-control-lg">
                        <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p class="mb-4"><img src="images/logo2.png" alt="Image" class="img-fluid"></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
                    <p><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Company</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Services</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Industrial</a></li>
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Remodeling</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Contact</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Support Community</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Our Partners</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mb.YTPlayer.min.js') }}"></script>




<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
