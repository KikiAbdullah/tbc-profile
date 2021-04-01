<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('cohost/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('cohost/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('cohost/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('cohost/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('cohost/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('cohost/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('cohost/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('beranda') }}">
                <img src="{{ asset('cohost/images/logo.svg') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('beranda') ? 'active' : '' }}"><a href="{{ route('beranda') }}" class="nav-link">Beranda</a></li>
                    <!-- <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a href="domain.html" class="nav-link">Domain</a></li>
                    <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a class="nav-link" href="hosting.html">Hosting</a></li>
                    <li class="nav-item {{ Request::is('') ? 'active' : '' }}"><a href="blog.html" class="nav-link">Blog</a></li> -->
                    <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}"><a href="{{ route('kontak') }}" class="nav-link">Kontak</a></li>
                    <!-- <li class="nav-item {{ Request::is('') ? 'active' : '' }} cta"><a href="contact.html" class="nav-link"><span>Get started</span></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 bg-primary p-4">
                        <h2 class="ftco-heading-2">Tower Barat Creative</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled mb-0">
                            <!-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> -->
                            <li class="ftco-animate"><a href="https://www.instagram.com/towerbarat.creative/" target="_blank"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Office</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Perum Bukit Alam Blok Z No.29 Suwayuwo - Sukorejo, Kab. Pasuruan, Jawa Timur, Indonesia</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 8515-5300-0552</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">kontak@towerbarat.site</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> | Tower Barat Creative</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('cohost/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('cohost/js/popper.min.js') }}"></script>
    <script src="{{ asset('cohost/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('cohost/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('cohost/js/aos.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('cohost/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('cohost/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('cohost/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('cohost/js/google-map.js') }}"></script>
    <script src="{{ asset('cohost/js/main.js') }}"></script>

</body>

</html>