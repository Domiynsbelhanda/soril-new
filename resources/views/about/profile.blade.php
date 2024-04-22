@extends('layouts.appss')

@section('title')
    Profil
@endsection

@section('content')

    <section class="team-portfolio pt-40 pb-40 mt-40 mb-80">
        <div class="container" bis_skin_checked="1">
            <div class="row align-items-center" bis_skin_checked="1">
                <div class="col-xl-5 col-lg-5 col-md-5" bis_skin_checked="1">
                    <div class="mayor__img mb-30" bis_skin_checked="1">
                        <img src="{{asset($user->image)}}" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-md-7" bis_skin_checked="1">
                    <div class="portfolis__wrapper" bis_skin_checked="1">
                        <div class="portfolis pos-rel pl-40" bis_skin_checked="1">
                            <div class="section-title mb-35" bis_skin_checked="1">
                                <h6 class="left_line pl-55">{{$user->type}}</h6>
                                <h2>
                                    {{$user->prenom . ' ' . $user->nom}}
                                </h2>
                                <span>
                                    {{$user->about}}
                                </span>
                            </div>
                            <ul class="portfolis__contact">
                                <li><a href="#"><i class="fal fa-envelope"></i> {{$user->email}}</a></li>
                                <li><a href="#"><i class="fal fa-phone"></i> {{$user->phone}}</a></li>
{{--                                <li><a href="#"><i class="fal fa-map-marker-alt"></i> 13/A, Miranda Halim City Hall, New York, US</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
