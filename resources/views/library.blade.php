@extends('layouts.appss')

@section('title')
    Columna - Library
@endsection

@section('content')
    @php
        $annual = \App\Models\Evenement::where('typeEvent', 'annual')->first();
    @endphp
    <section class="page-title-area" style="background: linear-gradient(#03072e7a, #040c5253), url({{ asset('assets/img/bg/page-title-bg1.jpg') }});">
        <div class="container" >
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="page-title text-center">
                        <h1>Soril Library</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="events-list-area pt-40 pb-10">
        <div class="container">
            <div class="row">
                <h1 class="col-md-10 col-sm-8">Featured Book</h1>
            </div>
            <div class="row justify-content-center pt-50">
                <div class="col-xl-6">
                    <div class="events-seminar-img mb-45">
                        <img class="img-fluid" src="{{asset($books->first()->bo_picture)}}" alt="">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="right-events-area pr-40">
                        <div class="events-widget mb-40">
                            <h5 class="semi-title mb-30">{{$books->first()->bo_title}}</h5>
                            <ul class="events-widget__list">
                                <li>
                                    <div class="address-list d-flex align-items-center">
                                        <div class="address-list-icon">
                                            <i class="fal fa-dollar-sign"></i>
                                        </div>
                                        Price: {{$books->first()->bo_price}}
                                    </div>
                                </li>
                                <li>
                                    <div class="address-list d-flex align-items-center">
                                        <div class="address-list-icon">
                                            <i class="fal fa-calendar-alt"></i>
                                        </div>
                                        Date Published : {{$books->first()->bo_pub_date}}
                                    </div>
                                </li>
                                <li>
                                    <div class="address-list d-flex align-items-center">
                                        <div class="address-list-icon">
                                            <i class="fal fa-user"></i>
                                        </div>
                                        Author: {{$books->first()->bo_author}}
                                    </div>
                                </li>
                            </ul>
                            <a href="https://www.library.soril.org/public/?link={{asset($books->first()->bo_file)}}" class="theme_btn widget-btn">Read more</a>
                            <a href="#books" class="theme_btn active-btn wow fadeInUp animated widget-btn green-bg">More books</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="books" class="service-area-05 pt-10 pb-100">
        <div class="container">
            <h1 class="text-center mb-30 mt-30">Books</h1>
            <div class="row">
                @forelse ($books as $items)
                @if ($items->bo_cat_id == 1)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="services-05 fix mb-30 pos-rel">
                        <div class="services-05__img"><img src="assets/img/service/01.jpg" alt=""></div>
                        <div class="services-05__content pos-abl " style="background-image: url(assets/img/service/service-bg3.png);">
                            <div class="services-title pos-rel mb-15">
                                <h6 class="left_line pl-55">{{$items->bo_author}}</h6>
                                <h4><a href="https://www.library.soril.org/public/?link={{asset($items->first()->bo_file)}}">{{$items->bo_title}}</a></h4>
                            </div>
                            <ul class="services-05-list">
                                <li>Price: <span>${{$items->bo_price}}</span></li>
                                <li>Author: <span>{{$items->bo_author}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            @empty
            @endforelse
                
            </div>
        </div>
    </section>
@endsection
