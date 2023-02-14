@include('site.header')
@php $page = 'TAP Air Portugal'; $logo = 'images/partners/tap-air-portugal.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/tap-air-portugal.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">TAP Air Portugal Reservations </p>
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
    <img src="{{ asset('images/airlines/tap-air.jpg') }}" class="img-fluid" alt="tap air portugal" />
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
                <h2 class="sec__title text-center">TAP Air Portugal</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                TAP Air Portugal (TP) is the flag carrier of Portugal. Not just that, the airline is also one of the members of the Star Alliance, the world's largest global airline alliance. Catering to more than 90 destinations across 37 countries, this airline is known for its up-to-date and incredible services. There are multiple classes that one can choose on this airline. The operation hub of the airline is located at Lisbon Humberto Delgado Airport (LIS).
            </blockquote>
            <p class="airline-title">We make your journey smooth</p>
            <p>Be it an international journey or a domestic trip, there are certain things about air travel you need to remember. Especially owing to the pandemic, there have also been several changes implemented in air travel. We take care of all the aspects to help you have a hassle-free trip.</p>

            <p class="airline-title">Codeshare agreements</p>
            <p class="secondary-font">This is a type of agreement between airlines that doesn't just help the air companies but the customers too. Due to this arrangement, passengers get the opportunity to an increased number of flights and also cheaper travel costs. Here’s a list of the airlines with codeshare agreements with TAP Air Portugal.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Aegean Airlines</li>
                        <li>airBaltic[65]</li>
                        <li>Air Canada</li>
                        <li>Air China</li>
                        <li>Air India[66]</li>
                        <li>All Nippon Airways</li>
                        <li>Austrian Airlines</li>
                        <li>Azores Airlines</li>
                        <li>Azul Brazilian Airlines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Beijing Capital Airlines[67]</li>
                        <li>Brussels Airlines</li>
                        <li>Croatia Airlines</li>
                        <li>EgyptAir</li>
                        <li>El Al[68]</li>
                        <li>Emirates</li>
                        <li>Ethiopian Airlines</li>
                        <li>Etihad Airways</li>
                        <li>Finnair</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Gol Transportes Aéreos</li>
                        <li>ITA Airways [69]</li>
                        <li>JetBlue</li>
                        <li>LAM Mozambique Airlines</li>
                        <li>LOT Polish Airlines</li>
                        <li>Lufthansa</li>
                        <li>Luxair</li>
                        <li>Nordica[70]</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>S7 Airlines</li>
                        <li>Singapore Airlines</li>
                        <li>South African Airways</li>
                        <li>Swiss International Air Lines</li>
                        <li>Thai Airways</li>
                        <li>Turkish Airlines</li>
                        <li>Ukraine International Airlines[71][72]</li>
                        <li>United Airlines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel routes</p>
            <p class="secondary-font">The airline caters to different regions across the world. While some travel routes are regularly explored, there are a few that are seasonal. Take a look at the cities to which the airline provides its services.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Algiers</li>
                        <li>Luanda</li>
                        <li>Vienna</li>
                        <li>Brussels</li>
                        <li>Belém</li>
                        <li>Belo Horizonte</li>
                        <li>Brasilia</li>
                        <li>Fortaleza</li>
                        <li>Maceió</li>
                        <li>Natal</li>
                        <li>Porto Alegre</li>
                        <li>Recife</li>
                        <li>Rio de Janeiro</li>
                        <li>Salvador da Bahia</li>
                        <li>São Paulo</li>
                        <li>Montreal</li>
                        <li>Toronto</li>
                        <li>Boa Vista</li>
                        <li>Praia</li>
                        <li>Sal</li>
                        <li>São Vicente</li>
                        <li>Zagreb</li>
                        <li>Prague</li>
                        <li>Copenhagen</li>
                        <li>Helsinki</li>
                        <li>Bordeaux</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Lyon</li>
                        <li>Marseille</li>
                        <li>Nantes</li>
                        <li>Nice</li>
                        <li>Paris</li>
                        <li>Toulouse</li>
                        <li>Banjul</li>
                        <li>Berlin</li>
                        <li>Cologne</li>
                        <li>Düsseldorf</li>
                        <li>Frankfurt</li>
                        <li>Hamburg</li>
                        <li>Munich</li>
                        <li>Stuttgart</li>
                        <li>Accra</li>
                        <li>Conakry</li>
                        <li>Bissau</li>
                        <li>Budapest</li>
                        <li>Dublin</li>
                        <li>Tel Aviv</li>
                        <li>Bologna</li>
                        <li>Florence</li>
                        <li>Milan</li>
                        <li>Naples</li>
                        <li>Rome</li>
                        <li>Venice</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Abidjan</li>
                        <li>Luxembourg City</li>
                        <li>Cancún</li>
                        <li>Agadir</li>
                        <li>Casablanca</li>
                        <li>Marrakech</li>
                        <li>Oujda</li>
                        <li>Tanger</li>
                        <li>Maputo</li>
                        <li>Amsterdam</li>
                        <li>Oslo</li>
                        <li>Warsaw</li>
                        <li>Faro</li>
                        <li>Funchal</li>
                        <li>Lisbon</li>
                        <li>Ponta Delgada</li>
                        <li>Porto</li>
                        <li>Porto Santo</li>
                        <li>Terceira</li>
                        <li>Moscow</li>
                        <li>Cape Town</li>
                        <li>Alicante</li>
                        <li>Asturias</li>
                        <li>Barcelona</li>
                        <li>Bilbao</li>
                        <li>Fuerteventura</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Ibiza</li>
                        <li>Las Palmas</li>
                        <li>Madrid</li>
                        <li>Málaga</li>
                        <li>Santiago de Compostela</li>
                        <li>Seville</li>
                        <li>Valencia</li>
                        <li>Stockholm</li>
                        <li>Basel</li>
                        <li>Mulhouse</li>
                        <li>Freiburg</li>
                        <li>Geneva</li>
                        <li>Zürich</li>
                        <li>São Tomé</li>
                        <li>Djerba</li>
                        <li>Monastir</li>
                        <li>London</li>
                        <li>Manchester</li>
                        <li>Boston</li>
                        <li>Chicago</li>
                        <li>Miami</li>
                        <li>New York City</li>
                        <li>Newark</li>
                        <li>San Francisco</li>
                        <li>Washington, D.C.</li>
                        <li>Caracas</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Popular destinations</p>
            <p class="secondary-font">The airline serves mainly different places in the regions of Europe, Africa, North America, and South America. However, some of the routes by Tap Air Portugal are more sought after than the others. Take a look at the destinations which are trending among travellers.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Florence</li>
                        <li>Milan</li>
                        <li>Barcelona</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>London</li>
                        <li>Berlin</li>
                        <li>Amsterdam</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Boston Chicago</li>
                        <li>Copenhagen</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Manchester</li>
                        <li>Montreal</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage details to remember</p>
            <p>What items can you carry in your hand baggage? Are there things that you cannot take in your checked-in luggage? What are those items that are strictly prohibited while flying? Here’s a quick list of some of the basic baggage rules that you should know before flying.</p>

            <p class="airline-subtitle">Hand baggage</p>
            <p class="secondary-font">Here are some important points about hand baggage to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airine_ul">
                        <li>For Economy class travellers one bag along with one personal item is allowed in hand baggage. The number is the same for Business Class travellers to and from North America. If you are travelling to/from South America, Europe, Africa or taking any domestic flights in Executive class, you can carry one personal item and two bags</li>
                        <li>In case of excess weight, size or number of baggage, extra charges are applied</li>
                        <li>Personal items include duty-free shop bags, some medical devices, walking aids, handbags, and computer bags</li>
                        <li>The best place to store your personal item is under the seat in front of you and your hand luggage in the overhead storage space</li>
                        <li>An adequate amount of food for babies is allowed. However, you cannot carry water</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Checked-in luggage</p>
            <p class="secondary-font">What to remember about checked-in pieces of luggage? Here are some points</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The number of check-in luggage differs according to the travel class of the passengers</li>
                        <li>Extra luggage for babies or infants is allowed</li>
                        <li>The baggage allowance for children is the same as that of adults</li>
                        <li>If the luggage exceeds the allowed weight or size or number, then the passenger is charged extra</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">Some items are not allowed while taking a flight with Tap Air Portugal. Here are the items that you cannot take in either hand baggage or check-in luggage:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Electric shock weapons</li>
                        <li>Items containing explosives</li>
                        <li>Disabling devices</li>
                        <li>Permeation devices</li>
                        <li>A few medical devices</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Others: Here are some other tips to remember:</li>
                        <li>Always properly label the bags with your name and contact details</li>
                        <li>Don’t forget to lock your check-in luggage</li>
                        <li>Make sure that the baggage claim ticket shows the correct destination</li>
                        <li>Don’t overfill your bags</li>
                    </ul>
                </div>
            </div>
            <p>Have a special item you want to carry but are not sure if it would be permitted? We, at Fareorbitz, can help you know more about what you can carry with special permission from the airlines.</p>

            <p class="airline-title">Travelling with children and babies</p>
            <p class="secondary-font">Are you travelling with kids? Then these tips will help in making your journey easier:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Access to priority boarding</li>
                        <li>Reduced mobility assistance</li>
                        <li>Flight baptism certificates</li>
                        <li>Free allocation of seats so that adults and children can seat together</li>
                        <li>Transport stroller up to the boarding gate</li>
                        <li>Cots for babies up to one year</li>
                        <li>Special menu for children, especially on long-haul flights</li>
                        <li>Assistance for unaccompanied minors</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Entertainment options for children</li>
                        <li>Baby kits</li>
                        <li>On-board offers for children</li>
                        <li>Each adult can accompany only one child aged between two to 11 years of age. They can also take one infant who is less than two years</li>
                        <li>One child seat or stroller is allowed on board and is free of charge</li>
                        <li>Travelling with children after the first seven days of birth is not recommended</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Unaccompanied Minors</p>
            <p class="secondary-font">What are the points you need to know if your kid is travelling all by himself or herself with Tap Air Portugal?</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Children below the age of 5 are not allowed to travel unaccompanied</li>
                        <li>Adult companions for children must be above 18 years of age and capable of taking care of the minor companion under two years</li>
                        <li>For a child between the age of 5 to 11, a 16-year-old can accompany the minor. However, he or she needs to be declared as a companion and should be able to take care of the kid</li>
                        <li>For night stops during the flight trip, the “Unaccompanied Minors” service is not available</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Special services</p>
            <p>Certain passengers require special services during their air travel. Here is a list of the ways the airline helps to make the journey of every passenger comfortable and hassle-free.</p>

            <p class="airline-subtitle">Pregnant flyer</p>
            <p class="secondary-font">A passenger is allowed to fly 36 weeks to up to 4 weeks before the expected days of delivery. However, it is in the case of pregnancy without complications. In the case of twins or multiple births, in the scenario of an uncomplicated pregnancy, the permissible limit is 32 weeks. Here are some points that an expectant mother should remember for a proper journey:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Passengers must carry a medical declaration stating that they are fit to fly</li>
                        <li>You can request an aisle seat or a seat close to the lavatory</li>
                        <li>Place your seatbelt in the pelvic region</li>
                        <li>Avoid eating gas-producing food items before or during the journey</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Drink water frequently while onboard</li>
                        <li>Priority boarding</li>
                        <li>Special service on-board</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Medical assistance</p>
            <p class="secondary-font">Some situations need special comfort Here are some points to remember if you are someone who may need medical assistance while travelling.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>MEDIF form, stamped and signed, elaborating the diagnosis by a certified doctor is required</li>
                        <li>Passengers can request special assistance while booking the flight</li>
                        <li>Extra space for wheelchair-bound passengers</li>
                        <li>A stretcher is available in special cases</li>
                        <li>Crew can administer oxygen in case of need</li>
                        <li>Passengers who need to travel with Portable Oxygen Concentrator (POC) or Continuous Positive Airway Pressure Machine (CPAP) can carry the item onboard with prior permission</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with animals</p>
            <p>Be it pets or your support animals, there are certain things that the passengers need to know about while travelling with animals.</p>

            <p class="airline-subtitle">Pets</p>
            <p class="secondary-font">Here are some points to remember while travelling with your pets.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Reserve a ticket for your pet</li>
                        <li>A ticket is allowed to be booked if pets are allowed in the destination country</li>
                        <li>The animal must be over the age of ten weeks</li>
                        <li>EU pet passports must be issued by veterinarians for travellers flying to Europe with their pets</li>
                        <li>Pets are either transported in the cabin or the hold depending on things like their weight, species, and size</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Support animals</p>
            <p class="secondary-font">What are the points you need to remember about travelling with support animals? Have a look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>TAP currently allows only dogs as support animals. Passengers can travel with a guide dog, a hearing dog, or a service dog. Trained dogs, accompanied by their owners, are allowed too</li>
                        <li>The dog should be properly identified as a service animal</li>
                        <li>Passengers need to provide a training certificate</li>
                        <li>An animal passport is required</li>
                        <li>A health certificate from a credible vet is also required</li>
                        <li>Assistance dogs always travel in the cabin</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Checklist</p>
            <p class="secondary-font">Multiple things go on in a traveller’s mind before they fly. Here are some points to remember while taking a domestic trip or travelling abroad.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Make sure your IDs aren’t expired</li>
                        <li>Make photocopies of your documents</li>
                        <li>Sort out card usage regulations with your bank, especially if travelling outside the country</li>
                        <li>See a doctor before a long trip</li>
                        <li>Pack necessary medication and doctor’s prescription</li>
                        <li>Make an advance reservation for popular destinations</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel classes</p>
            <p class="secondary-font">With distinctive services and numerous features, each class of TAP Air Portugal is designed to provide passengers with an unforgettable travel experience.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">The airline is considered one among the best when it comes to Economy class travel. Here are some of the highlights of this travel class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight meals</li>
                        <li>Special menu on long-haul flights</li>
                        <li>Full HD screens</li>
                        <li>Endless entertainment options with movies, music and games</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight connectivity in certain aircraft</li>
                        <li>Spacious seats for long-haul flights</li>
                        <li>Extra recline seats for long-haul flights</li>
                        <li>A choice between comfort seats and standard seats on medium-haul flights</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Executive class</p>
            <p class="secondary-font">This class is designed to give a unique experience to travellers. Here are some important points to know about this travel class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delicious menu with the option to choose traditional Portuguese dessert</li>
                        <li>Wine, fresh fruit juice, tea and coffee are available as beverages</li>
                        <li>Availability of numerous TV shows and films for in-flight entertainment</li>
                        <li>160 albums with multiple playlists for music lovers</li>
                        <li>Personalise assistance service</li>
                        <li>Wide HD screen</li>
                        <li>Soft lighting</li>
                        <li>Lie-flat seat</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Pillow with soft cover</li>
                        <li>Comfortable headrest</li>
                        <li>Soft and comfortable duvet</li>
                        <li>Amenity kit</li>
                        <li>Power outlets for laptops</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Sockets to plug medical devices</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Business travellers</p>
            <p class="secondary-font">Travelling for business? Then the airline has some special services to offer. TAP Air Portugal organises conferences and events with special services.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Up to 15% discount for organisers and participants</li>
                        <li>Online booking</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flexible travel date and time</li>
                        <li>Mention of the event on the official TAP website</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">TAP lounges</p>
            <p class="secondary-font">While travelling with the airline, passengers can access more than 60 lounges situated across the world. So, here are some important aspects of the airline’s lounge service.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Exclusive space for relaxing</li>
                        <li>Quiet workspace with Wi-fi, computers and printers</li>
                        <li>Delicious food and drinks</li>
                        <li>Private showers and bathrooms</li>
                        <li>Passengers can buy access to the premium lounge while booking. Some lounges are free to access</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Bar service in selected countries</li>
                        <li>Smoking is forbidden in the lounges</li>
                        <li>Passengers shouldn’t walk barefoot or in nightwear</li>
                        <li>Passengers flying in executive class or have TAP silver or gold miles can access the lounges</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">TAP Miles&Go</p>
            <p>It is specially designed airline miles that help the passengers to get different advantages, TAP Air Portugal has different statuses to offer to the customers joining the programme. With the miles points collected through travel, passengers can do several things, from getting discounts on their tickets to taking advantage of other services by the airline.</p>
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