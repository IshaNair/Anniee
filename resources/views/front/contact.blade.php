@extends('front.layouts.app')

@section('content')

<div class="consultationsSection about_anniiee_Section pad80">
    <div class="container">
        <div class="contactSection">
            <div class="contactLeft">
                <div class="mainTitle">
                    <div class="titleText">
                        <p>contact</p>
                        <h3>Tell us about your project</h3>
                    </div>
                </div>
                <div class="contactImg">
                    <div class="contactImgText">
                        <p><span>22</span> Years of experiences</p>
                    </div>
                    <img src="{{asset('front/images/contactus.jpg')}}" alt="contactus">
                </div>
            </div>
            <div class="contactRight">
                <form class="conactForm">
                    <div class="inputBox">
                        <label for="firstname">First name</label>
                        <input type="text" id="firstname" placeholder="Enter first name here">
                    </div>
                    <div class="inputBox">
                        <label for="lastname">last name</label>
                        <input type="text" id="lastname" placeholder="Enter last Name here">
                    </div>
                    <div class="inputBox">
                        <label for="email">Your email</label>
                        <input type="text" id="email" placeholder="omoway@exaplme.com">
                    </div>
                    <div class="inputBox">
                        <label for="phonenumber">Your Phone number</label>
                        <input type="tel" id="phonenumber" placeholder="+88012325800">
                    </div>
                    <div class="inputBox w100">
                        <label for="phonenumber">I’m interested in...</label>
                        <div class="radioSection">
                            <div class="radioInput">
                                <input type="radio" name="interested" id="numerologist">
                                <label for="numerologist">Numerologist</label>
                            </div>
                            <div class="radioInput">
                                <input type="radio" name="interested" id="astrologist">
                                <label for="astrologist">Astrologist</label>
                            </div>
                        </div>
                    </div>
                    <div class="inputBox w100">
                        <label for="aboutProject">Tell us more about your project</label>
                        <textarea  id="aboutProject"  rows="5" placeholder="Something about your great ideas..."></textarea>
                    </div>
                    <button class="button"> <span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="contactmapSection consultationsSection">
    <img src="{{asset('front/images/contactmapBG.png')}}" alt="contactmapBG">  
    <div class="googlemap">
        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d29770.836580642346!2d72.75242548638086!3d21.13828310888542!3m2!1i1024!2i768!4f13.1!2m1!1s16122%20Collins%20street%2C%20Vesu%2C%20Surat!5e0!3m2!1sen!2sin!4v1754900789942!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>  
</div>

 <div class="consultationsSection about_anniiee_Section pad80">
        <div class="container">
            <div class="mainTitle">
                <div class="titleText">
                    <p>FAQ</p>
                    <h3>Frequently Asked Questions</h3>
                </div>
                <div class="bigTitle">
                    <h2>FAQ</h2>
                </div>
            </div>

            <div class="accordion" id="accordionExample">
                <div class="faq_accordion">
                    <div class="faq_accordion_number">
                        <h5>01</h5>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is company accounting?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f16">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. web solutions that are ideal for small to large.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_accordion">
                    <div class="faq_accordion_number">
                        <h5>02</h5>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                What is tax and legal advisory?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f16">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. web solutions that are ideal for small to large.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_accordion">
                    <div class="faq_accordion_number">
                        <h5>03</h5>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                               What do you do for corporate clients?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f16">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. web solutions that are ideal for small to large.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_accordion">
                    <div class="faq_accordion_number">
                        <h5>04</h5>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                What is company accounting?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f16">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. web solutions that are ideal for small to large.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq_accordion">
                    <div class="faq_accordion_number">
                        <h5>05</h5>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                What is company accounting?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="f16">We strive to develop real-world web solutions that are ideal for small to large projects with bespoke project requirements. web solutions that are ideal for small to large.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






 
@endsection