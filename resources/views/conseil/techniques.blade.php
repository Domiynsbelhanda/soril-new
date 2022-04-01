@extends('layouts.appss')

@section('title')
    Conseils Techniques
@endsection

@section('content')
    @php
        $annual = \App\Models\Evenement::where('typeEvent', 'annual')->first();
    @endphp  
    <section class="page-title-area" style="background: linear-gradient(#03072e7a, #040c5253), url({{ asset('assets/img/bg/page-title-bg1.jpg') }});">
        <div class="container" >
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <div class="page-title text-center">
                        <img class="card-img-top" src="{{ asset("assets/img/logo/carl-logo.png") }}" style="width: 90%; height: auto; margin: 20px auto;" alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services-details-area pt-40">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="services-right-area pl-50">
                        <div class="widget mb-40">
                            <div class="widget-title">
                                <h5>Key Features</h5>
                            </div>
                            <div class="widget-list-2">
                                <p class="list-item">Course Name: <span>Certified African Risk Leader</span></p>
                                <p class="list-item">Reference: <span>CARL</span></p>
                                <p class="list-item">Duration: <span>0 Year(s)</span></p>
                                <p class="list-item">Starting Date: <span>Facultative</span></p>
                                <p class="list-item">Fees: <span>$ 15000</span></p>
                                <p class="list-item">Members: <span></span></p>
                                <p class="list-item">Non Members: <span></span></p>
                            </div>
                            <div>
                                <a class="theme_btn wow fadeInUp animated" data-wow-delay=".7s"
                                    href="#">Enroll Now
                                    <i class="far fa-long-arrow-right"></i></a>
                                    <a class="theme_btn wow fadeInUp animated" data-wow-delay=".7s"
                                    href="#">More Information
                                    <i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title">
                                <h5>Get In Touch</h5>
                            </div>
                            <ul class="address-list">
                                <li>
                                    <span>Editorial</span><p> Dwayne J. Williams</p>
                                    <a href="tel:+01131254334">Phone: <span>011 312 54334</span></a>
                                    <a href="mailto:fcharney@soril.org">Email: <span>fcharney@soril.org</span></a>
                                </li>
                                <li>
                                    <span>Publications</span><p>Don Richards</p>
                                    <a href="tel:+01131254334">Phone: <span>011 312 54334</span></a>
                                    <a href="mailto:fcharney@soril.org">Email: <span>fcharney@soril.org</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget add-img-here mb-40">
                            <img src="assets/img/service/08.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="services-left-area pb-100">
                        <div class="services-wrap-content">
                            <div class="services-wrap-content__title mb-15">
                                <h4>Description</h4>
                            </div>
                            <div class="services-wrap-content__text">
                                <p class="mb-20">Socio-economic factors, geopolitical tensions, digitisation, 
                                    new technological advances, large scale natural disasters and climate change 
                                    are delivering an era of greater uncertainty and volatility for organisations 
                                    at a time when opportunities are expanding and becoming more globally integrated 
                                    and complex. <br><br>
                                    These new risk trends are emerging simultaneously and require executives and 
                                    board members to develop risk leadership capabilities beyond the any existing 
                                    risk management function. This is because leaders in organisations can powerfully 
                                    influence culture and policies. They can inspire, energise, and, well, lead on 
                                    how to respond to risk. Through their actions and decisions, they can ensure 
                                    that risk thinking is part of decision making <br><br>
                                    
                                    The Certified African Risk Leader course (CARL) is designed to equip participants 
                                    with the knowledge and skillset required to become risk leaders in their 
                                    companies and organisations. The course is will immerse you in dynamic case 
                                    studies, tail-risk stress tests, scenario planning, and wargaming exercises, 
                                    as you explore how to make informed risk management decisions for current and 
                                    emerging risks, and to critically appraise real life case studies from 
                                    different sectors and countries.</p>
                            </div>
                        </div>
                        <div class="services-wrap-content__text">
                            <div class="services-wrap-content__title mb-15">
                                <h4>Key Attributes</h4>
                            </div>
                            <div class="services-wrap-content__text">
                                <div class="row mt-15 mb-20">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="features-03 d-flex align-items-center mb-30">
                                            <div class="features-03__icon mr-25">
                                                <i class="flaticon-award"></i>
                                            </div>
                                            <div class="features-03__content">
                                                <h5>Relevant</h5>
                                                <p>CARL is created by risk professionals in Africa for the risks 
                                                    relevant to this region. We use Asia Pacific case studies and 
                                                    the syllabus is crafted based on what risk managers in the region 
                                                    are most concerned with.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="features-03 d-flex align-items-center mb-30">
                                            <div class="features-03__icon mr-25">
                                                <i class="flaticon-award"></i>
                                            </div>
                                            <div class="features-03__content">
                                                <h5>Holistic</h5>
                                                <p>The syllabus comprises a holistic range of risk management activities 
                                                    that goes beyond ERM. It also touches on risk financing and risk 
                                                    treatment. We believe that the syllabus encompasses what the risk 
                                                    managers of today need to be equipped with.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="features-03 d-flex align-items-center mb-30">
                                            <div class="features-03__icon mr-25">
                                                <i class="flaticon-award"></i>
                                            </div>
                                            <div class="features-03__content">
                                                <h5>Supportive</h5>
                                                <p>CARL comes with online training courses for each of the 
                                                    5 modules, should the candidate wish to practice. 
                                                    We ensure that you will be equipped with the tools 
                                                    and training needed to successfully complete the CARL.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="services-wrap-content row">
                            <div class="col-xl-5 col-lg-6 col-md-6">
                                <div class="services-wrap-content__thumb mb-30">
                                    <img src="assets/img/service/04.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <div class="services-details-list pl-30 mb-30">
                                    <h4 class="mb-15">Receive Your Certification in 5 Steps!</h4>
                                    
                                    <ol class="blog-details__list mt-20">
                                        <li><a href="#">Read program description and eligibility criteria to view important information that will help you be a successful candidate</a></li>
                                        <li><a href="#">Submit your application online with all required documentation</a></li>
                                        <li><a href="#">Successful applicants will receive username and password to their online learning portal where they can download study materials and practice questions</a></li>
                                        <li><a href="#">Choose an examination date, prepare for it and take the 2.5-hour online examination consisting of 125 multiple choice questions</a></li>
                                        <li><a href="#">Upon passing, successful candidates will receive their certification card and acknowledged as a CARL holder!</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="services-right-area pl-50">
                        <div class="widget mb-40">
                           
                            <div class="widget-title">
                                <h5>Who is it for?</h5>
                            </div>
                            <p class="list-header mb-20">Senior business leaders in large established companies 
                                who have significant corporate management responsibilities, including:</p>
                            <ul class="widget-list-3">
                                <li class="list-item">Chief risk officers and other leaders in risk management roles</li>
                                <li class="list-item">Chief financial officers</li>
                                <li class="list-item">Board members</li>
                                <li class="list-item">General managers, including CEOs, COOs, and division heads</li>
                                <li class="list-item">Senior leaders responsible for executing and controlling strategy</li>
                                <li class="list-item">Public relations executivesy</li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title">
                                <h5>Get In Touch</h5>
                            </div>
                            <ul class="address-list">
                                <li><a href="#"><span>Mayor office</span> +4488812345</a></li>
                                <li><a href="#"><span>Emergency</span> 911 (Tool Free)</a></li>
                                <li><a href="#"><span>Non emergency</span> 311 (Tool Free)</a></li>
                            </ul>
                        </div>
                        <div class="widget add-img-here mb-40">
                            <img src="assets/img/service/08.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
