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
            <div class="col-xl-5 col-lg-6 col-md-12">
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

{{-- @section('content')
    
    <section class="pt-6 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
                    <div class="row">
                        <div class="col-md-6 position-relative">
                            <div class="col-lg-12 ms-auto mt-lg-0 mt-2">
                                <div class="card shadow-lg">
                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <div class="d-block blur-shadow-image">
                                            <img src="{{asset('assets/img/logos/carl-logo.png')}}"
                                                 style="width: 100%;"
                                                 alt="img-blur-shadow" class="">
                                        </div>
                                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/logo_illustration.jpg&quot;);"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="vertical dark">
                            <div class="card-body">
                                <p class="text-sm mb-0" style="color: black">
                                    The Certified African Risk Leader course (CARL)
                                    is designed to equip participants with the knowledge
                                    and skillset required to become risk leaders in their
                                    organisations or institutions. The course is will immerse
                                    you in dynamic case studies, tail-risk stress tests, scenario
                                    planning, and wargaming exercises, as you explore how to make informed risk leadership decisions.
                                </p>

                                <br>

                                <a href="{{route('certification')}}">
                                    <span class="badge bg-gradient-info">EXPLORE</span></a>
                            </div>
                        </div>

                        <div class="col-md-6 position-relative">
                            <div class="col-lg-12 ms-auto mt-lg-0 mt-2">
                                <div class="card shadow-lg">
                                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                                        <div class="d-block blur-shadow-image">
                                            <img src="{{asset('assets/img/journal.png')}}"
                                                 style="width: 100%;"
                                                 alt="img-blur-shadow" class="">
                                        </div>
                                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/logo_illustration.jpg&quot;);"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="vertical dark">
                            <div class="card-body">
                                <p class="text-sm mb-0" style="color: black">
                                    The African Journal of Risk Leadership (AJRL)
                                    is published quarterly online only on behalf of
                                    on behalf of the Society of Risk Leadership.
                                    The mission of the ARJL is to create, stimulate
                                    and perpetuate a culture of information sharing
                                    and publishing amongst researchers
                                    and practitioners of risk leadership in Africa in ways that will contribute …
                                </p>

                                <br>

                                <a href="{{route('journal.index')}}"><span class="badge bg-gradient-info">EXPLORE</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="learnMore">

    </div>

    <br>

    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6" style="border-right: 1px solid #333;">
                <section class="my-0 py-0">
                    <div class="container">
                        <div class="row">
                            <div class="row justify-content-center text-center my-sm-1">
                                <div class="col-lg-6">
                                    <h2 class="text-dark mb-0">Upcoming Events</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container mt-sm-1 mt-1">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">

                                    @forelse($events as $event)
                                        <div class="col-md-4 mt-md-2">
                                            <a href="{{route('conference', $event->id)}}">
                                                <div class="card card-background card-background-mask-{{$color[$loop->index]}} tilt" data-tilt>
                                                    <div class="full-background"
                                                         style="background-image: url('https://perspectives-cblacp.eu/wp-content/uploads/2020/10/Aerial-view-of-Kigali-Convention-Centre-1-1024x492.jpg')"></div>
                                                    <div class="card-body pt-3 text-center">
                                                        <h4 class="text-white">{{$event->titre}}</h4>

                                                        <p style="font-size: 75%; color: white; font-weight: bold">
                                                            <i class="fa fa-calendar me-1"></i> {{ Carbon\Carbon::parse($event->date)->format('F, d Y') }}
                                                        </p>

                                                        <p style="color: white; font-weight: bold">
                                                            <i class="fa fa-map-marker me-1"></i> {{$event->lieu}} | {{$event->ville}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @empty

                                    @endforelse

                                </div>

                                <br>
                                <div class="text-center">
                                    <a href="{{route('evenementss')}}">
                                        <button type="button"
                                                class="btn bg-gradient-info w-auto me-1 mb-0">View More ...</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-lg-6">
                <section class="py-sm-1 py-3 position-relative">

                    <div class="row">
                        <div class="row justify-content-center text-center my-sm-0">
                            <div class="col-lg-6">
                                <h2 class="text-dark mb-0">The President's Corner</h2>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="row py-lg-3 py-6">
                                    <div class="col-lg-4 col-md-5">
                                        <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2"
                                             src="{{asset('assets/img/mimile.png')}}" alt="bruce">
                                    </div>
                                    <div class="col-lg-6 col-md-7 position-relative my-auto">
                                        <p class="text-lg mb-0"
                                           style="color: black; line-height: normal">
                                            <a
                                               style="border-color: transparent;
                                                    background-color: transparent">
                                                <b>Mimile Mukuna Maisha</b>
                                            </a>
                                            <br>
                                            President
                                            <br>
                                            <a type="button"
                                               data-bs-toggle="modal" data-bs-target="#biographieModal"
                                               style="border-color: transparent;
                                                    background-color: transparent">
                                                <em>Bio</em>
                                            </a>
                                        </p>
                                        <div class="modal fade" id="biographieModal" tabindex="-1" aria-labelledby="biographieModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">MIMILE MUKUNA Maisha</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
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
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <hr style="color:white">
                                        @forelse (\App\Models\MessagePresident::all() as $item)
                                            <div class="">
                                                <p class="text-lg mb-0" style="color: black; line-height: normal">
                                                    <b>{{$item->titreMessage}}</b>
                                                    <br>
                                                    <em>{{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}</em>
                                                    <br>
                                                    <a href="javascript:;" class="text-blue-900 icon-move-right"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#messageModal-{{$item->id}}">Read Full Message
                                                        <i class="fas fa-arrow-right text-sm ms-1"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- Modal 2 -->
                                            <div class="modal fade" id="messageModal-{{$item->id}}" tabindex="-1"
                                                 aria-labelledby="messageModalLabel"
                                                 aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{$item->titreMessage}}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div>
                                                                <h6 class="mb-0">{{$item->introduction}}</h6>
                                                            </div>
                                                            <br>
                                                            <em>{{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}</em>
                                                            <br>
                                                            <br>

                                                            <p class="text-sm mb-0">
                                                                {{$item->message}}
                                                            </p>
                                                            <br>
                                                            <br>

                                                            <p>
                                                                {{$item->about}}
                                                            </p>

                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection --}}