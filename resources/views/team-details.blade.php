@extends('layouts.appss')

@section('title')
    Soril - Home
@endsection

@section('content')
<section class="team-portfolio pt-40 pb-40">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="mayor__img mb-30">
                    <img src="{{asset('assets/img/mimile.png')}}" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-7">
                <div class="portfolis__wrapper">
                    <div class="portfolis pos-rel pl-40">
                        <div class="section-title mb-35">
                            <h6 class="left_line pl-55">President</h6>
                            <h2>Mimile Mukuna Maisha</h2>
                            {{-- <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</span> --}}
                        </div>
                        {{-- <ul class="portfolis__contact">
                            <li><a href="#"><i class="fal fa-envelope"></i> info@webexamples.com</a></li>
                            <li><a href="#"><i class="fal fa-phone"></i> 786-098-098-098-09</a></li>
                            <li><a href="#"><i class="fal fa-map-marker-alt"></i> 13/A, Miranda Halim City Hall, New York, US</a></li>
                        </ul> --}}
                        <div class="portfolis__signature">
                            <img src="{{asset('assets/img/mimile.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team-details-area end-->
<!--team-biography-area start-->
<section class="team-biography-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="biographs">
                    <h3 class="biographs-title">Biography</h3>
                    <div class="biographs__content row">
                        <div class="col-7">
                            <p class="mb-30">
                                Mimile is an expert in International Business Law and International 
                                Business Risk Management.
                                Since 2013, he has been CEO of First Continental 
                                Legal and Risk Consulting where he advises on International 
                                Business Law, International Business Risk Management and on 
                                international financing transactions.
                            </p>
                                
                                <p class="mb-30">
                                    His expertise has been sought by transnational companies, governments 
                                and professional bodies. He previously spent 20 years in the 
                                insurance/risk finance industry where he occupied executive 
                                positions in various companies in different African countries.
                                </p>
                                
                                <p class="mb-30">
                                    He is a regular speaker at conferences and seminars on International
                                 Business Risk Management and international investment/trade law 
                                 topics and has made it his mission to promote the principle and 
                                 practice of risk leadership in the business world. he is the author 
                                 of the book titled "Why Risk so Much For so Little published in 2011.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection