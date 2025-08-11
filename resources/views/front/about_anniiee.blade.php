@extends('front.layouts.app')

@section('content')
<div class="consultationsSection about_anniiee_Section pad80">
    <div class="container">
        <div class="about_anniiee_row">
            <div class="about_anniiee_image">
                <div class="anniiee_img">
                    <img src="{{ asset('temp/post/'.$anniiee_post->image) }}" alt="her_journey">
                </div>
                <div class="anniiee_journey">
                    <div class="greenBox">
                        <p>25+ <span>countries</span></p>
                    </div>
                    <div class="imgbox">
                        <img src="{{ asset('front/images/anniee_journey.jpg')}}" alt="anniee_journey">
                    </div>
                    <div class="her_journey">
                        <div class="her_journey_icon">
                            <img src="{{ asset('front/images/journey.svg')}}" alt="journey">
                        </div>
                        <p>Her <br> Journey</p>
                    </div>
                </div>
            </div>
            <div class="about_anniiee_Text">
                <div class="mainTitle">
                    <div class="titleText">
                        <p>anniiee’s journey</p>
                        <h3>{{ $anniiee_post->title}}</h3>
                    </div>
                </div>
                <div class="about_anniiee_content">
                    <p class="f16">{{ $anniiee_post->content }}</p>
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
                <p>Expertise</p>
                <h3>Trusted Expertise</h3>
            </div>
            <div class="bigTitle">
                <h2>Expertise</h2>
            </div>
        </div>
        <div class="trusted_expertise_boxes">
            <div class="trusted_expertise_box">
                <div class="trusted_expertise_text">
                    <h4>Numerologist</h4>
                    <p class="f16">5+ years in Numerology.</p>
                </div>
                <div class="trusted_expertise_number">
                    <div class="trusted_expertise_icon">
                        <img src="{{ asset('front/images/numerologies.svg')}}" alt="numerologies">
                    </div>
                    <p>01</p>
                </div>
            </div>
            <div class="trusted_expertise_box">
                <div class="trusted_expertise_text">
                    <h4>Soul Guide</h4>
                    <p class="f16">Global Clientele Across 25+ Nations.</p>
                </div>
                <div class="trusted_expertise_number">
                    <div class="trusted_expertise_icon">
                        <img src="{{ asset('front/images/soulGuide.svg')}}" alt="numerologies">
                    </div>
                    <p>02</p>
                </div>
            </div>
            <div class="trusted_expertise_box">
                <div class="trusted_expertise_text">
                    <h4>5000+ Reports</h4>
                    <p class="f16">5000+ SoulPrint Reports Delivered.</p>
                </div>
                <div class="trusted_expertise_number">
                    <div class="trusted_expertise_icon">
                        <img src="{{ asset('front/images/reports.svg')}}" alt="numerologies">
                    </div>
                    <p>03</p>
                </div>
            </div>
            <div class="trusted_expertise_box">
                <div class="trusted_expertise_text">
                    <h4>5+ Years</h4>
                    <p class="f16">High Retention & Repeat Sessions.</p>
                </div>
                <div class="trusted_expertise_number">
                    <div class="trusted_expertise_icon">
                        <img src="{{ asset('front/images/yearsShield.svg')}}" alt="numerologies">
                    </div>
                    <p>04</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="meetAnnieeSection pad80">
    <div class="container">
        <div class="meetAnnieeRow">
            <div class="meetAnnieeText numerology_text">
                <div class="mainTitle">
                    <div class="titleText">
                        <p>Unique Approach</p>
                        <h3>{{ $anniiee_post2->title}}</h3>
                    </div>
                </div>
                <div class="numerology_Content">
                   {!! $anniiee_post2->content !!}
                    <a href="#" class="button"><span>View All</span></a>
                </div>
            </div>
            <div class="meetAnnieeImg">
                <img src="{{ asset('temp/post/'.$anniiee_post2->image) }}" alt="power_of_numerology">
            </div>
        </div>
    </div>
</div>
<div class="consultationsSection pad80">
    <div class="container">
        <div class="mainTitle">
            <div class="titleText">
                <p>Recognition</p>
                <h3>Global Recognition</h3>
            </div>
            <div class="bigTitle">
                <h2>Recognition</h2>
            </div>
        </div>
        <div class="global_recognition">
            <div class="global_recognition_text">
                <div class="global_recognition_Number">
                    <p>01</p>
                </div>
                <h4>Untouched Souls</h4>
                <p class="f16">Souls needing guidance</p>
            </div>
            <div class="global_recognition_text">
                <div class="global_recognition_Number">
                    <p>02</p>
                </div>
                <h4>SoulPrint Readings</h4>
                <p class="f16">Delivering 5000+ readings worldwide</p>
            </div>
            <div class="global_recognition_text">
                <div class="global_recognition_Number">
                    <p>03</p>
                </div>
                <h4>Gaining Loyalty</h4>
                <p class="f16">Clients returning for deeper clarity</p>
            </div>
        </div>
    </div>
</div>
<div class="consultationsSection pad80">
    <div class="container">
        <div class="mainTitle">
            <div class="titleText">
                <p>Gallery</p>
                <h3>Gallery</h3>
            </div>
            <div class="bigTitle">
                <h2>Gallery</h2>
            </div>
        </div>
    </div>
</div>
@endsection
