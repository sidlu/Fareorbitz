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
                                            <li><a href="https://fareorbitz.indwebdesign.com/" title="Flights">Flights</a></li>
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
    @php $page = 'Spirit Airlines'; $logo = 'images/partners/spirit-airlines.jpg'; @endphp
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
                        <img src="{{ asset('images/partners/spirit-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">Spirit Airlines Reservations </p>
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
        <img src="{{ asset('images/airlines/spirit-airline.jpg') }}" class="img-fluid" alt="spirit airline" />
    </section>
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
                    <h2 class="sec__title text-center">Spirit Airlines - convenient and affordable way to travel</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>
                    <p>Spirit Airlines is the world's largest low-cost carrier, offering a convenient and affordable way for people to travel. Spirit offers flights from more than 600 destinations in over 100 countries. With its fleet of more than 400 planes and locations around the world, Spirit serves more than 22 million customers each year.</p>
                    <p>Spirit Airlines was founded in 1996 by Dave Barger, who began his career with Southwest Airlines before launching his own airline business. He has since been involved with other airlines, including JetBlue Airways and AirTran Airways.</p>
                </blockquote>
                <p class="secondary-font">Spirit Airlines' fleet is made up of Boeing 737NG aircraft that are configured with 236 seats in economy class and 20 business class seats. Each seat offers a direct aisle access to the lavatory, which is located at the back of the plane. The average Spirit flight takes about 75 minutes from check-in to landing in most airports across the country.</p>
                <p class="airline-subtitle">Spirit offers passengers an array of amenities for their trip including:</p>
                <ul class="airline_ul">
                    <li>Free Spirit bag for every one hundred dollars spent on purchases made during the trip;</li>
                    <li>Wi-Fi access on all flights; free checked baggage service;</li>
                    <li>Free snacks and alcohol onboard; priority boarding; and</li>
                    <li>Onboard entertainment options such as pay-per-view movies or television shows available on tablets or laptops provided by Spirit staff members throughout the aircraft cabin.</li>
                </ul>
                <p>Spirit Airlines offers customers a variety of travel options including nonstop flights, direct flights, or connecting flights. Nonstop flights are the most popular option for passengers as they allow them to get from one city to another without having to stop at an additional airport along the way. Direct flights are also popular because they take less time than connecting flights and can save travellers’ money if their final destination is located close enough to their starting point. Passengers can also choose to take connecting flights, which are flights that require a stop at an additional airport along the way. This option is usually more cost-effective for traveller’s who do not live near major airports and cannot afford nonstop or direct flights from their hometowns. Connecting flights are the most common travel option for many travellers’ because they allow them to visit multiple destinations in a single trip. Spirit Airlines offers connecting flights on many of its routes, allowing customers to choose between connecting flights or nonstop options depending on their preferences.</p>
                <p>Spirit Airlines also offers fares for specific routes. These fares are based on when a passenger chooses to travel, as well as the number of days in advance that they book their trip. The earlier a passenger books, the cheaper the fare will be; however, Spirit Airlines does not offer price guarantees for these fares. Spirit Airlines offers several other types of fares. These include “promotional” fares, which are discounted rates that the airline offers for short-duration trips and certain travel dates; “standard” fares, which are discounted rates on flights that are not eligible for promotional fares; and “expert” fares, which are discounted rates for customers who book their tickets through the airline’s website. Spirit Airlines also offers standby ticketing services to travellers who want to fly standby but do not have the flexibility to plan their trip in advance.</p>

                <p class="airline-title">Spirit Standard Product Features</p>
                <ul class="airline_ul">
                    <li>Ultra-low fares</li>
                    <li>Easy online booking and check-in</li>
                    <li>Reliable, on-time service</li>
                    <li>Clean, fuel-efficient airplanes</li>
                    <li>Friendly staff</li>
                    <li>Deluxe leather seating</li>
                    <li>One personal item that fits under the seat</li>
                    <li>Largest ULCC network in the U.S., Latin America and Caribbean</li>
                </ul>

                <p class="mt-3">Spirit Airlines’ fares are subject to change at any time. As of January 2015, the airline offers three types of fares: the “Wanna Get Away” fare, which is Spirit’s lowest-priced ticket; the “Bare Fare,” which provides additional services but is still discounted from full price; and the “Big Front Seat Sale,” which offers customers an extra legroom or seat upgrade for a fee.</p>
                <p class="my-3">The airline also offers a “pay in advance” option, which allows customers to book and pay for their flight at the time of booking. The catch is that they must pay the full price of their ticket, which can be pricey when compared with Spirit’s other fares.</p>
                <p>Spirit Airlines’ fleet consists of Airbus A319, A320 and A321 aircraft. They also have Boeing 737-700s and 737-800s for international flights. Spirit’s website can be accessed from any device, including smartphones and tablets. The site is easy to navigate and has a clean layout that displays information clearly. Passengers can easily find their flight status, book flights or add extras like baggage fees or seat upgrades with just a few clicks.</p>

                <p class="airline-subtitle my-3">Spirit Airlines offers a wide variety of extras, including:</p>
                <ul class="airline_ul">
                    <li>Seat upgrades</li>
                    <li>Baggage fees and</li>
                    <li>Flight-change refunds</li>
                </ul>

                <p>Their basic fare includes one checked bag and one carry-on bag, but additional bags can be added for $35 each. Passengers can also purchase priority boarding for an extra $10 per person or choose to save money by paying for their seats at the airport instead of online.
                    Spirit Airlines has a strong commitment to its customers, offering free 24-hour customer service. Passengers can call or email Spirit Airlines with any questions or concerns about their flights and receive an immediate response. Spirit Airlines’ customer service is one of the best in the industry, offering quick and reliable responses to all questions. Their website also provides a wide variety of information about flights, as well as other travel-related topics like baggage fees and ticket prices. The company is dedicated to providing excellent customer service, and they value their customers’ opinions. Spirit Airlines has an open feedback system that allows travellers’ to leave comments about their experiences with Spirit Airlines, as well as rate the airline on things like punctuality and friendliness of staff members. This feedback helps Spirit Airlines improve their services and make them better for future passengers.
                </p>
                <p class="secondary-font mt-3">Spirit Airlines also has an active social media presence, including Facebook and Twitter accounts. They post updates about new flights and destinations, as well as special deals for their customers. The airline’s Twitter account is very active and they often tweet promotions and giveaways. They are also known for their humorous tweets, which help to keep customers engaged with Spirit Airlines.</p>
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