<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anniiee.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{ asset('front/fonts/clash-display/css/clash-display.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navigationSection">
        <div class="container">
            <div class="navigationContainer">
                <div class="mobileToggle">
                    <a class="navbar-brand" href="index.html">Anniiee<span>.</span>com</a>
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
                        <a class="nav-link {{ (Route::currentRouteName() == $menu->page_link) ? 'active' : '' }}"
                            href="{{ route($menu->page_link) }}">
                            {{ Str::ucfirst($menu->title) }}
                        </a>
                        </li>

                        @endforeach

                        <!--<li class="nav-item">
                            <a class="nav-link" href="about-anniiee.html">About Anniiee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Client Success</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Insights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="homebannerSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="homebannerText">
                        <p class="numerologist">Numerologist</p>
                        <h1>Experience Elite Guidance for Your Soul’s Journey.</h1>
                        <p class="bannerPhara">A concise statement reinforcing the premium nature and target audience.
                        </p>
                        <a href="#" class="button">Book Your Elite Consultation <span><img src="{{ asset('front/images/arrowBtn.svg') }}"  alt="arrowBtn"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="mouseClick"><img src="{{ asset('front/images/mouse.svg') }}" alt="mouse"></a>
    </div>
    <div class="meetAnnieeSection pad80">
        <div class="container">
            <div class="meetAnnieeRow">
                <div class="meetAnnieeText">
                    <h2>Meet Anniiee.</h2>
                    <p>I'm Anniiee, a passionate numerologist and budding astrologer with five years of experience in
                        numbers and a fresh two-year journey into astrology. At 26, my primary joy comes from helping
                        others navigate the complex paths of love and relationships.</p>
                    <p>Through the mystical combination of numerology and astrology, I offer insights to empower and
                        illuminate your heart's deepest connections. My mission is to provide clarity and guidance,
                        helping you to align with your truest affections and aspirations.</p>
                </div>
                <div class="meetAnnieeImg">
                    <img src="{{ asset('front/images/anniee.png') }}" alt="anniee">
                    <div class="anniee">
                        <p>Anniee</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>Consultations</p>
                            <h3>Elite Consultations</h3>
                        </div>
                        <div class="bigTitle">
                            <h2>Consultations</h2>
                        </div>
                    </div>
                    <div class="consultationsContent">
                        <div class="consultationsText">
                            <h5>Numerological & Astrological Synergy:</h5>
                            <p class="f18">We strive to develop real-world web solutions that are ideal for small to
                                large projects with bespoke project requirements. web solutions that are ideal for small
                                to large.</p>
                        </div>
                        <div class="consultationsText">
                            <h5>Numerological & Astrological Synergy:</h5>
                            <p class="f18">We strive to develop real-world web solutions that are ideal for small to
                                large projects with bespoke project requirements. web solutions that are ideal for small
                                to large.</p>
                        </div>
                        <div class="consultationsText">
                            <h5>Numerological & Astrological Synergy:</h5>
                            <p class="f18">We strive to develop real-world web solutions that are ideal for small to
                                large projects with bespoke project requirements. web solutions that are ideal for small
                                to large.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>Features</p>
                            <h3>As Featured In</h3>
                        </div>
                        <div class="bigTitle">
                            <h2>Featured</h2>
                        </div>
                    </div>
                    <div class="featuredBlogSection">
                        <div class="featuredBlogLeft">

                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-1.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>Engagement Equations</h4>
                                    <p class="f18">Navigate your engagement journey with emotional and numerical
                                        clarity—find out if the math of your love adds up.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>

                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-2.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>New Connection Code</h4>
                                    <p class="f18">Decode the numbers behind your next great connection and unlock the
                                        power of new beginnings in love.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>

                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-3.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>Together In Harmony</h4>
                                    <p class="f18">Explore how two paths align as one with a numerological approach to
                                        creating balance and intimacy.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="featuredBlogRight">
                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-4.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>Committed Calculations</h4>
                                    <p class="f18">A guide for long-term lovers using numerology to strengthen bonds and
                                        calculate the path to lasting commitment.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-5.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>Lone Wolf’s Path</h4>
                                    <p class="f18">Discover your unique romantic journey with numerology as your
                                        guide—perfect for independent souls ready for meaningful love.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-6.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>Romantic Beginnings</h4>
                                    <p class="f18">Start your love story on the right foot with numerology tips designed
                                        to attract the right partner at the right time.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('front/images/featuredBlog-7.jpg') }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>From Yes To I Do</h4>
                                    <p class="f18">A numerology-based roadmap guiding women from engagement to a
                                        fulfilling lifelong partnership.</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>Testimonials</p>
                            <h3>Client Success</h3>
                        </div>
                        <div class="bigTitle">
                            <h2> Success</h2>
                        </div>
                    </div>
                    <div class="clientSucess">
                        <div>
                            <div class="clientSucessBox">
                                <img src="{{ asset('front/images/quote.svg') }}" alt="quote">
                                <p class="f14">I recently started my own business, and YourBank has been instrumental in
                                    helping me set up my business accounts and secure the financing I needed. Their
                                    expert guidance and tailored solutions have been invaluable.</p>
                                <p class="f18">John D</p>
                            </div>
                        </div>
                        <div>
                            <div class="clientSucessBox">
                                <img src="{{ asset('front/images/quote.svg') }}" alt="quote">
                                <p class="f14">I recently started my own business, and YourBank has been instrumental in
                                    helping me set up my business accounts and secure the financing I needed. Their
                                    expert guidance and tailored solutions have been invaluable.</p>
                                <p class="f18">John D</p>
                            </div>
                        </div>
                        <div>
                            <div class="clientSucessBox">
                                <img src="{{ asset('front/images/quote.svg') }}" alt="quote">
                                <p class="f14">I recently started my own business, and YourBank has been instrumental in
                                    helping me set up my business accounts and secure the financing I needed. Their
                                    expert guidance and tailored solutions have been invaluable.</p>
                                <p class="f18">John D</p>
                            </div>
                        </div>
                        <div>
                            <div class="clientSucessBox">
                                <img src="{{ asset('front/images/quote.svg') }}" alt="quote">
                                <p class="f14">I recently started my own business, and YourBank has been instrumental in
                                    helping me set up my business accounts and secure the financing I needed. Their
                                    expert guidance and tailored solutions have been invaluable.</p>
                                <p class="f18">John D</p>
                            </div>
                        </div>
                        <div>
                            <div class="clientSucessBox">
                                <img src="{{ asset('front/images/quote.svg') }}" alt="quote">
                                <p class="f14">I recently started my own business, and YourBank has been instrumental in
                                    helping me set up my business accounts and secure the financing I needed. Their
                                    expert guidance and tailored solutions have been invaluable.</p>
                                <p class="f18">John D</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.clientSucess').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: false,
                infinite: true,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>
