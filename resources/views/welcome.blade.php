@extends('layouts.appss')

@section('title')
    Soril - Home
@endsection

@section('content')
<div class="slider-area slider-area-02 heding-bg pos-rel">
    <div class="slider-hero-img d-none d-lg-block">
        <img class="img-fluid hero-right" src="{{ asset("assets/img/slider/slider2.jpg") }}" alt="">
    </div>
    <div class="extra_info d-none d-lg-block">
        <div class="extra-box">
            <div class="slider-toltip d-flex align-items-center">
                <div class="close_icon"><i class="fal fa-times"></i></div>
                <div class="slider-toltip__thumb mr-25">
                    <img src="assets/img/slider/toltip-img1.jpg" alt="">
                </div>
                <div class="slider-toltip__content">
                    <div class="slider-toltip--meta mb-10">
                        <span>{{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }} /</span>
                        <span>Durée : {{$annual->duree}} day(s) /</span>
                        <span>{{$annual->lieu}} | {{$annual->ville}}</span>
                    </div>
                    <h6 class="slide-title">{{$annual->titre}}</h6>
                    <p>{{$annual->description}}</p>
                    <a class="theme_btn active-btn wow fadeInUp animated mt-10" data-wow-delay=".7s"
                                    href="{{route('conference', $annual->id)}}">Voir plus
                        <i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slider slider-height-02 pos-rel d-flex align-items-center">
        <div class=" container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="slider__content slider__content_02 text-left">
                        <span class="sub-title left_line mb-15  pl-55">Society Of Risk Leadership</span>
                        <h1 class="main-title mb-35 wow fadeInUp animated" data-wow-delay=".3s">Learn more about Risk Leadership
                            in the President's Coner.</h1>
                        <ul class="btn-list mb-45">
                            <li><a class="theme_btn active-btn wow fadeInUp animated" data-wow-delay=".7s"
                                    href="{{ route('evenementss') }}">Events<i
                                        class="far fa-long-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="certification-areas">
    <div class="container pt-100">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('assets/img/logo/carl-logo.png') }}" style="width: 90%; height: auto; margin: 20px auto;" alt="Logo CARL">
                    <div class="card-body">
                      <p class="card-text">The Certified African Risk Leader course (CARL) 
                          is designed to equip participants with the knowledge and skillset 
                          required to become risk leaders in their organisations or institutions. 
                          The course is will immerse you in dynamic case studies, tail-risk stress 
                          tests, scenario planning, and wargaming exercises, as you explore how to 
                          make informed risk leadership decisions.</p>
                      <a href="{{ route('certification') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="{{ asset('assets/img/logo/journal.png') }}" style="width: 90%; height: auto; margin: 20px auto;" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">The African Journal of Risk Leadership (AJRL) is 
                          published quarterly online only on behalf of on behalf of the Society 
                          of Risk Leadership. The mission of the ARJL is to create, stimulate 
                          and perpetuate a culture of information sharing and publishing amongst 
                          researchers and practitioners of risk leadership in Africa in ways that 
                          will contribute …</p>
                      <a href="{{ route('journal.index') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio-area pt-110 pb-30">
    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="portfolio portfolio-02">
                    <div class="portfolio-02__img">
                        <img class="img-fluid" src="{{asset('assets/img/mimile.png')}}" alt="Mimile Mukuna">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-12 pl-2">
                <div class="portfolio-wrapper-02">
                    <div class="portfolio">
                        <div class="section-title mb-15">
                            <h6 class="left_line pl-55">The President's Corner</h6>
                            <h2>Mimile Mukuna Maisha</h2>
                        </div>
                        <div class="portfolio__content">
                            <p class="mb-35">
                                Mimile is an expert in International Business Law and International Business Risk Management.
                                <br>
                                Since 2013, he has been CEO of First Continental Legal and Risk Consulting where he advises on
                                International Business Law, International Business Risk Management and on international financing
                                transactions.
                                <br>
                                <br>
                                His expertise has been sought by transnational companies, governments and professional bodies.
                                He previously spent 20 years in the insurance/risk finance industry where he occupied executive
                                positions in various companies in different African countries.
                                <br>
                                <br>
                                He is a regular speaker at conferences and seminars on International Business Risk Management
                                and international investment/trade law topics and has made it his mission to promote the principle
                                and practice of risk leadership in the business world. he is the author of the book titled "Why
                                Risk so Much For so Little published in 2011.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection