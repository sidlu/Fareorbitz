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
    @php $page = 'West Jet'; $logo = 'images/partners/west-jet.jpg'; @endphp
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
                        <img src="{{ asset('images/partners/west-jet.jpg') }}" alt="air-line-img" class="img-fluid">
                    </div>
                    <p class="ownmodal-title2 my-3">West Jet Reservations </p>
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
        <img src="{{ asset('images/airlines/west-jet.jpg') }}" class="img-fluid" alt="west jet" />
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
                    <h2 class="sec__title text-center">West Jet</h2>
                </div>
            </div>
            <div class="sidebar-widget">
                <blockquote>
                    Established in 1996, WestJet is a Canadian airline that operates different types of aircraft for people to travel from one corner of the world to another. The airline takes people to more than 100 destinations. With millions of guests each year, this airline operates over 700 flights daily. It is the second largest Canadian airline that has won several awards over the years. They are also named as Best Airline in Canada. This airline provides different types of services to passengers to help them have a comfortable and safe journey. There are also distinctive classes in the airline that make a passenger’s journey easier.
                </blockquote>
                <p class="airline-title">Booking and cancellation policies</p>
                <p>The airline has certain policies regarding the booking and cancellation of air tickets. You can directly book a ticket from the airline website or app. However, it is advisable to take the help of a travel agent while booking your tickets, especially for international travel.</p>
                <p class="secondary-font">Here are some of the policies related to cancellation to know about:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>If a ticket is cancelled within 24 hours of booking, then the full cost is refunded</li>
                            <li>Tickets cancelled after 24 hours of booking are subject to some deductions</li>
                            <li>The amount after cancellation will be refunded to the original form of payment. In case, you have booked through a travel agent, they will deal with the refund amount</li>
                            <li>At the time of booking, Airport Improvement Fees (AIF) and Passenger Facility Charge (PFC) are charged to the passengers</li>
                            <li>If applicable, GST, QST, or HST are applicable</li>
                            <li>Travel Protection Plan is not refundable</li>
                        </ul>
                    </div>
                </div>

                <p>While booking or cancelling your ticket, there are several things that you need to take care of. Furthermore, the rules and regulations may change depending on your arrival or departure country. Hence, it is important for you to take the help of Fareorbitz to plan your travel in a proper and hassle-free way.</p>

                <p class="airline-title">Travel Destinations</p>

                <p class="secondary-font">There are numerous cities across the world where WestJet has travel routes. So, take a look at the destinations you can explore with this airline.</p>

                <div class="row">
                    <div class="col-md-3">
                        <ul class="airline_ul">
                            <li>Alberta</li>
                            <li>British Columbia</li>
                            <li>Manitoba</li>
                            <li>New Brunswick</li>
                            <li>Newfoundland/Labrador</li>
                            <li>Northwest Territories</li>
                            <li>Nova Scotia</li>
                            <li>Ontario</li>
                            <li>Prince Edward Island</li>
                            <li>Quebec</li>
                            <li>Saskatchewan</li>
                            <li>Yukon</li>
                            <li>Antigua</li>
                            <li>Aruba</li>
                            <li>Bahamas</li>
                            <li>Merida</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="airline_ul">
                            <li>Barbados</li>
                            <li>Belize</li>
                            <li>Bermuda</li>
                            <li>Cayman Islands</li>
                            <li>Costa Rica</li>
                            <li>Cuba</li>
                            <li>Curaçao</li>
                            <li>Dominican Republic</li>
                            <li>Honduras</li>
                            <li>Jamaica</li>
                            <li>Port of Spain</li>
                            <li>Puerto Rico</li>
                            <li>Saint Lucia</li>
                            <li>Saint Maarten / St. Martin</li>
                            <li>Puerto Vallarta</li>
                            <li>Turks and Caicos Islands</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="airline_ul">
                            <li>France</li>
                            <li>Ireland</li>
                            <li>Italy</li>
                            <li>Netherlands</li>
                            <li>Spain</li>
                            <li>United Kingdom</li>
                            <li>Cancun</li>
                            <li>Cozumel</li>
                            <li>Huatulco</li>
                            <li>Ixtapa</li>
                            <li>Loreto</li>
                            <li>Los Cabos</li>
                            <li>Manzanillo</li>
                            <li>Mazatlan</li>
                            <li>Riviera Maya</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="airline_ul">
                            <li>Arizona</li>
                            <li>California</li>
                            <li>Colorado</li>
                            <li>Florida</li>
                            <li>Georgia</li>
                            <li>Hawaiian Islands</li>
                            <li>Illinois</li>
                            <li>Massachusetts</li>
                            <li>Nevada</li>
                            <li>New York</li>
                            <li>Oregon</li>
                            <li>South Carolina</li>
                            <li>Tennessee</li>
                            <li>Texas</li>
                            <li>Washington State</li>
                        </ul>
                    </div>
                </div>

                <p>Can’t see your travel destination on the list? Don’t worry! Get in touch with our experienced team who can help you in finding the best travel plan.</p>

                <p class="airline-title">Travelling with pets</p>
                <p class="secondary-font">WestJet has a service which allows passengers to travel with their pets. There are certain rules and regulations that one needs to remember while travelling with their pet babies. So, what are the things that you need to know about? Have a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Pet services cannot be booked online. You need to contact the airline over a call to get the service. Alternatively, you can have us handle the booking for you</li>
                            <li>The Pet kennel fee is applicable</li>
                            <li>Request space for your pet on the flight within 48 hours of booking your ticket. As there is limited space on the aircraft, making an early reservation will help you secure a space</li>
                            <li>Besides pet, you can also travel with your service dog</li>
                            <li>Working dogs that are specially trained to perform certain tasks are allowed on board. However, if you have a connecting flight, make sure to check the pet travel policies for the particular airline</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Kennel Information</p>
                <p class="secondary-font">What are the things you need to remember about the carrier or kennel of your pet? Have a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Pets travelling on board should be in a carrier that is spacious. They should have enough room to sit, stand, or move naturally</li>
                            <li>If the person sitting near you is allergic to cat dander, then you may be required to move your seat to the rear of the aircraft. This rule is set by Canadian Transportation Agency</li>
                            <li>Birds, cats, and dogs are allowed on board and they can travel with their owners in the cabin</li>
                            <li>Each guest can carry one pet per kennel</li>
                            <li>The carrier should be proper and approved by the airline. It should not be a duffle bag, a gym bag or any kind of non-kennel bag</li>
                            <li>The carrier needs to be properly secured. The animals shouldn’t be able to stick out their heads during travel</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Documents</p>
                <p class="secondary-font">Just like you need certain documents to travel from one place to another, your pet also requires the same. You need to show your pet’s Registered Certificate Identification card at the airport to ensure smooth travel with your pet.</p>

                <p class="airline-subtitle">Restrictions</p>
                <p class="secondary-font">There are certain restrictions that may be in place while travelling with your pets. Take a quick look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Make sure to know about the rules of the arrival country</li>
                            <li>Some breeds of dogs and cats are not allowed to travel either in the cabin or in the hold</li>
                            <li>Travelling with a pet bird: Are you travelling with your pet bird? Then there are some more points that you need to know about.</li>
                            <li>Birds cannot be taken to the Dominican Republic</li>
                            <li>Endangered birds cannot be transported</li>
                            <li>Travelling with birds needs to be arranged in advance</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Other points</p>
                <p class="secondary-font">What are the other things that you need to know about travelling with pets? Take a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>It is better to book a direct flight instead of connecting one to ensure your pet’s comfortable travel</li>
                            <li>Unaccompanied minors are not allowed to travel with a pet</li>
                            <li>Pets younger than eight weeks cannot travel</li>
                            <li>Pets need to stay inside a kennel while travelling in the cabin</li>
                            <li>If pets appear to be unruly, in distress, or aggressive, then they can be denied transportation</li>
                            <li>The responsibility to feed or take care of pets lies with the passenger</li>
                            <li>A certificate from a certified veterinarian is required before travelling with your pet</li>
                            <li>Make sure your pet is fed within four hours before check-in</li>
                            <li>Arrive at the boarding gate at least 40 minutes before your flight</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Unaccompanied Minors</p>
                <p class="secondary-font">There are times when children have to travel alone without their parents or guardians. There are special rules in place that can help your kid travel properly without any hassle. So, what are the things that you need to know about? Let’s take a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Your kid must be above eight years of age to be eligible to travel</li>
                            <li>This service is mandatory for unaccompanied minors between the ages of 8 to 12</li>
                            <li>The service isn’t available for kids with hearing or visual impairments, the kids who need the help of a service dog, or the children who have severe allergies</li>
                            <li>Children who require help in the intake of medication aren't allowed to travel alone</li>
                            <li>Children who cannot communicate verbally are not allowed to travel alone</li>
                            <li>The service isn’t available for international travel</li>
                            <li>This service is not available on connecting flights</li>
                            <li>The child’s date of birth, gender, government-issued identity card, contact details of parents or guardians, etc are required</li>
                            <li>A photocopy of the child’s birth certificate needs to be presented at the airport</li>
                            <li>The people who will drop off and receive the kid should be 18 years old or above</li>
                            <li>You will have to fill out a special form while availing the service</li>
                            <li>Your child can have a carry-on and check-in baggage depending on the travel class</li>
                            <li>You can pack additional snacks, other than flight meals, for your kid. However, make sure that they are the items that are allowed onboard</li>
                            <li>Give an emergency call list to your kid</li>
                            <li>Make sure your kid gets enough rest before travelling</li>
                            <li>Take your kid through the process of travel</li>
                            <li>Teach your kid to ask for the cabin crew’s help whenever required</li>
                            <li>It is important to teach your kid to stay in his or her seat during the flight</li>
                            <li>Your child can get access to activity packs and also in-flight entertainment</li>
                            <li>Reach the airport at least 90 minutes before departure time</li>
                            <li>Remain at the airport until the flight departs</li>
                            <li>Parents should have a copy of the child’s itinerary</li>
                            <li>Place a bag tag inside your kid’s bag</li>
                            <li>Make sure to dress your kid in comfortable clothes which can make their journey easier</li>
                            <li>Don’t forget to pack a change of clothing for your kid</li>
                            <li>Upon arrival, the child will be handed over to the concerned person after checking the proper identification</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Baggage policies</p>
                <p class="secondary-font">While travelling with WestJet, there are certain policies regarding check-in and carry-on luggage that you need to know about. Here are some of the important points to pay attention to.</p>

                <p class="airline-subtitle">Carry-on baggage</p>
                <p class="secondary-font">What are the baggage rules that you need to remember? Take a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>The number or weight of baggage depends on the travel class</li>
                            <li>Each passenger can carry carry-on baggage</li>
                            <li>One personal item is also allowed</li>
                            <li>Carry-on baggage needs to be stored in the overhead bin. The personal item can be placed below the seat in front of you. If you are sitting in an emergency row, you’ll have to store your personal item in the overhead bin</li>
                            <li>Make sure that your bag is not too heavy</li>
                            <li>Bags should be stored in appropriate places</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Check-in baggage</p>
                <p class="secondary-font">What are the things that you need to keep in mind about check-in baggage? Let’s take a look:</p>

                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>A certain number and weight of baggage are allowed as a check-in item. It will, however, depend on your travel class.</li>
                            <li>Medically required wheelchairs are allowed</li>
                            <li>Cremation content will be scanned at the airport</li>
                            <li>Baggage which doesn’t pass the security will not be allowed on the flight</li>
                            <li>Two pieces of pushchair or car seats are allowed for passengers travelling with infants</li>
                            <li>Label your luggage properly. Make sure it has the baggage tag attached</li>
                            <li>Pack your luggage properly and do not overpack</li>
                            <li>Make sure there are no protruding parts in your check-in luggage</li>
                            <li>If you have a connecting flight make sure to check the baggage policies of that airline</li>
                        </ul>
                    </div>
                </div>

                <p>If you have any special items that you want to take onboard or as hand luggage, then you can get in touch with the airline to know more. There are several points that you need to keep in mind. Hence, the best way is to let us take care of all your travel needs, including the type of baggage you can carry while travelling.</p>

                <p class="airline-title">Travel class</p>
                <p>Each flight has its own set of distinctive travel classes. WestJet too offers passengers comfortable and equipped travel classes that help in making their journey better. Want to know the travel classes you can choose from? Take a look:</p>

                <p class="airline-subtitle">Economy</p>
                <p class="secondary-font">The first travel class that you need to know about is the Economy Class. Here are some of its features:</p>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Self-dimming window</li>
                            <li>Generous leg space</li>
                            <li>Comfortable seat</li>
                            <li>Delicious meals and drinks</li>
                            <li>11.6 touchscreen monitors</li>
                            <li>Internet available for a fee</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Hundreds of hours of entertainment options</li>
                            <li>Video games</li>
                            <li>Selected magazines</li>
                            <li>Baby meals</li>
                            <li>Meals for children</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Premium</p>
                <p class="secondary-font">The next travel class on the list is Premium. In this class, you get all the facilities of Economy class with something more. Let’s take a look at the features of the Premium travel class:</p>

                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Exclusive snack</li>
                            <li>Premium beverage</li>
                            <li>Two check-in baggage</li>
                            <li>Reclining seat</li>
                            <li>Elbow room</li>
                            <li>Extra leg space</li>
                            <li>Complimentary bottle of water upon boarding</li>
                            <li>Exclusive cabin with pillow and soft blanket</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Seat dividers for more privacy</li>
                            <li>13.3-inch touch screen seat back monitor</li>
                            <li>Access to movie and music</li>
                            <li>Video games</li>
                            <li>Magazines</li>
                            <li>USB port</li>
                            <li>AC power outlet</li>
                            <li>Internet available for a fee</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Business</p>
                <p class="secondary-font">This is the most luxurious travel class that WestJet has to offer. Filled with incredible facilities, this travel class provides you with the utmost comfort while travelling. So, what are some of its distinctive features? Let’s take a look:</p>

                <div class="row">
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Private pods</li>
                            <li>Lie flat beds</li>
                            <li>Comfortable pillow</li>
                            <li>Soft blanket</li>
                            <li>Generous personal storage space</li>
                            <li>Extra space to work or relax</li>
                            <li>Lounge access</li>
                            <li>Priority check-in</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>Bottle of water and beverage upon boarding</li>
                            <li>Hot meals prepared by world-class chefs</li>
                            <li>Exclusive snacks</li>
                            <li>Special dietary meals on request</li>
                            <li>18.5-inch touch screen monitor</li>
                            <li>Noise-cancelling headphones</li>
                            <li>Two check-in baggage</li>
                            <li>Priority baggage handling</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="airline_ul">
                            <li>USB port</li>
                            <li>Power outlet</li>
                            <li>Hours of movies and music</li>
                            <li>Video Games</li>
                            <li>Magazines</li>
                            <li>Exclusive amenity kit</li>
                            <li>Priority boarding</li>
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