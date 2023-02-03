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
    @php $page = 'Jetblue Airways'; $logo = 'images/partners/jetblue-airlines.jpg'; @endphp
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
                        <img src="{{ asset('images/partners/jetblue-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">Jetblue Airways Reservations </p>
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
        <img src="{{ asset('images/airlines/jetblue-airways.jpg') }}" class="img-fluid" alt="jetblue airline" />
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
                    <h2 class="sec__title text-center">JetBlue Airways</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>JetBlue Airlines is a major American airline that offers low-cost fares and has become the seventh-largest Airline in North America.
                    <p>David Neeleman is the owner of JetBlue, who already has five airlines under him.</p>
                    <p>With headquarters located in Long Island City, New York, the airports are aesthetic, and their onboard products are new and unique.</p>
                    <p>According to a survey, JetBlue Airways has been declared the customer&rsquo;s favourite airline in 2020.</p>
                </blockquote>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>JetBlue Airways Hubs</li>
                            <li>Flights to Boston (BOS)</li>
                            <li>Flights to Los Angeles/Long Beach (LAX)</li>
                            <li>Flights to Fort Lauderdale/Hollywood (FLL)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to New York (JFK)</li>
                            <li>Flights to Orlando (MCO)</li>
                            <li>Flights to San Juan (SJU)</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Book flights with Fareorbitz.com for JetBlue Airways</p>
                <p>Book flight tickets for JetBlue Airways, the second-best airline with low-priced fares and incomparable legroom, free Wi-Fi, free drinks and snacks, and so much more.</p>
                <p>JetBlue Airways flies through 87 destinations such as Aruba, Costa Rica, The Bahamas, Colombia, Jamaica, Mexico, Saint Maarten, Bermuda, Puerto Rico, Tobago, Trinidad Barbados, the Dominican Republic and the United States of America. In addition, they have a wide selection of services and fares.</p>

                <p class="airline-title">Most Popular Domestic Routes within the United States of JetBlue Airways</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Boston to Washington D.C. (BOS to DCA)</li>
                            <li>New York to Orlando (JFK to MCO)</li>
                            <li>New York to Fort Lauderdale (JFK to FLL)</li>
                            <li>New York to Los Angeles (JFK to LAX)</li>
                            <li>Boston to New York (BOS to LGA)</li>
                            <li>Boston to New York (BOS to JFK)</li>
                            <li>New York to Santiago (JFK to STI)</li>
                            <li>New York to Santa Domingo (JFK to SDQ)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>New York to San Juan (JFK to SJU)</li>
                            <li>Boston to Orlando (BOS to MCO)</li>
                            <li>Boston to Fort Lauderdale (BOS to FLL)</li>
                            <li>Fort Lauderdale to New York (FLL to LGA)</li>
                            <li>New York to Miami (JFK to MIA)</li>
                            <li>Orlando to San Juan (MCO to SJU)</li>
                            <li>New York to West Palm Beach (JFK to PBI)</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Most Popular International Destinations of JetBlue Airways</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to Santiago (STI) from New York (JFK).</li>
                            <li>Flights to Santa Domingo (SDQ) from New York (JFK) and San Juan (SJU).</li>
                            <li>Flights to Kingston (KIN) from New York (JFK)</li>
                            <li>Flights to Cancun (CUN) from New York (JFK) and Fort Lauderdale (FLL).</li>
                            <li>Flights to Aruba (AUA) from Boston (BOS) and New York (JFK)</li>
                            <li>Flights to Nassau (NAS) from New York (JFK) and Fort Lauderdale (FLL).</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to Port-au-Prince (PAP) from New York (JFK).</li>
                            <li>Flights to Montega Bay (MBJ) from New York (JFK).</li>
                            <li>Flights to Punta Cana (PUJ) from New York (JFK).</li>
                            <li>Flights to London (LON) through Gatwick and Heathrow.</li>
                            <li>Flights to Newark (EWR)</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Classes of Service</p>
                <p>JetBlue dedicated an array of fare choices so that travellers can pick the fare that suits them the most. However, some basic facilities are common for all classes are &mdash; spacious legroom, free Wi-Fi, free snacks and beverages, live TV and movies to watch.</p>
                <p>Mint is the premium class that offers a beautiful set of amenities on routes like the Caribbean, Latin America and even London. In addition, you receive an exceptional experience with JetBlue airways.</p>
                <p class="secondary-font">The different fare that customers can choose from is as follows:</p>
                <p class="airline-subtitle">Blue Basic &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>There is an advance fee for seat selection.</li>
                            <li>Seats offered in this fare falls in the last boarding group</li>
                            <li>No fee for carry-on bags that are changed or cancelled.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Mosaic members with travellers, including basic blue ticket, Even More, Space seat, U.S. military official, and unaccompanied minors, can bring a carry-on bag.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Seat selection in advance for free</li>
                            <li>General boarding procedure.</li>
                            <li>Carry-on baggage for free (for international flights)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>There is no extra cost for change/cancellation.</li>
                            <li>Far comprises one checked baggage for people travelling from or going to London.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue Ref &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Free seat selection in advance</li>
                            <li>Free check-in baggage.</li>
                            <li>General procedure for boarding.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Free carry-on bag with space permitting.</li>
                            <li>The fares are refundable with no change in fees.</li>
                            <li>Single checked bag for people coming from/going to London.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue Plus &mdash; </p>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Free check-in bag and carry-on bag.</li>
                            <li>Customers can cancel or change tickets for free.</li>
                            <li>The general procedure of boarding.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue Plus Ref &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>There are no fees for changing ticket</li>
                            <li>General boarding procedure.</li>
                            <li>Free carry-on is allowed onboard.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>You get free checked baggage</li>
                            <li>Customers get a full refund for tickets by the airlines.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue Extra &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Customers have to board early than usual</li>
                            <li>Customers are free to cancel or change tickets on the same day for free.</li>
                            <li>Even More Speed</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Carry-on the bag is for free</li>
                            <li>London travellers are offered one checked bag with the ticket.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Blue Extra Ref &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Even more speed feature is available</li>
                            <li>The customer has to board early.</li>
                            <li>One checked bag for travellers of London</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Tickets are refundable with total amounts and no fees for change of tickets.</li>
                            <li>Carry on is free for international flights, granted that they do not fill the upward bag area.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Mint &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>This fare offers Business class service</li>
                            <li>It offers lie-down flat seats for a premium service experience.</li>
                            <li>Two Free check-in bags allowed</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Cancellation on tickets is free.</li>
                            <li>There are no fees on change of tickets</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">Mint Ref &mdash; </p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Mint ref is an Award-winning service also known as business class</li>
                            <li>Lie-flat seats are available.</li>
                            <li>Two check bags are free of charge.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Tickets are refundable, with the total amount refunded.</li>
                            <li>There is no extra cost for changing tickets.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Flight Amenities</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>7&rdquo; Legroom in JetBlue flights is enormous.</li>
                            <li>They serve snacks and drinks for free.</li>
                            <li>There is unlimited Wi-Fi for free.</li>
                            <li>For mint holders, lie-flat seats are additional features for a premium experience.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>There are tons of discounts, assistance and special attention for military members.</li>
                            <li>Various options are available on fares such as Blue basic, Blue Extra and Mint.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Unaccompanied Minor Service</p>
                <p>Unaccompanied Minor service is available at the JetBlue airways. One has to pay $150 as a fee for minors. It automatically is applied at the payment gateway in online payments during ticket bookings. However, unaccompanied minor services are not allowed for children travelling from and to London.</p>
                <p>Up to three minors are allowed to travel unaccompanied on JetBlue Airways. According to airways, children aged 5 to 13 years old are considered unaccompanied minors.</p>
                <p class="airline-title">Benefits</p>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>There is no charge for ticket cancellations. You receive a full refund of the ticket after cancellation.</li>
                            <li>You do not have to pay any fees for changing tickets.</li>
                            <li>You can also change tickets on the same day without any additional costs.</li>
                            <li>JetBlue airways have goodwill among its customers as it dedicates the company to donations volunteering.</li>
                            <li>The check-in bags are free for selective fares, with an additional carry-on bag for free.</li>
                            <li>There is space permitted for carrying on bags below your seats.</li>
                            <li>Customers love the low-fares that they do not hesitate before booking.</li>
                            <li>JetBlue airways have a habit of launching different sales and options on a Tuesday afternoon. Hence, you can buy tickets on a Tuesday.</li>
                            <li>JetBlue Airways has better customer service with comfy seats for customers.</li>
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