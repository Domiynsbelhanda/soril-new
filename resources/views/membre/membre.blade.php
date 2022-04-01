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
                        <h1>Member Associations</h1>
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
                            <h2 class="mb-15">Who is Our Associate Member?</h2>
                            <p class="mb-30">National risk management associations are at the heart 
                                of our community. This is evident in their missions and activities to 
                                advance the discipline of risk management, to represent, defend and 
                                equip African risk management professionals and in their support for 
                                businesses and industries in their countries.
                            </p>
                            <p class="mb-35">National associations are any association, legally established, 
                                with a minimum of ten members (individual or legal entities), concerned with 
                                the defence of the interests of risk managers and risk management solutions 
                                or services operating within the national boundary of an African country.</p>
                        </div>
                        <div class="widget">
                            <div class="widget-title">
                                <h5>Payment methods</h5>
                                <p class="mt-30">
                                    Once you have sent your application form, you will automatically 
                                    receive an invoice from SoRil. The invoice is payable by Bank transfer 
                                    or online debit card.
                                    All bank charges for all payments by any method will be borne by the remitter.
                                </p>
                                
                                <a class="theme_btn active-btn wow fadeInUp animated mt-20" data-wow-delay=".7s"
                                        href="#">Apply<i
                                            class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div>
                        <h1 class="section-title">Annual Fee Structure</h1>
                        <table class="table align-items-center mb-0">
                            <thead>
                            <tr>
                                <th class="text-uppercase text-xxs font-weight-bolder text-center" style="color: #00aa55">Members</th>
                                <th class="text-uppercase text-xxs font-weight-bolder ps-2 text-center" style="color: #00aa55">Fee / Member</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck"></h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$25</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">0-50</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$20</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">51-150</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$17.5</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">151-300</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$15</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">301-450</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">$12.5</h6>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">451-Above</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center text-center">
                                            <h6 class="mb-0" style="color: balck">Free</h6>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
