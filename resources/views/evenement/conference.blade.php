<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{$annual->titre}}</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

<link href="{{ asset("conference/font-awesome-4.2.0/css/font-awesome.min.css") }}" rel="stylesheet" />
<link href="{{ asset("conference/scripts/jquery-ui-1.11.2/jquery-ui.min.css") }}" rel="stylesheet" />
<link href="{{ asset("conference/animate.min.css") }}" rel="stylesheet" />
<link href="{{ asset("conference/style.css") }}" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="page">
  <div class="header">
    <div class="menu">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#speakers">speakers</a></li>
        <li><a href="#scheadule">schedule</a></li>
        <li><a href="#sponsors">sponsors</a></li>
        <li><a href="{{route('opportunity')}}">Sponsorship Opportunity</a></li>
        <li><a href="https://www.soril.org">back to soril</a></li>       
      </ul>

    </div>

    <div class="container">

      <h1><a href="#">{{$annual->titre}}</a></h1>

      <div class="when">
        <div class="icon-holder">
          <i class="fa fa-calendar"></i>
        </div>
        <div>
          <p><strong> {{ Carbon\Carbon::parse($annual->date)->format('F, d Y') }}</strong></p>
        </div>

      </div>

      <div class="where">

        <div class="icon-holder">
          <i class="fa fa-map-marker"></i>
        </div>

        <div>
          <p><strong>{{$annual->lieu}}</strong></p>
          <p><span>{{$annual->ville}}</span><br /></p>
        </div>

      </div>
      <div class="register-now">
        <p>Book now!</p>
        <a href="mailto:reservations@soril.org" class="button">I book my seat</a>
      </div>
    </div>
  </div>
  <!-- header ends -->

  <!-- topics -->
  <div class="topics">
    <div class="container">

      <h3><strong>About</strong><br />Our event</h3>

      <p>{{$annual->description}}</p> 

    </div>
  </div>
  <!-- topics ends! -->

  <a id="speakers" class="anchor"></a>

  <!-- speakers -->
  <div class="speakers">
    <div class="container">

        <h2>The Speakers</h2>
        {{-- <p class="subtitle">Master Classes from creative experts</p> --}}

        <!-- featured -->
        <div class="featured">

          <div class="image">
            <img src="{{asset($anim->image)}}" alt="" />
          </div>

          <div>
            <h3>Keynote Speaker</h4>
            <h6>{{$anim->prenom . ' ' . $anim->nom}}</h6>
            <p class="title">{{$anim->organisation . ' - ' . $anim->position}}</p>

            <p>{{\App\Models\Country::where('code', $anim->pays)->first()->name}}</p>
          </div>

        </div>
        <!-- featured ends! -->
        @if($programs != null)
            @foreach ($programs->unique('facilitator') as $program)
                @forelse ($anims as $anim)
                    @if ($program->facilitator == $anim->id)
                        <div class="single">
                            <img src="{{asset($anim->image)}}" alt="" />
                
                            <div>
                            <h3>{{$anim->prenom}}<br />{{$anim->nom}}</h3>
                            <p><strong>{{$anim->organisation . ' - ' . $anim->position}}</strong></p>
                        </div>
                      </div>
                    @endif
                @empty
                @endforelse
            @endforeach
        @endif
    </div>
  </div>
  <!-- speakers ends! -->

  <a id="scheadule" class="anchor"></a>

  <!-- schedule -->
  <div class="schedule">
    <div class="container">

      <h2>Conference Schedule</h2>

      <div class="tabs">

        <ul>
            @if($programs != null)
                @foreach ($programs->unique('date') as $program)
                    <li><a href="#tabs-{{$loop->index}}">{{ Carbon\Carbon::parse($program->date)->format('F, d Y') }}</a></li>
                @endforeach
            @endif
        </ul>
        
        @if($programs != null)
            @foreach ($programs->unique('date') as $program)
            <div id="tabs-{{$loop->index}}" class="day">
                @forelse ($programs as $item)
                    @forelse ($anims as $anim)
                        @if ($program->facilitator == $anim->id)
                            @if ($item->date == $program->date)
                                <div class="event extend">
                                    <div class="event-time">{{ Carbon\Carbon::parse($item->time)->format('h:i') }} <span>{{ Carbon\Carbon::parse($item->time)->format('A') }}</span></div>
                                    <!-- event details -->
                                    <div class="event-info">
                                        <div>
                                          <h4>{{$item->title}}</h4>
                                          <p class="speaker"><strong>By</strong><br/> {{$anim->prenom . ' ' . $anim->nom}}</p>
                                          <p>{{$item->header}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @empty
                    @endforelse
                @empty
                @endforelse
            </div>
            @endforeach
        @endif
      </div>
    </div>
  </div>
  <!-- schedule ends! -->

  <a id="registration" class="anchor"></a>

  <!-- registration -->
  <div class="registration">
    <div class="container">

      <h2>Pricing & Registration</h2>

      <h3>Fill out your information</h3>

      <div class="form">

        <form action="#" method="post">
          <input type="text" name="firstname" placeholder="First Name"/>
          <input type="text" name="lastname" placeholder="Last Name"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="text" name="address" placeholder="Address"/>
          <input type="text" name="zip" placeholder="Zip Code"/>
          <input type="text" name="city" placeholder="City"/>
          <input type="text" name="program" id="program" placeholder="Select your program on the right" disabled="disabled" />

          <!--textarea name="message" placeholder="Your Message *"></textarea-->
          <button name="submit" type="submit">Confirm Your Order</button>
        </form>
      </div>
      <div class="price">
        <div>
          <p class="amount">${{$annual->prix}}</p>
          <h4>Price <span>per person</span></h4>
        </div>
      </div>
    </div>
  </div>
  <!-- registration ends! -->

  <a id="sponsors" class="anchor"></a>

  <!-- sponsors -->
  <div class="sponsors">
    <div class="container">

      <h2>Our sponsors</h2>
      <p class="subtitle">Interested in becoming a sponsor? <a href="{{route('opportunity')}}">Sponsorship Opportunity</a></p>

      <div class="slides">
        <ul>
            @forelse(\App\Models\SponsorEvent::all() as $spon)
                @forelse(\App\Models\Sponsor::all() as $spons)
                    @if($spon->sponsor_id == $spons->id)
                        @if($spon->evenement_id == $annual->id)
                            <li><a href="#"><img src="{{asset($spons->image)}}" alt="{{$spons->organisation}}" /></a></li>
                        @endif
                    @endif
                @empty
                @endforelse
            @empty
            @endforelse
        </ul>
      </div>
    </div>
  </div>
  <!-- sponsors ends! -->

 

  <div class="footer">
    <div class="container">
      <p>Copyright 2022 <a href="https://soril.org">Soril</a></p>
    </div>
  </div>
</div>

<!-- back to top -->
<div class="back">
  <div class="container">

    <a href="#top"><i class="fa fa-angle-up fa-3x"></i></a>

  </div>
</div>
<!-- back to top ends! -->


<script src="scripts/jquery-1.11.0.min.js"></script>
<script src="scripts/jquery-ui-1.11.2/jquery-ui.min.js"></script>
<script src="scripts/flexslider/jquery.flexslider-min.js"></script>
<script src="scripts/jquery.parallax-1.1.3.js"></script>
<script src="scripts/jquery.inview.min.js"></script>
<script src="scripts/form.js"></script>
<script src="scripts/theme.js"></script>
</body>
</html>