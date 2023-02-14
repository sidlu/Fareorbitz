@include('site.header')
@php $page = 'Alaska Airlines'; $logo = 'images/partners/alaska-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/alaska-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Alaska Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/alaska-airline.jpg') }}" class="img-fluid" alt="delta airline" />
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
                <h2 class="sec__title text-center">Alaska Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>With headquarters in Seattle, Washington, Alaska Airlines are among the most famous and oldest airlines, with about 115 destinations across the United States, Costa Rica, Mexico, Canada, and Belize. It was founded in 1932 and only connected certain cities to Alaska.</p>
                <p>They are 3-star airlines with high-quality airports and customer service.</p>
            </blockquote>
            <p class="airline-title">Hubs of Alaska Airlines</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Seattle</li>
                        <li>Flights to Portland</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Anchorage</li>
                        <li>Flights to Los Angeles (LAX)</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Book flights for Alaska Airlines with Fareorbitz</p>
            <p class="secondary-font">Book flights with the fifth-largest airline service based in the United States from fareorbitz.com. It is based on passenger traffic and is famous for its air carriers.</p>
            <p class="secondary-font">Alaska airlines have a set of values: "people, community, and environment." They have a dedicated team of employees with the company's goodwill that makes them one of the greatest in the market.</p>
            <p class="airline-subtitle">Most popular domestic routes of Alaska Airlines within the United States of America</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seattle to Phoenix (SEA to PHX)</li>
                        <li>L.A. to San Francisco (LAX to SFO)</li>
                        <li>Seattle to Spokane (SEA to GEG)</li>
                        <li>Seattle to Eugene (SEA to EUG)</li>
                        <li>Seattle to San Francisco (SEA to SFO)</li>
                        <li>Seattle to Orange County (SEA to SNA)</li>
                        <li>Seattle to Portland (SEA to PDX)</li>
                        <li>Seattle to Las Vegas (SEA to LAS)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seattle to San Diego (SEA to SAN)</li>
                        <li>Anchorage to Fairbanks (ANC to FAI)</li>
                        <li>Seattle to Los Angeles (SEA to LAX)</li>
                        <li>Seattle toBoise (SEA to BOI)</li>
                        <li>Los Angeles to Portland (LAX to PDX)</li>
                        <li>Seattle to Anchorage (SEA to ANC)</li>
                        <li>San Francisco to San Diego (SFO to SAN)</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Most Popular International Destinations of Alaska Airlines.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>San Francisco to San Jos&eacute; del Cabo (SFO to SJD)</li>
                        <li>Los Angeles to Puerto Vallarta (LAX to PVR)</li>
                        <li>Los Angeles to Cancun (LAX to CUN)</li>
                        <li>Los Angeles to Guadalajara (LAX to GDL)</li>
                        <li>Seattle to Calgary (SEA to YYC)</li>
                        <li>Portland to Puerto Vallarta (PDX to PVR)</li>
                        <li>Portland to San Jos&eacute; del Cabo (PDX to SJD)</li>
                        <li>Seattle to Vancouver (SEA to YVR)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>San Diego to San Jos&eacute; del Cabo (SAN to SJD)</li>
                        <li>Los Angeles to San Jos&eacute; del Cabo ) (LAX to SJD)</li>
                        <li>Seattle to San Jos&eacute; del Cabo (SEA to SJD</li>
                        <li>San Jose ) to San Jos&eacute; del Cabo (SJC to SJD)</li>
                        <li>Seattle to Puerto Vallarta (SEA to PVR)</li>
                        <li>Seattle to Cancun (SEA to CUN)</li>
                        <li>San Jose to Puerto Vallarta (SJC to PVR)</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Class of Service</p>
            <p class="secondary-font">The airlines offer three types of fares that are different based on flexibilities such as seat selection charge, boarding procedure, access to the overhead bin, and bonus miles.</p>
            <p class="secondary-font">You may choose the fare according to a specific date but with a different fare structure, or you can choose according to the low-price fares. There are basic amenities present to all, and then there are features offered to a traveler according to their fare type. Let us see the three types, majorly: Saver, Main, and First Class.</p>
            <p class="airline-subtitle">Saver</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>There is a limited seat selection option for customers choosing this fare.</li>
                        <li>Traveler of the Saver class cam board only after Main and First class travelers.</li>
                        <li>The overhead bin access is taken by those who board the flight first.</li>
                        <li>You can cancel a ticket 24-hours before your reservation. After that duration, they will not be canceled or changed.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Elite members of the Mileage plan will not receive benefits with saver fares.</li>
                        <li>You can earn miles for the miles you have flown. These points count as points that will save you money on the next ticket that you buy.</li>
                        <li>Saver fare is the most budget-friendly ticket that allows you to experience the excellence of a flight.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Main</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Travelers booking this fair will select seats from the main cabin.</li>
                        <li>There is an ease in the boarding procedure for these fare holders.</li>
                        <li>The overhead bin access is always for those that come first. Therefore, after first-class members have boarded the plane, the main class people will use the overhead bin.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You can cancel or change the ticket after paying some fees. However, you have to pay $50 for same-day changes to the ticket.</li>
                        <li>Elites receive bonus miles, check-in advantages, and baggage allowances.</li>
                        <li>You earn miles for the amount of fare you spent. The miles count as points that can be used later as points.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">First-class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>First-class travelers can select seats in a first-class cabin without much problem.</li>
                        <li>The priority of choosing the overhead bin access and boarding procedure is for first-class travelers.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Travelers even enjoy the Mileage plan Elite benefits, such as priority boarding, check-in allowance, and baggage benefits with a bonus on miles.</li>
                        <li>You can use the miles as points for new purchases on tickets.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Flight Amenities</p>
            <p>Apart from the basic in-flight amenities, specific amenities depend on the type of fare you hold.</p>
            <p class="airline-subtitle">Saver fare</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Since it is a budget-friendly flight, you can have one carry-on for free.</li>
                        <li>You also earn mileage points or mileage plan miles that you can use for your next booking.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Main cabin</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can select seats from the main cabin as a "main cabin fare holder."</li>
                        <li>You earn miles on the mileage plan</li>
                        <li>One carry-on is allowed for a single person.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Premium class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You can board and get off the plane earlier than everyone else.</li>
                        <li>There is extra legroom for premium class ticket holders.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You get various choices from free wine, cocktails, and beer.</li>
                        <li>The traveler is eligible for all the other "Main Cabin Class" amenities.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">First-class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Free complimentary food and drink is part of the first-class fare.</li>
                        <li>There is a particular flight attendant assigned to you for personal experience.</li>
                        <li>You have access to the Alaska Lounge, which comprises premium features.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You can carry two checked bags for free.</li>
                        <li>You are eligible for all amenities of the "Premium class."</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Unaccompanied Minor Services</p>
            <p>Alaska Airlines allows unaccompanied minor services and calls them Junior Jetsetters. It is available to children from ages 5 to 17 on both flights, i.e., domestic and international.</p>
            <p>The traveler can pay the fees for unaccompanied minor service at the time of web check-in, the check-in kiosk, and finally, at the airport's ticket counter. The fees for junior jet setters are around $50. The child is escorted by an attendant right from the counter to the plane. In the plane, a flight attendant keeps a watchful eye towards them.</p>
            <p class="airline-title">Benefits of Alaska Airlines</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>There are 1000 options on Movies and TV shows to choose from. You can also plug a USB and a charger into the outlet presented to you.</li>
                        <li>Entertain yourself with some snacks and drinks from the West coast and even fully-made meals for breakfast, lunch, and dinner.</li>
                        <li>You can stream or browse onboard from an unlimited connection.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You can carry at least one check-in bag even if you have the saver ticket fare.</li>
                        <li>Alaska Airlines has a low airfare compared to its contemporaries.</li>
                        <li>They're also known for their on-time arrivals and baggage handling service.</li>
                        <li>The airline is also known for having higher customer satisfaction.</li>
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