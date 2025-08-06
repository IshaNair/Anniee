@extends('front.layouts.app')

@section('content')

    <div class="homebannerSection">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="homebannerText">
                        <p class="numerologist">Numerologist</p>
                        <h1>Experience Elite Guidance for Your Soul’s Journey.</h1>
                        <p class="bannerPhara">A concise statement reinforcing the premium nature and target audience.
                        </p>
                        <a href="#" class="button"><span>Book Your Elite Consultation </span></a>
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
                           @foreach ($leftposts as $leftpost)


                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('temp/post/'.$leftpost->image) }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>{{ $leftpost->title }}</h4>
                                    <p class="f18">{{ $leftpost->content }}</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                          @endforeach

                        </div>

                        <div class="featuredBlogRight">
                           @foreach ($righttposts as $righttpost)
                            <div class="featuredBlog">
                                <div class="featuredBlogImg">
                                    <img src="{{ asset('temp/post/'.$righttpost->image) }}" alt="featuredBlog">
                                </div>
                                <div class="catagories">
                                    <p class="f14"><span><span></span></span>Numerologist</p>
                                </div>
                                <div class="featuredBlogtext">
                                    <h4>{{ $righttpost->title }}</h4>
                                    <p class="f18">{{ $righttpost->content }}</p>
                                </div>
                                <a href="#">Read more <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </div>
                             @endforeach

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

@endsection




