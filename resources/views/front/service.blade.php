@extends('front.layouts.app')

@section('content')
    <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="exclusive_session">
                <div class="exclusive_session_img">
                    <div class="session_intro">
                        <p><span>22</span> Session Intro</p>
                    </div>
                    <img src="{{asset('front/images/exclusive_session.jpg')}}" alt="exclusive_session">
                </div>
                <div class="exclusive_session_content">
                    <div class="mainTitle">
                        <div class="titleText">
                            <p>Session</p>
                            <h3>Exclusive Session</h3>
                        </div>
                    </div>
                    <div class="exclusive_session_text">
                        <p class="f16">Step into a private energetic space where Anniiee brings her full intuitive focus to your unique SoulPrint. This one-on-one session is designed for deep transformation—blending numerology, karmic insights, and intuitive downloads tailored just for you.</p>
                        <ul>
                            <li>Full SoulPrint decoding</li>
                            <li>Karmic block analysis</li>
                            <li>Personal year & life path clarity</li>
                            <li>Live Q&A (optional)</li>
                            <li>Limited monthly availability</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection premium_experience_section pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>User Experience</p>
                    <h3>Premium Experience</h3>
                </div>
                <div class="bigTitle">
                    <h2>Experience</h2>
                </div>
            </div>
            <div class="premium_experience_slider">
                <div class="div">
                    <div class="premium_experience_slider_box">
                        <p class="f18">“their team are easy to work with and helped me make amazing website in a short amount of time. thanks guys for all your hand work.”</p>
                        <div class="user_name">
                            <img src="{{asset('front/images/user-1.png')}}" alt="user">
                            Mathhew miller
                        </div>
                    </div>
                </div>
                <div>
                    <div class="premium_experience_slider_box">
                        <p class="f18">“their team are easy to work with and helped me make amazing website in a short amount of time. thanks guys for all your hand work.”</p>
                        <div class="user_name">
                            <img src="{{asset('front/images/user-1.png')}}" alt="user">
                            Mathhew miller
                        </div>
                    </div>
                </div>
                <div>
                    <div class="premium_experience_slider_box">
                        <p class="f18">“their team are easy to work with and helped me make amazing website in a short amount of time. thanks guys for all your hand work.”</p>
                        <div class="user_name">
                            <img src="{{asset('front/images/user-1.png')}}" alt="user">
                            Mathhew miller
                        </div>
                    </div>
                </div>
                <div>
                    <div class="premium_experience_slider_box">
                        <p class="f18">“their team are easy to work with and helped me make amazing website in a short amount of time. thanks guys for all your hand work.”</p>
                        <div class="user_name">
                            <img src="{{asset('front/images/user-1.png')}}" alt="user">
                            Mathhew miller
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="meetAnnieeSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>pricing</p>
                    <h3>Investment & Value</h3>
                </div>
            </div>
            <div class="investment_value">
                <div class="investment_value_box">
                    <div class="investment_value_icon">
                        <img src="{{asset('front/images/star.png')}}" alt="">
                        <p>STAR</p>
                    </div>
                    <h2>$19 <span>/ month</span></h2>
                    <ul>
                        <li>Personal life advice</li>
                        <li>Forecast for month</li>
                        <li>Natal chart</li>
                        <li>Forecast for year</li>
                    </ul>
                    <a href="#" class="button"><span>Get Started </span></a>
                </div>
                <div class="investment_value_box yellowbg">
                    <div class="investment_value_icon">
                        <img src="{{asset('front/images/sky.png')}}" alt="">
                        <p>SKY</p>
                    </div>
                    <h2>$86 <span>/ month</span></h2>
                    <ul>
                        <li>Personal life advice</li>
                        <li>Forecast for month</li>
                        <li>Natal chart</li>
                        <li>Forecast for year</li>
                    </ul>
                    <a href="#" class="button white"><span>Get Started</span></a>
                </div>
                <div class="investment_value_box">
                    <div class="investment_value_icon">
                        <img src="{{asset('front/images/space.png')}}" alt="">
                        <p>SPACE</p>
                    </div>
                    <h2>$119 <span>/ month</span></h2>
                    <ul>
                        <li>Personal life advice</li>
                        <li>Forecast for month</li>
                        <li>Natal chart</li>
                        <li>Forecast for year</li>
                    </ul>
                    <a href="#" class="button "><span>Get Started</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="consultationsSection pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>Book Sessions</p>
                    <h3>How to Book</h3>
                </div>
                <div class="bigTitle">
                    <h2>Book Sessions</h2>
                </div>
            </div>
            <form action="{{ route('book.service') }}" method="POST" class="book_sessions_form">
                @csrf
                <div class="inputbox">
                    <label for="fullname">Full name *</label>
                    <input type="text" id="fullname" name="name" value="{{ old('phone') }}" class="@error('name') is-invalid @enderror" placeholder="Enter full name">
                   @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox">
                    <label for="phone">Phone *</label>
                    <input type="number" id="phone" name="phone" value="{{ old('phone') }}" class="@error('phone') is-invalid @enderror" placeholder="Phone number" >
                     @error('phone')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox w50">
                    <label for="email">Your Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email')}}" class="@error('email') is-invalid @enderror" placeholder="enter email">
                     @error('email')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox w50">
                    <label for="confirmationEmail">Confirmation email</label>
                    <input type="email" id="confirmationEmail" name="email_confirmation" value="{{ old('email_confirmation')}}" class="@error('email_confirmation') is-invalid @enderror" placeholder="enter email">
                    @error('email_confirmation')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox w50">
                    <label for="sessionDate">Preferred session date</label>
                    <input type="date" id="sessionDate" name="session_date" value="{{ old('session_date')}}" class="@error('session_date') is-invalid @enderror" placeholder="enter date & time">
                    @error('session_date')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox w50">
                    <label for="sessionTime">Preferred session time</label>
                    <input type="text" id="sessionTime" name="session_time" value="{{ old('session_time')}}" class="@error('session_time') is-invalid @enderror" placeholder="h:mm AM/PM">
                     @error('session_time')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="inputbox">
                    <div class="radiobtn">
                        <input type="radio" id="agreePrivacy" name="privacy_policy" value="{{ old('privacy_policy','yes')}}">
                        <label for="agreePrivacy"><span></span> I agree to the privacy policy</label>
                    </div>
                </div>
                <div class="inputbox">
                    <button class="button"><span>Book Session</span></button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('customJS')
<link rel="stylesheet" href="jquery-ui.css">
<link rel="stylesheet" href="jquery-ui-timepicker-addon.css">
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery-ui-timepicker-addon.js"></script>

<input type="text" id="datetime">

<script>
  $('#datetime').datetimepicker({
    timeFormat: 'hh:mm tt',
    stepHour: 1,
    stepMinute: 15
  });
</script>
@endsection
