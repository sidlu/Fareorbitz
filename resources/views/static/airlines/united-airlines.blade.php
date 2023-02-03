<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta property="og:title" content="Fareorbitz" />
    <meta property="og:site_name" content="Fareorbitz" />
    <title>Fareorbitz</title>
    <base href="/">
    <meta name="robots" content="noindex,nofollow" />
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
                                    <li class="sm-none notMobile"><a href="tel:+1-888-926-8555" class="text-color-1"><i class="la la-phone mr-1"></i>&nbsp;&nbsp; +1-888-926-8555</a></li>
                                    <li class="sm-none notMobile"><a href="mailto:promotionalfare@fareorbitz.com" class="text-color-1"><i class="la la-envelope mr-1"></i>&nbsp;&nbsp; promotionalfare@fareorbitz.com</a></li>
                                    <li>
                                        <button class="btn-bars sm-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            <i class="la la-align-right"></i>
                                        </button>
                                        <a href="tel:+1-888-473-1644" class="btn-bars bars-sm btn btn-primary btn-sm d-md-none text-white">
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
    @php $page = 'United Airlines'; $logo = 'images/partners/united-airlines.jpg'; @endphp
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
            <a href="tel:+1-888-473-1644" class="call-screen" id="call">
                <div style="padding:20px;">
                    <p class="modal-prgh2 text-uppercase text-dark">Airline Reservations!!</p>
                    <h3 class="ownmodal-title2 text-center orange-text my-2">Un-Published Fares</h3>
                    <p class="modal-prgh2 text-center">Saved For Our Callers</p>
                    <div class="text-center">
                        <img src="{{ asset('images/partners/united-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">United Airlines Reservations </p>
                    <p class="modal-prgh2">New Reservations, Changes, Cancellations & Customer Service </p>
                    <h4 class="ownmodal-title text-primary text-center">No Hold Time </h4>
                    <p class="ownmodal-callicon2"><i class="la la-phone"></i>&nbsp; Call Now!</p>
                    <p class="modal-prgh2 mt-3">Agent Available</p>

                    <div class="countdown"></div>
                </div>
                <div>
                    <p class="ownmodal-tollfree2 bg-call text-white"><i class="la la-phone"></i>+1-888-473-1644</p>
                </div>
            </a>
        </div>
    </div>
    <section class="page-banner-bg">
        <img src="{{ asset('images/airlines/united-airline.jpg') }}" class="img-fluid" alt="united airline" />
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
                            <p class="text-center"><a href="tel:+1-888-473-1644" class="num btn secondary-btn btn-rounded">+1-888-473-1644</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container airline-content">
        <div class="mb-0 mt-3">
            <div class="sidebar-widget">
                <div class="section-heading mb-2">
                    <h2 class="sec__title text-center">United Airlines</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>United Airlines, having its headquarters in Chicago, rules the airline world, being the largest airline in terms of destinations it covers. It is known for offering air services to around 1,000 destinations in 170 countries, with a fleet of about 700 aircraft.</blockquote>
                <p>The airline had eight hubs and was a founding member of Star Alliance, which is the world&rsquo;s largest airline alliance, with 28 member airlines.</p>
                <p class="airline-title text-center">Hubs of United Airlines</p>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 pl-md-5">
                        <ul class="airline_ul">
                            <li>Flights to Los Angeles,</li>
                            <li>Flights to Newark</li>
                            <li>Flights to San Francisco,</li>
                            <li>Flights to Washington Dulles</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Chicago-O&rsquo;Hare</li>
                            <li> Denver flights</li>
                            <li>Flights to Guam</li>
                            <li>Flights to Houston-Intercontinental</li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <p class="airline-title text-center">Book United Airlines Flights with Fareorbitz</p>

                <p class="secondary-font text-center pt-3">United Airlines covers multiple destinations all around the globe, such as Burbank, Austin, Cancun, Berlin, and lots more.</p>
                <p class="secondary-font text-center">Book your flight ticket with the world&rsquo;s largest airline that operates from all its hubs at fareorbitz.com and enjoy a great flying experience.</p>
                <p class="secondary-font text-center pb-3">Most popular domestic routes of United Airlines</p>

                <div class="row pl-md-5">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights from Washington Dulles to Los Angeles</li>
                            <li>Flights from Los Angeles to Washington Dulles</li>
                            <li>From Los Angeles to Denver</li>
                            <li>Flights from Newark</li>
                            <li>Flights from Houston to Los Angeles</li>
                            <li>Flights from Washington Dulles to Denver</li>
                            <li>Flights from Denver to Washington Dulles</li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights from Orlando to Newark</li>
                            <li>Flights to Houston</li>
                            <li>Flights to Los Angeles</li>
                            <li>Flights from Chicago to Houston</li>
                            <li>Flights from Washington Dulles to Denver</li>
                            <li>Flights from Denver to Washington Dulles</li>
                            <li>Flights from Las Angeles to Guam</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title text-center">The most popular international destinations for United Airlines</p>
                <div class="row pl-md-5">
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Brisbane</li>
                            <li>Flights to Melbourne</li>
                            <li>Flights to Sydney</li>
                            <li>Flights to Brussels</li>
                            <li>Flights to Sao Paulo</li>
                            <li>Flights to Calgary</li>
                            <li>Flights to Edmonton</li>
                            <li>Flights to Beijing</li>
                            <li>Flights to Paris</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Berlin</li>
                            <li>Flights to Frankfurt</li>
                            <li>Flights to Munich</li>
                            <li>Flights to Athens</li>
                            <li>Flights to Dublin</li>
                            <li>Flights to Milan</li>
                            <li>Flights to Rome</li>
                            <li>Flights to Amman</li>
                            <li>Flights to Mexico City</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Panama City</li>
                            <li>Flights to Johannesburg</li>
                            <li>Flights to Taipei</li>
                            <li>Flights to Bangkok</li>
                            <li>Flights to Dubai</li>
                            <li>Flights to London</li>
                            <li>Flights to Edinburgh</li>
                            <li>Flights to Barcelona</li>
                            <li>Flights to Seoul</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Classes of Services</p>
                <p class="secondary-font">The airline offers different types of classes of service to passengers on the basis of their trip preferences, such as first class service, business class services, and economy.</p>
                <p class="secondary-font">Customers can pick their class of service from the following:</p>

                <p class="airline-subtitle">United Global First</p>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers are provided with extra-spacious suites. The seats are adorned with ergonomic cushions for extra comfort. The suites are equipped with multiple storage compartments to carry personal items.</li>
                            <li>Amenity kits are provided that include socks, eyeglasses, eye masks, and breath mints.</li>
                            <li>Seats are assembled with a laptop power source and a USB port.</li>
                            <li>The on-demand entertainment system is accommodated with a 15-inch video monitor.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Wi-Fi service was also available on some aircraft.</li>
                            <li>Passengers enjoy services such as hot towels and preferred beverages, along with food from local cuisines.</li>
                            <li>In-flight beverages include tea, coffee, juices, and wine.</li>
                            <li>The maximum baggage allowed per passenger is 32 kg.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">United Business First</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Business class passengers enjoy premium-flat beds with enough space for a laptop, tablet, etc.</li>
                            <li>Seats are accommodated with ergonomic tray tables and seat controls.</li>
                            <li>An amenity kit is included with socks, eye masks, and breath mints.</li>
                            <li>Seats are well-accustomed to power sources and USB ports.</li>
                            <li>A Wi-Fi service is available for purchase.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>On-demand entertainment is included to provide in-flight passengers with popular TV shows and movies.</li>
                            <li>In-flight beverages such as tea, juice, and some premium wines are available.</li>
                            <li>The maximum baggage allowed is 32 kg.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">United First</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Extra spacious seats for great comfort and convenience.</li>
                            <li>Seats are assembled with a new tray table along with a flip-up mobile device holder.</li>
                            <li>Private screening entertainment is provided with complimentary access to selected movies and TV shows.</li>
                            <li>Passengers enjoy DIRECT TV, which provides 100 channels of live television and movies.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Services like in-flight magazines and Wi-Fi.</li>
                            <li>Premium snacks, fresh fruits, and a complete meal service are included in the flight.</li>
                            <li>Complimentary in-flight beverages are also included.</li>
                            <li>Maximum baggage allowed per passenger is 32 kg.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">United Business</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>The seats are quite spacious, with six-way adjustable headrests and an AC power plug.</li>
                            <li>Private screening entertainment is included, which provides main screen and personal device entertainment services.</li>
                            <li>Passengers enjoy 100 live channels of TV shows and movies through DIRECT TV.</li>
                            <li>Auto entertainment options such as pop stations and relaxation mixes are included.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>In-flight magazines and on-demand Wi-Fi are available on selected aircraft.</li>
                            <li>On business class trips, passengers enjoy refreshments, fresh fruits, and beverages such as juices, beer, spirits, and wine.</li>
                            <li>A passenger is allowed to take a baggage of 32 kg with him on the flight.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Economy Class</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers will get blankets and pillows during the flight.</li>
                            <li>Complimentary drinks such as soft drinks, tea, juices, etc. are allowed.</li>
                            <li>Flights lasting more than two hours include a selection of snacks.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Entertainment options include audio selections, Direct TV, and movies.</li>
                            <li>Passengers enjoy in-flight magazines.</li>
                            <li>On flights with duration of more than 3 hours, fresh food is provided.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Unaccompanied Minor Service</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Children aged between 5 and 14 years old and travelling alone can take this service.</li>
                            <li>A fee is applied to use this service.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>This service will include a free snack for the kids.</li>
                            <li>This service is available only on non-stop flights.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Benefits</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Fareorbitz.com offers cheap United Airlines flight airline tickets.</li>
                            <li>Flight booking is easy and the process is less complicated.</li>
                            <li>Enjoy great deals and discounts on flight bookings with United Airlines.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>There will be no charge for ticket cancellations.</li>
                            <li>You are provided with enough space to carry one bag on your flight.</li>
                            <li>Fareoritz.com provides customer service 24 hours a day, seven days a week.</li>
                        </ul>
                    </div>
                </div>
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