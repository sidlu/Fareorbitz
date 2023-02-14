@include('site.header')
@php $page = 'Lufthansa Airlines'; $logo = 'images/partners/lufthasana-arilines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/lufthasana-arilines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Lufthansa Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/lufthansa-airline.jpg') }}" class="img-fluid" alt="lufthasana arilines" />
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
                <h2 class="sec__title text-center">Lufthansa Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>Lufthansa is the largest airline in Germany. With its hubs at Frankfurt and Munich airports, it is ranked among the world&rsquo;s largest airlines, with links to more than 300 destinations in over 100 countries.</p>
                <p>It is the founding member of an airline alliance, i.e., Start Alliance. It also owns different subsidiary airlines, such as Austrian Airlines, Swiss, Brussels Airlines, and many others. It has over 280 aircraft that process flights to different countries.</p>
            </blockquote>
            <p class="airline-title">Lufthansa hubs</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Frankfurt International Airport flights</li>
                        <li>Flights from Munich Airport</li>
                        <li>Chicago O'Hare International Airport Flights</li>
                        <li>Newark Liberty International Airport Flights</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dulles International Airport Flights</li>
                        <li>Ataturk International Airport flights</li>
                        <li>Flights from San Francisco International Airport</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Book your flight with Lufthansa with Fareorbitz.</p>
            <p class="secondary-font">Book your flight with Lufthansa with Fareorbitz.com and enjoy a great travel experience.</p>
            <p class="secondary-font">Lufthansa flies to different destinations such as Spain, Japan, Turkey, and the UK and lets the travellers enjoy low-fare prices and wonderful services and fares all around the trip.</p>
            <p class="airline-subtitle">Lufthansa's most popular domestic destinations</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Anchorage</li>
                        <li>Traveling to Atlanta</li>
                        <li>Boston flight</li>
                        <li>Travel to Chicago by plane</li>
                        <li>The flight to Miami</li>
                        <li>New York City flight</li>
                        <li>Travel to San Francisco by plane</li>
                        <li>Travel to Seattle by plane</li>
                        <li>Trip to Tampa</li>
                        <li>Flight to Washington, DC</li>
                        <li>Traveling to Philadelphia</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Travel to Los Angeles</li>
                        <li>Flights to Dallas-Fort Worth</li>
                        <li>Denver flights</li>
                        <li>Flights to Detroit</li>
                        <li>Flights to Newark</li>
                        <li>Flights to Orlando</li>
                        <li>Flights to Houston</li>
                        <li>Flights to Austin</li>
                        <li>Flights to Charlotte</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Lufthansa's Most Popular International Destinations</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Chicago to Frankfurt (CHI to FRA)</li>
                        <li>Flights from Frankfurt to Chicago (FRA-CHI)</li>
                        <li>Istanbul to Frankfurt (IST to FRA) flights</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Frankfurt to Istanbul (FRA to IST)</li>
                        <li>Flights from Newark to Frankfurt (EWR to FRA) are available.</li>
                        <li>Flights from Washington, D.C. to Frankfurt (WAS to FRA)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Classes of service</p>
            <p class="secondary-font">The airline offers different types of fares to passengers, which they can pick as per their budget.</p>
            <p class="secondary-font">You may select the fare that best suits your needs.You can choose as per the low-fare prices allotted to each class of service, or you can look at the amenities and decide. There are common amenities for all, but some classes have different and special amenities associated with each.</p>
            <p class="airline-subtitle">First Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Every first-class passenger will receive a personal assistant to help with the travel formalities and security.</li>
                        <li>First class check-in counters at most airports. Also, first class lounges and first class terminals will be provided to the travelers.</li>
                        <li>Flynet is a service that allows passengers to access the internet to check their email, weather forecasts, and news. Also, on long-haul flights, free live TV channel support is provided.</li>
                        <li>In-flight entertainment is available on mobile devices using the Lufthansa entertainment app.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Adjustable seats that can be converted to 2 meter long lie-flat beds. Each seat is accompanied by a power outlet and a USB port.</li>
                        <li>An exclusive amenity kit with top-class toiletries is included.</li>
                        <li>Delicious country-specific starters and meals with complimentary wines.</li>
                        <li>For shopaholics, the airline offers the chance to buy branded items from an in-flight shopping magazine.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in on all European flights.</li>
                        <li>Passengers can use Lufthansa's welcome lounge and business class lounges with free Wi-Fi service.</li>
                        <li>Two carry-on bags of 8 kg each and two suitcases of 32 kg each are allowed.</li>
                        <li>In-flight internet services are available for passengers to check their mail, news, weather forecasts and to check information about connecting flights. Free live TV channels on long-haul flights. Also, passengers can enjoy in-flight entertainment using the Lufthansa entertainment app.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seats are adjustable and can be converted to 2 meter long lie-flat beds, each with a power outlet.</li>
                        <li>High-quality fresh meals with exclusive wines.</li>
                        <li>In-flight shopping magazine for those who love shopping.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy Class (PEC)</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Travelers are greeted on-board with a welcome drink. Also, delicious meals are served in chinaware.</li>
                        <li>Comfortable seating arrangement with a 38-inch pitch. Also, the passengers will get a 12-inch personal entertainment screen in front of their seats.</li>
                        <li>Passengers can enjoy internet services via FlyNet that allow them to check their mail, check news reports, weather forecasts, and also get information for their connecting flights. On long-haul flights, free live TV channels are also provided to the passengers.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Passengers can enjoy in-flight entertainment using the Lufthansa entertainment app on their mobile devices.</li>
                        <li>An in-flight shopping magazine can be delivered to passengers who want to shop for some well-known brands while flying.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Economy Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Comfortable seats with adjustable headrests and a cushion width of 40 cm.</li>
                        <li>Check-in baggage is allowed to weigh 23 kg, with carry-on baggage weighing 8 kg.</li>
                        <li>Snacks, sandwiches, or hot meals are served with coffee, white wine, or tomato soup. For any special order, you can make a pre-order at least 24 hours before boarding the flight.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Using the FlyNet service, passengers can enjoy checking their mail, news, weather forecasts and connecting flight information while on the go. Free live TV channels will also be provided to enjoy sports broadcasts.</li>
                        <li>Those who love shopping can browse through the in-flight shopping magazine and choose from a wide range of products. The products can be delivered to your home.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Common amenities</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Adjustable seat with an accompanying power outlet and USB ports.</li>
                        <li>FlyNet is a service that allows usage of internet services to check mail and other things.</li>
                        <li>Live TV channels are free of charge.</li>
                        <li>Snacks and meals with complimentary beverages such as coffee, wine, etc.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight entertainment options to enjoy TV shows, movies and music while on the go</li>
                        <li>Shopaholics enjoy browsing through the in-flight shopping magazine and having the choice of choosing from over 2000 products that can be easily delivered to their home.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Benefits</p>

            <ul class="airline_ul">
                <li>Lufthansa offers low-fare prices on all its flights.</li>
                <li>It brings the best discounts and offers within the reach of travelers.</li>
                <li>Quality customer support is what makes Lufthansa the best.</li>
                <li>Book your flight using Fareorbitz.com and enjoy great discounts and deals on flight tickets.</li>
                <li>Priority check-in is provided to passengers in business class and first class.</li>
            </ul>
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