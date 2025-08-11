@extends('front.layouts.app')

@section('content')
    <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="exclusive_session">
                <div class="exclusive_session_img client_success">
                    <div class="client_success_img">
                        <img src="{{ asset('temp/post/'.$client_success_post1->image) }}" alt="client_success">
                    </div>
                    <div class="client_success_Box">
                        <h2>4.8</h2>
                        <img src="{{asset('front/images/5star.svg')}}" alt="">
                        <p class="f16">Best rated agency</p>
                    </div>
                </div>
                <div class="exclusive_session_content">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>Valuable ‍🧑🏼🤝🧑 Feedback</p>
                            <h3>{{ $client_success_post1->title }}</h3>
                        </div>
                    </div>
                    <div class="exclusive_session_text">
                        <p class="f16">{{ $client_success_post1->content }} </p>
                        <div class="client_details">
                            <div class="logo">
                                <p class="navbar-brand" href="index.html">Anniiee<span>.</span>com</p>
                            </div>
                            <div class="line"></div>
                            <div class="">
                                <p >Pranav Patel</p>
                                <p class="f12">Pune, Co founder</p>
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
                    <p>success Manager</p>
                    <h3>How to client success Manager</h3>
                </div>
                <div class="bigTitle">
                    <h2>success</h2>
                </div>
            </div>
            <div class="success_manager">
              @foreach ($succc_manages as $succc_manage)


                <div class="success_manager_box">
                    <div class="success_manager_number">
                        <img src="{{ asset('temp/'.$succc_manage->image) }}" alt="">
                        <p>{{ $loop->iteration }}</p>
                    </div>
                    <div class="success_manager_Text">
                        <h5>{{ $succc_manage->title }}</h5>
                        <p class="f16">{{ $succc_manage->content }}</p>
                    </div>
                </div>
              @endforeach
                <!--<div class="success_manager_box">
                    <div class="success_manager_number">
                        <img src="{{asset('front/images/success_manager_bg.png')}}" alt="">
                        <p>2</p>
                    </div>
                    <div class="success_manager_Text">
                        <h5>Easy Booking</h5>
                        <p class="f16">Hassle-free scheduling & confirmations</p>
                    </div>
                </div>
                <div class="success_manager_box">
                    <div class="success_manager_number">
                        <img src="{{asset('front/images/success_manager_bg.png')}}" alt="">
                        <p>3</p>
                    </div>
                    <div class="success_manager_Text">
                        <h5>Pre-Session Prep</h5>
                        <p class="f16">Share guides & readiness tip</p>
                    </div>
                </div>
                <div class="success_manager_box">
                    <div class="success_manager_number">
                        <img src="{{asset('front/images/success_manager_bg.png')}}" alt="">
                        <p>4</p>
                    </div>
                    <div class="success_manager_Text">
                        <h5>Aftercare Support</h5>
                        <p class="f16">Follow-ups, reports & next steps</p>
                    </div>
                </div>-->

            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>Stories of Transformation</p>
                    <h3>Real people, stories</h3>
                </div>
                <div class="bigTitle">
                    <h2>stories</h2>
                </div>
            </div>
            <div class="stories_Section">


                <div class="stories_Box">
                    <div class="stories_background_img">
                        <img src="{{asset('front/images/storybg.png')}}" alt="storybg">
                    </div>
                    <div class="stories_content">
                        <div class="stories_Logo">
                            <img src="{{asset('front/images/pendo.png')}}" alt="pendo">
                        </div>
                        <div class="stories_profile">
                            <img src="{{asset('front/images/profile-1.jpg')}}" alt="profile">
                        </div>
                        <div class="stories_Text">
                            <div class="stories_Name">
                                <p class="f16">Manthan Patel</p>
                                <p class="f14">Senior designer, Pune</p>
                            </div>
                            <p class="f18">'Taking managing employee business spending into the 21st Century'</p>
                        </div>
                    </div>
                </div>
                <div class="stories_Box">
                    <div class="stories_background_img">
                        <img src="{{asset('front/images/storybg.png')}}" alt="storybg">
                    </div>
                    <div class="stories_content">
                        <div class="stories_Logo">
                            <img src="{{asset('front/images/pendo.png')}}" alt="pendo">
                        </div>
                        <div class="stories_profile">
                            <img src="{{asset('front/images/profile-1.jpg')}}" alt="profile">
                        </div>
                        <div class="stories_Text">
                            <div class="stories_Name">
                                <p class="f16">Manthan Patel</p>
                                <p class="f14">Senior designer, Pune</p>
                            </div>
                            <p class="f18">'Taking managing employee business spending into the 21st Century'</p>
                        </div>
                    </div>
                </div>
                <div class="stories_Box">
                    <div class="stories_background_img">
                        <img src="{{asset('front/images/storybg.png')}}" alt="storybg">
                    </div>
                    <div class="stories_content">
                        <div class="stories_Logo">
                            <img src="{{asset('front/images/pendo.png')}}" alt="pendo">
                        </div>
                        <div class="stories_profile">
                            <img src="{{asset('front/images/profile-1.jpg')}}" alt="profile">
                        </div>
                        <div class="stories_Text">
                            <div class="stories_Name">
                                <p class="f16">Manthan Patel</p>
                                <p class="f14">Senior designer, Pune</p>
                            </div>
                            <p class="f18">'Taking managing employee business spending into the 21st Century'</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stories_button">
                <a href="#" class="button"><span>Read More</span></a>
            </div>
        </div>
    </div>
@endsection
