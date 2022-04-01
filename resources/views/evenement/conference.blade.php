<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{$annual->titre}}</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />

<link rel="shortcut icon" type="image/x-icon" href="{{ asset("assets/img/logo/icon.png") }}">
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
        <li><a href="#registration">registration</a></li>
        <li><a href="#scheadule">schedule</a></li>
        <li><a href="#venue">venue</a></li>
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
  <div class="speakers" style="margin-top: 100px;">
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
      <div class="price">
        <div>
          <p class="amount">${{$annual->prix}}</p>
          <h4>Price <span>per person</span></h4>
        </div>
      </div>
      <div class="form" style="padding-left: 10px">
        <form action="{{url('register_evenement_post')}}" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id" value="{{$annual->id}}">
          <select name="title" required id="title" class="form-control" style="" required="">
            <option value="mr">Monsieur</option>
            <option value="mrs">Madame</option>
            <option value="ms">Mademoiselle</option>
          </select>
          <input type="text" required name="firstname" placeholder="First Name"/>
          <input type="text" required name="lastname" placeholder="Last Name"/>
          <input type="text" required name="middleName" placeholder="Middle Name"/>
          <input type="text" required name="email" placeholder="Email"/>
          <select id="pays" name="pays" class="form-control">
            @forelse (\App\Models\Country::all() as $item)
                <option value="{{$item->code}}">{{$item->name}} </option>
            @empty

            @endforelse
          </select>
          <input type="text" required name="ville" placeholder="City"/>
          <input type="text" required name="province" placeholder="State | Province"/>
          <input type="text" required name="company" placeholder="Company"/>
          <input type="text" required name="position" placeholder="Position"/>
          <input type="text" required name="departement" placeholder="Department"/>
          <select name="industrie">
            <option value="">Area</option>
            <option>Accounting</option>
            <option>Airlines/Aviation</option>
            <option>Alternative Dispute Resolution</option>
            <option>Alternative Medicine</option>
            <option>Animation</option>
            <option>Apparel/Fashion</option>
            <option>Architecture/Planning</option>
            <option>Arts/Crafts</option>
            <option>Automotive</option>
            <option>Aviation/Aerospace</option>
            <option>Banking/Mortgage</option>
            <option>Biotechnology/Greentech</option>
            <option>Broadcast Media</option>
            <option>Building Materials</option>
            <option>Business Supplies/Equipment</option>
            <option>Capital Markets/Hedge Fund/Private Equity</option>
            <option>Chemicals</option>
            <option>Civic/Social Organization</option>
            <option>Civil Engineering</option>
            <option>Commercial Real Estate</option>
            <option>Computer Games</option>
            <option>Computer Hardware</option>
            <option>Computer Networking</option>
            <option>Computer Software/Engineering</option>
            <option>Computer/Network Security</option>
            <option>Construction</option>
            <option>Consumer Electronics</option>
            <option>Consumer Goods</option>
            <option>Consumer Services</option>
            <option>Cosmetics</option>
            <option>Dairy</option>
            <option>Defense/Space</option>
            <option>Design</option>
            <option>E-Learning</option>
            <option>Education Management</option>
            <option>Electrical/Electronic Manufacturing</option>
            <option>Entertainment/Movie Production</option>
            <option>Environmental Services</option>
            <option>Events Services</option>
            <option>Executive Office</option>
            <option>Facilities Services</option>
            <option>Farming</option>
            <option>Financial Services</option>
            <option>Fine Art</option>
            <option>Fishery</option>
            <option>Food Production</option>
            <option>Food/Beverages</option>
            <option>Fundraising</option>
            <option>Furniture</option>
            <option>Gambling/Casinos</option>
            <option>Glass/Ceramics/Concrete</option>
            <option>Government Administration</option>
            <option>Government Relations</option>
            <option>Graphic Design/Web Design</option>
            <option>Health/Fitness</option>
            <option>Higher Education/Acadamia</option>
            <option>Hospital/Health Care</option>
            <option>Hospitality</option>
            <option>Human Resources/HR</option>
            <option>Import/Export</option>
            <option>Individual/Family Services</option>
            <option>Industrial Automation</option>
            <option>Information Services</option>
            <option>Information Technology/IT</option>
            <option>Insurance</option>
            <option>International Affairs</option>
            <option>International Trade/Development</option>
            <option>Internet</option>
            <option>Investment Banking/Venture</option>
            <option>Investment Management/Hedge Fund/Private Equity</option>
            <option>Judiciary</option>
            <option>Law Enforcement</option>
            <option>Law Practice/Law Firms</option>
            <option>Legal Services</option>
            <option>Legislative Office</option>
            <option>Leisure/Travel</option>
            <option>Library</option>
            <option>Logistics/Procurement</option>
            <option>Luxury Goods/Jewelry</option>
            <option>Machinery</option>
            <option>Management Consulting</option>
            <option>Maritime</option>
            <option>Market Research</option>
            <option>Marketing/Advertising/Sales</option>
            <option>Mechanical or Industrial Engineering</option>
            <option>Media Production</option>
            <option>Medical Equipment</option>
            <option>Medical Practice</option>
            <option>Mental Health Care</option>
            <option>Military Industry</option>
            <option>Mining/Metals</option>
            <option>Motion Pictures/Film</option>
            <option>Museums/Institutions</option>
            <option>Music</option>
            <option>Nanotechnology</option>
            <option>Newspapers/Journalism</option>
            <option>Non-Profit/Volunteering</option>
            <option>Oil/Energy/Solar/Greentech</option>
            <option>Online Publishing</option>
            <option>Other Industry</option>
            <option>Outsourcing/Offshoring</option>
            <option>Package/Freight Delivery</option>
            <option>Packaging/Containers</option>
            <option>Paper/Forest Products</option>
            <option>Performing Arts</option>
            <option>Pharmaceuticals</option>
            <option>Philanthropy</option>
            <option>Photography</option>
            <option>Plastics</option>
            <option>Political Organization</option>
            <option>Primary/Secondary Education</option>
            <option>Printing</option>
            <option>Professional Training</option>
            <option>Program Development</option>
            <option>Public Relations/PR</option>
            <option>Public Safety</option>
            <option>Publishing Industry</option>
            <option>Railroad Manufacture</option>
            <option>Ranching</option>
            <option>Real Estate/Mortgage</option>
            <option>Recreational Facilities/Services</option>
            <option>Religious Institutions</option>
            <option>Renewables/Environment</option>
            <option>Research Industry</option>
            <option>Restaurants</option>
            <option>Retail Industry</option>
            <option>Security/Investigations</option>
            <option>Semiconductors</option>
            <option>Shipbuilding</option>
            <option>Sporting Goods</option>
            <option>Sports</option>
            <option>Staffing/Recruiting</option>
            <option>Supermarkets</option>
            <option>Telecommunications</option>
            <option>Textiles</option>
            <option>Think Tanks</option>
            <option>Tobacco</option>
            <option>Translation/Localization</option>
            <option>Transportation</option>
            <option>Utilities</option>
            <option>Venture Capital/VC</option>
            <option>Veterinary</option>
            <option>Warehousing</option>
            <option>Wholesale</option>
            <option>Wine/Spirits</option>
            <option>Wireless</option>
            <option>Writing/Editing</option>
          </select>
          <input type="tel" class="form-control shape" required="" name="phone" placeholder="Phone">
          <input type="tel" class="form-control shape" required="" name="phoneBureau" placeholder="Office phone">
          <button name="submit" type="submit">Confirm Your Order</button>
        </form>
      </div>
      
    </div>
  </div>
  <!-- registration ends! -->
  <a id="venue" class="anchor"></a>

  <div class="location">
    <div class="container">

      <h2>Location and Venue</h2>
      {{-- <p class="subtitle">area full of great hotels and restaurants.</p> --}}

      <!-- info -->
      <div class="info">

        <div class="maps">

          <div class="images">
            <img src="images/placeholder.jpg" />
          </div>
          <div class="images">
            <img src="images/placeholder.jpg" />
          </div>


        </div>

        <div class="address">

          {{-- <h4>Spend three inspiring days in the cultural and cosmopolitan city of London. The area is full of great hotels, restaurants and galleries.</h4> --}}

          <h5><i class="fa fa-chevron-right"></i> Venue</h5>

          <div class="venue">
            <p><span>{{$annual->lieu}}</span></p>
            <p>{{$annual->ville}}</p>
            <a  href="mailto:reservations@soril.org">reservations@soril.org</a>
          </div>

          <h5><i class="fa fa-chevron-right"></i> Nearby Accomodation</h5>

          <div class="venue">
            <p><span>Town and Country Resort & Convention Center</span></p>
            <p>500 Hotel Circle North</p>
            <p>San Diego, CA 92108</p>
            <a href="#">Book Online</a>
          </div>

          <div class="venue">
            <p><span>Town and Country Resort & Convention Center</span></p>
            <p>500 Hotel Circle North</p>
            <p>San Diego, CA 92108</p>
            <a href="#">Book Online</a>
          </div>
        </div>
      </div>
      <!-- info ends! -->
    
    </div>
  </div>

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
                            <li><a href="#"><img width="200px" src="{{asset($spons->image)}}" alt="{{$spons->organisation}}" /></a></li>
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