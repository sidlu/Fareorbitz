@include('site.header')
@php $page = 'Austrian Airlines'; $logo = 'images/partners/austrian-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/austrian-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Austrian Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/austrian-airline.jpg') }}" class="img-fluid" alt="austrian airline" />
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
                <h2 class="sec__title text-center">Austrian Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Austrian Airlines is also referred to simply as Austrian. It is the flag carrier of the nation of Austria and is also a member of the Star Alliance. Not just that, this airline is a subsidiary of Lufthansa Group. Headquartered at Vienna International Airport, this airline has a huge network that takes people to different places across the world. Furthermore, the airline is known for providing customers with luxurious services.
            </blockquote>
            <p class="airline-title">How do we help?</p>
            <p>At Fareorbitz, it is always our aim to help you travel without any kind of hassle. We take care of everything regarding your air travel and also help you understand the rules and regulations applicable during your journey. Besides booking, we also take care of the cancelling process, in case you end up cancelling your travel plans or they get delayed.</p>

            <p class="airline-title">Travel Destinations</p>
            <p class="secondary-font">There are various places where you can travel with Austrian Airlines. However, at the present moment, some of the routes are terminated due to ongoing political unrest, post-pandemic regulations or the destination airport being closed. Take a quick look at the destination this airline covers:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Albania</li>
                        <li>Armenia</li>
                        <li>Austria</li>
                        <li>Bosnia and Herzegovina</li>
                        <li>Bulgaria</li>
                        <li>China</li>
                        <li>Croatia</li>
                        <li>Cyprus</li>
                        <li>Czech Republic</li>
                        <li>Denmark</li>
                        <li>Egypt</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Finland</li>
                        <li>France</li>
                        <li>Germany</li>
                        <li>Greece</li>
                        <li>Hungary</li>
                        <li>Iceland</li>
                        <li>Iran</li>
                        <li>Iraq</li>
                        <li>Israel</li>
                        <li>Italy</li>
                        <li>Japan</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Jordan</li>
                        <li>Kosovo</li>
                        <li>Maldives</li>
                        <li>Mauritius</li>
                        <li>Mexico</li>
                        <li>Moldova</li>
                        <li>Montenegro</li>
                        <li>Netherlands</li>
                        <li>Nigeria</li>
                        <li>Norway</li>
                        <li>Poland</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Portugal</li>
                        <li>Romania</li>
                        <li>Serbia</li>
                        <li>Spain</li>
                        <li>Sweden</li>
                        <li>Switzerland</li>
                        <li>France</li>
                        <li>Germany</li>
                        <li>Turkey</li>
                        <li>United Kingdom</li>
                        <li>United States</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">There are multiple cities in each country where passengers can travel with Austrian Airlines.</p>

            <p class="airline-title">Codeshare agreements</p>
            <p class="secondary-font">Austrian Airlines has codeshare agreements with different airlines. You may ask how knowing that would be relevant to you as a passenger. This is a type of agreement that proves beneficial for an airline and also its passengers. As a traveller, it can help reduce travel costs. Furthermore, the codeshare agreements open up more flight route options for a passenger.</p>

            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>AirBaltic</li>
                        <li>Air Canada</li>
                        <li>Air China</li>
                        <li>Air France</li>
                        <li>Air India</li>
                        <li>Air Malta</li>
                        <li>All Nippon Airways</li>
                        <li>Asiana Airlines</li>
                        <li>Azerbaijan Airlines</li>
                        <li>Bangkok Airways</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Belavia</li>
                        <li>Brussels Airlines</li>
                        <li>Cathay Pacific</li>
                        <li>Croatia Airlines</li>
                        <li>EgyptAir</li>
                        <li>Ethiopian Airlines</li>
                        <li>Eurowings</li>
                        <li>Georgian Airways</li>
                        <li>Iran Air</li>
                        <li>LOT Polish Airlines</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Lufthansa</li>
                        <li>Luxair</li>
                        <li>Scandinavian Airlines</li>
                        <li>Swiss International Air Lines</li>
                        <li>TAP Air Portugal</li>
                        <li>TAROM</li>
                        <li>Thai Airways International</li>
                        <li>Ukraine International Airlines</li>
                        <li>United Airlines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage allowance</p>
            <p>What are the items that you can take on board or give for check-in while flying with Austrian Airlines? What should you do if your luggage is delayed or missing? Can you extend your baggage allowance to carry more items while flying? As a passenger, you must have numerous questions related to baggage while flying. Here are some of the aspects to keep in mind while travelling with Austrian Airlines. Also, it is important to mention that if you have a connecting flight, then the baggage rules of that particular airline will apply. The number of bags or the weight of each luggage, be it carry-on or check-in, will depend on the ticket fare and travel class of the passenger</p>

            <p class="airline-subtitle">Hand Luggage</p>
            <p class="secondary-font">Here are some of the points you need to remember about the luggage that you will carry on board with you in the flight cabin:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>When travelling by Economy or Premium Economy, you can only carry one piece of hand luggage. The number increases to two for Business Class</li>
                        <li>The weight and size of your hand luggage will be checked at the airport</li>
                        <li>In case you exceeded your free baggage allowance, extra charges will be applied</li>
                        <li>Other than hand luggage, the passengers are also allowed to carry one personal item. It could be a handbag, a laptop bag, a small shoulder bag, or a bag containing duty-free items</li>
                        <li>It is always advisable to store personal documents, valuables, and medicines in a personal bag</li>
                        <li>A baby carrier or a foldable stroller or a child seat is allowed while travelling with an infant under the age of two years. However, the maximum weight of the items shouldn't exceed 10 kg</li>
                        <li>To ensure a comfortable journey, it is best to store your hand luggage in the overhead compartment. However, you can place the personal item under the seat in front of you. People sitting in emergency exit rows have to keep everything in the overhead compartment</li>
                        <li>Liquid bottles, stored in 100 ml bottles and kept in a transparent bag, are allowed on board</li>
                        <li>The items that are allowed on board are syrups, perfumes, hair gel, lotions, shaving cream, and similar items</li>
                        <li>Special food items for infants are allowed</li>
                        <li>Medicines are allowed on board but they must be presented at security</li>
                        <li>Duty-free items can also be carried while on board. However, if asked, passengers have to provide proof of purchase</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Check-in luggage</p>
            <p class="secondary-font">Depending on the weight, size, and also amount of baggage there is an allowance for passengers to carry some of their luggage for free. Here are some aspects of check-in luggage that you need to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>One piece of luggage is allowed in each class</li>
                        <li>If the baggage is heavier or the size exceeds the allowed limit, the passengers will have to pay extra cost</li>
                        <li>Even if you don’t bring hand-baggage, your check-in luggage allowance will not change</li>
                        <li>You can pre-book extra baggage allowance for a smooth travel</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Sports luggage</p>
            <p class="secondary-font">Passengers are allowed to carry certain sports equipment. Here are some things you need to know about that service.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can carry your sports luggage without any extra cost, provided they are within the size and weight limit of the allowed baggage</li>
                        <li>Except for Europe routes, a passenger can take one piece of snowboard equipment or a ski</li>
                        <li>In case the sports luggage exceeds the free baggage allowance, you’ll have to pay extra</li>
                        <li>So, what are the items that you can take while flying? They’re fishing gear, golf equipment, hockey bag, bicycle, hand glider, shortboard, longboard, sporting weapons, diving equipment, tandem, and winter sports equipment</li>
                        <li>Inform airlines about the sports equipment while booking your ticket, pack them according to the guidelines provided by the airline, and check in your sports baggage</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">While some items are allowed as check-in baggage but not as hand luggage or vice versa, some products are not allowed while flying. Here’s a quick list.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Spare batteries, power banks, and e-cigarettes are only allowed on hand-luggage</li>
                        <li>Firecrackers, oxygen bottles, stunning devices, corrosive substances, camping gas, household chemicals, poison, gasoline/fuel, radioactive material, battery-powered means of transportation, and items with more than 70% alcohol content aren’t allowed on board or as check-in luggage</li>
                        <li>Certain items are allowed but only if the passengers follow the given guidelines. They’re lighter, batteries, alcoholic drinks, diving lamps, medical articles, life jackets, avalanche rescue backpacks, thermometers, dry ice, and oxygen or air cylinders for medical use</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">It is always advisable to put a label, with your name and contact details on your luggage. Before your journey, print out the baggage tag and put it on your luggage to save time during your travel.</p>

            <p class="airline-title">Unaccompanied travel for children</p>
            <p class="secondary-font">There are certain situations where a parent or a guardian can not accompany children travelling from one destination to another. There is a special service by the airline to help children travelling alone. The service ensures that the kids reach from one destination to another in total safety and in a comfortable way. The service, however, is not available if the kid has a connecting flight.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Make sure you are aware of the documents that your kid needs to carry during his or her travel</li>
                        <li>Give all the necessary documents to the child</li>
                        <li>The service can only be booked via telephone call</li>
                        <li>Inform about the adults who will be dropping and picking up the kids</li>
                        <li>Properly fill out the assistance form to ensure your kid’s smooth travel</li>
                        <li>The person dropping the kid and also the person picking up the kid need to show proper ID and documentation to the airline staff</li>
                        <li>Make sure to teach your kid to stay in their seat during travel</li>
                        <li>Teach him or her to always ask for the cabin crew’s help in case of any issues</li>
                        <li>Take your kid through all the steps in the travel process</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling while pregnant</p>
            <p class="secondary-font">Soon-to-be-mothers need special care while travelling and Austrian Airlines takes care of their every need. However, there are certain things that an expecting passenger should know about. Here is a quick list:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Always discuss your travel plans with your gynaecologist</li>
                        <li>Women are allowed to fly up to the beginning of the 37th week of pregnancy</li>
                        <li>Passengers with high-risk pregnancies aren't allowed to fly</li>
                        <li>“Fit to fly” certificate should be submitted with approval from a certified doctor</li>
                        <li>Pregnant women can always ask for the cabin crew’s help in case they face any issues</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">You want nothing but the best for your pet babies. The airline also has certain services and rules that can help the four-legged creatures have comfortable and safe travel. Here are some aspects to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>In an approved transport container, you can take up to two healthy animals</li>
                        <li>The pets must not be less than 12 weeks old</li>
                        <li>Valid country regulations will apply during the flight. Depending on the rules, the pets can be transported either in the aircraft cabin or in the hold</li>
                        <li>While travelling in the cabin, the transport container must be odour isolating, leakproof, bite-proof, and soft. It should also be large enough for pet’s movement and proper air supply</li>
                        <li>Large animals cannot be accommodated in cabins and they have to be transported through the hold</li>
                        <li>There is a special service provided for animals travelling alone</li>
                        <li>Besides pets, assistance dogs are also allowed into the aircraft cabin. However, your dog must be trained properly to obey you and behave properly in a public place</li>
                        <li>Passengers must fill out a proper form while travelling with pets or assistance animals</li>
                        <li>The travellers need to show a certificate of health obtained from certified veterinarians</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Class</p>
            <p>Austrian Airlines has designed three travel classes for its passengers. The services provided by each class ensure comfortable and safe travel for the travellers.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">Here are some of the details that you need to know about the Economy Class of this airline:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Drinks, snacks or meals are provided on the flight</li>
                        <li>Digital Newspaper and magazine</li>
                        <li>Ergonomic seats</li>
                        <li>Option for reserving a preferred seat</li>
                        <li>From 400 hours of films and TV to numerous music playlists to different games, various options for in-flight entertainment are available for passengers. Separate entertainment options available for kids</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy Class</p>
            <p class="secondary-font">Specially designed to give a more private touch to the passengers’ travelling experience, different aspects make this class a preferred option for many. Here are some distinctive features:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Modern adjustable seats</li>
                        <li>High-level of comfort with adjustable headrest, foot support and wider seat area</li>
                        <li>Wide armrest</li>
                        <li>A foldable table that can be converted into a mobile workspace</li>
                        <li>USB connection</li>
                        <li>Power socket</li>
                        <li>Additional storage space for personal items</li>
                        <li>Amenity kit, including a sleep mask</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Hot fresh towels after take-off</li>
                        <li>Complimentary welcome drink</li>
                        <li>Three or four-course meal</li>
                        <li>Alcoholic and non-alcoholic beverage options</li>
                        <li>Complimentary bottle of water</li>
                        <li>Endless entertainment options in form of films, TV shows, music, and games</li>
                        <li>Twelve-inch touchscreen</li>
                        <li>Noise-cancelling headphones</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">This is the most luxurious premium service that Austrian Airlines has to offer. With impeccable services and enhanced seating arrangements, this is a class that gives the best travel experience to the passengers. Here are some points to remember about this class.</p>

            <p class="airline-subtitle">Short and medium-haul flights</p>
            <p class="secondary-font">Here are the Business Class services for short or medium-haul flights:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Two hand luggage and two personal items are allowed on board</li>
                        <li>Priority check-in</li>
                        <li>Baggage prioritisation</li>
                        <li>Fast security lane</li>
                        <li>Priority boarding</li>
                        <li>Free lounge access at different airports across the world</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Free adjacent seat</li>
                        <li>A separate section of the plane</li>
                        <li>Exclusive meals</li>
                        <li>Delicious drinks</li>
                        <li>Special children’s menu</li>
                        <li>Extra Miles</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Long-haul flights</p>
            <p class="secondary-font">When you have to travel for a longer distance, you get all the services provided on short or medium-haul flights along with something more. Take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seats that convert into beds</li>
                        <li>Extra noise-cancelling headphones</li>
                        <li>An individually adjustable cushion system</li>
                        <li>Amenity Kit</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Small designer backpack</li>
                        <li>Hours of video and audio entertainment</li>
                        <li>15-inch touchscreens</li>
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