@extends('layouts.appss')

@section('title')
    Evenements
@endsection

@section('content')
    {{-- <section class="page-title-area" style="background: linear-gradient(#03072e7a, #040c5253), url({{ asset('assets/img/bg/page-title-bg1.jpg') }});">
        <div class="container" >
            <div class="row">
                <div class="col-xl-4 offset-xl-4">
                    <div class="page-title text-center">
                        <h1>All Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="events-list-area pt-40 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="row align-items-center">
                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2>The Annual Conference</h2>
                            <p>
                                The biggest meeting of risk leaders, The Annual Risk Leaders’ Conference, takes place each year in different African capital cities during the first week of October.
                                    <br>
                                    <br>
                                    This conference brings together Arimas individual members and corporate members, representatives of risk management associations, risk management practitioners, researchers, regulators, and policy-makers to share their insights on the main issues that affect risk leadership and management in current African risk landscape and how to advance the practice.
                            </p>
                        </div>
                        <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="event mb-50" style="background-image: url(assets/img/events/events5.jpg);">
                                <div class="event--front d-flex">
                                    <div class="event__date mr-40">
                                        <h3>{{ Carbon\Carbon::parse($annual->date)->format('d') }} 
                                            <span>{{ Str::substr(Carbon\Carbon::parse($annual->date)->format('F'), 0, 3) }}. 20{{ Carbon\Carbon::parse($annual->date)->format('y') }}</span>
                                        </h3>
                                    </div>
                                    <div class="event__content">
                                        <span class="tag mb-15">{{$annual->titre}}</span>
                                        <h3 class="event-title mb-15">{{$annual->description}}</h3>
                                        <div class="event__content--meta mb-35">
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> {{$annual->lieu}}</span><div></div>
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> {{$annual->ville}}</span><div></div>
                                            <span><i class="fal fa-circle" style="font-size: 9px"></i> Durée : {{$annual->duree}} jour(s)</span>
                                        </div>
                                        <a href="{{route('conference', $annual->id)}}" target="_blank" class="theme_btn white_btn">View more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="container">
                                <h2>Upcoming Seminars</h2>
                                <p>Throughout the year we have a rolling programme of seminars that are held in different cities around the continents.
                                    <br><br>
                                    These seminars give participants valuable and unique insights into risk management and risk leadership and are and are an opportunity for them to network
                                </p>
                            </div>
                        </div>
                        @forelse ($events as $event)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="event mb-50" style="background-image: url(assets/img/events/events5.jpg);">
                                    <div class="event--front d-flex">
                                        <div class="event__date mr-40">
                                            <h3>{{ Carbon\Carbon::parse($annual->date)->format('d') }} 
                                                <span>{{ Str::substr(Carbon\Carbon::parse($annual->date)->format('F'), 0, 3) }}. 
                                                    20{{ Carbon\Carbon::parse($annual->date)->format('y') }}</span>
                                            </h3>
                                        </div>
                                        <div class="event__content">
                                            <h3 class="event-title mb-15">{{$event->titre}}</h3>
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
@endsection
