@include('site.header')
@php $page = 'Air France'; $logo = 'images/partners/air-france.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/air-france.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Air France Reservations </p>
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
    <img src="{{ asset('images/airlines/air-france.jpg') }}" class="img-fluid" alt="air france" />
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
                <h2 class="sec__title text-center">Air France</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-2">
                    Stylised as AIRFRANCE, Air France is the national airline of France. Headquartered in Tremblay-en-France, this airline is also a subsidiary of the renowned Air France–KLM Group. Founded decades ago, this airline is known for its impeccable service and attention to detail. This airline caters to numerous places across the world.
                </p>
            </blockquote>
            <p class="airline-title">Booking and cancellation</p>
            <p>Every airline has its own set of booking and cancellation policies. However, often those guidelines can seem confusing, especially in the case of international travel. That is why we are here to make your journey smooth and hassle-free. Our dedicated team at Fareorbitz helps in dealing with every aspect of your air travel - so all you have to do is enjoy your trip.</p>

            <p class="airline-title">Travel Destinations</p>
            <p class="secondary-font">Air France is known for its vast route network that is spread across the world. This airline caters to over 175 international destinations in 93 countries. In the domestic sphere too, Air France provides flight services to 36 destinations. Here is a list of the international destinations in Asia, Africa, the Americas, Oceania, and Europe where you can travel by flight with this airline.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Tirana</li>
                        <li>Algiers</li>
                        <li>Oran</li>
                        <li>Luanda</li>
                        <li>Yerevan</li>
                        <li>Buenos Aires</li>
                        <li>Vienna</li>
                        <li>Manama</li>
                        <li>Antwerp</li>
                        <li>Brussels</li>

                        <li>Cotonou</li>
                        <li>Miami</li>
                        <li>Denver</li>
                        <li>Los Angeles</li>
                        <li>Houston</li>
                        <li>New York City</li>
                        <li>San Francisco</li>
                        <li>Chicago</li>
                        <li>Dallas</li>
                        <li>Boston</li>

                        <li>Florence</li>
                        <li>Genoa</li>
                        <li>Milan</li>
                        <li>Palermo</li>
                        <li>Naples</li>
                        <li>Rome</li>
                        <li>Olbia</li>
                        <li>Pisa</li>
                        <li>Venice</li>
                        <li>Turin</li>
                        <li>Seoul</li>
                        <li>Alicante</li>
                        <li>Fort-de-France</li>
                        <li>Papeete</li>
                        <li>Saint-Denis</li>
                        <li>Djerba</li>
                        <li>Monastir</li>
                        <li>Malabo</li>
                        <li>Rovaniemi</li>
                        <li>Helsinki</li>
                        <li>Libreville</li>
                        <li>Berlin</li>
                        <li>Tbilisi</li>
                        <li>Banjul</li>
                        <li>Bremen</li>

                        <li>Delhi</li>
                        <li>Mumbai</li>
                        <li>Cork</li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Seattle</li>
                        <li>Cincinnati</li>
                        <li>Anchorage</li>
                        <li>Washington, D.C.</li>
                        <li>Boston</li>
                        <li>Minneapolis</li>
                        <li>Detroit</li>
                        <li>Atlanta</li>
                        <li>Aberdeen</li>
                        <li>Birmingham</li>

                        <li>Ho Chi Minh City</li>
                        <li>Hanoi</li>
                        <li>Caracas</li>
                        <li>Manchester</li>
                        <li>Newcastle upon Tyne</li>
                        <li>London</li>
                        <li>Dubai</li>
                        <li>Rio de Janeiro</li>
                        <li>São Paulo</li>
                        <li>Burkina Faso</li>

                        <li>Abidjan</li>
                        <li>Osaka</li>
                        <li>Tokyo</li>
                        <li>Nairobi</li>
                        <li>Kuwait</li>
                        <li>Beirut</li>
                        <li>Liberia</li>
                        <li>Madagascar</li>
                        <li>Male</li>
                        <li>Mali</li>

                        <li>Barcelona</li>
                        <li>Bilbao</li>
                        <li>Düsseldorf</li>
                        <li>Frankfurt</li>
                        <li>Hamburg</li>
                        <li>Nuremberg</li>
                        <li>Munich</li>
                        <li>Stuttgart</li>
                        <li>Athens</li>
                        <li>Accra</li>
                        <li>Corfou</li>
                        <li>Heraklion</li>

                        <li>Ben Gurion Airport</li>
                        <li>Bari</li>
                        <li>Bologna</li>
                        <li>Cagliari</li>
                        <li>Catania</li>
                        <li>Dublin</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Sofia</li>
                        <li>Yaoundé</li>
                        <li>Douala</li>
                        <li>Montréal</li>
                        <li>Marrakech</li>
                        <li>Toronto</li>
                        <li>Vancouver</li>
                        <li>Quebec City</li>
                        <li>St. Maarten</li>
                        <li>N'Djamena</li>

                        <li>Bangui</li>
                        <li>Beijing</li>
                        <li>Tianjin</li>
                        <li>Shanghai</li>
                        <li>Bogotá</li>
                        <li>San José</li>
                        <li>Dubrovnik</li>
                        <li>Zagreb</li>
                        <li>Havana</li>
                        <li>Split</li>

                        <li>Malta</li>
                        <li>Mauritania</li>
                        <li>Mauritius</li>
                        <li>Cancún</li>
                        <li>Guadalajara</li>
                        <li>Mexico City</li>
                        <li>Agadir</li>
                        <li>Casablanca</li>
                        <li>Rabat–Salé Airport</li>
                        <li>Tangier Ibn Battouta Airport</li>

                        <li>Ibiza</li>
                        <li>Las Palmas</li>

                        <li>Oslo</li>
                        <li>Muscat</li>
                        <li>Lima</li>
                        <li>Kraków</li>
                        <li>Warsaw</li>
                        <li>Wrocław</li>
                        <li>Faro</li>
                        <li>Lisbon</li>
                        <li>Porto</li>
                        <li>Dakar</li>
                        <li>Maya-Maya Airport</li>
                        <li>Pointe Noire Airport</li>
                        <li>Bucharest</li>
                        <li>Belgrade Nikola Tesla Airport</li>
                        <li>Victoria</li>
                        <li>Freetown</li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Kinshasa</li>
                        <li>Prague</li>
                        <li>Djibouti City</li>
                        <li>Billund</li>
                        <li>Santo Domingo</li>
                        <li>Copenhagen</li>
                        <li>Punta Cana</li>
                        <li>Cairo</li>
                        <li>Tenerife</li>
                        <li>Palma de Mallorca</li>
                        <li>Seville</li>

                        <li>Valencia</li>
                        <li>Stockholm</li>
                        <li>Gothenburg</li>
                        <li>Zürich</li>
                        <li>Geneva</li>
                        <li>Bangkok</li>
                        <li>Istanbul</li>
                        <li>Tunis</li>
                        <li>Lomé</li>
                        <li>Zanzibar</li>

                        <li>Maputo</li>
                        <li>Yangon</li>
                        <li>Amsterdam</li>
                        <li>Rotterdam</li>
                        <li>Diori Hamani International Airport</li>
                        <li>Abuja</li>
                        <li>Lagos</li>
                        <li>Port Harcourt</li>
                        <li>Bergen</li>

                        <li>Madrid</li>
                        <li>Málaga</li>

                        <li>Mykonos</li>
                        <li>Rhodes</li>
                        <li>Santorini</li>
                        <li>Thessaloniki</li>
                        <li>Zakynthos</li>
                        <li>Conakry</li>
                        <li>Haiti</li>
                        <li>Budapest</li>
                        <li>Bangalore</li>
                        <li>Chennai</li>
                        <li>Ljubljana</li>
                        <li>Cape Town</li>
                        <li>Johannesburg</li>

                        <li>Pointe-à-Pitre</li>
                        <li>Cayenne</li>
                        <li>Singapore</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Domestic Travel Destinations</p>
            <p class="secondary-font">Here is a list of the domestic travel destinations of Air France.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Agen</li>
                        <li>Ajaccio</li>
                        <li>Aurillac</li>
                        <li>Bastia</li>
                        <li>Biarritz</li>
                        <li>Bordeaux</li>
                        <li>Brest</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Brive</li>
                        <li>Caen</li>
                        <li>Calvi</li>
                        <li>Castres</li>
                        <li>Clermont-Ferrand</li>
                        <li>Figari</li>
                        <li>La Rochelle</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Lille</li>
                        <li>Lourdes</li>
                        <li>Lyon</li>
                        <li>Marseille</li>
                        <li>Montpellier</li>
                        <li>Nice</li>
                        <li>Paris</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Pau</li>
                        <li>Perpignan</li>
                        <li>Rennes</li>
                        <li>Rouen</li>
                        <li>Strasbourg</li>
                        <li>Toulon</li>
                        <li>Toulouse</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Codeshare agreements</p>
            <p class="secondary-font">The arrangement of codeshare is beneficial for both the airline and the passengers. With this option, the travellers get more options to choose from. Besides, this arrangement also helps bring down the travel cost. Here is a list of the airlines with whom Air France has entered into this agreement.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Aeroflot</li>
                        <li>Air Austral</li>
                        <li>Air Burkina</li>
                        <li>Air Corsica</li>
                        <li>Air Europa</li>
                        <li>Aerolíneas Argentinas</li>
                        <li>Aeroméxico</li>
                        <li>Air Antilles</li>
                        <li>Air Astana</li>
                        <li>Air Seychelles</li>
                        <li>Air Tahiti Nui</li>
                        <li>airBaltic</li>
                        <li>Aircalin</li>
                        <li>Austrian Airlines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Azerbaijan Airlines</li>
                        <li>Belavia</li>
                        <li>Bulgaria Air</li>
                        <li>Air France Hop</li>
                        <li>Air Malta</li>
                        <li>Air Mauritius</li>
                        <li>Air Serbia</li>
                        <li>China Southern Airlines</li>
                        <li>CityJet</li>
                        <li>Copa Airlines</li>
                        <li>China Eastern Airlines</li>
                        <li>Delta Air Lines</li>
                        <li>Etihad Airways</li>
                        <li>Finnair</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Garuda Indonesia</li>
                        <li>Copa Airlines Colombia</li>
                        <li>Croatia Airlines</li>
                        <li>Czech Airlines</li>
                        <li>Gol Transportes Aéreos</li>
                        <li>Georgian Airways</li>
                        <li>IndiGo</li>
                        <li>ITA Airways</li>
                        <li>Kenya Airways</li>
                        <li>KLM</li>
                        <li>Korean Air</li>
                        <li>LATAM Brasil</li>
                        <li>Japan Airlines</li>
                        <li>Luxair</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Middle East Airlines</li>
                        <li>Qantas</li>
                        <li>TAROM</li>
                        <li>Ukraine International Airlines</li>
                        <li>Vietnam Airlines</li>
                        <li>Virgin Atlantic</li>
                        <li>Saudia</li>
                        <li>Singapore Airlines</li>
                        <li>Sky Express</li>
                        <li>Swiss International Air Lines</li>
                        <li>TAAG Angola Airlines</li>
                        <li>WestJet</li>
                        <li>Wideroe</li>
                        <li>Winair</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Check-in options</p>

            <p class="secondary-font">There are two check-in options that the passengers can opt for. The first one is online check-in. Under this service, fliers can easily use the official website or app to check in starting from 30 hours before the departure time.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Here is a quick guide for online check-in</li>
                        <li>Visit the “Check-in” section</li>
                        <li>Enter booking reference. Alternatively, you can also use your Flying Blue card number</li>
                        <li>You can also cancel your check-in until the deadline is valid</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle"> What to do once you are done with your online check-in. Here are the quick steps:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can receive your boarding pass in email. You can print it or download it to your smartphone. Also, you can collect it from Air France interactive kiosk while visiting the airport</li>
                        <li>The next step is to get your baggage tag printed. You can also do so while visiting the airport</li>
                        <li>Depending on whether you weather have already received your baggage tag and boarding pass or not, make sure to reach the airport on time</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage</p>
            <p class="secondary-font">Be it hand baggage or your check-in luggage, there are certain rules that you need to follow while taking them on the flight. So, here are some points that you need to remember while flying with Air France.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The number of your hand baggage depends on the class in which you are travelling. For Economy class, you can take one hand baggage along with one personal item. The number for Premium Economy, Business or Premium Cabin changes to two hand pieces of baggage and one personal item</li>
                        <li>There are some items that are neither personal items nor hand baggage. However, you can take them on board. They’re coat, jacket, duty-free items, umbrella, strollers, car seats, and diaper bags</li>
                        <li>You can carry paste, creams and liquid in hand baggage but there are certain guidelines regarding them. The bottles cannot exceed 100 ml and they should be put in a transparent bag</li>
                        <li>Some liquids, like medicine and baby food, are allowed on board without any kind of restrictions</li>
                        <li>You should always store your hand baggage in the overhead bin above your seat. You can place the personal item below the seat in front of you. However, that isn’t allowed for someone seating in an exit row</li>
                        <li>If you have a connecting flight with some other airline, then the baggage guidelines of that airline will apply</li>
                        <li>Always attach luggage tags. Also, put labels with your name and contact details. Without a proper tag including a barcode, the computers won’t be able to identify your bags properly</li>
                        <li>Personalise your check-in luggage using objects like ribbons or stickers which will make it easier for you to locate them</li>
                        <li>Lock your bags</li>
                        <li>Weigh baggage before to make sure they’re within the permitted limit</li>
                        <li>Keep important documents and fragile items in your hand baggage if possible</li>
                        <li>Free baggage drop-off service at selected airports</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items: </p>
            <p class="secondary-font">There are certain items that are not allowed in hand baggage but can be taken in check-in luggage and vice versa. Furthermore, there are also those items that are strictly prohibited during flying. Here is a list of items that you can or cannot take while travelling with Air France.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Non-Toxic and nonflammable gases for domestic or athletic purposes are allowed as check-in luggage but not in the cabin</li>
                        <li>Non-radioactive medication is allowed</li>
                        <li>Toiletries - there is a certain quantity that you can carry if carrying them in hand baggage</li>
                        <li>Toxic aerosol products or flammable items like paint, ink, enamel, varnish, ethanol, lighter fluid, and acetone aren’t allowed in the aircraft</li>
                        <li>Lighters aren’t allowed</li>
                        <li>Devices in check-in luggage should be switched off</li>
                        <li>Devices with fuel cells like mobile phones, laptops, cameras and video records are allowed only in hand luggage</li>
                        <li>Liquid oxygen is not allowed</li>
                        <li>Explosive, stun guns or batons or other electric weapons are not allowed</li>
                        <li>Alcoholic beverages are allowed in a limited quantity</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with kids</p>
            <p class="secondary-font">A family vacation is fun but the other side of the picture is that it is often tough to travel with kids. Air France tries to make your journey as hassle-free as possible. So, here are some services and also tips related to travelling with family, especially kids.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>There are special discounts given on tickets while travelling with kids</li>
                        <li>Priority boarding</li>
                        <li>Well-equipped nursing stations at different airports</li>
                        <li>Baggage pick-up service to and from home in selected places. Also, the option of bagged delivery at the preferred address</li>
                        <li>Kids get the same baggage allowed as adults</li>
                        <li>Bassinet available on board</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Special meals for kids on long-haul flights</li>
                        <li>Personalised meal option at prior request for infants below two years of age</li>
                        <li>Games, colouring books, and other entertainment options on long-haul flights</li>
                        <li>Avoid travel if the infant is ill</li>
                        <li>Travelling with infants below the age of seven days is not recommended</li>
                        <li>Every child must be accompanied by an adult above the age of 18</li>
                        <li>Foldable stroller allowed on board without any extra cost</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Flying Blue - the loyalty programme</p>
            <p class="secondary-font">The loyalty programmes designed by the different airlines help the passengers get the best travel options and the opportunity to enjoy added services. Air France’s programme is called Flying Blue and here are some points to know:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The working of the programme is simple. You earn Miles and also gain XP. You can use them for getting perks and advancing to the next levels</li>
                        <li>Miles can be used as currency for doing a variety of things. You can enjoy an upgrade, get seal options, rent a car, and even book a hotel room</li>
                        <li>Buy tickets with your Miles</li>
                        <li>Shop online with enough points</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with animals</p>
            <p class="secondary-font">Be it pets or service animals, pet parents always want to give the best to their fur babies. Air France has special services for passengers travelling with pets. Here are some of the points to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Pets must be above 15 weeks to be eligible to travel on Air France</li>
                        <li>Any routing, transfer or care fees incurred during the travel will be the responsibility of the passenger</li>
                        <li>Animals that are not cats or dogs must be transported by cargo</li>
                        <li>Purchase a travel bag that will help in the transportation of your pet, if you are carrying it in the cabin. You can get several options for bags at the official Air France website. Upon purchasing, you get Miles too</li>
                        <li>Animals must have all required vaccination certificates to be permitted on board</li>
                        <li>Electronic chips are a must for cats or dogs travelling within the European Union. They should also have a European pet certificate</li>
                        <li>Certificate from an authorised veterinarian</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Unaccompanied minors</p>
            <p class="secondary-font">Cannot accompany your kid on their trip but are worried about how they will fly solo? Air France has a dedicated service for kids travelling alone. Here are some of the points to remember:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Give special travel documents required by some countries to your kid before they board the flight</li>
                        <li>Surgical masks are recommended</li>
                        <li>“Kids Solo” service is mandatory for kids between the ages of 4 and 11 travelling alone within France</li>
                        <li>The service is also mandatory for kids between the ages of 5 to 14 in case of international travel</li>
                        <li>You can book the service online</li>
                        <li>You will have to fill out an online “Unaccompanied form” to notify the airline about the travel condition of your child</li>
                        <li>Solo travel for kids on connecting flights is available only on selected routes</li>
                        <li>Track the journey of your child in real-time</li>
                        <li>Trained cabin crew who takes care of your child to keep them safe and make them comfortable during the journey</li>
                        <li>Entertainment options like cartoons, movies, and games</li>
                        <li>Special meals served to kids on long-haul flights</li>
                        <li>Teach your kids to remain seated in their designated seats</li>
                        <li>Ensure they have all the important items, like documents and medication, with them before they board the flight</li>
                        <li>Encourage your kid to ask for the cabin crew’s help whenever required</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel classes</p>
            <p>Like the other airlines, Air France also has dedicated travel classes for passengers. The services and amenities provided in each class differ from one another. There are three classes that this airline offers to its passengers. They’re economy cabin, premium economy cabin, and business class cabin. There is also a fourth travel class option for passengers called La Premiere. However, it is available only on selected routes and aircraft. All the classes have options for delicious meals and comfortable seats.</p>
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