@extends('layouts.appss')

@section('title')
    Journal
@endsection

@section('content')
    @php
        $annual = \App\Models\Evenement::where('typeEvent', 'annual')->first();
    @endphp
    <div class="slider-area slider-area-02 heding-bg pos-rel">
        <div class="slider-hero-img d-none d-lg-block">
            <img class="img-fluid hero-right" src="{{ asset("assets/img/slider/slider2.jpg") }}" alt="">
        </div>
        
            <div class="single-slider slider-height-02 pos-rel d-flex align-items-center">
                <div class=" container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="slider__content slider__content_02 text-left">
                            <img class="card-img-top" src="{{ asset("assets/img/logo/journal.png") }}" style="width: 90%; height: auto; margin: 20px auto;" alt="Card image cap">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        @if(session('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                </div>
            </div>
        @endif
    </section>

    <section class="services-details-area pt-40">
        <div class="container">
            <div class="row">
                <!-- <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="services-right-area pl-50">
                        <div class="widget mb-40">
                            <div class="widget-title">
                                <h5>Key Features</h5>
                            </div>
                            <div class="widget-list-2">
                                <p class="list-item">Course Name: <span>Certified African Risk Leader</span></p>
                                <p class="list-item">Reference: <span>CARL</span></p>
                                <p class="list-item">Duration: <span></span></p>
                                <p class="list-item">Starting Date: <span></span></p>
                                <p class="list-item">Fees: <span></span></p>
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
                </div> -->
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="services-left-area pb-100">
                        <div class="services-wrap-content">
                            <div class="services-wrap-content__title mb-15">
                                <h4>The Journal Overview</h4>
                            </div>
                            <div class="services-wrap-content__text">
                                <p class="mb-20">The African Journal of Risk Leadership (AJRL) is published 
                                    quarterly online only on behalf of on behalf of the African Risk 
                                    Management Society. <br><br>

                                    The mission of the ARJL is to create, stimulate and perpetuate a 
                                    culture of information sharing and publishing amongst researchers 
                                    and practitioners of risk management in African in ways that will 
                                    contribute to availability of Africa related risk and risk management 
                                    information, better understanding of Africa risk and risk management 
                                    particularities and, overall, to the purpose of ARiMaS. The Scope <br><br>
                                    The AJRM publishes risk management related original and review papers, 
                                    studies, technical reports, educational articles, conference reports, 
                                    management reports, book reviews, news and notes commentaries on business, 
                                    organisational, social, political, and economic risks and risk management 
                                    issues and new developments in the field of risk management.</p>
                            </div>
                        </div>
                        <div class="services-wrap-content__text">
                            <div class="services-wrap-content__title mb-15">
                                <h5>Target Audience</h5>
                                <p>
                                    The AJRM is intended for African practitioners, researchers, and scholars 
                                    involved with or interested in Africa risk management issues and adjacent fields.
                                </p>
                            </div>
                        </div>
                        <div class="services-wrap-content__text">
                            <div class="services-wrap-content__title mb-15">
                                <h5>Submissions</h5>
                                <p>
                                    Submissions may be voluntary, by invitation, and suggestions for special 
                                    issues and publications are welcome. We are particularly interested in 
                                    receiving articles and comments reflecting the point of view and experience 
                                    of practitioners working in Africa.
                                </p>
                            </div>
                        </div>
                        <div class="services-wrap-content row">
                            <div class="col-12">
                                <div class="services-details-list mb-10">
                                    <h4 class="mb-15">Areas of particular interest are:</h4>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <ol class="col-xl-6 col-lg-6 col-md-6 col-sm-12 blog-details__list mt-20">
                                    <li><a href="#">Enterprise risk management (corporate, governments/municipalities)</a></li>
                                    <li><a href="#">Insurance</a></li>
                                    <li><a href="#">Alternative Risk financing</a></li>
                                    <li><a href="#">Operational Risk Management (financial and non-financial companies)</a></li>
                                    <li><a href="#">Credit Risk Management (financial and non-financial companies)</a></li>
                                    <li><a href="#">Treasury Risk management(financial and non-financial companies)</a></li>
                                    <li><a href="#">Corporate Governance</a></li>
                                    <li><a href="#">External/Internal Audit</a></li>
                                    <li><a href="#">Healthcare risk management</a></li>
                                    <li><a href="#">Country Risk Management</a></li>
                                    <li><a href="#">Economic Risk Management</a></li>
                                    <li><a href="#">Disaster Management</a></li>
                                </ol>
                                <ol class="col-xl-6 col-lg-6 col-md-6 col-sm-12 blog-details__list mt-20">
                                    <li><a href="#">Environmental Risk Management</a></li>
                                    <li><a href="#">Crisis management</a></li>
                                    <li><a href="#">Business Continuity</a></li>
                                    <li><a href="#">Cyber Risk Management</a></li>
                                    <li><a href="#">Social Risk Management</a></li>
                                    <li><a href="#">Risk Governance (Global Risks)</a></li>
                                    <li><a href="#">International Business Law</a></li>
                                    <li><a href="#">International Investment Law</a></li>
                                    <li><a href="#">International Trade</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Strategic Management</a></li>
                                    <li><a href="#">Risk management information systems</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12">
                    <div class="services-right-area pl-50">
                        <div class="widget mb-40">
                            <ul class="widget-list-with-links">
                                <li class="list-item"><a href="#">Register as author</a></li>
                                <li class="list-item"><a href="#">Submit an article</a></li>
                                <li class="list-item"><a href="#">Subscribe to journal</a></li>
                                <li class="list-item"><a href="#">View articles</a></li>
                            </ul>
                        </div>
                        <div class="widget mb-40">
                            <div class="widget-title">
                                <h5>Contact Us</h5>
                            </div>
                            <ul class="address-list">
                                <li>
                                    <span>Editorial</span><p> Franchesca J. Charney</p>
                                    <a href="tel:+01131254334">Phone: <span>011 312 54334</span></a>
                                    <a href="mailto:fcharney@soril.org">Email: <span>fcharney@soril.org</span></a>
                                </li>
                                <li>
                                    <span>Publications</span><p>Richard Reicherter</p>
                                    <a href="tel:+01131254334">Phone: <span>011 312 54334</span></a>
                                    <a href="mailto:richard@arimas.org">Email: <span>richard@arimas.org</span></a>
                                </li>
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

    {{-- <section class="py-2">
        <div class="container">
            @if(session('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                </div>
            </div>
            @endif
            <div class="row" id="overview">
                <div class="col-lg-7">
                    <h2 class="text-gradient text-danger mb-0 mt-2">
                        The Journal Overview
                    </h2>
                    <p style="color: black; margin-left: 30.0px">
                        The African Journal of Risk Leadership (AJRL) is published quarterly online only on behalf of on behalf of the African Risk Management Society.
                        <br><br>
                        The mission of the ARJL is to create, stimulate and perpetuate a culture of information sharing and publishing amongst researchers and practitioners of risk management in African in ways that will contribute to availability of Africa related risk and risk management information, better understanding of Africa risk and risk management particularities and, overall, to the purpose of ARiMaS.

                        <b>The Scope</b>
                        <br>
                        The AJRM publishes risk management related original and review papers, studies, technical reports, educational articles, conference reports, management reports, book reviews, news and notes commentaries on business, organisational, social, political, and economic risks and risk management issues and new developments in the field of risk management.
                        <br><br>
                        <b>Target Audience</b>
                        <br>
                        The AJRM is intended for African practitioners, researchers, and scholars involved with or interested in Africa risk management issues and adjacent fields.
                        <br><br>
                        <b>Submissions</b>
                        <br>
                        Submissions may be voluntary, by invitation, and suggestions for special issues and publications are welcome. We are particularly interested in receiving articles and comments reflecting the point of view and experience of practitioners working in Africa.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 ms-auto mt-lg-0 mt-4">

                    <div class="row">
                        <nav class="navbar navbar-expand
                                        blur blur-rounded top-0 z-index-fixed
                                        shadow position-relative start-0 end-0 mb-3">
                            <div class="container-fluid">
                                <div class="collapse navbar-collapse pt-1 pb-1 py-lg-0" id="navigation">
                                    <ul class="navbar-nav navbar-nav-hover ms-lg-0 ps-lg-0 w-100">

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a class="nav-link ps-2 d-flex justify-content-between align-items-center"
                                               href="{{route('journal-articles')}}"
                                               style="color: black;">
                                                Articles
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                               href="{{route('submit')}}"
                                               style="color: black;">
                                                Submit
                                            </a>
                                        </li>

                                        <li class="nav-item dropdown dropdown-hover mx-0">
                                            <a href="{{route('author.create')}}"
                                               class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center">
                                                Author Login
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <a href="{{route('author.index')}}">
                                    <h5 class="mt-3">
                                        Register as Author
                                    </h5>
                                </a>
                                <hr>

                                <a href="{{route('article.index')}}">
                                    <h5 class="mt-3">
                                        Submit an Article
                                    </h5>
                                </a>
                                <hr>

                                <a href="{{route('subscribe')}}">
                                    <h5 class="mt-3">
                                        Subscrite to The Journal
                                    </h5>
                                </a>
                                <hr>

                                @if (session('subscribe'))
                                    <a href="{{route('shows', ['id'=>session('subscribe')])}}">
                                        <h5 class="mt-3">
                                            Subscribe Profile
                                        </h5>
                                    </a>
                                    <hr>
                                @endif

                                <a href="{{route('artis')}}">
                                    <h5 class="mt-3">
                                        View Articles
                                    </h5>
                                </a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <h4 style="color: black">
                        Areas of particular interest are:
                    </h4>

                    <div class="col-lg-6">
                        <ul style="color: black">
                            <li>Enterprise risk management (corporate, governments/municipalities)</li>
                            <li>Insurance</li>
                            <li>Alternative Risk financing</li>
                            <li>Operational Risk Management (financial and non-financial companies)</li>
                            <li>Credit Risk Management (financial and non-financial companies)</li>
                            <li>Treasury Risk management(financial and non-financial companies)</li>
                            <li>Corporate Governance</li>
                            <li>External/Internal Audit</li>
                            <li>Healthcare risk management</li>
                            <li>Country Risk Management</li>
                            <li>Economic Risk Management</li>
                            <li>Disaster Management</li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul style="color:black">
                            <li>Environmental Risk Management</li>
                            <li>Crisis management</li>
                            <li>Business Continuity</li>
                            <li>Cyber Risk Management</li>
                            <li>Social Risk Management</li>
                            <li>Risk Governance (Global Risks)</li>
                            <li>International Business Law</li>
                            <li>International Investment Law</li>
                            <li>International Trade</li>
                            <li>Leadership</li>
                            <li>Strategic Management</li>
                            <li>Risk management information systems</li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="horizontal dark my-5">

            <div class="container" id="edito">
                <div class="row">
                    <div class="col-lg-7">
                        <h2 class="text-gradient text-danger mb-0 mt-2">
                            Editorial Board
                        </h2>
                        <h4 style="color:black">
                            Editors Chiefs
                        </h4>

                        <ul>
                            <li>
                                <b>Henri</b>, Donker, University of Capetown, South Africa(henry.donker@arimas.org)
                            </li>
                            <li>
                                <b>Mimile</b>, Maisha, First Continental Legal and Risk Consultants, Johannesburg, South Africa(mimile.maisha@arimas.com)
                            </li>
                        </ul>

                        <h4 style="color:black">
                            Editorial Boards Members
                        </h4>

                        <ul>
                            <li>
                                <b>Monga</b>, Hatarig, Egerton University, Kenya
                            </li>
                            <li>
                                <b>Robert</b>, Hasan, University of Dodoma, Tanzania
                            </li>
                            <li>
                                <b>Mula</b>, Kagga, Makerere University , Uganda
                            </li>
                            <li>
                                <b>Hill</b>, Jennifer, University of Pretoria, South Africa
                            </li>
                            <li>
                                <b>Jeffrey</b>, Khumalo, University Cape town, South Africa
                            </li>
                            <li>
                                <b>Jong</b>, Abe de, UNISA, South Africa
                            </li>
                            <li>
                                <b>Patricia</b>, Babalolba, Covenant, Nigeria
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5">
                        <h2 class="text-gradient text-danger mb-0 mt-2">
                            Contact US
                        </h2>

                        <p style="color:black" class="text-sm">
                            <b>Editorial</b>
                            <br>
                            Franchesca J. Charney <br>
                            Phone: <a href="tel:011 312 54334">011 312 54334</a> <br>
                            Email: <a href="mailito:fcharney@arimas.org">fcharney@arimas.org</a>
                        </p>

                        <p style="color:black" class="text-sm">
                            <b>Publications</b>
                            <br>
                            Richard Reicherter <br>
                            Phone: <a href="tel:011 312 54334">011 312 54334</a> <br>
                            Email: <a href="mailito:richard@arimas.org">richard@arimas.org</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- <div class="modal fade" id="journalLogin" tabindex="-1" aria-labelledby="journalLoginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LOGIN OR REGISTER</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        <div class="col-lg-6">
                            <h6 style="color:black">
                                Register
                            </h6>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Author
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Subscriber
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <h6 style="color:black">
                                Login
                            </h6>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Admin Journal
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Author
                            </button>

                            <button type="button" class="btn btn-dark w-auto me-1 mb-2">
                                As Subscriber
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
