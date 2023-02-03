<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="Fareorbitz" />
    <meta property="og:site_name" content="Fareorbitz" />
    <title>Fareorbitz</title>
    <meta name="robots" content="noindex,nofollow" />
    <base href="/">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175030903-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-175030903-1');
    </script>
    <script>
        gtag('config', 'AW-592680810/jkbVCILmtcIDEOquzpoC', {
            'phone_conversion_number': '+1 888-926-8555'
        });
    </script>
</head>

<body>
    <header class="header-area">
        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('images/logo-dark.png') }}" alt="logo">
                                </a>
                            </div>
                            <div class="main-menu-content">
                                <ul>
                                    <li class="sm-none notMobile"><a href="tel:+1-888-918-3650" class="text-color-1"><i class="la la-phone mr-1"></i>&nbsp;&nbsp; +1-888-918-3650</a></li>
                                    <li class="sm-none notMobile"><a href="mailto:promotionalfare@fareorbitz.com" class="text-color-1"><i class="la la-envelope mr-1"></i>&nbsp;&nbsp; promotionalfare@fareorbitz.com</a></li>
                                    <li>
                                        <button class="btn-bars sm-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <i class="la la-align-right"></i>
                                        </button>
                                        <a href="tel:+1-888-918-3650" class="btn-bars bars-sm btn btn-primary btn-sm d-md-none text-white">
                                            <i class="la la-times"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <div id="offcanvasRightLabel">
                                            <img src="{{ asset('images/logo_white.png') }}" alt="logo">
                                        </div>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="la la-times"></i></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <ul class="list-unstyled">
                                            <li><a href="/" title="home">Home</a></li>
                                            <!-- <li><a href="{{ url('about-us') }}" title="About us">About Us</a></li> -->
                                            <li><a href="https://fareorbitz.com/" title="Flights">Flights</a></li>
                                            <li><a href="{{ route('hotels') }}" title="Flights">Hotels</a></li>
                                            <li><a href="{{ url('holiday-packages') }}" title="Holiday Packages">Holiday Packages</a></li>
                                            <li><a href="{{ route('visa') }}" title="Visa">Visa</a></li>
                                            <li><a href="{{ url('contact-us') }}" title="contact us">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @php $page = 'Southwest Airlines'; $logo = 'images/partners/southwest-airline.jpg'; @endphp
    <style>
        @media(min-width:768px) {
            .popup-bg {
                display: none;
            }
        }

        @media(max-width:768px) {
            #search_box {
                display: block !important;
            }

            .footer-area {
                margin-bottom: 35px;
            }

            .popup-bg {
                background: none;
                height: 90vh;
                margin-bottom: 20px;
            }

            .page-banner-bg {
                display: none;
            }

            .ownmodal-title2 {
                font-size: 35px;
                padding: 8px 0px 0;
            }


            .ownmodal2 .modal-prgh2 {
                font-size: 18px;
                padding: 5px;
            }

            .ownmodal-callicon2 {
                width: auto;
                height: 60px;
                margin: 15px auto 0;
                font-size: 22px;
                border-radius: 52px;
            }

            .ownmodal-callicon2 {
                border: 3px solid var(--color-3);
            }

            .ownmodal-tollfree2 {
                font-size: 18px;
                width: 100%;
                border: none;
                position: fixed;
                z-index: 999;
                bottom: 0;
                margin: 0;
                border: 3px solid var(--color-3);
            }

            .glass {
                padding: 20px 0 10px;
                margin: 10px 15px 10px;
                border-radius: 15px;
                height: auto;
            }

            .hero-wrapper {
                height: auto;
            }

            .countdown {
                font-size: 35px;
                color: #054e8a;
                font-weight: 600;
                text-align: center;
                border-radius: 50px;

            }

            .orange-text {
                color: var(--color-3) !important;
            }

            .bg-call {
                background: var(--color-1);
            }
        }
    </style>
    <div class="popup-bg padding-top-30px">
        <div class="ownmodal2" style="z-index: inherit;">
            <a href="tel:+1-888-918-3650" class="call-screen" id="call">
                <div style="padding:20px;">
                    <p class="modal-prgh2 text-uppercase text-dark">Airline Reservations!!</p>
                    <h3 class="ownmodal-title2 text-center orange-text my-2">Un-Published Fares</h3>
                    <p class="modal-prgh2 text-center">Saved For Our Callers</p>
                    <div class="text-center">
                        <img src="{{ asset('images/partners/southwest-airline.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">Southwest Airlines Reservations </p>
                    <p class="modal-prgh2">New Reservations, Changes, Cancellations & Customer Service </p>
                    <h4 class="ownmodal-title text-primary text-center">No Hold Time </h4>
                    <p class="ownmodal-callicon2"><i class="la la-phone"></i>&nbsp; Call Now!</p>
                    <p class="modal-prgh2 mt-3">Agent Available</p>

                    <div class="countdown"></div>
                </div>
                <div>
                    <p class="ownmodal-tollfree2 bg-call text-white"><i class="la la-phone"></i>+1-888-918-3650</p>
                </div>
            </a>
        </div>
    </div>
    <section class="page-banner-bg">
        <img src="{{ asset('images/airlines/southwest-airline.jpg') }}" class="img-fluid" alt="southwest airline" />
    </section>
    <!-- <div class="search-btn">
    <button class="btn btn-primary btn-block w-100" style="border-radius: 0;" id="show_search">Search Flights</button>
