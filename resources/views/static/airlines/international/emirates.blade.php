@include('site.header')
@php $page = 'Emirates Airlines'; $logo = 'images/partners/emirates-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/emirates-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Emirates Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/emirates-airline.jpg') }}" class="img-fluid" alt="emirates airline" />
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
                <h2 class="sec__title text-center">Emirates Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>Starting off in 1985, Emirates is the largest airline and one of the two flag carriers of the United Arab Emirates. Based in Dubai, it is the largest airline operating in the Middle East. It operates its flights to 150 cities in 80 countries, covering 6 continents with the help of a fleet of 300 aircraft.</p>
                <p>It is widely popular for its world-class in-flight entertainment and Arab-inspired cuisine.</p>
            </blockquote>
            <p class="airline-title">Emirates hubs</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dulles International Airport Flights</li>
                        <li>Chicago O'Hare International Airport Flights</li>
                        <li>Flights from San Francisco International Airport</li>
                        <li>Logan International Airport flights</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dubai International Airport flights</li>
                        <li>Flights from John F. Kennedy International Airport</li>
                        <li>Flights from Los Angeles International Airport</li>
                        <li>Dallas-Fort Worth International Airport Flights</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Book flights for Emirates with Fareorbitz.com</p>
            <p class="secondary-font">Book your flight tickets for Emirates with fareorbitz.com and enjoy great in-flight entertainment with world-class hospitality services.</p>
            <p class="secondary-font">Make your journey comfortable by booking your next flight ticket with Emirates. A fine-dining experience with Arab-inspired cuisine, an amazing cabin crew at your service and world-class travel is what Emirates will offer you.</p>
            <p class="airline-subtitle">Emirates' most popular domestic routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to/from New York City (NYC)</li>
                        <li>Dubai (DXB) flights</li>
                        <li>Flights to Los Angeles (LAX):</li>
                        <li>Flights to Dallas (DAL)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Washington, DC (WAS)</li>
                        <li>Flights to Chicago (CHI)</li>
                        <li>Flights to San Francisco (SFO) from</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates' most popular international routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>New York City to Dubai flights (NYC to DXB)</li>
                        <li>Flights from Dubai to Dallas (DXB-to-DAL)</li>
                        <li>Flights from Dubai to Washington, D.C. (DXB to WAS)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Dubai to Chicago (DXB-to-CHI)</li>
                        <li>Flights from LAX to DXB (Los Angeles to Dubai)</li>
                        <li>Flights from Dubai to San Francisco (DXB to SFO)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Classes of service</p>
            <p class="secondary-font">Emirates offer various classes of service to choose from. You can find out what service you are looking for as per your travel destination and choose the service and enjoy the features of it.</p>
            <p class="secondary-font">Along with the basic amenities offered by Emirates, you can enjoy first class, business class, and economy class services.</p>
            <p class="airline-subtitle">Emirates First Class (On-boarding)</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>The seats are accustomed to a mini-bar, a personal coat closet, and a desk with a stationary drawer.</li>
                        <li>Passengers enjoy dine-on-demand service.</li>
                        <li>The maximum amount of baggage allowed is two bags weighing 70 pounds each.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Passengers will be offered two on-board shower spas with heated feature floors. This facility is available only on selected aircraft.</li>
                        <li>Passengers are provided with an on-board lounge to relax in.</li>
                        <li>The beds are fully-flat with a multi-zone massage facility.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates First Class (Ground)</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>First-class passengers will get a private chauffeur service to and from the airport.</li>
                        <li>Complimentary food and beverages and refreshing shower facilities are on the cards for first-class passengers.</li>
                        <li>Stay in a first class lounger before the flight to sit back and relax, including a timeless spa and a complimentary first class treatment.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates Business Class (On-boarding)</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Passengers enjoy lie-flat business class seats with a multi-zone massage feature.</li>
                        <li>Passengers can enjoy and relax in the on-board lounge.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Adjustable private partitions to enjoy privacy during flights.</li>
                        <li>There is no baggage allowance and two checked bags are allowed to weigh 70 lbs each.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates Premium Economy (On-board)</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Wider, cream leather seats with extra room to stretch out on cushioned legs.</li>
                        <li>It has a six-way adjustable headrest to get the desired comfort and relaxation.</li>
                        <li>Choice to choose entertainment from thousands of movies and TV shows.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delicious regional meals are served on spacious, polished woodgrain tables.</li>
                        <li>Connect with Wi-Fi and maintain a connection with your loved one on the go.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates Business Class (Ground)</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Business class ground amenities include complimentary chauffeur services to and from the airport.</li>
                        <li>Complimentary food and beverages, in addition to shower facilities, are available for the passengers.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Fully equipped business centers are available in 25 markets all across the globe.</li>
                        <li>Before the flight, passengers can relax and enjoy access to the timeless spa, available at the business class lounge at Dubai International Airport.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates Economy Class (On-board)</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Ergonomically designed seats with fully adjustable winged headrests.</li>
                        <li>Email and telephone facilities for the passengers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>A multi-course meal, along with beverages, is provided to the passengers.</li>
                        <li>Two checked bags weighing 50 pounds each are allowed at the maximum.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Emirates Economy Class (Ground)</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>At ground level, economy class passengers are allowed access to the Maharba Lounge at Dubai International Airport in lieu of a normal fee.</li>
                        <li>Passengers can enjoy widescreen TV, a business center, a buffet and beverages as complimentary services.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Common amenities</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Passengers are provided with multi-course meals and wines.</li>
                        <li>In-flight entertainment includes movies, TV shows, audio channels, and around 100 video games.</li>
                        <li>Use the attached My USB service to connect your device.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Option to create personalized compilations using My Playlist.</li>
                        <li>There is an option to adjust the lighting to reduce the effect of jet lag.</li>
                        <li>Email facility, phone feature, and SMS facility on the go.</li>
                        <li>Seats are accustomed to power outlets and USB ports.</li>
                    </ul>
                </div>
            </div>


            <p class="airline-title">Skywards Frequent Flyer Program</p>
            <p class="secondary-font">It is the frequent flyer program wherein members earn Skywards Miles when they take any Emirates flight. Also, passengers earn miles when they use the flights of the partner airlines of Emirates. Such earned miles can be redeemed against flight bookings to destinations, or for upgrades, hotel stays, tours, and other exciting rewards.</p>
            <p class="airline-title">Unaccompanied Minor Service</p>
            <p class="secondary-font">Emirates offer the unaccompanied minor service for children aged between 5 and 11 who are flying alone without any guardian or parents. The Emirates offers the following:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>A specialist will meet your child at the unaccompanied minors check-in desk. They will hand over the kid to cabin crew members after checking with security and immigration.</li>
                        <li>Cabin crew will take complete care of the child, from his dietary requirements to his seating comfort.</li>
                        <li>When the child reaches the destination, a specialist will arrive at the aircraft door to accompany him to his parents or guardians.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Benefits</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can cancel the ticket without worrying about any extra charges.</li>
                        <li>Book flight tickets using the great discounts and rewards offered by fareorbitz.com.</li>
                        <li>Unused portions of the tickets are refunded without any deductions.</li>
                        <li>A ticket issued is valid for 760 days from the date of issue.</li>
                        <li>Book a cheap flight with Emirates via fareorbitz.com.</li>
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