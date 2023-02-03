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
    @php $page = 'Delta Airlines'; $logo = 'images/partners/delta-airlines.jpg'; @endphp
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
                        <img src="{{ asset('images/partners/delta-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">Delta Airlines Reservations </p>
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
        <img src="{{ asset('images/airlines/delta-airline.jpg') }}" class="img-fluid" alt="delta airline" />
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
                            <p class="text-center"><a href="tel:+1-888-473-1644" class="num btn secondary-btn btn-rounded">+1-888-473-1644</a> </p>
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
                    <h2 class="sec__title text-center">Delta Airlines</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>Delta Airlines is one of the biggest airlines in the world with its headquarters in ATLANTA.
                    <p>Delta is the founding member of the Star Alliance, the world&rsquo;s largest airline alliance.</p>
                    <p>Purchase Delta Air Lines Flights</p>
                    <p>Delta Air Lines Tickets and Reservations with FAREORBITZ</p>
                </blockquote>


                <p class="airline-title mt-5">Book Your Flight Tickets and Find Amazing Flight Deals</p>
                <p class="airline-subtitle">About</p>
                <p>Delta Air Lines, is a significant American carrier, with its central command and biggest centre at Hartsfield-Jackson Atlanta International Airport in Atlanta, Georgia. As of August 2020, the aircraft works for more than 5,400 flights day to day and serves the north of 200 million travellers each year. The aircraft likewise serves a broad homegrown and global organization that remembers north of 325 objections for in excess of 52 nations and on six mainlands. The American carrier's course network is revolved around an arrangement of centres, a global entryway and key air terminals that it works in Atlanta, Boston, Detroit, London-Heathrow, Los Angeles, and Minneapolis-St. Paul, New York-La Guardia, New York-JFK, Paris-Charles de Gaulle, Salt Lake City, Seattle and Tokyo-Narita.</p>
                <p>Delta Air Lines was one of the four establishing individuals from the SkyTeam carrier coalition and has codeshare concurrences with Air France-KLM, Alitalia, Virgin Atlantic, Virgin Australia and Korean Air. These joint adventures serve north of 1,036 objections in 170 nations. Their local assistance is worked under the brand name Delta Connection.</p>
                <p class="airline-subtitle">Objections</p>
                <p class="secondary-font">Delta offers trips to a few objections across the US, the Americas, Europe, Asia and Oceania. This incorporates to Chicago, Aystubm Dakkasm Fargim Fort Myers, Hartford, Kansas City, Miami, New York City, Portland, Savannah, White Plains, Buenos Aires, Sao Paulo, Toronto, Beijing, San Jose, Paris, London, Mumbai, Milan and some more. Assuming you're hoping to fly inside the US, our manual for homegrown trips inside the USA offers loads of supportive data.</p>
                <p class="airline-title">Destinations Of Delta Airlines With United States </p>
                @php
                $counter = 1;
                @endphp
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>
                                    <p>City</p>
                                </th>
                                <th>
                                    <p>Airport</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Akron</p>
                                </td>
                                <td>
                                    <p>Akron-Canton Regional Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Albany, NY</p>
                                </td>
                                <td>
                                    <p>Albany International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Albuquerque</p>
                                </td>
                                <td>
                                    <p>Albuquerque International Sunport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Allentown</p>
                                </td>
                                <td>
                                    <p>Lehigh Valley International Airport*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Anchorage</p>
                                </td>
                                <td>
                                    <p>Ted Stevens Anchorage International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Appleton</p>
                                </td>
                                <td>
                                    <p>Appleton International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Asheville</p>
                                </td>
                                <td>
                                    <p>Asheville Regional Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Atlanta</p>
                                </td>
                                <td>
                                    <p>Hartsfield-Jackson Atlanta International Airport&dagger;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Augusta</p>
                                </td>
                                <td>
                                    <p>Augusta Regional Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Austin</p>
                                </td>
                                <td>
                                    <p>Austin&ndash;Bergstrom International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Baltimore</p>
                                </td>
                                <td>
                                    <p>Baltimore&ndash;Washington International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Baton Rouge</p>
                                </td>
                                <td>
                                    <p>Baton Rouge Metropolitan Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Billings</p>
                                </td>
                                <td>
                                    <p>Billings Logan International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Birmingham, AL</p>
                                </td>
                                <td>
                                    <p>Birmingham-Shuttlesworth International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Bismarck</p>
                                </td>
                                <td>
                                    <p>Bismarck Municipal Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Boise</p>
                                </td>
                                <td>
                                    <p>Boise Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Boston</p>
                                </td>
                                <td>
                                    <p>Logan International Airport&dagger;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Bozeman</p>
                                </td>
                                <td>
                                    <p>Gallatin Field Airport*</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Bristol, TN</p>
                                </td>
                                <td>
                                    <p>Tri-Cities Regional Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Buffalo</p>
                                </td>
                                <td>
                                    <p>Buffalo Niagara International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Burbank</p>
                                </td>
                                <td>
                                    <p>Hollywood Burbank Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Burlington</p>
                                </td>
                                <td>
                                    <p>Burlington International Airport&Dagger;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Cedar Rapids</p>
                                </td>
                                <td>
                                    <p>The Eastern Iowa Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Charleston</p>
                                </td>
                                <td>
                                    <p>CHS Charleston International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Charleston, WV</p>
                                </td>
                                <td>
                                    <p>Yeager Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Charlotte</p>
                                </td>
                                <td>
                                    <p>Charlotte/Douglas International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Charlottesville</p>
                                </td>
                                <td>
                                    <p>Charlottesville-Albemarle Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Chattanooga</p>
                                </td>
                                <td>
                                    <p>Chattanooga Metropolitan Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter++; }}</td>
                                <td>
                                    <p>Chicago</p>
                                </td>
                                <td>
                                    <p>Chicago Midway International Airport</p>
                                    <p>O'Hare International Airport</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="airline-title">INTERNATIONAL DESTINATIONS OF DELTA AIRLINES</p>
                @php
                $counter2 = 1;
                @endphp
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>{{ $counter2++; }}</th>
                                <th>
                                    <p>COUNTRY</p>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Antigua and Barbuda</p>
                                </td>
                                <td>
                                    <p>St. John's</p>
                                </td>
                                <td>
                                    <p>V. C. Bird International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Argentina</p>
                                </td>
                                <td>
                                    <p>Buenos Aires</p>
                                </td>
                                <td>
                                    <p>Ministro Pistarini International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Australia</p>
                                </td>
                                <td>
                                    <p>Sydney</p>
                                </td>
                                <td>
                                    <p>Sydney Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Bahamas</p>
                                </td>
                                <td>
                                    <p>George Town</p>
                                </td>
                                <td>
                                    <p>Exuma International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Nassau</p>
                                </td>
                                <td></td>
                                <td>
                                    <p>Lynden Pindling International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Belgium</p>
                                </td>
                                <td>
                                    <p>Brussels</p>
                                </td>
                                <td>
                                    <p>Brussels Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Bermuda</p>
                                </td>
                                <td>
                                    <p>Hamilton</p>
                                </td>
                                <td>
                                    <p>L.F. Wade International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Bonaire</p>
                                </td>
                                <td>
                                    <p>Kralendijk</p>
                                </td>
                                <td>
                                    <p>Flamingo International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Brazil</p>
                                </td>
                                <td>
                                    <p>Rio de Janeiro</p>
                                </td>
                                <td>
                                    <p>Rio de Janeiro-Gale&atilde;o International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>S&atilde;o Paulo</p>
                                </td>
                                <td>
                                    <p>S&atilde;o Paulo</p>
                                </td>
                                <td>
                                    <p>S&atilde;o Paulo-Guarulhos International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Canada</p>
                                </td>
                                <td>
                                    <p>Calgary</p>
                                </td>
                                <td>
                                    <p>Calgary International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Edmonton</p>
                                </td>
                                <td colspan="2">
                                    <p>Edmonton International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Toronto</p>
                                </td>
                                <td colspan="2">
                                    <p>Toronto Pearson International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Vancouver</p>
                                </td>
                                <td colspan="2">
                                    <p>Vancouver International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Winnipeg</p>
                                </td>
                                <td colspan="2">
                                    <p>Winnipeg James Armstrong Richardson International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Montr&eacute;al</p>
                                </td>
                                <td colspan="2">
                                    <p>Montr&eacute;al&ndash;Pierre Elliott Trudeau International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Saskatoon</p>
                                </td>
                                <td colspan="2">
                                    <p>Saskatoon John G. Diefenbaker International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Chile</p>
                                </td>
                                <td>
                                    <p>Santiago</p>
                                </td>
                                <td>
                                    <p>Comodoro Arturo Merino Ben&iacute;tez International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>China</p>
                                </td>
                                <td>
                                    <p>Beijing</p>
                                </td>
                                <td>
                                    <p>Beijing Daxing International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Shanghai</p>
                                </td>
                                <td colspan="2">
                                    <p>Shanghai Pudong International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Colombia</p>
                                </td>
                                <td>
                                    <p>Bogot&aacute;</p>
                                </td>
                                <td>
                                    <p>El Dorado International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Cartagena</p>
                                </td>
                                <td colspan="2">
                                    <p>Rafael N&uacute;&ntilde;ez International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>San Jos&eacute;</p>
                                </td>
                                <td colspan="2">
                                    <p>Juan Santamar&iacute;a International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Cuba</p>
                                </td>
                                <td>
                                    <p>Havana</p>
                                </td>
                                <td>
                                    <p>Jose Marti International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Czech Republic</p>
                                </td>
                                <td>
                                    <p>Prague</p>
                                </td>
                                <td>
                                    <p>V&aacute;clav Havel Airport Prague</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Denmark</p>
                                </td>
                                <td>
                                    <p>Copenhagen</p>
                                </td>
                                <td>
                                    <p>Copenhagen Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Santiago de los Caballeros</p>
                                </td>
                                <td colspan="2">
                                    <p>Cibao International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Santo Domingo</p>
                                </td>
                                <td colspan="2">
                                    <p>Las Am&eacute;ricas International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Ecuador</p>
                                </td>
                                <td>
                                    <p>Quito</p>
                                </td>
                                <td>
                                    <p>Mariscal Sucre International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>El Salvador</p>
                                </td>
                                <td>
                                    <p>San Salvador</p>
                                </td>
                                <td>
                                    <p>Monse&ntilde;or &Oacute;scar Arnulfo Romero International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>France</p>
                                </td>
                                <td>
                                    <p>Nice</p>
                                </td>
                                <td>
                                    <p>Nice C&ocirc;te d'Azur Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Paris</p>
                                </td>
                                <td colspan="2">
                                    <p>Charles de Gaulle Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Germany</p>
                                </td>
                                <td>
                                    <p>Berlin</p>
                                </td>
                                <td>
                                    <p>Berlin Tegel Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>D&uuml;sseldorf</p>
                                </td>
                                <td colspan="2">
                                    <p>D&uuml;sseldorf Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Frankfurt</p>
                                </td>
                                <td colspan="2">
                                    <p>Frankfurt Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Hamburg</p>
                                </td>
                                <td colspan="2">
                                    <p>Hamburg Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Munich</p>
                                </td>
                                <td colspan="2">
                                    <p>Munich Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Stuttgart</p>
                                </td>
                                <td colspan="2">
                                    <p>Stuttgart Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Ghana</p>
                                </td>
                                <td>
                                    <p>Accra</p>
                                </td>
                                <td>
                                    <p>Kotoka International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Greece</p>
                                </td>
                                <td>
                                    <p>Athens</p>
                                </td>
                                <td>
                                    <p>Athens International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Grenada</p>
                                </td>
                                <td>
                                    <p>St. George's</p>
                                </td>
                                <td>
                                    <p>Maurice Bishop International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Guatemala</p>
                                </td>
                                <td>
                                    <p>Guatemala City</p>
                                </td>
                                <td>
                                    <p>La Aurora International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Honduras</p>
                                </td>
                                <td>
                                    <p>Roat&aacute;n</p>
                                </td>
                                <td>
                                    <p>Juan Manuel G&aacute;lvez International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>San Pedro Sula</p>
                                </td>
                                <td colspan="2">
                                    <p>Ram&oacute;n Villeda Morales International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Tegucigalpa</p>
                                </td>
                                <td colspan="2">
                                    <p>Toncont&iacute;n International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Iceland</p>
                                </td>
                                <td>
                                    <p>Reykjav&iacute;k</p>
                                </td>
                                <td>
                                    <p>Keflav&iacute;k International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>India</p>
                                </td>
                                <td>
                                    <p>Mumbai</p>
                                </td>
                                <td>
                                    <p>Chhatrapati Shivaji Maharaj International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Ireland</p>
                                </td>
                                <td>
                                    <p>Dublin</p>
                                </td>
                                <td>
                                    <p>Dublin Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Shannon</p>
                                </td>
                                <td colspan="2">
                                    <p>Shannon Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Israel</p>
                                </td>
                                <td>
                                    <p>Tel Aviv</p>
                                </td>
                                <td>
                                    <p>Ben Gurion Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Italy</p>
                                </td>
                                <td>
                                    <p>Milan</p>
                                </td>
                                <td>
                                    <p>Milan&ndash;Malpensa Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Rome</p>
                                </td>
                                <td colspan="2">
                                    <p>Leonardo da Vinci-Fiumicino International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Venice</p>
                                </td>
                                <td colspan="2">
                                    <p>Venice Marco Polo Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Jamaica</p>
                                </td>
                                <td>
                                    <p>Kingston</p>
                                </td>
                                <td>
                                    <p>Norman Manley International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Montego Bay</p>
                                </td>
                                <td colspan="2">
                                    <p>Sangster International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Japan</p>
                                </td>
                                <td>
                                    <p>Nagoya</p>
                                </td>
                                <td>
                                    <p>Chubu Centrair International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Osaka</p>
                                </td>
                                <td colspan="2">
                                    <p>Kansai International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Tokyo</p>
                                </td>
                                <td colspan="2">
                                    <p>Haneda Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Cozumel</p>
                                </td>
                                <td colspan="2">
                                    <p>Cozumel International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Guadalajara</p>
                                </td>
                                <td colspan="2">
                                    <p>Guadalajara International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Ixtapa</p>
                                </td>
                                <td colspan="2">
                                    <p>Ixtapa-Zihuatanejo International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Mazatl&aacute;n</p>
                                </td>
                                <td colspan="2">
                                    <p>General Rafael Buelna International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Mexico City</p>
                                </td>
                                <td colspan="2">
                                    <p>Mexico City International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Monterrey</p>
                                </td>
                                <td colspan="2">
                                    <p>General Mariano Escobedo International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Puerto Vallarta</p>
                                </td>
                                <td colspan="2">
                                    <p>Lic. Gustavo D&iacute;az Ordaz International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>San Jos&eacute; del Cabo</p>
                                </td>
                                <td colspan="2">
                                    <p>Los Cabos International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Netherlands</p>
                                </td>
                                <td>
                                    <p>Amsterdam</p>
                                </td>
                                <td>
                                    <p>Amsterdam Airport Schiphol</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Nicaragua</p>
                                </td>
                                <td>
                                    <p>Managua</p>
                                </td>
                                <td>
                                    <p>Augusto C. Sandino International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Nigeria</p>
                                </td>
                                <td>
                                    <p>Lagos</p>
                                </td>
                                <td>
                                    <p>Murtala Muhammed International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Palau</p>
                                </td>
                                <td>
                                    <p>Koror</p>
                                </td>
                                <td>
                                    <p>Roman Tmetuchl International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Panama</p>
                                </td>
                                <td>
                                    <p>Panama City</p>
                                </td>
                                <td>
                                    <p>Tocumen International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Peru</p>
                                </td>
                                <td>
                                    <p>Lima</p>
                                </td>
                                <td>
                                    <p>Jorge Ch&aacute;vez International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Philippines</p>
                                </td>
                                <td>
                                    <p>Manila</p>
                                </td>
                                <td>
                                    <p>Ninoy Aquino International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Portugal</p>
                                </td>
                                <td>
                                    <p>Lisbon</p>
                                </td>
                                <td>
                                    <p>Lisbon Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Saint Kitts and Nevis</p>
                                </td>
                                <td>
                                    <p>Saint Kitts</p>
                                </td>
                                <td>
                                    <p>Robert L. Bradshaw International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Saint Lucia</p>
                                </td>
                                <td>
                                    <p>Vieux-Fort</p>
                                </td>
                                <td>
                                    <p>Hewanorra International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Senegal</p>
                                </td>
                                <td>
                                    <p>Dakar</p>
                                </td>
                                <td>
                                    <p>Blaise Diagne International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Sint Maarten</p>
                                </td>
                                <td>
                                    <p>Philipsburg</p>
                                </td>
                                <td>
                                    <p>Princess Juliana International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>South Africa</p>
                                </td>
                                <td>
                                    <p>Johannesburg</p>
                                </td>
                                <td>
                                    <p>O. R. Tambo International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>South Korea</p>
                                </td>
                                <td>
                                    <p>Seoul</p>
                                </td>
                                <td>
                                    <p>Incheon International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Spain</p>
                                </td>
                                <td>
                                    <p>Barcelona</p>
                                </td>
                                <td>
                                    <p>Barcelona&ndash;El Prat Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Madrid</p>
                                </td>
                                <td colspan="2">
                                    <p>Adolfo Su&aacute;rez Madrid&ndash;Barajas Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Switzerland</p>
                                </td>
                                <td>
                                    <p>Z&uuml;rich</p>
                                </td>
                                <td>
                                    <p>Z&uuml;rich Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
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
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>U.S. Virgin Islands</p>
                                </td>
                                <td>
                                    <p>Saint Croix</p>
                                </td>
                                <td>
                                    <p>Henry E. Rohlsen International Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Saint Thomas</p>
                                </td>
                                <td colspan="2">
                                    <p>Cyril E. King Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>United Kingdom</p>
                                </td>
                                <td>
                                    <p>Edinburgh</p>
                                </td>
                                <td>
                                    <p>Edinburgh Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Glasgow</p>
                                </td>
                                <td colspan="2">
                                    <p>Glasgow Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>London</p>
                                </td>
                                <td colspan="2">
                                    <p>Gatwick Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>London</p>
                                </td>
                                <td colspan="2">
                                    <p>Heathrow Airport</p>
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $counter2++; }}</td>
                                <td>
                                    <p>Manchester</p>
                                </td>
                                <td colspan="2">
                                    <p>Manchester Airport</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="airline-title">Baggage Allowance</p>
                <p>Delta Air Lines travellers can convey one piece of checked stuff, one piece of lightweight stuff and one individual thing locally available on their flight.</p>

                <p class="airline-title">Portable Baggage</p>
                <p>One piece of portable things and one little private thing are allowed per traveller. Portable things for flights should not surpass complete components of 45 direct inches (115cm). There are no weight limitations on portable stuff on the greater part of the courses with the exception of objections like Singapore (7kg), Beijing (10kg) and Shanghai (10kg).</p>

                <p class="airline-title">Really looked at Baggage</p>
                <p>Checked stuff recompense will change contingent upon the ticket bought however the stuff size should not surpass the greatest elements of 62in (157cm) for all travellers. Be that as it may, the checked stuff should not weigh over 50lbs (23kg) for Basic Economy, Main Cabin and Delta Comfort travellers. Five stars, Delta Premium Select and Delta One travellers&rsquo; checked things should not weigh over 70lbs (32kg).</p>

                <p class="airline-title">Instrument Policy</p>
                <p>The carrier will permit instruments that fit in their above receptacle as lightweight gear. Bigger instruments should be taken as really looked at things. Figure out more about their instrument strategy.</p>

                <p class="airline-title">Economy Class</p>
                <p>On Delta Air Lines flights, Economy Class differs on the sort of seat you have bought, if it's not too much trouble, check with our client support group in the event that you are uncertain.</p>

                <p class="airline-title">Economy Class offices</p>
                <p>Conveniences remembered for Basic Economy Class is a determination of snacks, for example, chocolate, pretzels and peanuts and non-cocktails like tea, juices and Starbucks Coffee. Cocktails are not served on flight travels under 250 miles. Wi-Fi is accessible to purchase at a little charge on may flights and you will get free admittance to in-flight informing. Delta Studio is accessible with a wide scope of shows, motion pictures and diversion. Portable suitcase is allowed yet might be checked at the boarding entryway because of above storage space being restricted. Ticket discounts and changes are not accessible in this class.</p>

                <p class="airline-title">How are Economy Class seats?</p>
                <p>Relegated seats are free after registration. On the off chance that a seat number isn't shown on your ticket, then, at that point, your seat will be doled out at the loading up door, prior to loading up the aeroplane. Your ticket will rather show, "Seat Assigned at Gate".</p>

                <p>From April 2019, the aircraft will explore different avenues regarding lessening the lean back on its A320 economy seats to 3.5 inches, as opposed to 5.5. The point is to keep flyers from inclining their seats into the neighbour. The A320's cosmetics 7% of Delta's armada and are normally utilized for short and medium-pull flights.</p>

                <p class="airline-title">Premium Economy Class</p>
                <p>Locally available Delta Air Lines flights, Premium Economy comes in two tolls; Main Cabin and Delta Comfort+. In the fundamental lodge, travellers will get select premium conveniences at a much lower cost, like diversion, further developed help, and the capacity to choose a seat for their flight.</p>

                <p class="airline-title">Premium Economy Class Facilities</p>
                <p>Travellers in Comfort+ will get top-notch dinners and snacks on their flights, improved from the standard served in the principal lodge. They will likewise get free need boarding.</p>

                <p class="airline-title">Premium Economy Seats</p>
                <p>Delta Comfort+ seats are bigger than those in the principal lodge, with improved and expanded measures of legroom. Seats in the top-notch economy remember for seat power, an individual diversion screen and convenience packs to assist aid with better dozing.</p>

                <p class="airline-title">Business Class</p>
                <p>On Delta Air Lines flights, Business Class travellers get the best in-flight experience conceivable with ideal feasting, amusement and client support on their flights. Find Business Class reservations by composing your ideal objective into the hunt bar above.</p>

                <p class="airline-title">Business Class Facilities</p>
                <p>The connoisseur dinners on offer on your Business Class flight are organized by gourmet experts so you can partake in a flavourful feast up in the air. Travellers can likewise look over a great scope of free brews, wines and spirits. Business Class travellers with Delta don't need to stress over spending a second exhausted ready for Delta Studio's in-flight diversion and commotion dropping headsets.</p>

                <p class="airline-title">How are Business Class seats?</p>
                <p>Business Class travellers appreciate 180-degree level beds set with direct passageway access on most flights. Westin Heavenly In-Flight bedding implies travellers will have the most extreme solace locally available on their flight. Travellers can likewise effectively change their seats for work, play or unwinding. Never run out of battery before you arrive at your objective with power attachments incorporated into your bedside table. Special skincare items and convenience units mean you'll show up renewed and prepared to head the street at your objective.</p>

                <p class="airline-title">Top-notch</p>
                <p>Top of the line travellers will appreciate customized administration at the air terminal and all through the span of the flight. Travellers are dealt with, permitting them to loosen up in solace or concentration and increment their efficiency for work. Travellers in first will have their very own airline steward, need registration, security and boarding and an express assortment of really looked at stuff. There are 3 unique five-star tickets; First Class is accessible on homegrown and chosen global flights, Delta Premium Select is accessible on chosen long stretch worldwide flights and Delta One is accessible on long stretch worldwide, and chose homegrown flights.</p>

                <p class="airline-title">What does First Class Include?</p>
                <p>Seats in five star are premium, with something like half more space than a seat in the principal lodge, ascending to a level bed in Delta One. Travellers will get a convenience pack, assisting you with remaining invigorated and ready for better rest and unwind during your flight. Premium high-end food suppers are served on premium plates, with free cocktails whenever wanted. Diversion is given on greater individual screens, with in-seat power charging focuses would it be advisable for you to wish to charge your own gadgets.</p>

                <p class="airline-title">Does First Class Have a First Class Lounge?</p>
                <p>Delta Sky Club is accessible to travellers going in five stars. It gives the best insight to hanging tight for your trip at the air terminal, with a loosening up climate and solace seats. WiFi and charging focuses are free, and new and good food and premium beverages are accessible. The menu for your chosen Delta Sky Club parlour can be seen on the web.</p>

                <p class="airline-title">Food</p>
                <p class="airline-subtitle">Feast Options</p>
                <p>The carrier offers a wide scope of food choices on its flights, from snacks of Biscoff bread rolls to 3-course dinners. Travellers in Basic Economy and Main lodge are given free tidbits and can buy supper things from the Flight Fuel menu, for trips more than 900 miles. Travellers in top-notch are given free food on flights, from premium bites on short flights, lighter suppers on medium flights and full dinner administration on longer flights. Travellers flying in First class are given premium occasional and provincial menus.</p>

                <p class="airline-subtitle">Exceptional Dietary Requirements</p>
                <p>The carrier can offer an assortment of suppers to suit unique dietary necessities. This should be finished by calling or booking on the web in MyTrips, no less than 24 hours prior to flying. Coming up next are the suppers accessible:</p>

                <p class="airline-subtitle">Drinks and Alcohol</p>
                <p>All travellers are given free sodas. Espresso, tea, wine and water are given on all long stretch flights. For trips north of 250 miles will have Starbucks, lager, wine and spirits locally available however travellers should be 21 or over to drink liquor installed.</p>

                <p class="airline-subtitle">In-flight Entertainment</p>
                <p>With Delta's brilliant in-flight theatre setup, you won't see the time elapsing during your excursion. Browse a scope of TV shows, motion pictures, tunes and meetings and pause for a minute or two and partake in your flight. To upgrade your in-flight amusement, the aircraft suggests downloading the Gogo Entertainment application before your flight.</p>

                <p class="airline-subtitle">Television</p>
                <p>As well as famous motion pictures, the highest point of the reach in-flight diversion administration offers travel narratives, news communications, sitcoms, shows and way of life programs in its in-flight theatre setup. Peruse famous sitcoms as well as grant-winning TV dramatizations.</p>


                <p class="airline-title">Hubs of Delta Airlines</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to <a href="https://en.wikipedia.org/wiki/O%27Hare_International_Airport">Atlanta</a></li>
                            <li>Flights to JFK NewYork</li>
                            <li>Flights to Los Angeles</li>
                            <li>Flights to Detroit</li>
                            <li>Flights to New York&ndash;LaGuardia</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to Salt Lake City</li>
                            <li>Flights to Seattle/Tacoma</li>
                            <li>Flights to Boston</li>
                            <li>Flights to Minneapolis/St. Paul</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Most Popular Domestic Routes of Delta Airlines</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Washington Dulles to Los Angeles (IAD to LAX)</li>
                            <li>Los Angeles to Washington Dulles (LAX to IAD)</li>
                            <li>Chicago to Los Angeles (ORD to LAX)</li>
                            <li>Los Angeles to Chicago (LAX to ORD)</li>
                            <li>Denver to Los Angeles (DEN to LAX)</li>
                            <li>Los Angeles to Denver (LAX to DEN)</li>
                            <li><a href="#">Newark to Orlando (EWR to ORL)</a></li>
                            <li><a href="#">Orlando to Newark (ORL to EWR)</a></li>
                            <li><a href="#">Newark to Houston (EWR to HOU)</a></li>
                            <li><a href="#">Houston to Newark (HOU to EWR)</a></li>
                            <li><a href="#">Los Angeles to Houston (LAX to HOU)</a></li>
                            <li><a href="#">Houston to Los Angeles (HOU to LAX)</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li><a href="#">Chicago to Houston (CHI to HOU)</a></li>
                            <li><a href="#">Houston to Chicago (HOU to CHI)</a></li>
                            <li>Washington Dulles to Denver (IAD to DEN)</li>
                            <li>Denver to Washington Dulles (DEN to IAD)</li>
                            <li>Las Angeles to Guam (LAX to GUM)</li>
                            <li>Guam to Los Angeles (GUM to LAX)</li>
                            <li>Boston to Chicago (BOS to ORD)</li>
                            <li>Chicago to Boston (ORD to BOS)</li>
                            <li>Boston to Houston (BOS to HOU)</li>
                            <li>Houston to Boston (HOU to BOS)</li>
                            <li>Chicago to San Francisco (ORD to SFO)</li>
                            <li>San Francisco to Chicago (SFO to ORD)</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Most Popular International Destinations of Delta </p>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Brisbane</li>
                            <li>Flights to Melbourne</li>
                            <li>Flights to Sydney</li>
                            <li>Flights to Brussels</li>
                            <li>Flights to Sao Paulo</li>
                            <li>Flights to Rio de Janerio</li>
                            <li>Flights to Calgary</li>
                            <li>Flights to Edmonton</li>
                            <li>Flights to Montreal</li>
                            <li>Flights to Ottawa</li>
                            <li>Flights to Toronto</li>
                            <li>Flights to Vancouver</li>
                            <li>Flights to Santiago</li>
                            <li>Flights to Beijing</li>
                            <li>Flights to Shanghai</li>
                            <li>Flights to Bogota</li>
                            <li>Flights to Prague</li>
                            <li>Flights to Quito</li>
                            <li>Flights to San Salvador</li>
                            <li>Flights to Paris</li>
                            <li>Flights to Berlin</li>
                            <li>Flights to Frankfurt</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Munich</li>
                            <li>Flights to Athens</li>
                            <li>Flights to San Pedro Sula</li>
                            <li>Flights to Tegucigalpa</li>
                            <li>Flights to Reykjavik</li>
                            <li>Flights to Delhi</li>
                            <li>Flights to Chennai</li>
                            <li>Flights to Mumbai</li>
                            <li>Flights to Dublin</li>
                            <li>Flights to Shannon</li>
                            <li>Flights to Tel Aviv</li>
                            <li>Flights to Milan</li>
                            <li>Flights to Rome</li>
                            <li>Flights to Venice</li>
                            <li>Flights to Montego Bay</li>
                            <li>Flights to Tokyo</li>
                            <li>Flights to Amman</li>
                            <li>Flights to Mexico City</li>
                            <li>Flights to Guadalajara</li>
                            <li>Flights to Amsterdam</li>
                            <li>Flights to Auckland</li>
                            <li>Flights to Lagos</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Flights to Oslo</li>
                            <li>Flights to Panama City</li>
                            <li>Flights to Lima</li>
                            <li>Flights to Manila</li>
                            <li>Flights to Lisbon</li>
                            <li>Flights to Doha</li>
                            <li>Flights to Moscow</li>
                            <li>Flights to Singapore</li>
                            <li>Flights to Cape Town</li>
                            <li>Flights to Johannesburg</li>
                            <li>Flights to Seoul</li>
                            <li>Flights to Barcelona</li>
                            <li>Flights to Madrid</li>
                            <li>Flights to Geneva</li>
                            <li>Flights to Zurich</li>
                            <li>Flights to Taipei</li>
                            <li>Flights to Bangkok</li>
                            <li>Flights to Istanbul</li>
                            <li>Flights to Dubai</li>
                            <li>Flights to Edinburgh</li>
                            <li>Flights to London</li>
                            <li>Flights to Ho Chi Minh City</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Unaccompanied Minor Services </p>

                <p>Delta Airlines offer unaccompanied minor services for the young flyers traveling alone.</p>
                <p>This service is required for children who are 5-14 years old and are travelling without a parent or guardian or someone who is at least 18 years old.&nbsp;</p>

                <p class="airline-title">There are few guidelines for unaccompanied minors for their safety: -</p>
                <ul class="airline_ul">
                    <li>Unaccompanied minors can only travel on nonstop Delta or Delta Express<sup>&reg;</sup>&nbsp;flights. They can&rsquo;t use our unaccompanied minor service on codeshare flights and other flights operated by our partner airlines.</li>
                    <li>Delta does not offer unaccompanied minor service connecting to or from other airlines' flights.</li>
                    <li>Children younger than 5 can&rsquo;t travel as unaccompanied minors, even if they&rsquo;re flying with an older unaccompanied child.</li>
                    <li>Young adults ages 15-17 can travel alone on any United- or Delta Express-operated flight, or they can choose to opt into our unaccompanied minor service.</li>
                    <li>It costs $150 each way for children travelling using the unaccompanied minor service.</li>
                </ul>
                <p class="airline-subtitle">Call +1-888-926-8555 To Save On Delta Airlines Flights</p>
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