</div> -->
    <div id="search_box">
        @include('flight.flight-search-box')
    </div>

    <section class="call-section pb-4 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="call-box d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/telephone.png') }}" alt="" />
                        <div>
                            <p class="call-title text-center"><span class="">For Unpublished </span><span class="text-light"> Deal Call</span></p>
                            <p class="text-center"><a href="tel:+1-888-918-3650" class="num btn secondary-btn btn-rounded">+1-888-918-3650</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="mb-0 mt-3">
            <div class="sidebar-widget">
                <div class="section-heading pt-3">
                    <h2 class="sec__title text-center">Southwest Airlines</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>Southwest (likewise alluded to as SW carriers or SWA) is a significant US carrier that gives minimal expense traveler flights. The carrier is based at Dallas Love Field air terminal works a broad organization across the US, as well as to worldwide objections in North and Central America. By and large, the carrier flies to in excess of 100 objections. At its most famous season, Southwest flies in excess of 4,000 everyday flights (pre-Covid-19 pandemic)</blockquote>

                <p>Southwest Airlines was laid out in 1967, and initially just flew between Texas' three of its greatest urban communities: Houston, Dallas, and San Antonio. The aircraft has developed enormously from that point forward and is currently probably the greatest transporter in the US. It's consistently inside the main 3 aircrafts in the US for various travelers conveyed, behind Delta and American Airlines. It's the most well known minimal expense transporter in all of North America.</p>

                <p>The carrier is known for its modest essential admissions, which are sold as seat-just tickets at entirely reasonable costs. Travelers that need extra for their flight can add on to their passage to give them what they need. Southwest is novel in that it's one of the main carriers to utilize open-seating. Open seating is when travelers aren't doled out a seat at registration and pick their seat as they load onto the flight, on a the early bird gets the worm premise.</p>

                <p class="airline-title">Objections</p>
                <p class="secondary-font">As of September 2021, Southwest Airlines travel objections include over 100 homegrown objections in 40 states such as Chicago, Baltimore, Washington, Midway, Las Vegas, Denver, Dallas, Phoenix, Houston, Orlando, Atlanta, Los Angeles, as well as global in excess of 15 worldwide objections across Central America and the Caribbean.</p>

                <p class="airline-title">Destinations In United Sates</p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <p><strong>STATE</strong></p>
                                </th>
                                <th>
                                    <p><strong>CITY</strong></p>
                                </th>
                                <th>
                                    <p><strong>AIRPORT</strong></p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Alabama</p>
                                </td>
                                <td>
                                    <p>Birmingham</p>
                                </td>
                                <td>
                                    <p>Birmingham-Shuttlesworth International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Arizona</p>
                                </td>
                                <td>
                                    <p>Phoenix</p>
                                </td>
                                <td>
                                    <p>Phoenix Sky Harbor International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tucson</p>
                                </td>
                                <td>
                                    <p>Tucson International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Arkansas</p>
                                </td>
                                <td>
                                    <p>Little Rock</p>
                                </td>
                                <td>
                                    <p>Little Rock National Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>California</p>
                                </td>
                                <td>
                                    <p>Burbank</p>
                                </td>
                                <td>
                                    <p>Hollywood Burbank Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Fresno</p>
                                </td>
                                <td>
                                    <p>Fresno Yosemite International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Long Beach</p>
                                </td>
                                <td>
                                    <p>Long Beach Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Los Angeles</p>
                                </td>
                                <td>
                                    <p>Los Angeles International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oakland</p>
                                </td>
                                <td>
                                    <p>Oakland International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ontario</p>
                                </td>
                                <td>
                                    <p>Ontario International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Orange County</p>
                                </td>
                                <td>
                                    <p>John Wayne Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Palm Springs</p>
                                </td>
                                <td>
                                    <p>Palm Springs International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Sacramento</p>
                                </td>
                                <td>
                                    <p>Sacramento International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Diego</p>
                                </td>
                                <td>
                                    <p>San Diego International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Francisco</p>
                                </td>
                                <td>
                                    <p>San Francisco International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Jos&eacute;</p>
                                </td>
                                <td>
                                    <p>San Jose International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>St Nick Barbara</p>
                                </td>
                                <td>
                                    <p>Santa Barbara Municipal Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Colorado</p>
                                </td>
                                <td>
                                    <p>Denver</p>
                                </td>
                                <td>
                                    <p>Denver International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Steamship Springs</p>
                                </td>
                                <td>
                                    <p>Yampa Valley Regional Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Telluride (Montrose</p>
                                </td>
                                <td>
                                    <p>Montrose Regional Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Colorado Springs</p>
                                </td>
                                <td>
                                    <p>Colorado Springs Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Connecticut</p>
                                </td>
                                <td>
                                    <p>Hartford</p>
                                </td>
                                <td>
                                    <p>Bradley International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Florida</p>
                                </td>
                                <td>
                                    <p>Fort Lauderdale</p>
                                </td>
                                <td>
                                    <p>Fort Lauderdale-Hollywood International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Post Myers</p>
                                </td>
                                <td>
                                    <p>Southwest Florida International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Jacksonville</p>
                                </td>
                                <td>
                                    <p>Jacksonville International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Orlando</p>
                                </td>
                                <td>
                                    <p>Orlando International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Palm Beach</p>
                                </td>
                                <td>
                                    <p>Palm Beach International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Panama City</p>
                                </td>
                                <td>
                                    <p>Northwest Florida Beaches International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pensacola</p>
                                </td>
                                <td>
                                    <p>Pensacola International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Miami</p>
                                </td>
                                <td>
                                    <p>Miami International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Sarasota</p>
                                </td>
                                <td>
                                    <p>Sarasota-Bradenton International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tampa</p>
                                </td>
                                <td>
                                    <p>Tampa International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Georgia</p>
                                </td>
                                <td>
                                    <p>Atlanta</p>
                                </td>
                                <td>
                                    <p>Hartsfield-Jackson Atlanta International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Savannah</p>
                                </td>
                                <td>
                                    <p>Savannah/Hilton Head International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Hawaii</p>
                                </td>
                                <td>
                                    <p>Honolulu</p>
                                </td>
                                <td>
                                    <p>Daniel K. Inouye International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Kahului</p>
                                </td>
                                <td>
                                    <p>Kahului Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Kailua-Kona</p>
                                </td>
                                <td>
                                    <p>Kona International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Hilo</p>
                                </td>
                                <td>
                                    <p>Hilo International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Lihue</p>
                                </td>
                                <td>
                                    <p>Lihue Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Idaho</p>
                                </td>
                                <td>
                                    <p>Boise</p>
                                </td>
                                <td>
                                    <p>Boise Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Illinois</p>
                                </td>
                                <td>
                                    <p>Chicago</p>
                                </td>
                                <td>
                                    <p>Midway International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>O'Hare International Airport</p>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Indiana</p>
                                </td>
                                <td>
                                    <p>Indianapolis</p>
                                </td>
                                <td>
                                    <p>Indianapolis International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Iowa</p>
                                </td>
                                <td>
                                    <p>Des Moines</p>
                                </td>
                                <td>
                                    <p>Des Moines International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Kansas</p>
                                </td>
                                <td>
                                    <p>Wichita</p>
                                </td>
                                <td>
                                    <p>Wichita Eisenhower National Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Kentucky</p>
                                </td>
                                <td>
                                    <p>Louisville</p>
                                </td>
                                <td>
                                    <p>Louisville International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Louisiana</p>
                                </td>
                                <td>
                                    <p>New Orleans</p>
                                </td>
                                <td>
                                    <p>Louis Armstrong New Orleans International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Maine</p>
                                </td>
                                <td>
                                    <p>Portland, ME</p>
                                </td>
                                <td>
                                    <p>Portland International Jetport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Maryland</p>
                                </td>
                                <td>
                                    <p>Baltimore</p>
                                </td>
                                <td>
                                    <p>Baltimore-Washington International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Massachusetts</p>
                                </td>
                                <td>
                                    <p>Boston</p>
                                </td>
                                <td>
                                    <p>Logan International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Michigan</p>
                                </td>
                                <td>
                                    <p>Detroit</p>
                                </td>
                                <td>
                                    <p>Detroit Metropolitan Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Great Rapids</p>
                                </td>
                                <td>
                                    <p>Gerald R. Passage International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Minnesota</p>
                                </td>
                                <td>
                                    <p>Minneapolis/St. Paul</p>
                                </td>
                                <td>
                                    <p>Minneapolis-Saint Paul International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mississippi</p>
                                </td>
                                <td>
                                    <p>Jackson</p>
                                </td>
                                <td>
                                    <p>Jackson International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Missouri</p>
                                </td>
                                <td>
                                    <p>Kansas City</p>
                                </td>
                                <td>
                                    <p>Kansas City International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>St. Louis</p>
                                </td>
                                <td>
                                    <p>St. Louis Lambert International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nebraska</p>
                                </td>
                                <td>
                                    <p>Omaha</p>
                                </td>
                                <td>
                                    <p>Eppley Airfield</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nevada</p>
                                </td>
                                <td>
                                    <p>Las Vegas</p>
                                </td>
                                <td>
                                    <p>McCarran International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Reno/Tahoe</p>
                                </td>
                                <td>
                                    <p>Reno-Tahoe International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>New Hampshire</p>
                                </td>
                                <td>
                                    <p>Manchester</p>
                                </td>
                                <td>
                                    <p>Manchester-Boston Regional Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>New Mexico</p>
                                </td>
                                <td>
                                    <p>Albuquerque</p>
                                </td>
                                <td>
                                    <p>Albuquerque International Sunport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>New York</p>
                                </td>
                                <td>
                                    <p>Albany, NY</p>
                                </td>
                                <td>
                                    <p>Albany International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Buffalo</p>
                                </td>
                                <td>
                                    <p>Buffalo Niagara International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Long Island/Islip</p>
                                </td>
                                <td>
                                    <p>Long Island MacArthur Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>New York City</p>
                                </td>
                                <td>
                                    <p>LaGuardia Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rochester, NY</p>
                                </td>
                                <td>
                                    <p>Greater Rochester International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>North Carolina</p>
                                </td>
                                <td>
                                    <p>Charlotte</p>
                                </td>
                                <td>
                                    <p>Charlotte/Douglas International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Raleigh/Durham</p>
                                </td>
                                <td>
                                    <p>Raleigh-Durham International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Ohio</p>
                                </td>
                                <td>
                                    <p>Cincinnati</p>
                                </td>
                                <td>
                                    <p>Cincinnati/Northern Kentucky International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cleveland</p>
                                </td>
                                <td>
                                    <p>Cleveland Hopkins International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Columbus</p>
                                </td>
                                <td>
                                    <p>John Glenn Columbus International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oklahoma</p>
                                </td>
                                <td>
                                    <p>Oklahoma City</p>
                                </td>
                                <td>
                                    <p>Will Rogers World Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tulsa</p>
                                </td>
                                <td>
                                    <p>Tulsa International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Oregon</p>
                                </td>
                                <td>
                                    <p>Portland, OR</p>
                                </td>
                                <td>
                                    <p>Portland International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pennsylvania</p>
                                </td>
                                <td>
                                    <p>Philadelphia</p>
                                </td>
                                <td>
                                    <p>Philadelphia International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pittsburgh</p>
                                </td>
                                <td>
                                    <p>Pittsburgh International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Puerto Rico</p>
                                </td>
                                <td>
                                    <p>San Juan</p>
                                </td>
                                <td>
                                    <p>Luis Mu&ntilde;oz Mar&iacute;n International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Rhode Island</p>
                                </td>
                                <td>
                                    <p>Providence</p>
                                </td>
                                <td>
                                    <p>T. F. Green Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>South Carolina</p>
                                </td>
                                <td>
                                    <p>Charleston</p>
                                </td>
                                <td>
                                    <p>Charleston International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Greenville/Spartanburg</p>
                                </td>
                                <td>
                                    <p>Greenville-Spartanburg International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Tennessee</p>
                                </td>
                                <td>
                                    <p>Memphis</p>
                                </td>
                                <td>
                                    <p>Memphis International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Nashville</p>
                                </td>
                                <td>
                                    <p>Nashville International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Texas</p>
                                </td>
                                <td>
                                    <p>Amarillo</p>
                                </td>
                                <td>
                                    <p>Rick Husband Amarillo International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Austin</p>
                                </td>
                                <td>
                                    <p>Austin-Bergstrom International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Corpus Christi</p>
                                </td>
                                <td>
                                    <p>Corpus Christi International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Dallas</p>
                                </td>
                                <td>
                                    <p>Dallas Love Field</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>El Paso</p>
                                </td>
                                <td>
                                    <p>El Paso International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Harlingen/South Padre Island</p>
                                </td>
                                <td>
                                    <p>Valley International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Houston</p>
                                </td>
                                <td>
                                    <p>George Bush Intercontinental Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>William P. Side interest Airport</p>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Lubbock</p>
                                </td>
                                <td>
                                    <p>Lubbock Preston Smith International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Midland/Odessa</p>
                                </td>
                                <td>
                                    <p>Midland International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Antonio</p>
                                </td>
                                <td>
                                    <p>San Antonio International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Utah</p>
                                </td>
                                <td>
                                    <p>Salt Lake City</p>
                                </td>
                                <td>
                                    <p>Salt Lake City International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Virginia</p>
                                </td>
                                <td>
                                    <p>Norfolk</p>
                                </td>
                                <td>
                                    <p>Norfolk International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Richmond</p>
                                </td>
                                <td>
                                    <p>Richmond International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Washington</p>
                                </td>
                                <td>
                                    <p>Seattle/Tacoma</p>
                                </td>
                                <td>
                                    <p>Seattle-Tacoma International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Spokane</p>
                                </td>
                                <td>
                                    <p>Spokane International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Washington, D.C.</p>
                                </td>
                                <td>
                                    <p>Washington, D.C.</p>
                                </td>
                                <td>
                                    <p>Ronald Reagan Washington National Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Washington Dulles International Airport</p>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Wisconsin</p>
                                </td>
                                <td>
                                    <p>Milwaukee</p>
                                </td>
                                <td>
                                    <p>Milwaukee Mitchell International Airport</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="airline-title">Global Destinations</p>
                <p class="secondary-font">Southwest Airlines flies to in excess of 15 global objections, which a specific spotlight on focal and southern America. Global objections incorporate Aruba, the Bahamas, Cayman Islands, Cuba, Mexico, and the Turks and Caicos Islands.</p>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    <p>STATE</p>
                                </th>
                                <th>
                                    <p>CITY</p>
                                </th>
                                <th>
                                    <p>AIRPORT</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>Aruba</p>
                                </td>
                                <td>
                                    <p>Oranjestad</p>
                                </td>
                                <td>
                                    <p>Queen Beatrix International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Bahamas</p>
                                </td>
                                <td>
                                    <p>Nassau</p>
                                </td>
                                <td>
                                    <p>Lynden Pindling International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Belize</p>
                                </td>
                                <td>
                                    <p>Belize City</p>
                                </td>
                                <td>
                                    <p>Philip S. W. Goldson International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cayman Islands</p>
                                </td>
                                <td>
                                    <p>George Town</p>
                                </td>
                                <td>
                                    <p>Owen Roberts International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Costa Rica</p>
                                </td>
                                <td>
                                    <p>Liberia</p>
                                </td>
                                <td>
                                    <p>Daniel Oduber Quir&oacute;s International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Jos&eacute;</p>
                                </td>
                                <td>
                                    <p>Juan Santamar&iacute;a International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cuba</p>
                                </td>
                                <td>
                                    <p>Havana</p>
                                </td>
                                <td>
                                    <p>Jos&eacute; Mart&iacute; International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Dominican Republic</p>
                                </td>
                                <td>
                                    <p>Punta Cana</p>
                                </td>
                                <td>
                                    <p>Punta Cana International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Jamaica</p>
                                </td>
                                <td>
                                    <p>Montego Bay</p>
                                </td>
                                <td>
                                    <p>Sangster International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Mexico</p>
                                </td>
                                <td>
                                    <p>Canc&uacute;n</p>
                                </td>
                                <td>
                                    <p>Canc&uacute;n International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Cozumel</p>
                                </td>
                                <td>
                                    <p>Cozumel International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Puerto Vallarta</p>
                                </td>
                                <td>
                                    <p>Lic. Gustavo D&iacute;az Ordaz International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>San Jos&eacute; del Cabo</p>
                                </td>
                                <td>
                                    <p>Los Cabos International Airport</p>
                                </td>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Turks and Caicos Islands</p>
                                </td>
                                <td>
                                    <p>Providenciales</p>
                                </td>
                                <td>
                                    <p>Providenciales International Airport</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="airline-title">Stuff</p>
                <p>Southwest Airlines decides for stuff are that travelers are allowed to convey two-piece of checked stuff and one piece of lightweight stuff locally available on their flight.</p>

                <p class="airline-title">Portable Baggage</p>
                <p>Southwest Airline baggage prerequisites are that travelers are qualified for one thing of portable stuff per individual. This portable suitcase should not surpass 10 x 16 x 24 inches (25 x 40 x 60cm). Likewise, travelers are permitted to welcome one individual thing with them on the flight, for instance, a little backpack, a satchel, a portfolio, or a PC. This little private thing should not surpass the general components of 18.5 x 8.5 x 13.5 inches (46 x 22 x 34 cm).</p>

                <p class="airline-title">Actually looked at Baggage</p>
                <p>Travelers are permitted two things of checked stuff for nothing. Southwest Airlines checked things weight limit is 50lb (22kg) per piece and its general aspect is62 inches (157 cm) (L x W x H).</p>

                <p class="airline-title">Economy Class</p>
                <p>All seats on Southwest flights are economy as standard; this is the main class on all flights.</p>

                <p class="airline-title">Economy Class Facilities</p>
                <p>Economy class travelers get free in-flight diversion, including movies and network programs. All seating is open-seating, implying that travelers essentially pick their seats once they are on the plane. This tries not to need to hurry to get to registration or pre-select your seat.</p>

                <p class="airline-title">Economy Class Seats</p>
                <p>The seats on the Southwest armada range from 31-33 inch pitch and 17 - 17.8 inches wide with 2 inches lean back and customizable headrests. This is accounted for to be one of the most agreeable economy seats on minimal expense transporters, as the organization has bigger than-normal singes with enhance leg room.</p>
            </div>
        </div>
    </div>
    @include('site.footer')
    <script type="text/javascript">
        var timer2 = "5:01";
        var interval = setInterval(function() {
            var timer = timer2.split(':');
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            seconds = (seconds < 0) ? 59 : seconds;
            seconds = (seconds < 10) ? '0' + seconds : seconds;
            $('.countdown').html(minutes + ':' + seconds);
            if (minutes < 0) clearInterval(interval);
            if ((seconds <= 0) && (minutes <= 0)) clearInterval(interval);
            timer2 = minutes + ':' + seconds;
        }, 1000);
        if (window.matchMedia("(max-width: 768px)").matches) {
            setTimeout(function() {
                document.getElementById("call").click();
            }, 10000);
        }
    </script>