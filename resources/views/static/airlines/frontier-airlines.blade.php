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
@php $page = 'Frontier Airlines'; $logo = 'images/partners/frontier-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/frontier-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Frontier Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/frontier-airline.jpg') }}" class="img-fluid" alt="frontier airline" />
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
                <h2 class="sec__title text-center">Frontier Airlines - connecting more Americans to the world.</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-3">Frontier Airlines is an airline with a focus on connecting more Americans to the world. The company was founded in 1996 by Barry Biffle, and it’s currently headquartered in Denver.</p>
                <p>The company offers flights from Denver International Airport to 37 destinations across the United States, Mexico and Canada.</p>
            </blockquote>

            <p class="mb-3">Frontier Airlines focuses on connecting passengers who are traveling for business or pleasure, and their fleet includes Boeing 737s and Airbus A319s.</p>
            <p class="mb-3">Frontier Airlines is one of the largest carriers in the Denver area, with an annual passenger count of nearly 5 million people.</p>
            <p class="mb-3">Frontier Airlines is an American airline headquartered in Denver, Colorado. It operates primarily from its hub at Denver International Airport (DEN) and a focus city at McCarran International Airport (LAS). The airline began operations in May of 1996, using Saab 340 turboprop aircraft. In its early years, Frontier Airlines was mostly known for its low fares and also for one of its first major accidents, which took place on June 1st 2000 when a Frontier Airbus A320 overshot the runway at Denver International Airport.</p>
            <p class="mb-3">In 2012 Frontier Airlines announced that it would begin offering Wi-Fi service to passengers on all flights in the US and Canada. The service was rolled out on select Boeing 737-800 aircraft equipped with the latest generation Gogo Inflight Internet system. In addition to offering domestic flights over United States, Frontier Airlines also offers international flights to several destinations including Mexico City (MEX), Orlando (MCO), Tampa Bay (TPA), San Diego (SAN), Maui (OGG), Los Angeles (LAX), Portland Oregon (PDX) and Seattle Washington (SEA).</p>
            <p class="mb-3">In addition to offering Wi-Fi service, Frontier Airlines also offers a variety of amenities on board including DirecTV and personal entertainment systems. This allows passengers to enjoy their favourite television shows or music while flying across the United States or internationally. The airline also provides ancillary services, including transportation to and from the airport, in-flight catering and baggage handling. Frontier Airlines was established in 1994 by veteran airline executives Jim French and Jeff Potter. The company has since grown into one of the largest airlines in the US with more than 1200 employees.</p>
            <p class="mb-3">The airline offers service to more than 80 destinations throughout the United States and Canada. Frontier Airlines also provides flights to several international destinations including Mexico, Jamaica, Costa Rica and the Dominican Republic. The airline operates over 300 flights daily and is currently ranked as one of the top ten largest airlines in the United States. Frontier Airlines serves approximately 65 million passengers each year. In addition to providing scheduled service, the company also offers charter flights through its affiliate company, Lynx Aviation.</p>
            <p class="mb-3">Frontier Airlines offers a variety of services for its customers, including baggage handling and in-flight catering. The airline also provides transportation to and from the airport as well as DirecTV service on board.</p>
            <p class="mb-3">In addition to its commercial services, the airline has a non-profit arm called Frontier FlyAway that provides free travel to underprivileged children who need medical care in major cities across the country. The airline also offers a variety of employee benefits, including 401k matching and discounted travel for spouses and dependents. The company’s fleet consists of Airbus and Boeing aircraft and offers single-class service on all flights. Frontier Airlines partners with several major airlines, including United Airlines, American Airlines, Delta Air Lines and Southwest Airlines. The airline provides frequent flyer miles for its credit card holders and sells an array of travel-related goods through its website. Frontier Airlines is based in Denver, Colorado, with hubs in Milwaukee, Phoenix and Orlando.</p>
            <p class="mb-3">Frontier Airlines is a subsidiary of Republic Airways Holdings Inc., which also owns Chautauqua Airlines, Piedmont Airlines and Shuttle America.</p>

            <p class="airline-subtitle">The airline’s frequent flyer program is called EarlyReturns. The company offers a number of credit cards, including:</p>
            <ul class="airline_ul">
                <li>Frontier Airlines World MasterCard®</li>
                <li>Frontier Airlines Rapid Rewards Visa Signature Card</li>
                <li>Frontier Miles Credit Card from Harris Bank</li>
            </ul>

            <p class="mb-3">AARP Credit Card from Frontier Airlines. Frontier Airlines has a number of partnerships with other airlines, including: Air Canada (Transborder Flights) Alaska Airlines (Transborder Flights) Delta Connection (Transborder Flights) United Express (Transborder Flights), Alaska Airlines (SkyMiles) American Airlines (AAdvantage) British Airways Executive Club (Avios) Delta Air Lines SkyMiles.</p>
            <p class="mb-3">The Frontier Airlines World MasterCard® is a rewards credit card that offers 5,000 bonus miles after your first purchase and an additional 10,000 bonus miles when you spend $500 in purchases on the card within the first three months of opening an account. You can earn 2 miles per $1 spent on eligible purchases made directly with Frontier and 1 mile per $1 spent on all other purchases. You can redeem miles for travel on Frontier or other airlines, as well as special offers, merchandise and experiences. The card comes with an annual fee of $69.</p>
            <p class="mb-3">The Barclaycard Arrival™ World MasterCard® is a travel rewards card that offers 2X miles on every purchase, every day. Earn 10,000 bonus miles after spending $1,000 in purchases on the card within 90 days of account opening. You can redeem miles for travel statement credits or get an additional 25% value when you redeem for travel through the Barclaycard Travel Center.</p>
            <p class="mb-3">The United MileagePlus® Explorer Card is a rewards credit card that offers 50,000 bonus miles after your first purchase and an additional 5,000 bonus miles when you spend $1,000 in purchases on the card within the first three months of opening an account. You can earn 2 miles per $1 spent on eligible purchases made directly with United Airlines and 1 mile per $1 spent on all other purchases.</p>
            <p>The United MileagePlus® Explorer Card also comes with a slew of other benefits. These include travel protection, auto rental collision damage waiver and roadside assistance. You can redeem your miles for award flights or hotel stays, which is a great way to get more value out of your points.</p>
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