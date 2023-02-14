@include('site.header')
@php $page = 'Korean Air'; $logo = 'images/partners/korean-air.jpg'; @endphp
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
        <a href="tel:+1-888-926-8555" class="call-screen" id="call">
            <div style="padding:20px;">
                <p class="modal-prgh2 text-uppercase text-dark">Airline Reservations!!</p>
                <h3 class="ownmodal-title2 text-center orange-text my-2">Un-Published Fares</h3>
                <p class="modal-prgh2 text-center">Saved For Our Callers</p>
                <div class="text-center">
                    <img src="{{ asset('images/partners/korean-air.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Korean Air Reservations </p>
                <p class="modal-prgh2">New Reservations, Changes, Cancellations & Customer Service </p>
                <h4 class="ownmodal-title text-primary text-center">No Hold Time </h4>
                <p class="ownmodal-callicon2"><i class="la la-phone"></i>&nbsp; Call Now!</p>
                <p class="modal-prgh2 mt-3">Agent Available</p>

                <div class="countdown"></div>
            </div>
            <div>
                <p class="ownmodal-tollfree2 bg-call text-white"><i class="la la-phone"></i>+1-888-926-8555</p>
            </div>
        </a>
    </div>
</div>
<section class="page-banner-bg">
    <img src="{{ asset('images/airlines/korean-air.jpg') }}" class="img-fluid" alt="korean air" />
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
                        <p class="text-center"><a href="tel:+1-888-926-8555" class="num btn secondary-btn btn-rounded">+1-888-926-8555</a> </p>
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
                <h2 class="sec__title text-center">Korean Air</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Korean Air started as a small airline in 1969 that only catered to just a few places in Asia. However, soon this flag carrier of South Korea made its mark in the aviation industry and emerged as one of the respected leaders. This airline has well-connected routes across the world. Furthermore, it provides the passengers with the best kind of service along with a comfortable journey. Besides passenger service, this airline also offers cargo services.
            </blockquote>
            <p class="airline-title">Booking and cancellation</p>
            <p class="secondary-font">Every airline has its own set of rules and regulations when it comes to booking and cancellation of tickets. The refund amount depends on your travel class and ticket type. Here is a quick look at some of the aspects to know about these services:</p>

            <p class="airline-subtitle">Full claim</p>
            <p class="secondary-font">There are certain situations where you can cancel your ticket and claims a full refund:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>If the ticket is cancelled 91 days before the departure date</li>
                        <li>If the airline cancels your flight for some reason</li>
                        <li>If the ticket is cancelled on the same day when it was purchased</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Process of cancellation</p>
            <p class="secondary-font">How can you cancel your ticket from the official website of Korean Air? Here is a quick look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Visit the homepage</li>
                        <li>Select Find trips</li>
                        <li>Once you are redirected to a new page, enter your booking number to retrieve the booking</li>
                        <li>Once the ticket shows, click the cancel button</li>
                    </ul>
                </div>
            </div>

            <p>There are various other aspects of these features that may often leave a passenger confused. That is why we are here. We make sure to present you with a customised travel plan. Also, we take care of ticket cancellation in case there is a delay or you have changed your travel plans.</p>

            <p class="airline-title">Unaccompanied Minor</p>
            <p class="secondary-font">There are times when parents couldn't accompany their kids during their air travel. For those situations, there is a special service offered by the airlines that helps children of a certain age to travel all by themselves without an adult. Are you thinking of booking the service for your kid? Then, here are some points that you should know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Children between the ages of 5 to 12 need this service for domestic travel</li>
                        <li>Children between the ages of 5 to 11 need this service while travelling alone internationally</li>
                        <li>This service can also be availed if the accompanying adult is travelling in a different class than the kid</li>
                        <li>The service is optional for children aged between 12 to 16 years</li>
                        <li>If you have a connecting flight, Korean Air won’t be able to provide the service</li>
                        <li>Dedicated staff will take care of your kid right from arrival at the airport to departure at the destination</li>
                        <li>The cabin crew will make your kid’s journey as comfortable as possible while on board</li>
                        <li>Make sure to confirm your service once more at least 24 hours before departure</li>
                        <li>Provide proper identity and contact information of parent or guardian at both arrival and departure</li>
                        <li>The service may change depending on the rules and regulations of the country you are flying from</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">How to prepare your kids</p>
            <p class="secondary-font">Here are some tips that can help in making your kid's journey better.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Explain the entire journey process to the kid</li>
                        <li>Make sure that the kid has all the documents with him or her before boarding the plane</li>
                        <li>Ensure that your kid is well-rested</li>
                        <li>Teach your kid to stay in his or her designated seat during travel</li>
                        <li>Make sure to teach your kid to ask for the cabin crew's help whenever required</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">Pet parents often miss their pet babies while going on vacation. However, sometimes your pet friend can accompany you. Korean Air also has special guidelines in place to let passengers know more about the different aspects related to travelling with pets.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Pets permitted on board</li>
                        <li>Only some breeds of cats dogs and pet birds that are at least 8 weeks old or above are allowed in the cabin</li>
                        <li>Animals like ferrets, turtles, snakes, chickens, rabbits, and pigs are not allowed either on board are in the hold</li>
                        <li>Foul-smelling or unhealthy animals can be denied travel</li>
                        <li>Pet carriers should be spacious and leakage-proof. Also, they should be properly secured</li>
                        <li>Fierce dogs are not allowed on the flight</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Fierce dogs</p>
            <p class="secondary-font">South Korea's agriculture ministry identifies some of the dog breeds as fierce and they are not allowed either in the hold or on board. Here is a quick look at the dog breeds that cannot travel in a Korean Air aircraft.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Tosa and its mixed breeds</li>
                        <li>Pit Bull Terrier and its mixed breeds</li>
                        <li>Rottweiler and its mixed breeds</li>
                        <li>Mastiff and its mixed breeds</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Laika and its mixed breeds</li>
                        <li>Ovtcharka and its mixed breeds</li>
                        <li>Kangal and its mixed breeds</li>
                        <li>Wolf Dog and its mixed breed</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Service animals</p>
            <p class="secondary-font">Besides pets, service animals are also allowed on board. However, presently, only dogs are identified as service animals. Here are some points to remember:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Service animals can accompany their owner on board without a carrier or cage</li>
                        <li>There is no seat assigned to the service dog</li>
                        <li>Service dog owners don’t need to fill pet transportation declaration form</li>
                    </ul>
                </div>
            </div>

            <p>We understand there are different things involved in the process of travelling with pets. Hence, we are here to make your journey easier. We can take care of all the bookings and updates related to your journey with your pet. With us, you don’t have to worry about your travels.</p>

            <p class="airline-title">Travel Class</p>
            <p>Each airline has multiple classes of service that they offer. Korean Air is no different. These travel classes are designed in a way that they offer impeccable services to passengers to ensure that they can travel comfortably. Services offered in each class are different and have a variety of pricing schemes. It means that the passengers can choose a travel class according to their requirements. Here is a quick look at the travel classes of this airline.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">Equipped with affordable luxury features, this travel class has several benefits to offer to passengers. Here is a quick look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Passengers who have purchased tickets have the option to reserve their preferred seat before flying</li>
                        <li>Option for online check-in</li>
                        <li>Free baggage allowance up to a certain amount</li>
                        <li>During winter, coat room service is provided for the passengers. Under the service, a passenger can keep his or her coat in the airport for up to five days if they are travelling to a warmer location. Only one coat per passenger is stored</li>
                        <li>Delicious meal</li>
                        <li>Selected wines</li>
                        <li>In-seat power outlets</li>
                        <li>Special wake-up call where cabin crew will wake you up at a time you requested</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Prestige Class</p>
            <p class="secondary-font">This travel class offers luxurious services to passengers right from their arrival at the airport to their destination. Here are some of the aspects that make this class popular.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Separate and exclusive check-in counter for passengers of this class</li>
                        <li>Priority baggage drop off</li>
                        <li>Priority boarding</li>
                        <li>Access to lounge before travelling</li>
                        <li>Mood lighting for comfortable travel to relieve fatigue</li>
                        <li>Welcome drink before departure. Passengers can choose from alcoholic and non-alcoholic drinks</li>
                        <li>Premium in-flight meals prepared by renowned chefs</li>
                        <li>Amenity kit containing an eye mask, toothbrush, and other essentials</li>
                        <li>Enjoy your time at the signature bar of Korean Air available to the passengers of this class and First Class</li>
                        <li>Premium shower service upon arrival at the destination</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">First Class</p>
            <p class="secondary-font">This travel class offers a redefined service to the passengers. With this travel class, you can fly in luxurious comfort. So, what are the features that make this class distinctive from others? Let’s take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in</li>
                        <li>Priority boarding</li>
                        <li>Priority baggage handling</li>
                        <li>One-on-one service where a staff member of the airline will escort you to the boarding gate</li>
                        <li>If you reach the airport early or have to wait for your connecting flight, you can relax at the exclusive lounge specially designed for people travelling in First Class</li>
                        <li>The on-demand menu at any time prepared by renowned chefs</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Premium wine</li>
                        <li>Amenity kit containing premium quality travel essentials along with a toothbrush, skincare set, and eye mask</li>
                        <li>Premium duvet</li>
                        <li>Mattress pad</li>
                        <li>Lie-flat seat with generous space that ensures privacy</li>
                        <li>Option to take a shower after arrival at the destination</li>
                    </ul>
                </div>
            </div>

            <p>Your baggage allowance, for both the cabin and hold, also depends on the type of class you are selecting for your travel. Confused about the class to choose? We can help you in making a proper decision and help you book the tickets for your trip.</p>

            <p class="airline-title">Travel Destinations</p>
            <p class="secondary-font">Korean Air connects different parts of the world with its wide network of routes. Here is a quick look at the places you can visit with Korean Air:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Brussels</li>
                        <li>Derby</li>
                        <li>San Juan</li>
                        <li>Killeen</li>
                        <li>Mexico City</li>
                        <li>Dubai</li>
                        <li>Harrisburg</li>
                        <li>Mobile</li>
                        <li>Ciudad Guayana</li>
                        <li>Istanbul</li>
                        <li>Copenhagen</li>
                        <li>Las Vegas</li>
                        <li>Alexandria</li>
                        <li>Melbourne</li>
                        <li>Yogyakarta</li>
                        <li>El Paso</li>
                        <li>Hartford</li>
                        <li>Sapporo</li>
                        <li>Beijing</li>
                        <li>Sacramento</li>
                        <li>Tobolsk</li>
                        <li>Yakutsk</li>
                        <li>Detroit</li>
                        <li>London</li>
                        <li>Manzini</li>
                        <li>Osaka</li>
                        <li>Wausau</li>
                        <li>Fayetteville</li>
                        <li>Colombo</li>
                        <li>Tenerife</li>
                        <li>Montreal</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Verona</li>
                        <li>San Jose</li>
                        <li>Seattle</li>
                        <li>Kingston</li>
                        <li>Dallas</li>
                        <li>Johannesburg</li>
                        <li>Doha</li>
                        <li>Rio De Janeiro</li>
                        <li>Sumburgh</li>
                        <li>Los Angeles</li>
                        <li>Eilat</li>
                        <li>Santo Domingo</li>
                        <li>Tampa</li>
                        <li>Castries</li>
                        <li>Chicago</li>
                        <li>Atlanta</li>
                        <li>Nagoya</li>
                        <li>Dakar</li>
                        <li>Cleveland</li>
                        <li>Venice</li>
                        <li>Rome</li>
                        <li>Jacksonville</li>
                        <li>Chengdu</li>
                        <li>San Jose</li>
                        <li>Jakarta</li>
                        <li>Ulaanbaatar</li>
                        <li>Hamburg</li>
                        <li>Zunyi</li>
                        <li>Moscow</li>
                        <li>Washington</li>
                        <li>Frankfurt</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Kyiv</li>
                        <li>Medellin</li>
                        <li>Nanaimo</li>
                        <li>Bangkok</li>
                        <li>Orlando</li>
                        <li>Seoul</li>
                        <li>Maasai Mara</li>
                        <li>Monterrey</li>
                        <li>Houston</li>
                        <li>Victoria</li>
                        <li>Kuala Lumpur</li>
                        <li>Monrovia</li>
                        <li>Minneapolis</li>
                        <li>Windhoek</li>
                        <li>Columbus</li>
                        <li>Nairobi</li>
                        <li>Chignik</li>
                        <li>Moroni</li>
                        <li>Denver</li>
                        <li>Noumea</li>
                        <li>Kansas City</li>
                        <li>Norfolk</li>
                        <li>Glasgow</li>
                        <li>Philadelphia</li>
                        <li>Stockholm</li>
                        <li>Tehran</li>
                        <li>Anchorage</li>
                        <li>Taipei</li>
                        <li>New York</li>
                        <li>Milan</li>
                        <li>Sao Paulo</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>New Orleans</li>
                        <li>San Diego</li>
                        <li>Amman</li>
                        <li>Tokyo</li>
                        <li>Muong Sai</li>
                        <li>Paris</li>
                        <li>Panama City</li>
                        <li>Oslo</li>
                        <li>Fort Lauderdale</li>
                        <li>Toronto</li>
                        <li>Paramaribo</li>
                        <li>Belfast</li>
                        <li>Singapore</li>
                        <li>Shanghai</li>
                        <li>Phoenix</li>
                        <li>Nelspruit</li>
                        <li>Ottawa</li>
                        <li>Fort Myers</li>
                        <li>Grand Canyon</li>
                        <li>Saratov</li>
                        <li>Abu Dhabi</li>
                        <li>Jeki</li>
                        <li>Buenos Aires</li>
                        <li>Dusseldorf</li>
                        <li>Pittsburgh</li>
                        <li>Vancouver</li>
                        <li>Myrtle Beach</li>
                        <li>Cincinnati</li>
                        <li>Belize City</li>
                        <li>Tofino</li>
                        <li>Reykjavik</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">Certain routes are temporarily suspended following the pandemic. However, the airline is working towards resuming them. Also, if you have a specific place in mind, get in touch with our team who can help you with all your travel needs.</p>

            <p class="airline-title">Baggage policies</p>
            <p>Korean Air has certain baggage policies that determine what passengers can carry on board or in the hold. Also, with each class type, a certain limit of free baggage is allowed. Here are some of the interesting points about baggage policies.</p>

            <p class="airline-subtitle">Check-in baggage</p>
            <p class="secondary-font">Take a look at the points to know more about the luggage that you have to check in during your air travel:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Your free baggage limit will be mentioned in your ticket</li>
                        <li>If you have excess weight, you can pre-book the service of extending your baggage allowance</li>
                        <li>If your luggage exceeds the allocated limit, in terms of weight and number, you will have to pay extra at the airport</li>
                        <li>There are certain special items that you can take as check-in luggage. They include sports equipment, musical instruments, and an electric wheelchair</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Hand baggage</p>
            <p class="secondary-font">Besides the check-in luggage, passengers can also carry onboard baggage. So, here are some of the points you need to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>First Class travellers can carry two pieces of hand baggage along with a personal item</li>
                        <li>The other classes can carry one bag and one personal item</li>
                        <li>Personal items include a handbag, a small shoulder bag, a laptop bag, or a briefcase</li>
                        <li>Passengers travelling with kids can carry one stroller or pushchair for their infants onboard</li>
                        <li>Bags need to be stored in the overhead bin</li>
                        <li>The hand baggage can also be stored underneath the seat in front of the passenger. However, passengers sitting in the emergency row have to store their personal items in the overhead bin</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">What are the items that you can carry either in the cabin or in the hold? Are there items that you cannot carry during your air travel? Here is a quick look at completely or partially restricted items.</p>

            <p class="airline-subtitle">Completely restricted</p>
            <p class="secondary-font">You cannot travel with these items. They are not allowed in the aircraft:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flammable materials like lighter fluid, paint or gasoline</li>
                        <li>Pressurised gas containers</li>
                        <li>Weapons</li>
                        <li>Explosives</li>
                        <li>Fire Extinguisher</li>
                        <li>Aerosols (other than cosmetics or toiletries)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Bleach</li>
                        <li>Perm products</li>
                        <li>Electronic devices with lithium batteries</li>
                        <li>Smart Luggage</li>
                        <li>Personal mobility devices unless required for medical purposes</li>
                        <li>Hair straightener with non-removable batteries</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Partly restricted carry-on items</p>
            <p class="secondary-font">These are some of the items that can be carried on board but in limited quantities.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Liquid gels, cosmetics, toothpaste, etc. These items can be carried in 100 ml bottles. Also, the bottles should be stored in a clear bag</li>
                        <li>Medicine for personal use</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>One lighter or matchbox</li>
                        <li>Dry ice</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Other items</p>
            <p class="secondary-font">Here is a quick look at the items that you can carry with you in the cabin but they are not allowed as check-in items.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Fragile items</li>
                        <li>Glassware</li>
                        <li>Perishable documents</li>
                        <li>Valuable documents</li>
                        <li>Jewellery</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Cash</li>
                        <li>Camera</li>
                        <li>Laptop</li>
                        <li>Power Bank</li>
                        <li>Spare lithium batteries</li>
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