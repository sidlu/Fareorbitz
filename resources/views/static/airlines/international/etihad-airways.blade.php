@include('site.header')
@php $page = 'Etihad Airways'; $logo = 'images/partners/etihad-airways.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/etihad-airways.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Etihad Airways Reservations </p>
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
    <img src="{{ asset('images/airlines/etihad-airways.jpg') }}" class="img-fluid" alt="etihad airways" />
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
                <h2 class="sec__title text-center">Etihad Airways</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>Since its inception in 2003, Etihad Airways has been the second flag carrier of the United Arab Emirates after Emirates. The airline operates more than 1,000 flights per week from its head office in Khalifa City, Abu Dhabi, near Abu Dhabi International Airport. It flies to over 90 destinations all around the globe.</p>
                <p>It is one of the world&rsquo;s fastest growing airlines and has gained accolades for being the world's leading airline. It had formed its own airline alliance, Etihad Airways Partners, with Alitalia, Jet Airways, Air Berlin, Niki, and Air Seychelles.</p>
            </blockquote>
            <p class="airline-title">Etihad Airways hubs</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Abu Dhabi International Airport</li>
                        <li>Flights from John F. Kennedy International Airport</li>
                        <li>Chicago O'Hare International Airport Flights</li>
                        <li>Flights from Rajiv Gandhi International Airport</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dulles International Airport Flights</li>
                        <li>Flights from Sardar Vallabhbhai Patel International Airport</li>
                        <li>Flights from Benazir Bhutto International Airport</li>
                        <li>Flights from Allama Iqbal International Airport</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Book your Etihad airways with Fareorbitz.com</p>
            <p>Enjoy a great booking experience with Fareorbitz.com. Book flight tickets with Etihad Airways and enjoy great discounts and offers.</p>
            <p>Fareorbitz.com allows passengers to book their flights with Etihad Airways and enjoy a great travel experience.</p>

            <p class="airline-subtitle">Etihad Airways' most popular domestic routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Abu Dhabi to Chicago (AUH to CHI).</li>
                        <li>Flights from New York City to Abu Dhabi (NYC to AUH).</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Abu Dhabi to New York City (AUH to NYC).</li>
                        <li>Flights from Abu Dhabi to Washington, D.C. (AUH to WAS)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Etihad Airways' Most Popular International Destinations</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Abu Dhabi</li>
                        <li>Flights to Chicago</li>
                        <li>Flights to New York City</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights to Hyderabad</li>
                        <li>Flights to Washington, DC</li>
                        <li>Flights to Ahmadabad</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Classes of service</p>
            <p class="secondary-font">Etihad Airways offers different classes of service to passengers travelling from one place to another. Travelers can pick their choice and select the best one.</p>
            <p class="secondary-font">The classes are classified as first class, business class, economy class, and residential class. Also, some common amenities are there that are similar for all travelers using Etihad Airways.</p>
            <p class="airline-subtitle">First Class</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>The travelers have complete privacy with this type of service.</li>
                        <li>In first class, passengers enjoy a separate armchair and a 6 ft. 8 inch bed to rest in.</li>
                        <li>An in-flight chef to offer you a personalized menu is there.</li>
                        <li>Seven line TV channels on selected aircraft for you to enjoy the news and shows using noise-canceling headsets.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>On long-haul flights, a nanny will fly with you.</li>
                        <li>Loungewear, all-natural duvets, mattresses, and linen are available.</li>
                        <li>A full-fledged amenity kit with skincare products by Omorovicza.</li>
                        <li>In addition, a personal wardrobe to hand clothes is provided in first class flights.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Work, play, and rest in a business studio that offers space and comfort across a wide range of business class cabins.</li>
                        <li>Fully flat Long-haul flights have beds that are 6 feet 8 inches wide and have direct aisle access.</li>
                        <li>Choose your favorite dining experience that suits you with a guide of food and beverage options available to you.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>An on-board flying nanny on long-haul flights.</li>
                        <li>On selected aircraft, LUXE amenity kits with Scaramouch and Fandango toiletries are located.</li>
                        <li>Each seat is equipped with power outlets and USB ports.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Economy Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Economy class seats offer a generous reclines with enough legroom. Relax and be comfortable with a unique headrest that provides you with a shoulder to lean on.</li>
                        <li>An on-board flying nanny to help parents on long-haul flights.</li>
                        <li>Award-winning movies, TV shows, games, and music are available on demand.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight meal service with a choice of three main courses and a choice between vegetarian and non-vegetarian food.</li>
                        <li>Seats are accompanied by power outlets to charge laptops and USB ports.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Residential Class</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>There is a living room, a bedroom, and an en suite shower in this apartment.</li>
                        <li>A 32-inch TV with a noise-cancelling headset</li>
                        <li>A full-height shower, a bathrobe, a hairdryer, and a vanity kit are provided.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>A full-time in-flight butler and an in-flight chef to prepare the meals are provided.</li>
                        <li>Choice to choose a favorite wine from the wide list.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">In-flight amenities</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dine as you like and when you like.</li>
                        <li>Choose from the extensive a la carte range of anytime kitchen menus.</li>
                        <li>Hand-picked wines for the passengers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>650 hours of entertainment with on-demand movies, music, and games.</li>
                        <li>On-board telephone services with voice call capabilities are available at reasonable rates.</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Unaccompanied minor</p>
            <p class="airline-subtitle">This service is available for children:</p>
            <ul class="airline_ul">
                <li>Who are travelling alone and fall into the age group between 5 and 11 years?</li>
                <li>who are aged between 12 and 16 years and whose parents have requested the service.</li>
            </ul>

            <p class="secondary-font">Children aged between 12 and 16 years do not require any such service, but if asked, a fee of $100 is charged for international flights. Parents are asked to book flights for their kids.</p>
            <p class="secondary-font">Unaccompanied minors aged between 5 and 11 years are provided with all the basic amenities and facilities to make their flight comfortable.</p>
            <p class="airline-title">Program for Frequent Flyers</p>

            <p class="secondary-font">The Etihad Airways frequent flyer programme is known as Guest. Under this, you can collect miles when you fly with Etihad Airways to different destinations all over the world. You can use these miles for flight ticket discounts, special amenities, and lots more features. You can use and redeem these miles on partner airlines as well, such as Alitalia, Air Serbia, Jet Airways, Etihad Regional, and many others. The services that you can enjoy with miles are priority check-in, priority boarding, additional baggage allowance, etc.</p>

            <p class="airline-title">Benefits</p>
            <ul class="airline_ul">
                <li>No waver charges will be levied once you cancel the flight ticket.</li>
                <li>Quick flight booking with immediate ticket generation facility</li>
                <li>There are numerous discounts and offers available when booking with fareorbitz.com.</li>
                <li>Flight booking and ticket cancellation require 24*7 customer service support.</li>
                <li>There is no need to pay any charge for any changes made to the flight booking process.</li>
                <li>Low-fares and better discounts are on the cards.</li>
                <li>You can check the permitted check baggage as well as the additional baggage costs based on the location.</li>
                <li>Fareorbitz.com adheres to serving the customers with a comfortable flight booking experience.</li>
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