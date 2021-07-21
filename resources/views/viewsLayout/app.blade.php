<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mon foyer @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- script for map --}}
    <link href="{{ asset('assets/src/map/mapbox-gl.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/src/map/mapbox-gl.js') }}"></script>
    {{-- <link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script> --}}

    <style>
        body { margin: 0; padding: 0; }
        #myMap { position: absolute; top: 0; bottom: 0; width: 100%; height: 550px; }
    </style>
</head>
<body>

<!--Header-->
<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="{{ __('/') }}" class="text-white h2 mb-0">monFoyer</a></h1>
                </div>
                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li @if(request()->segment(1) == "") class="active" @endif><a href="{{__('/')}}"><span><i
                                            class="icon-home"></i> Accueil</span></a></li>
                            <!--<li class="has-children">
                                <a href="about.html"><span>Dropdown</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                    <li class="has-children">
                                        <a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Menu One</a></li>
                                            <li><a href="#">Menu Two</a></li>
                                            <li><a href="#">Menu Three</a></li>
                                            <li><a href="#">Menu Four</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->
                            <li @if(request()->segment(1) == "A-propos-de-nous") class="active" @endif><a
                                    href="{{__('/A-propos-de-nous')}}"><span><i
                                            class="icon-info"></i> A-propos</span></a></li>
                            <li @if(request()->segment(1) == "Faqs") class="active" @endif><a
                                    href="{{__('/Faqs')}}"><span><i class="icon-question-circle"></i> FAQ</span></a>
                            </li>
                            @if(Auth::check())

                                <li><a href="{{__('/Mon-profil')}}"><span><i
                                                class="icon-lock_open"></i> Mon profil</span></a></li>
                            @else
                                <li @if(request()->segment(1) == "Se-connecter") class="active" @endif><a
                                        href="{{__('/Se-connecter')}}"><span><i class="icon-user"></i> Connexion / Inscription</span></a>
                                </li>
                            @endif
                            <li @if(request()->segment(1) == "Contactez-nous") class="active" @endif><a
                                    href="{{__('/Contactez-nous')}}"><span><i class="icon-markunread_mailbox"></i> Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a
                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                            class="icon-menu h3"></span></a></div>
            </div>

        </div>
    </header>

</div>
<!--End of Header-->

<!--backgroung img and content-->

@yield('backgroudImgSection')

<!-- End of backgroung img and content-->

<!--Page content-->

@yield('pageContent')

<!--<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Tips &amp; Articles</h2>
                <p class="color-black-opacity-5">See Our Daily tips &amp; articles</p>
            </div>
        </div>
        <div class="row mb-3 align-items-stretch">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <img src="images/img_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    <div class="h-entry-inner">
                        <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                        <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May
                            5th, 2019
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <img src="images/img_2.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    <div class="h-entry-inner">
                        <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                        <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May
                            5th, 2019
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                    <img src="images/img_3.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
                    <div class="h-entry-inner">
                        <h2 class="font-size-regular"><a href="#">Etiquette tips for travellers</a></h2>
                        <div class="meta mb-4">by <a href="#">Jeff Sheldon</a> <span class="mx-2">&bullet;</span> May
                            5th, 2019
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--End page content-->

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Notre application est disponible sur</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><img src="{{ asset('images/google_play.png') }}" class="img-fluid"
                                                 alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('images/app_store.png') }}" class="img-fluid" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Products</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Features</h2>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                        <h2 class="footer-heading mb-4">Follow Us</h2>
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control bg-transparent" placeholder="Enter Email"
                               aria-label="Enter Email" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5">
            <div class="col-12 text-md-center text-left">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | Mon Foyer, fait avec <i class="icon-heart text-danger"
                                                                  aria-hidden="true"></i> by <a
                        href="#" target="_blank">monFoyer</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/rangeslider.min.js') }}"></script>


@if(request()->segment(1) == '')
<script src="{{ asset('js/typed.js') }}"></script>
<script>
    var typed = new Typed('.typed-words', {
        strings: [
            @foreach($marques as $marque)

            "{{ $marque->marqLib }}",

            @endforeach
        ],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
    });
</script>
@endif

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
