@extends('layouts.appss')

@section('title')
    Membres
@endsection

@section('content')
<section class="page-title-area" style="background: linear-gradient(#03072e7a, #040c5253), url({{ asset('assets/img/bg/page-title-bg1.jpg') }});">
    <div class="container" >
        <div class="row">
            <div class="col-xl-4 offset-xl-4">
                <div class="page-title text-center">
                    <h1>Individual MemberShip</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-area faq-area-02 pt-40 pb-85">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="about-wrapper-02 about-wrapper-05 pl-50">
                    <div class="section-title section-title-03 mb-55">
                        <h2 class="mb-15">Who Are Our Individual Members?</h2>
                        <span class="mb-30">SoRil’ individual membership is restricted 
                            to risk individuals who hold key executive positions within 
                            their firms, organisations or institutions. They lead the risk 
                            agenda in organisations.
                        </span>
                        <p class="mb-35">Risk leaders are typically senior management, Heads 
                            of Risk areas, C-level executives, Chief Risk Officers, board members, 
                            senior risk consultants as well as representatives of risk management 
                            associations and institutes.</p>
                        
                    </div>
                    <div class="widget">
                        <div class="widget-title">
                            <h5>Membership Fees</h5>
                            <p class="mt-30">
                                The annual membership fee is <strong>USD 250.</strong>
                            </p>
                            <p class="mt-30">
                                This fee is payable upon application. We cannot begin to process 
                                your application until this has been received.
                            </p>
                            <a class="theme_btn active-btn wow fadeInUp animated mt-20" data-wow-delay=".7s"
                                    href="#">Register<i
                                        class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="faq-wrapper">
                    <div class="faq-tab">
                        <div id="accordion">
                            <div class="card card-02 mb-15">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Why Become a Member?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Being an SoRil member does not just open the door to exciting 
                                            opportunities in your career and personal development. 
                                            It also gives you access to a first-class range of services 
                                            designed to support you in your professional life.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-02 mb-15">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Manage Your Membership
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>In return for all the member benefits we provide, we charge an 
                                            annual subscription. This also helps to support our objective 
                                            of promoting our members on the continental stage. Your annual s
                                            ubscription is payable on 1 January each year and we’ll send 
                                            you a notification the November before.
                                            If you’re a new member, welcome. You’ll start paying your 
                                            annual membership subscription from 1 January following your 
                                            admission. You’ll also pay a one-off admission fee.
                                            The simplest and quickest way to pay your subscription is 
                                            online, via mySoRil, although there are other options available.
                                            Please remember to pay your fees on time to continue your membership.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-02 mb-15">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Reduced Fees
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Need a little help? SoRil offers two categories of reduced Fees:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
