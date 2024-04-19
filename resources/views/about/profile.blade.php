@extends('layouts.appss')

@section('title')
    Profil
@endsection

@section('content')

    <!-- Page Title Section Start -->
    <div class="page-title-section section section-padding-top-0" data-bg-color="#f5f5f5">
        <div class="page-breadcrumb position-static">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">Accueil</a></li>
                    <li><a href="{{route('about')}}">A Propos</a></li>
                    <li class="current">{{$user->prenom . ' ' . $user->nom}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Title Section End -->


    <!-- Profile Section Start  -->
    <div class="profile-section section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="profile-image">
                        <img
                            style="height: 430px!important; width: 350px!important; object-fit: cover!important;"
                            src="{{asset($user->image)}}"
                             alt="profile">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 offset-xl-1">
                    <div class="profile-info">
                        <h3 class="profile-name">
                            {{$user->prenom . ' ' . $user->nom}}
                        </h3>
                        <div class="author-career">/{{$user->type}}</div>
                        <p class="author-bio">
                            {{$user->about}}
                        </p>

                        <h5 class="profile-contact-title">Contact</h5>
                        <span class="contact-info-text">
                                <span class="phone">Phone number: <strong>{{$user->phone}}</strong> </span>
                            <br>
                            <span class="email">Email: <strong>{{$user->email}}</strong></span>
                            </span>
                        <ul class="author-social-networks">
                            <li class="item">
                                <a href="JavaScript:Void(0);" target="_blank" class="social-link"> <i
                                        class="fab fa-twitter social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="JavaScript:Void(0);" target="_blank" class="social-link"> <i
                                        class="fab fa-facebook-f social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="JavaScript:Void(0);" target="_blank" class="social-link"> <i
                                        class="fab fa-instagram social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="JavaScript:Void(0);" target="_blank" class="social-link"> <i
                                        class="fab fa-pinterest social-link-icon"></i> </a>
                            </li>
                            <li class="item">
                                <a href="JavaScript:Void(0);" target="_blank" class="social-link"> <i
                                        class="fab fa-youtube social-link-icon"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section End  -->
@endsection
