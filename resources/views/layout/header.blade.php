                                                    {{--logging--}}
                                                    <div id="app">
                                                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                                                            <div class="container">

                                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                                                    <span class="navbar-toggler-icon"></span>
                                                                </button>

                                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                                    <!-- Left Side Of Navbar -->
                                                                    <ul class="navbar-nav mr-auto">

                                                                    </ul>

                                                                    <!-- Right Side Of Navbar -->
                                                                    <ul class="navbar-nav ml-auto">
                                                                        <!-- Authentication Links -->
                                                                        @guest
                                                                            <li class="nav-item">
                                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                                            </li>
                                                                            @if (Route::has('register'))
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                                </li>
                                                                            @endif
                                                                        @else
                                                                            <li class="nav-item dropdown">
                                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                                </a>

                                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                                        {{ __('Logout') }}
                                                                                    </a>

                                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                        @csrf
                                                                                    </form>
                                                                                </div>
                                                                            </li>
                                                                        @endguest
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </nav>

                                                        {{--logging--}}
<div class="header-top bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <a href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Image" class="img-fluid">

                </a>
            </div>
            <div class="col-lg-3 d-none d-lg-block">



            </div>


            <div class="col-lg-3 d-none d-lg-block">
                <div class="quick-contact-icons d-flex">
                    <div class="icon align-self-start">
                        <span class="flaticon-email text-primary"></span>
                    </div>
                    <div class="text">
                        <span class="h4 d-block">info@gmail.com</span>
                        <span class="caption-text">Gournadi, 1230 Bariasl</span>
                    </div>
                </div>
            </div>



            <div class="col-6 d-block d-lg-none text-right">
                <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
            </div>
        </div>
    </div>




    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">

                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                            <li class="active">
                                <a href="/" class="nav-link text-left">Home</a>
                            </li>
                            <li>
                                {{--<a href="/new_page" class="nav-link text-left">About Us</a>--}}
                            </li>
                            <li>
                                <a href="/pages" class="nav-link text-left">Our Pages</a>
                            </li>
                            <li>
                                <a href="/new_page" class="nav-link text-left">New Page</a>
                            </li>
                            <li>
                                <a href="/comments" class="nav-link text-left">Comments</a>
                            </li>

                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>

            </div>
        </div>

    </div>

</div>

<div class="hero-slide owl-carousel site-blocks-cover">

    <div class="intro-section" style="background-image: url({{url('images/hero_1.jpg')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <h1>We Are <strong>Leading</strong> Industry of Engineers</h1>
                </div>
            </div>
        </div>
    </div>



</div>
<!-- END slider -->
