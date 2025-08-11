@extends('front.layouts.app')

@section('content')
    <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="exclusive_session">
                <div class="exclusive_session_img client_success">
                    <img src="{{asset('temp/'.$vedic_forecast->image)}}" alt="insights">
                </div>
                <div class="exclusive_session_content">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>VEDIC FORECASTS</p>
                            <h3>{{ $vedic_forecast->title }}</h3>
                        </div>
                    </div>
                    <div class="exclusive_session_text insights_text">
                        <p class="f16">{{ $vedic_forecast->content }}</p>
                        <a href="#" class="button"><span>Learn More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>Secrets</p>
                    <h3>Numerology Secrets</h3>
                </div>
                <div class="bigTitle">
                    <h2>success</h2>
                </div>
            </div>
            <div class="numerology_secrets">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-Birth-Number-tab" data-bs-toggle="pill" data-bs-target="#pills-Birth-Number" type="button" role="tab" aria-controls="pills-Birth-Number" aria-selected="true">Birth Number</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Destiny-Number-tab" data-bs-toggle="pill" data-bs-target="#pills-Destiny-Number" type="button" role="tab" aria-controls="pills-Destiny-Number" aria-selected="false">Destiny Number</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Name-Number-tab" data-bs-toggle="pill" data-bs-target="#pills-Name-Number" type="button" role="tab" aria-controls="pills-Name-Number" aria-selected="false">Name Number</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Soul-Urge-tab" data-bs-toggle="pill" data-bs-target="#pills-Soul-Urge" type="button" role="tab" aria-controls="pills-Soul-Urge" aria-selected="false">Soul Urge</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-Personal-Year-tab" data-bs-toggle="pill" data-bs-target="#pills-Personal-Year" type="button" role="tab" aria-controls="pills-Personal-Year" aria-selected="false">Personal Year</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Birth-Number" role="tabpanel" aria-labelledby="pills-Birth-Number-tab" tabindex="0">
                        <div class="tab_content_box">
                            <div class="tab_content_text">
                                <div class="tab_content_number">
                                    <p>01</p>
                                </div>
                                <h3>We had the vision to make recruiting and hiring as <span>easy as managing any other business</span> </h3>
                            </div>
                            <div class="tab_content_img">
                                <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Destiny-Number" role="tabpanel" aria-labelledby="pills-Destiny-Number-tab" tabindex="0">
                        <div class="tab_content_box">
                            <div class="tab_content_text">
                                <div class="tab_content_number">
                                    <p>02</p>
                                </div>
                                <h3>We had the vision to make recruiting and hiring as <span>easy as managing any other business</span> </h3>
                            </div>
                            <div class="tab_content_img">
                                <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Name-Number" role="tabpanel" aria-labelledby="pills-Name-Number-tab" tabindex="0">
                        <div class="tab_content_box">
                            <div class="tab_content_text">
                                <div class="tab_content_number">
                                    <p>03</p>
                                </div>
                                <h3>We had the vision to make recruiting and hiring as <span>easy as managing any other business</span> </h3>
                            </div>
                            <div class="tab_content_img">
                                <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Soul-Urge" role="tabpanel" aria-labelledby="pills-Soul-Urge-tab" tabindex="0">
                        <div class="tab_content_box">
                            <div class="tab_content_text">
                                <div class="tab_content_number">
                                    <p>04</p>
                                </div>
                                <h3>We had the vision to make recruiting and hiring as <span>easy as managing any other business</span> </h3>
                            </div>
                            <div class="tab_content_img">
                                <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Personal-Year" role="tabpanel" aria-labelledby="pills-Personal-Year-tab" tabindex="0">
                        <div class="tab_content_box">
                            <div class="tab_content_text">
                                <div class="tab_content_number">
                                    <p>05</p>
                                </div>
                                <h3>We had the vision to make recruiting and hiring as <span>easy as managing any other business</span> </h3>
                            </div>
                            <div class="tab_content_img">
                                <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>Trends</p>
                    <h3>⁠Exclusive Global Trends</h3>
                </div>
                <div class="bigTitle">
                    <h2>Trends</h2>
                </div>
            </div>
            <div class="global_trends">
                <div class="global_trends_box">
                    <div class="global_trends_img">
                        <img src="{{asset('front/images/global_trends.png')}}" alt="global_trends">
                    </div>
                    <div class="global_trends_Text">
                        <p>Birth Number</p>
                    </div>
                </div>
                <div class="global_trends_box">
                    <div class="global_trends_img">
                        <img src="{{asset('front/images/global_trends.png')}}" alt="global_trends">
                    </div>
                    <div class="global_trends_Text">
                        <p>Birth Number</p>
                    </div>
                </div>
                <div class="global_trends_box">
                    <div class="global_trends_img">
                        <img src="{{asset('front/images/global_trends.png')}}" alt="global_trends">
                    </div>
                    <div class="global_trends_Text">
                        <p>Birth Number</p>
                    </div>
                </div>
                <div class="global_trends_box">
                    <div class="global_trends_img">
                        <img src="{{asset('front/images/global_trends.png')}}" alt="global_trends">
                    </div>
                    <div class="global_trends_Text">
                        <p>Birth Number</p>
                    </div>
                </div>
                <div class="global_trends_box">
                    <div class="global_trends_img">
                        <img src="{{asset('front/images/global_trends.png')}}" alt="global_trends">
                    </div>
                    <div class="global_trends_Text">
                        <p>Birth Number</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>Announcement</p>
                    <h3>News & Announcements</h3>
                </div>
                <div class="bigTitle">
                    <h2>News</h2>
                </div>
            </div>
        </div>
        <div class="announcements_slider">
            <div>
                <div class="announcements_slider_box">
                    <div class="announcements_slider_img">
                        <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                    </div>
                    <div class="announcements_slider_content">
                        <div class="announcements_slider_text">
                            <div class="tab_content_number">
                                <p>01</p>
                            </div>
                            <h4>The design and influence of motion with the best</h4>
                        </div>
                        <div class="announcements_slider_profile">
                            <div class="profile_content">
                                <div class="profile_img">
                                    <img src="{{asset('front/images/manthan.png')}}" alt="">
                                </div>
                                <div class="profile_text">
                                    <p>Manthan Patel</p>
                                    <p class="f16">Numerologist</p>
                                </div>
                            </div>
                            <div class="announcements_Like">
                                <div class="likeSection">
                                    <div class="like">
                                        <img src="{{asset('front/images/like.svg')}}" alt="">
                                        <p class="f16">78</p>
                                    </div>
                                    <div class="like">
                                        <img src="{{asset('front/images/view.svg')}}" alt="">
                                        <p class="f16">170</p>
                                    </div>
                                </div>
                                <div class="date">
                                    <p class="f16">26.5.2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="announcements_slider_box">
                    <div class="announcements_slider_img">
                        <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                    </div>
                    <div class="announcements_slider_content">
                        <div class="announcements_slider_text">
                            <div class="tab_content_number">
                                <p>01</p>
                            </div>
                            <h4>The design and influence of motion with the best</h4>
                        </div>
                        <div class="announcements_slider_profile">
                            <div class="profile_content">
                                <div class="profile_img">
                                    <img src="{{asset('front/images/manthan.png')}}" alt="">
                                </div>
                                <div class="profile_text">
                                    <p>Manthan Patel</p>
                                    <p class="f16">Numerologist</p>
                                </div>
                            </div>
                            <div class="announcements_Like">
                                <div class="likeSection">
                                    <div class="like">
                                        <img src="{{asset('front/images/like.svg')}}" alt="">
                                        <p class="f16">78</p>
                                    </div>
                                    <div class="like">
                                        <img src="{{asset('front/images/view.svg')}}" alt="">
                                        <p class="f16">170</p>
                                    </div>
                                </div>
                                <div class="date">
                                    <p class="f16">26.5.2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="announcements_slider_box">
                    <div class="announcements_slider_img">
                        <img src="{{asset('front/images/numerology_secrets_bg-3.jpg')}}" alt="">
                    </div>
                    <div class="announcements_slider_content">
                        <div class="announcements_slider_text">
                            <div class="tab_content_number">
                                <p>01</p>
                            </div>
                            <h4>The design and influence of motion with the best</h4>
                        </div>
                        <div class="announcements_slider_profile">
                            <div class="profile_content">
                                <div class="profile_img">
                                    <img src="{{asset('front/images/manthan.png')}}" alt="">
                                </div>
                                <div class="profile_text">
                                    <p>Manthan Patel</p>
                                    <p class="f16">Numerologist</p>
                                </div>
                            </div>
                            <div class="announcements_Like">
                                <div class="likeSection">
                                    <div class="like">
                                        <img src="{{asset('front/images/like.svg')}}" alt="">
                                        <p class="f16">78</p>
                                    </div>
                                    <div class="like">
                                        <img src="{{asset('front/images/view.svg')}}" alt="">
                                        <p class="f16">170</p>
                                    </div>
                                </div>
                                <div class="date">
                                    <p class="f16">26.5.2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
