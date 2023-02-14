@include('site.header')
@php $page = 'Virgin Atlantic'; $logo = 'images/partners/virgin-atlantic.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/virgin-atlantic.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Virgin Atlantic Reservations </p>
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
    <img src="{{ asset('images/airlines/virgin-atlantic.jpg') }}" class="img-fluid" alt="Virgin Atlantic" />
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
    <div class="mb-0">
        <div class="sidebar-widget">
            <div class="section-heading pt-3">
                <h2 class="sec__title text-center">Virgin Atlantic Airways - Serving For Past 50 Years</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>Virgin Atlantic Airways is a British airline that was founded in 1984. It has been known for its fun, friendly atmosphere and excellent service. Its destinations include New York City, Los Angeles and Las Vegas, as well as over 20 other cities across the United States and Europe.</p>
            </blockquote>
            <p class="mb-3">The airline is known for its friendly, fun and relaxed atmosphere, as well as its excellent service. Its flights are often full of British passengers on their way To see family or friends in the States or Europe. The airline flies To over 20 destinations in the United States and Europe. It also offers flights To the Caribbean, including Antigua, Aruba, Barbados, Guadeloupe and Martinique. Virgin Atlantic’s fleet of planes are all Boeing 747-400 aircraft. It also has a fleet of Airbus A340 planes, which are used To fly the airline’s long-haul routes. Virgin Atlantic’s planes are known for their spacious cabins and high quality service. The airline offers complimentary food and drinks on all flights, including champagne or wine with lunch or dinner.</p>
            <p class="mb-3">Virgin Atlantic offers a wide range of fares from economy To business class travel on their fleet of aircraft.</p>
            <p class="mb-3">Virgin Atlantic is a British flag carrier that offers service To more than 20 cities in Europe and the Middle East. Their fleet is comprised of Boeing 747 aircraft, which can seat up To 438 passengers.</p>
            <p class="mb-3">Virgin Atlantic is one of the world's best airlines. We offer three classes of service: Economy, Premium (formerly Premium Economy), and Upper Class - the business class product.</p>
            <p class="mb-3">Virgin Atlantic offers a wide range of fares from economy To business class travel on their fleet of aircraft. Virgin Atlantic is a British flag carrier that offers service To more than 20 cities in Europe and the Middle East. Their fleet is comprised of Boeing 747 aircraft, which can seat up To 438 passengers.</p>
            <p class="mb-3">For over 50 years, Virgin Atlantic has been the largest privately owned carrier in the world. With its fleet of more than 600 aircraft and more than 50 routes, it is one of the most successful airlines in Europe. The airline was founded by Richard Branson in 1970 as a charter carrier for his own Tour operations, but soon expanded inTo scheduled services and grew rapidly as a low-cost carrier. In 1999, Branson sold his share of the airline To Singapore Airlines International Limited (SIA), which now owns 95% of shares.</p>
            <p class="mb-3">Virgin Atlantic Airways is headquartered in Crawley, England. The airline has its main hub at London Heathrow Airport and a secondary hub at Manchester Airport. It operates flights To major cities in Europe, Africa, Asia and the Middle East. Virgin Atlantic Airways flies To destinations such as Amsterdam, Dubai, Johannesburg and Cape Town. The airline has codeshare agreements with several airlines, including Air France, Delta Air Lines and Qatar Airways. Virgin Atlantic Airways has an extensive network of routes within Europe and the Middle East, as well as intercontinental flights To Africa and Asia. Its fleet consists of Airbus A330-200 aircraft.</p>
            <p class="mb-3">The airline has codeshare agreements with several airlines, including Air France and Delta Air Lines. Virgin Atlantic Airways has an extensive network of routes within Europe and the Middle East, as well as intercontinental flights To Africa and Asia. Its fleet consists of Airbus A330-200 aircraft.</p>
            <p class="mb-3">Our economy class flights are comfortable, with large seats and a full-flat bed. Our Premium service features a fully reclining seat that allows you To take a nap during the flight. And our Upper Class product offers access To our Clubhouses and London Heathrow Revivals, which offer amenities like showers and laundry services for your trip home.</p>
            <p class="mb-3">You'll also get Gold membership benefits like extra luggage allowance, no matter which cabin you fly; Gold Reward Seats - turn any seat inTo a Reward Seat for double the usual points price; earn and spend your points with Virgin Red - an airline rewards program offering travel credits, discounts on hotels and car rentals, and more.</p>
            <p class="mb-3">In addition To our Upper Class product, we offer a Premium cabin with fully-reclining seats. The space is designed To make you feel like you’ve got your own private suite on the plane, and includes amenities like a 23-inch HD Touchscreen moniTor with Touch controls for entertainment and connectivity options. We’re also introducing an exciting new feature for Premium cusTomers: the option To turn your seat inTo a Reward Seat for double points. You can earn and spend your Virgin Points on our airline rewards program or use them for other exclusive offers like hotel discounts, gift cards and more.</p>

            <p class="airline-subtitle">The Premium cabin also includes a host of other features and amenities, including:</p>
            <ul class="airline_ul">
                <li>A spacious sTorage area with a large vanity mirror</li>
                <li>A leather headrest with massage function</li>
                <li>A lapTop power outlet -Two personal reading lights with USB ports for charging your devices.</li>
                <li>A reading light and tray table for your convenience.</li>
                <li>Over 1,000 on-demand movies, TV shows and documentaries</li>
                <li>Live TV with over 140 channels</li>
                <li>A range of music selections</li>
            </ul>

            <p class="mb-3">The Premium cabin on Virgin Atlantic’s Boeing 777-300ER aircraft offers you Tons of space, privacy and amenities To make your flight even more comfortable.</p>
            <p class="mb-3">The Premium cabin also includes a host of other features and amenities, including: -A spacious sTorage area with a large vanity mirror -A leather headrest with massage function -Two personal reading lights with USB ports for charging your devices. -A reading light and tray table for your convenience.</p>

            <p class="airline-title">Virgin Atlantic Airways Seat Rules</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Choose Economy Classic for the great value service you know and love, including 23kg baggage allowance, plus hand luggage and free seat selection.</li>
                        <li>If you'd rather speed through the airport using Premium check in desks and priority boarding (To get first dibs on overhead sTorage), Economy Delight offers all this, plus extra legroom on board.</li>
                        <li>Of if you're happy To pack less, choose Economy Light - You'll still get everything you'd expect on a great flight, but at a price you wouldn’t.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Virgin Atlantic Airways Baggage Rules</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can check in at least 1 x 23kg bag* for free unless you're flying Economy Light.</li>
                        <li>Check-in your bags at least 3hours before you fly.</li>
                        <li>It’s always worth packing a few essentials such as medication, valuables, basic clothing and Toiletries inTo your hand luggage just in case the unexpected happens.</li>
                        <li>All tickets include hand baggage (max size 23 x 36 x 56cm or 9 x 14 x 22 inches) in addition To the normal stuff you'd carry with you, like your coat or handbag.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Virgin Atlantic Airways Destinations</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>BosTon (BOS) from London Heathrow (LHR)</li>
                        <li>Miami (MIA) from London Heathrow (LHR)</li>
                        <li>New York (JFK) and Newark (EWR) from London Heathrow (LHR)</li>
                        <li>Orlando (MCO) from London Heathrow (LHR)</li>
                        <li>Atlanta (ATL) from London Heathrow (LHR)</li>
                        <li>WashingTon (IAD) from London Heathrow (LHR)</li>
                        <li>Antigua's V.C. Bird International Airport (ANU) from London Heathrow (LHR)</li>
                        <li>Barbados (BGI) from London Heathrow (LHR)</li>
                        <li>Havana's Jose Marti International Airport (HAV) from London Heathrow (LHR)</li>
                        <li>Grenada's Maurice Bishop International Airport (GND) from London Heathrow (LHR)</li>
                        <li>Montego Bay Sangster International Airport (MBJ) from London Heathrow (LHR)</li>
                        <li>St Lucia Hewanorra International Airport (UVF) from London Gatwick (LGW)</li>
                        <li>Tobago’s ANR Robinson International Airport (TAB) from London Heathrow (LHR)</li>
                        <li>Seattle-Tacoma International Airport from London Heathrow</li>
                        <li>Johannesburg International Airport (JNB) from London Heathrow (LHR)</li>
                      
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delhi (DEL) from London Heathrow (LHR)</li>
                        <li>Hong Kong International Airport (HKG) from London Heathrow (LHR)</li>
                        <li>Shanghai Pudong International Airport (PVG) from London Heathrow (LHR)</li>
                        <li>London Heathrow (LHR) To Portland International Airport (PDX)</li>
                        <li>Salt Lake City daily from London Heathrow</li>
                        <li>Detroit from London Heathrow</li>
                        <li>Minneapolis−Saint Paul from London Heathrow (LHR)</li>
                        <li>San Francisco (SFO) from London Heathrow (LHR)</li>
                        <li>Las Vegas (LAS) from London Heathrow (LHR)</li>
                        <li>Los Angeles (LAX) from London Heathrow (LHR)</li>
                        <li>Cape Town International Airport (CPT) from London Heathrow (LHR)</li>
                        <li>Lahore (LHE) from London Heathrow (LHR)</li>
                        <li>Islamabad (ISB) from London Heathrow (LHR)</li>
                        <li>St Vincent and The Grenadines (SVD) from London Heathrow (LHR)</li>
                        <li>Lagos Murtala Muhammed International Airport (LOS) from London Heathrow (LHR)</li>
                        <li>Tel Aviv Ben Gurion Airport (TLV) from London Heathrow (LHR)</li>
                        <li>Mumbai (BOM) from London Heathrow (LHR)</li>
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