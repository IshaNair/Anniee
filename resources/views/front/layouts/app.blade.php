<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anniiee.com</title>
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Slick CSS -->
    @stack('css')
    <link rel="stylesheet" href="{{ asset('front/fonts/clash-display/css/clash-display.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navigationSection">
        <div class="container">
            <div class="navigationContainer">
                <div class="mobileToggle">
                    <a class="navbar-brand" href="{{route('front.home')}}">Anniiee<span>.</span>com</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        @foreach ($menus as $menu)
                            <li class="nav-item">
                                <a class="nav-link {{ (Route::currentRouteName() == $menu->page_link ) ? 'active' : '' }}" href="{{ route($menu->page_link) }}"> {{ $menu->title }}</a>
                            </li>
                         @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="footerSection consultationsSection pad80">
        <div class="container">
            <div class="footerRow">
                <div class="footerLogoSection">
                    <a class="navbar-brand" href="#">Anniiee<span>.</span>com</a>
                    <p class="f14">254, Carter Street, Blossom Garden, New York, WC2H 9JQ, UNITED STATE</p>
                    <a href="#"><img src="{{ asset('front/images/bottomToTop.svg') }}" alt="bottomToTop"></a>
                </div>
                <div class="footerLinks">
                    <p class="f16">Services</p>
                    <ul>
                        <li><a href="#">Welcome</a></li>
                        <li><a href="#">The Anniiee Story</a></li>
                        <li><a href="#">Signature Services</a></li>
                        <li><a href="#">Praise & Impact</a></li>
                        <li><a href="#">⁠Cosmic Insights</a></li>
                        <li><a href="#">Media Spotlight</a></li>
                        <li><a href="#">Exclusive Access</a></li>
                    </ul>
                </div>
                <div class="footerLinks">
                    <p class="f16">Policies</p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Legal Disclaimer</a></li>
                    </ul>
                </div>
                <div class="footerLinks">
                    <p class="f16">Social</p>
                    <ul class="footerSocialMedia">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footercopyWrite">
                <form action="" class="subscribeNewsletter">
                    <p>Subscribe to our newsletter</p>
                    <div class="newsletterInput">
                        <input type="email" placeholder="Enter your Email" >
                        <button><img src="{{ asset('front/images/arrowRight.svg') }}" alt="arrowRight"></button>
                    </div>
                </form>
                <div class="copyWrite">
                    <p class="f14">Copyright © 2024 Anniiee.com</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front/js/custom.js')}}"></script>
    @stack('js')
    @yield('customJS')
</body>

</html>
