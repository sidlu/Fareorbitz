@include('site.header')
@php $page = 'Air Canada'; $logo = 'images/partners/air-canada.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/air-canada.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Air Canada Reservations </p>
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
    <img src="{{ asset('images/airlines/air-canada.jpg') }}" class="img-fluid" alt="air canada" />
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
    <div class="mb-0 mt-3 pb-5">
        <div class="sidebar-widget">
            <div class="section-heading mb-3">
                <h2 class="sec__title text-center">Air Canada</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Air Canada is the largest airline service in the country. It is also Canada's flag carrier. Besides this airline is one of the founding members of the world’s largest airline alliance - the Star Alliance. They have a huge network of routes that spread across different corners of the world.
            </blockquote>
            <p class="airline-title">Booking and cancellation policy</p>
            <p>Air Canada offers tickets to various parts of the world. A passenger can visit their site to book a ticket. However, it is advisable to take the help of a travel agent while booking tickets for international travel, especially intercontinental ones.</p>

            <p class="airline-subtitle">Booking</p>
            <p class="secondary-font">There are certain benefits that Air Canada provides to the passengers travelling with them. Here is a quick look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>They have routes to different international destinations</li>
                        <li>They have the same terminal connections</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Easy custom clearance</li>
                        <li>Shorter trip times, especially to Asia, Europe, and North America</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Cancellation</p>
            <p class="secondary-font">There are certain things one needs to remember when requesting a refund or cancelling a flight or a flight-related service. Here are some points to know about:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The refund amount for your cancelled ticket depends on your travel class</li>
                        <li>If a ticket is cancelled within 24 hours of booking, then a passenger will get the value of the ticket or the airline will cancel the transaction of the payment</li>
                        <li>If a ticket is cancelled after 24 hours, then the refund will be determined according to the fare type</li>
                        <li>In case the flight is delayed or cancelled, you are eligible for a refund for a certain amount</li>
                        <li>It is always advisable to request a refund via the original point of purchase. It means if you have taken the help of a travel agency to book your tickets, you should take their help regarding cancellation too</li>
                        <li>You can also cancel your tickets online if you are cancelling your entire booking or cancelling your flight at least two hours before departure or cancelling your ticket that you booked via the website or the mobile app of the airline</li>
                        <li>There is an option for partial cancellation where you can cancel one or more particular segments of your itinerary</li>
                        <li>The airline never charges refund processing fees</li>
                        <li>The cancellation fee is applicable based on the ticket type purchased by the passenger</li>
                        <li>Some charges, fees, or taxes are refundable. However, certain things determine the process. It depends on whether the ticket was refundable or non-refundable, whether it was fully used or only partially used, and the regulations of the country where the ticket was purchased and/or also the rules of the country of the departure</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">There are different things that one needs to keep in mind while booking a ticket and even more so while cancelling them. Why take the hassle when Fareorbitz can help in making your travel smooth?</p>

            <p class="airline-title">Travel destinations</p>
            <p class="secondary-font">What are the places that you can explore with Air Canada? Take a look at the various destinations across the world that you can visit with this airline:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Casablanca</li>
                        <li>Brisbane</li>
                        <li>Melbourne</li>
                        <li>Sydney</li>
                        <li>Beijing</li>
                        <li>Shanghai</li>
                        <li>Hong Kong</li>
                        <li>Delhi</li>
                        <li>Mumbai</li>
                        <li>Osaka</li>
                        <li>Tokyo</li>
                        <li>Auckland</li>
                        <li>Seoul</li>
                        <li>Taipei</li>
                        <li>Bangkok</li>
                        <li>Bathurst</li>
                        <li>Calgary</li>
                        <li>Castlegar</li>
                        <li>Charlottetown</li>
                        <li>Comox</li>
                        <li>Cranbrook</li>
                        <li>DeerLake</li>
                        <li>Edmonton</li>
                        <li>FortMcMurray</li>
                        <li>Fort St.John</li>
                        <li>Gander</li>
                        <li>GooseBay</li>
                        <li>Halifax</li>
                        <li>Kelowna</li>
                        <li>Les Îles-de-la-Madeleine</li>
                        <li>London, ON</li>
                        <li>Moncton</li>
                        <li>Montreal</li>
                        <li>Nanaimo</li>
                        <li>NorthBay</li>
                        <li>Ottawa, ON</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Penticton</li>
                        <li>PrinceRupert</li>
                        <li>Québec</li>
                        <li>Regina</li>
                        <li>Rouyn-Noranda</li>
                        <li>Saguenay</li>
                        <li>Saint John, NB</li>
                        <li>Sandspit</li>
                        <li>Saskatoon</li>
                        <li>Sept-Îles</li>
                        <li>Smithers</li>
                        <li>St.John’s, NL</li>
                        <li>Sudbury</li>
                        <li>Sydney, NS</li>
                        <li>Terrace</li>
                        <li>ThunderBay</li>
                        <li>Timmins</li>
                        <li>Toronto</li>
                        <li>Vancouver</li>
                        <li>Victoria</li>
                        <li>Whitehorse</li>
                        <li>Windsor, ON</li>
                        <li>Winnipeg</li>
                        <li>Vienna</li>
                        <li>Brussels</li>
                        <li>Prague</li>
                        <li>Copenhagen</li>
                        <li>Bordeaux</li>
                        <li>Lyon</li>
                        <li>Marseille</li>
                        <li>Nice</li>
                        <li>Paris</li>
                        <li>Toulouse</li>
                        <li>Berlin</li>
                        <li>Frankfurt</li>
                        <li>Oranjestad, Aruba</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Munich</li>
                        <li>Athens</li>
                        <li>Budapest</li>
                        <li>Reykjavik</li>
                        <li>Dublin</li>
                        <li>Tel Aviv</li>
                        <li>Milan</li>
                        <li>Rome</li>
                        <li>Venice</li>
                        <li>Amsterdam</li>
                        <li>Oslo</li>
                        <li>Warsaw</li>
                        <li>Lisbon</li>
                        <li>Porto</li>
                        <li>Bucharest</li>
                        <li>Barcelona</li>
                        <li>Madrid</li>
                        <li>Stockholm</li>
                        <li>Geneva</li>
                        <li>Zurich</li>
                        <li>Kyiv</li>
                        <li>Edinburgh</li>
                        <li>Glasgow</li>
                        <li>London, UK</li>
                        <li>Cairo</li>
                        <li>Doha</li>
                        <li>Dubai</li>
                        <li>Buenos Aires</li>
                        <li>São Paulo</li>
                        <li>Santiago</li>
                        <li>Bogotá</li>
                        <li>Cartagena, Colombia</li>
                        <li>Quito</li>
                        <li>Lima</li>
                        <li>St. John’s, Antigua</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>George Town</li>
                        <li>Nassau</li>
                        <li>Bridgetown</li>
                        <li>Belize City</li>
                        <li>Hamilton, Bermuda</li>
                        <li>Grand Cayman</li>
                        <li>Liberia, Costa Rica</li>
                        <li>San José, Costa Rica</li>
                        <li>Cayo Coco</li>
                        <li>Havana</li>
                        <li>Holguin</li>
                        <li>Santa Clara</li>
                        <li>Varadero</li>
                        <li>Curaçao</li>
                        <li>Puerto Plata</li>
                        <li>Punta Cana</li>
                        <li>Samaná, Dominican Rep.</li>
                        <li>St. George’s, Grenada</li>
                        <li>Pointe-à-Pitre</li>
                        <li>Port-au-Prince</li>
                        <li>Kingston</li>
                        <li>Montego Bay</li>
                        <li>Fort-de-France</li>
                        <li>Cabo San Lucas</li>
                        <li>Cancún</li>
                        <li>Mexico City</li>
                        <li>Puerto Vallarta</li>
                        <li>Panama City</li>
                        <li>San Juan</li>
                        <li>Basseterre</li>
                        <li>Vieux Fort, Saint Lucia</li>
                        <li>Saint Martin</li>
                        <li>Kingstown</li>
                        <li>Port of Spain</li>
                        <li>Providenciales</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">This airline offers the option of different travel classes along with an impeccable range of services to passengers during both domestic and international travels. There is also Air Canada Rouge, a low-cost subsidiary of Air Canada that can take you to various amazing destinations at a reduced cost.</p>

            <p class="airline-title">Top Destinations</p>
            <p class="secondary-font">There are some places which are preferred more by people than other destinations. Here is a quick look at the regions that people prefer more while travelling with Air Canada.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Boston</li>
                        <li>New York</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Orlando</li>
                        <li>Tampa</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Miami</li>
                        <li>San Francisco</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Fort Lauderdale</li>
                        <li>Los Angeles</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage Policies</p>
            <p class="secondary-font">Every airline has its own set of baggage rules and Air Canada is no different. There are certain things that the passengers need to keep in mind while travelling with this airline. Have a look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>There is a certain amount of check-in baggage that you can take with your while travelling</li>
                        <li>If you are taking luggage beyond the allotted amount, then you need to pay for extra baggage. You can make the payment through the website, mobile app, at the check-in counter for Air Canada, or self-service kiosks at the airport</li>
                        <li>The fee will be charged in the local currency when the baggage fee is paid somewhere outside Canada</li>
                        <li>The baggage fee is refunded in case the baggage is lost, damaged or delayed</li>
                        <li>While some of the airports accept cash, a few only take payments through a credit or a debit card</li>
                        <li>Medical cannabis (marijuana) is allowed for passengers travelling to Canada. However, make sure to have some time on your hand as Canadian Air Transport Security Authority (CATSA) may take time to check your medical documents. However, marijuana is not legal in every country. So, make sure you are aware of the regulations about the item in the arrival country</li>
                        <li>There are special services offered to Canadian and US military personnel, both on active duty and retired ones. In the case of a connecting flight, the rule of the other airline will apply</li>
                        <li>Always place your cash, laptop, power bank, high-value items, documents, and important keys on the baggage you are going to carry in the cabin</li>
                        <li>Make sure you have identification tags attached to your baggage. Also, attach baggage ID to your luggage before leaving for the airport</li>
                        <li>Always remove old airline tags from your bags</li>
                        <li>All check-in baggage will be scanned and then cleared for travel at the airport</li>
                        <li>In certain cases, the bags could be opened by the airport security and search</li>
                        <li>Make it a point to always lock your bags</li>
                        <li>The baggage allocation depends on the ticket type and the travel class the passenger chooses</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">Certain items are not allowed during your flight. Also, certain items are allowed in the cabin but not as check-in luggage and vice-versa. Here is a list of the items that are either completely prohibited or restricted in either cabin or as check-in luggage: </p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Battery-powered vehicles and devices</li>
                        <li>Camping Equipment</li>
                        <li>Curling Irons and Lighters</li>
                        <li>Dry Ice or ice Packs</li>
                        <li>MREs (Meals, Ready-to-eat)</li>
                        <li>Paint</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Air Purifiers and Ionisers</li>
                        <li>Avalanche Rescue Backpacks</li>
                        <li>Compressed Gas / Cylinders</li>
                        <li>Corrosive and Oxidising Materials</li>
                        <li>Poisons/Toxins</li>
                        <li>Smart Bags</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Defence / Incapacitating Sprays</li>
                        <li>Explosives / Flammable Liquids and Solids</li>
                        <li>Firearms and Ammunition</li>
                        <li>Fuel-powered Equipment</li>
                        <li>Radioactive Materials</li>
                    </ul>
                </div>
            </div>
            <p>If you want to carry any special baggage, you can always get in touch with the airline or your travel agent to know more about how you can carry that item or if it is strictly prohibited. For larger items, you can also book cargo service.</p>

            <p class="airline-subtitle">Liquids, personal, and non-solid food items</p>
            <p class="secondary-font">Some items fall under the category of “liquids, aerosols and gels,” according to The Canadian Air Transport Security Authority. Here is a quick look at the items that are exempted from restrictions. However, make sure to pack them properly. To know more about the guidelines, get in touch with Fareorbitz’s dedicated travel coordination team.</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>coffee</li>
                        <li>soft drinks</li>
                        <li>juice</li>
                        <li>bottled water</li>
                        <li>maple syrup</li>
                        <li>alcohol</li>
                        <li>shampoo</li>
                        <li>conditioner</li>
                        <li>mouthwash</li>
                        <li>toothpaste</li>
                        <li>yoghurt</li>
                        <li>gelatin</li>
                        <li>mashed potatoes</li>
                        <li>gel-based cosmetics (e.g. gel blush, gel lip products)</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>perfume</li>
                        <li>cologne</li>
                        <li>liquid soap</li>
                        <li>insect repellent</li>
                        <li>liquid/gel-based hand sanitisers</li>
                        <li>creams/lotions</li>
                        <li>hairspray</li>
                        <li>liquid-based cosmetics (e.g. mascara, liquid foundation, liquid eyeliner)</li>
                        <li>hairspray</li>
                        <li>body spray</li>
                        <li>peanut butter</li>
                        <li>chocolate spread</li>
                        <li>cheese spread</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>static remover</li>
                        <li>sunscreen spray</li>
                        <li>shaving cream</li>
                        <li>aerosol deodorant</li>
                        <li>aerosol cheese strings</li>
                        <li>lipgloss</li>
                        <li>hair styling gel</li>
                        <li>jam</li>
                        <li>jelly</li>
                        <li>pudding</li>
                        <li>maple spread</li>
                        <li>shaving gel</li>
                        <li>gel-based deodorant</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">The items, however, may change depending on the rules followed in the country of arrival.</p>

            <p class="airline-title">Children travelling alone</p>
            <p>There are times when a parent or a guardian is unable to accompany a kid to travel. That is why there is a special service by Air Canada that allows children of a certain age group to travel alone without an adult. The service ensures that your kid’s journey is safe and comfortable. Here are some of the aspects you need to know about it:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The service isn’t available for every flight. The service can be booked for non-stop flights that are operated by Air Canada or Air Canada Rouge
                        <li>
                        <li>The service is not available on connecting flights
                        <li>
                        <li>The adult dropping the kid at the airport must remain at the venue until the departure of the flight
                        <li>
                        <li>The service is not available for children under the age of 8 years. They must be accompanied by someone who is 16 years or older
                        <li>
                        <li>For children aged 8 to 11 years, this service is mandatory. They cannot travel alone without the service
                        <li>
                        <li>The Unaccompanied Minor service is optional for kids between the age group of 12 to 17. However, if they have a connecting flight, make sure to check the rule of that airline regarding unaccompanied minor
                        <li>
                        <li>You can book the service through the Air Canada website or app. Alternatively, you can ask your travel agent
                        <li>
                        <li>Visually or hearing impaired minors cannot travel alone. Also, travelling alone is not allowed if the minor is allergic to peanuts and cats or dogs. In case of any medical condition, both physical and psychological, they must be accompanied by an adult. However, if the child has medical clearance, he or she can travel with the unaccompanied minor service
                        <li>
                        <li>Explain the processes involved in air travel to your kid
                        <li>
                        <li>Make sure he or she is well-rested before boarding the flight
                        <li>
                        <li>Make sure that they have all the necessary documents
                        <li>
                        <li>Upon reaching the destination, the airline crew will release the child to an adult after verifying their details as provided by the parents or guardian.
                        <li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">Want to travel with your pet baby? What are the things to know about before you book your ticket? Here is a quick look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Small cats or dogs are allowed in the cabin. However, they should be stored in a comfortable pet carrier which should be kept under the seat that is in front of you</li>
                        <li>Some passengers cannot travel with pets. If they’re unaccompanied minors, using a medical device, seated in the exit row, travelling in Premium Economy or Business Class, then they cannot have their pets in the cabin</li>
                        <li>The pet carrier should remain closed during travel</li>
                        <li>Pet carriers must be spacious and comfortable. Also, they should have an anti-leakage base</li>
                        <li>Only one dog or cat is allowed per passenger in the cabin</li>
                        <li>Pets must be 12 weeks or older to travel</li>
                        <li>Pet strollers are allowed on board</li>
                        <li>Pets are allowed only on direct flights</li>
                        <li>Cat or dog breeds that are short/snub-nosed cannot travel in the cabin</li>
                        <li>You need to give proper information to the airline before travelling with your pet</li>
                        <li>Your pet needs to travel on the same flight as you</li>
                        <li>Register your pet within 24 hours of booking</li>
                        <li>Reach the airport 30 minutes before the scheduled time when travelling with your pet</li>
                        <li>Passengers travelling with pets cannot do web-check or use self-service kiosks at the airport</li>
                        <li>Besides cats and dogs, Air Canada also transports other animals as a part of their cargo services. They're hatching eggs, tropical fish, and insects</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Classes</p>
            <p>Air Canada has distinctly designed travel classes for passengers. With unique and distinctive services, these classes help passengers have a comfortable and safe journey.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">What are the services that you enjoy while travelling in this travel class? Let’s take a look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Access to the lounge for a certain amount only for people with Flex, Comfort, or Latitude type tickets</li>
                        <li>Comfortable seats</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight meals and drinks</li>
                        <li>In-flight entertainment options</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy Class</p>
            <p class="secondary-font">Besides all the basic services, passengers can enjoy some added services while travelling in this class.</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Greater recline</li>
                        <li>Wider armrests</li>
                        <li>Generous legroom</li>
                        <li>High-quality entertainment system with a personal touch-screen TV</li>
                        <li>Numerous entertainment options</li>                       
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                    <li>Complimentary earbud</li>
                        <li>USB port for charging</li>
                        <li>In-seat power</li>
                        <li>Adjustable headrest</li>
                        <li>Blanket and pillow</li>
                        <li>Amenity kit</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Individual reading light</li>
                        <li>Priority check-in</li>
                        <li>Priority luggage handling</li>
                        <li>Priority boarding</li>
                        <li>Delicious meals and beverages</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Signature Class</p>
            <p class="secondary-font">This class is designed to give the utmost comfort to passengers. Here are some of the distinctive features of this class:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Priority boarding</li>
                        <li>Priority check-in at the designated counter</li>
                        <li>Priority luggage handling</li>
                        <li>Lounge access at different airports across the world</li>
                        <li>Increased baggage allowance</li>
                        <li>Extra legroom</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Easy aisle access from the seat</li>
                        <li>Lie-flat beds</li>
                        <li>Adjustable pneumatic cushions</li>
                        <li>Lumbar support</li>
                        <li>Large slide-away table</li>
                        <li>Touch-screen entertainment system</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Noise-cancelling headphones</li>
                        <li>Endless in-flight entertainment</li>
                        <li>Individual power outlet</li>
                        <li>Amenity Kit</li>
                        <li>Delicious meals with seasonal dishes</li>
                        <li>Premium alcoholic and non-alcoholic drinks</li>
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