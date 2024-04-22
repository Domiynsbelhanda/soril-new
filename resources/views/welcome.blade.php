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
                        {{-- <span class="sub-title left_line mb-15  pl-55">Society Of Risk Leadership</span> --}}
                        <span class="sub-title left_line mb-15  pl-55">Discover Soril</span>
                        <h1 class="main-title mb-35 wow fadeInUp animated" data-wow-delay=".3s">Learn more about Risk Leadership
                            in the President's Coner.</h1>
                        <ul class="btn-list mb-45" >
                            <li><a class="theme_btn active-btn wow fadeInUp animated" data-wow-delay=".7s"
                                    href="#corner">Visit<i
                                        class="far fa-long-arrow-down"></i></a>
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
<section class="portfolio-area pt-110 pb-30" id="corner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="container">
                            <h2>Upcoming Events</h2>
                        </div>
                    </div>
                    @forelse ($events as $event)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="event mb-50" style="background-image: url(assets/img/events/events5.jpg);">
                                <div class="event--front d-flex">
                                    <div class="event__date mr-10">
                                        <h3>
                                            {{ Carbon\Carbon::parse($annual->date)->format('d') }}
                                            <span>{{ Str::substr(Carbon\Carbon::parse($annual->date)->format('F'), 0, 3) }}.
                                                20{{ Carbon\Carbon::parse($annual->date)->format('y') }}
                                            </span>
                                        </h3>
                                    </div>
                                    <div class="event__content">
                                        <h3 class="event-title mb-15" style="word-break: break-all">{{$event->titre}}</h3>
                                        <div class="event__content--meta mb-35">
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> {{$event->lieu}}</span><div></div>
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> {{$event->ville}}</span><div></div>
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> Durée : {{$event->duree}} jour(s)</span>
                                        </div>
                                        <a href="{{route('conference', $event->id)}}" class="theme_btn white_btn">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-area pt-110">
    <div class="container" bis_skin_checked="1">
        <div class="row no-gutters align-items-center" bis_skin_checked="1">
            <div class="col-xl-2 col-lg-6 col-md-12">

            </div>
            <div class="col-xl-3 col-lg-6 col-md-12" bis_skin_checked="1">
                <div class="portfolio portfolio-02" bis_skin_checked="1">
                    <div class="portfolio-02__img" bis_skin_checked="1">
                        <img class="img-fluid" style="width: 100%!important;" src="{{asset('assets/img/mimile.png')}}" alt="">
                    </div>
{{--                    <div class="portfolio-02__toltip white-bg d-none d-md-block" bis_skin_checked="1">--}}
{{--                        <div class="quote-right text-right mb-20 pr-35" bis_skin_checked="1">--}}
{{--                            <span><i class="fal fa-quote-left"></i></span>--}}
{{--                        </div>--}}
{{--                        <h6 class="toltip-title-02 mb-20">"If you change your city, you're--}}
{{--                            changing the world,"</h6>--}}
{{--                        <p><span>---</span> Christina J. Walsh</p>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="col-xl-1 col-lg-6 col-md-12">

            </div>
            <div class="col-xl-5 col-lg-6 col-md-12" bis_skin_checked="1">
                <div class="portfolio-wrapper-02" bis_skin_checked="1">
                    <div class="portfolio" bis_skin_checked="1">
                        <div class="section-title mb-15" bis_skin_checked="1">
                            <h6 class="left_line pl-55">The President's Corner</h6>
                            <h3>
                                <a href="{{route('about.profile', ['id'=>1, 'section'=>'management'])}}">
                                    Mimile MAISHA MUKUNA
                                </a>
                            </h3>
                        </div>

                        @forelse (\App\Models\MessagePresident::all()->slice(0, 1) as $item)

                            <div class="portfolio__content" bis_skin_checked="1">
                                <h4>
                                    {{$item->titreMessage}}
                                </h4>

                                <p>
                                    {{ Carbon\Carbon::parse($item->date)->format('F, d Y') }}
                                </p>

                                <p class="mb-35">
                                    {{$item->introduction}}
                                </p>
                                <a class="theme_btn" href="{{route('message', ['id'=>$item->id])}}">
                                    Read full message
                                    <i class="far fa-long-arrow-right"></i>
                                </a>
                            </div>

                        @empty

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
