@include('site.header')
@php $page = 'American Airlines'; $logo = 'images/partners/american-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/american-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">American Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/american-airline.jpg') }}" class="img-fluid" alt="american airline" />
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
            <div class="section-heading mb-3">
                <h2 class="sec__title text-center">American Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <div class="sidebar-widget">
                <blockquote>
                    <p>American Airlines is the world's largest airline, with headquarters in Fort Worth, Texas. Starting off as a mail carrier, American Airlines took 95 years to become the world&rsquo;s largest airline.</p>
                    <p>American Airlines is known for operating both international and domestic flights, carrying an average of 6,800 flights per day to around 350 destinations that cover more than 50 countries.</p>
                    <p>The airline is known for carrying more than 200 million passengers annually, with over 500,000 passengers daily.</p>
                </blockquote>
                <p class="airline-title">American Airlines hubs</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to Charlotte</li>
                            <li>Flights to Chicago-O&rsquo;Hare</li>
                            <li>Flights to Dallas-Fort Worth</li>
                            <li>Flights to Los Angeles</li>
                            <li>Flights to Miami</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Flights to New York-JFK</li>
                            <li>Flights to New York-LaGuardia</li>
                            <li>Flights to Philadelphia</li>
                            <li>Flights to Phoenix-Sky Harbor</li>
                            <li>Flights to Washington-Reagan</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Book flights with American Airlines with Fareorbitz.</p>
                <p>Book cheap flights and vacation packages with American Airlines and find the best deals. Fly in style with American Airlines AAdvantage bonus mile offers and have a great experience.</p>
                <p>Enjoy flexibility in your travel and choose the travel dates to enjoy the best flight experience at the best value for money with American Airlines.</p>
                <p class="airline-title">The most popular domestic routes of American Airlines within the United States of America</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>From New York City to Miami (NYC to MIA)</li>
                            <li>Dallas to Los Angeles (DAL to LAX):</li>
                            <li>Between Los Angeles and Dallas(LAX to DAL).</li>
                            <li>From Miami to New York City (MIA to NYC)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Dallas to Charlotte (DAL to CLT)</li>
                            <li>Charlotte to Dallas (CLT to DAL)</li>
                            <li>CHI to DAL (Chicago to Dallas)</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Most Popular International Destinations of American Airlines</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>JFK to LHR: New York City (JFK) to London (LHR)</li>
                            <li>From New York (JFK) to Edinburgh (EDI)</li>
                            <li>From Miami (MIA) to Madrid (MAD)</li>
                            <li>From Miami (MIA) to Barcelona (BCN)</li>
                            <li>From Chicago (ORD) to Paris (CDG)</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>From New York (JFK) to Berlin (BER)</li>
                            <li>Charlotte (CLT) to Frankfurt (FRA)</li>
                            <li>Charlotte (CLT) to Munich (MUC)</li>
                            <li>Philadelphia to Rome (FCO)</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Classes of service</p>
                <p>The airline offers Flagship First, Flagship Business, Premium Economy, and Basic Economy classes wherein passengers enjoy different facilities and amenities. You can choose from a wide list and enjoy a great flying experience.</p>
                <p class="airline-title">Flagship First</p>
                <p class="airline-subtitle">Transcontinental</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Herein, passengers are provided with private check-in access.</li>
                            <li>These first class passengers enjoy the baggage check facility on a priority basis.</li>
                            <li>Passengers can relax in the airline&rsquo;s premium lounge in selected hub cities.</li>
                            <li>Multi-course meals with exclusive wines are provided to the passengers.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Free movies, music, games, and TV shows are provided to the passengers, along with noise-cancelling headphones.</li>
                            <li>A paid Wi-Fi service is available for all passengers.</li>
                            <li>Power outlets and USB ports are assembled with all the seats.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-subtitle">International</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers are allowed to check-in privately for an expedited security line.</li>
                            <li>The airline&rsquo;s premium lounge is open for passengers to relax before the flight.</li>
                            <li>Priority baggage checking facility for passengers</li>
                            <li>Lie-flat seats with aisle service are available for the passengers.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>A multi-course complete meal with an exclusive wine collection is offered to the passengers.</li>
                            <li>Free music, games, TV shows, and movies with noise-cancelling headphones are provided.</li>
                            <li>paid Wi-Fi service for all passengers.</li>
                            <li>Every seat in this class has a USB port and a power outlet.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-title">Flagship business</p>
                <p class="airline-subtitle">Transcontinental</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>For business class passengers, priority check-in and priority baggage checking facilities are provided.</li>
                            <li>In selected cities, premium lounge services are available for customers to relax before flights.</li>
                            <li>They have lie-flat seats for a comfortable journey during the flight.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers can enjoy free music, games, TV shows, movies, etc. with noise-free headphones.</li>
                            <li>A multi-course complete meal is provided with an exclusive range of wines.</li>
                            <li>On selected aircraft, a paid Wi-Fi service is provided.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">International</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers enjoy baggage check-in and check-in facilities on priority.</li>
                            <li>Business class passengers are provided with a premium lounge by the airline to relax a while before the flight.</li>
                            <li>To ensure a comfortable journey, lie-flat seats are provided.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>With noise-canceling headphones, you can enjoy free music, movies, TV shows, and games while on board.</li>
                            <li>Passengers are offered multi-course meals, including an exclusive collection of wines.</li>
                            <li>Passengers can enjoy paid Wi-Fi services, but only on selected aircraft.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Premium Economy</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Premium economy passengers are provided with priority check-in, security, and boarding at the airport. Also, passengers enjoy the privilege of getting their checked baggage first at the time of landing.</li>
                            <li>The seats are wide with more legroom, providing the passengers with adjustable seats with extended head and foot rests.</li>
                            <li>Free on-demand entertainment with large monitors and noise-free headphones.</li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="airline_ul">
                            <li>Passengers can avail of a chef-inspired meal with wine or beer.</li>
                            <li>Power outlets and USB ports are assembled on the seats, and passengers can enjoy paid Wi-Fi services as well.</li>
                            <li>A complimentary amenity kit, along with a blanket and pillow, is also provided to the passengers.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Basic Economy</p>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Passengers travelling in basic economy enjoy comfortable seats.</li>
                            <li>Free snacks and soft drinks are provided to the passengers.</li>
                            <li>Free in-flight entertainment is offered to ensure an entertaining journey for passengers.</li>
                        </ul>
                    </div>
                </div>

                <p class="airline-subtitle">Unaccompanied Minor Service</p>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>This service is to ensure that the child is boarded onto the aircraft with an introduction to the flight attendant, taken care of during the flight, and released to the concerned person at the destination.</li>
                            <li>This service is available for children aged between 5 and 14 years old.</li>
                            <li>Children aged between 7 and 11 years are allowed to travel only on non-stop or direct flights.</li>
                            <li>Parents are asked to fill out the unaccompanied minor forms with the necessary documents.</li>
                            <li>A service fee will be applied for the process.</li>
                        </ul>
                    </div>
                </div>
                <p class="airline-title">Benefits of American Airlines</p>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="airline_ul">
                            <li>Passengers can enjoy great benefits with American Airlines.</li>
                            <li>Travellers will enjoy the flexibility in ticket booking.</li>
                            <li>All change fees for first, business, premium economy, and basic economy change fees are completely eliminated.</li>

                            <li>Passengers enjoy free in-flight entertainment on all flights.</li>
                            <li>Cheap airline tickets are available if bookings are made via Fareorbitz.</li>
                            <li>Grab great deals and discounts by contacting Fareorbitz.</li>
                        </ul>
                    </div>
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