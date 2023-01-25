@include('site.header')
@php $page = 'Brussels Airlines'; $logo = 'images/partners/brussels-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/brussels-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Brussels Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/brussels-airline.jpg') }}" class="img-fluid" alt="brussels airlines" />
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
                <h2 class="sec__title text-center">Brussels Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Brussels Airlines, founded in 2002, is the national airline of the country of Belgium. With its base at Brussels Airport, the airline covers a wide range of destinations in the regions of North America, Africa, and Europe. A member of Star Alliance, a leading global airline network, this airline is also one of the hub airlines of the Lufthansa Group.
            </blockquote>

            <p class="airline-title">How we help</p>
            <p>Brussels Airlines has huge networking that can take you from one corner of the world to another. Due to that, there are also certain regulations maintained by the airline that the passengers need to follow. Furthermore, there are rules regarding booking, cancellation or delaying of flights. All these processes can claim your precious time and many create a hassle. That is why we, at Fareorbitz, take care of all your travel needs to help make your journey smooth. Also, our dedicated team is always there to help you in case you face any issues with your air travel.</p>

            <p class="airline-title">Travel destinations</p>
            <p class="secondary-font">This airline services various cities across the world. With a wide range of destinations to choose from, this airline offers passengers comfortable travel.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Accra</li>
                        <li>Lanzarote</li>
                        <li>Malaga</li>
                        <li>Alicante</li>
                        <li>Athens</li>
                        <li>AbuDhabi</li>
                        <li>Barcelona</li>
                        <li>Berlin</li>
                        <li>Birmingham</li>
                        <li>Bilbao</li>
                        <li>Banjul</li>
                        <li>Bangkok</li>
                        <li>Bologna</li>
                        <li>Stockholm</li>
                        <li>Bordeaux</li>
                        <li>Bari</li>
                        <li>Abidjan</li>
                        <li>Bujumbura</li>
                        <li>Budapest</li>
                        <li>Cairo</li>
                        <li>Paris</li>
                        <li>Kerkyra</li>
                        <li>Chania</li>
                        <li>Cotonou</li>
                        <li>Copenhagen</li>
                        <li>Catania</li>
                        <li>Dubrovnik</li>
                        <li>Douala</li>
                        <li>Dakar</li>
                        <li>Edinburgh</li>
                        <li>Yerevan</li>
                        <li>NewYork</li>
                        <li>Faro</li>
                        <li>Rome</li>
                        <li>Kinshasa</li>
                        <li>Florence</li>
                        <li>Freetown</li>
                        <li>Frankfurt</li>
                        <li>Gothenburg</li>
                        <li>Geneva</li>
                        <li>Hamburg</li>
                        <li>Heraklion</li>
                        <li>Hurghada</li>
                        <li>Washington</li>
                        <li>Ibiza</li>
                        <li>Kigali</li>
                        <li>Kos</li>
                        <li>Luanda</li>
                        <li>London</li>
                        <li>Milan</li>
                        <li>Lisbon</li>
                        <li>Ljubljana</li>
                        <li>Las Palmas</li>
                        <li>Lyon</li>
                        <li>Madrid</li>
                        <li>Manchester</li>
                        <li>Mytilene</li>
                        <li>Malta</li>
                        <li>Marseille</li>
                        <li>Munich</li>
                        <li>Naples</li>
                        <li>Nice</li>
                        <li>Olbia</li>
                        <li>Porto</li>
                        <li>Chicago</li>
                        <li>Oslo</li>
                        <li>Ouagadougou</li>
                        <li>Palma De Mallorca</li>
                        <li>Palermo</li>
                        <li>Prague</li>
                        <li>Pristina</li>
                        <li>Marrakech</li>
                        <li>Rhodes</li>
                        <li>Riga</li>
                        <li>Samos</li>
                        <li>Split</li>
                        <li>Stuttgart</li>
                        <li>Strasbourg</li>
                        <li>Tenerife</li>
                        <li>Tallinn</li>
                        <li>Toulouse</li>
                        <li>Tel Aviv</li>
                        <li>Venice</li>
                        <li>Vienna</li>
                        <li>Valencia</li>
                        <li>Vilnius</li>
                        <li>Montreal</li>
                        <li>Zadar</li>
                        <li>Zagreb</li>
                        <li>Zurich</li>
                        <li>Zakynthos</li>
                        <li>Antwerp</li>
                        <li>Antwerp</li>
                        <li>Monrovia</li>
                        <li>Basel</li>
                        <li>Toronto</li>
                        <li>Conakry</li>
                        <li>Lome</li>
                        <li>Yaounde</li>
                        <li>Entebbe</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Amsterdam</li>
                        <li>Amsterdam</li>
                        <li>Rotterdam</li>
                        <li>Rotterdam</li>
                        <li>Evenes</li>
                        <li>Antalya</li>
                        <li>Bodrum</li>
                        <li>MarsaAlam</li>
                        <li>Patras</li>
                        <li>Tarbes</li>
                        <li>Al Hoceima</li>
                        <li>Comiso</li>
                        <li>Ouarzazate</li>
                        <li>Errachidia</li>
                        <li>Resende</li>
                        <li>Resende</li>
                        <li>Kittila</li>
                        <li>Rovaniemi</li>
                        <li>Bergen</li>
                        <li>Glasgow</li>
                        <li>Algiers</li>
                        <li>Ankara</li>
                        <li>Aarhus</li>
                        <li>Aalborg</li>
                        <li>Amman</li>
                        <li>Almaty</li>
                        <li>Abuja</li>
                        <li>Addis Ababa</li>
                        <li>Albuquerque</li>
                        <li>Anchorage</li>
                        <li>Gujarat</li>
                        <li>Auckland</li>
                        <li>Adelaide</li>
                        <li>Ancona</li>
                        <li>Brindisi</li>
                        <li>Baku</li>
                        <li>Belgrade</li>
                        <li>Beirut</li>
                        <li>Atlanta</li>
                        <li>Bahrain</li>
                        <li>Barbados</li>
                        <li>Austin</li>
                        <li>Barranquilla</li>
                        <li>Amritsar</li>
                        <li>Bucaramanga</li>
                        <li>Billund</li>
                        <li>Bastia</li>
                        <li>Bremen</li>
                        <li>Boston</li>
                        <li>Mumbai</li>
                        <li>Nashville</li>
                        <li>Bengaluru</li>
                        <li>Bogota</li>
                        <li>Belo Horizonte</li>
                        <li>Boise</li>
                        <li>Brisbane</li>
                        <li>Beijing</li>
                        <li>Cagliari</li>
                        <li>Bucharest</li>
                        <li>Cologne</li>
                        <li>Berne</li>
                        <li>Charleston</li>
                        <li>Buffalo</li>
                        <li>Buenos Aires</li>
                        <li>Baltimore</li>
                        <li>Brasilia</li>
                        <li>Christchurch</li>
                        <li>Guangzhou</li>
                        <li>Debrecen</li>
                        <li>Cluj Napoca</li>
                        <li>Cancun</li>
                        <li>Charlotte</li>
                        <li>Colombo</li>
                        <li>Columbus</li>
                        <li>Cincinnati</li>
                        <li>Cleveland</li>
                        <li>Chiang Mai</li>
                        <li>Cali</li>
                        <li>Cartagena</li>
                        <li>CapeTown</li>
                        <li>Curitiba</li>
                        <li>Dar es Salaam</li>
                        <li>Cairns</li>
                        <li>Chengdu</li>
                        <li>Dublin</li>
                        <li>Düsseldorf</li>
                        <li>Dortmund</li>
                        <li>Dresden</li>
                        <li>Dubai</li>
                        <li>Arbil</li>
                        <li>Delhi</li>
                        <li>Dalaman</li>
                        <li>Detroit</li>
                        <li>Dammam</li>
                        <li>Denver</li>
                        <li>Dallas/FortWorth</li>
                        <li>El Paso</li>
                        <li>Durban</li>
                        <li>DesMoines</li>
                        <li>Bali</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Funchal</li>
                        <li>Karlsruhe</li>
                        <li>Münster</li>
                        <li>Friedrichshafen</li>
                        <li>Münster</li>
                        <li>Fuerteventura</li>
                        <li>Gdańsk</li>
                        <li>Fort Lauderdale</li>
                        <li>Fort Myers</li>
                        <li>Florianópolis</li>
                        <li>Guadalajara</li>
                        <li>Fortaleza</li>
                        <li>Fukuoka</li>
                        <li>El Calafate</li>
                        <li>Génova</li>
                        <li>Hanover</li>
                        <li>Graz</li>
                        <li>Helsinki</li>
                        <li>HongKong</li>
                        <li>Guatemala</li>
                        <li>Greensboro</li>
                        <li>Greenville</li>
                        <li>Phuket</li>
                        <li>La Habana</li>
                        <li>Guayaquil</li>
                        <li>Goiânia</li>
                        <li>Hiroshima</li>
                        <li>Honolulu</li>
                        <li>Hanoi</li>
                        <li>Mykonos</li>
                        <li>Iasi</li>
                        <li>Istanbul</li>
                        <li>Ivalo</li>
                        <li>Innsbruck</li>
                        <li>Izmir</li>
                        <li>Jersey</li>
                        <li>Jacksonville</li>
                        <li>Indianapolis</li>
                        <li>Jackson</li>
                        <li>Homer</li>
                        <li>Jakarta</li>
                        <li>Hyderabad</li>
                        <li>Harare</li>
                        <li>Jeddah</li>
                        <li>Cracovia</li>
                        <li>Thira</li>
                        <li>Košice</li>
                        <li>Klagenfurt</li>
                        <li>Kalamata</li>
                        <li>Larnaca</li>
                        <li>Katowice</li>
                        <li>Chisináu</li>
                        <li>Kilimanjaro</li>
                        <li>Johannesburg</li>
                        <li>LasVegas</li>
                        <li>Kuwait</li>
                        <li>LosAngeles</li>
                        <li>KualaLumpur</li>
                        <li>Kona</li>
                        <li>Luxembourg</li>
                        <li>Leipzig/Halle</li>
                        <li>Mombasa</li>
                        <li>Lagos</li>
                        <li>Lima</li>
                        <li>Chennai</li>
                        <li>LaPaz</li>
                        <li>Lihue</li>
                        <li>Mannheim</li>
                        <li>Minsk</li>
                        <li>Miami</li>
                        <li>Memphis</li>
                        <li>Muscat</li>
                        <li>New Orleans</li>
                        <li>Male</li>
                        <li>Kansas City</li>
                        <li>Manila</li>
                        <li>Mexico City</li>
                        <li>Milwaukee</li>
                        <li>Medellin</li>
                        <li>Mauritius</li>
                        <li>Melbourne</li>
                        <li>Nantes</li>
                        <li>Newcastle</li>
                        <li>Nuremberg</li>
                        <li>Nürnberg</li>
                        <li>Nairobi</li>
                        <li>Norfolk</li>
                        <li>Oklahoma City</li>
                        <li>Omaha</li>
                        <li>Montevideo</li>
                        <li>Monterrey</li>
                        <li>Nagoya</li>
                        <li>Kahului</li>
                        <li>Okinawa</li>
                        <li>Pisa</li>
                        <li>Poznan</li>
                        <li>Paderborn</li>
                        <li>Philadelphia</li>
                        <li>Orlando</li>
                        <li>Pittsburgh</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Port Elizabeth</li>
                        <li>Port Harcourt</li>
                        <li>Pereira</li>
                        <li>Porto Alegre</li>
                        <li>Portland</li>
                        <li>Phoenix</li>
                        <li>Osaka</li>
                        <li>Perth</li>
                        <li>Pula</li>
                        <li>Rijeka</li>
                        <li>Reykjavík</li>
                        <li>Rzeszow</li>
                        <li>Panama City</li>
                        <li>Raleigh Durham</li>
                        <li>Riyadh</li>
                        <li>San Diego</li>
                        <li>San Antonio</li>
                        <li>Sao Paulo</li>
                        <li>Recife</li>
                        <li>Punta Cana</li>
                        <li>Santa Barbara</li>
                        <li>Reno</li>
                        <li>Rio de Janeiro</li>
                        <li>Thessaloniki</li>
                        <li>Skopje</li>
                        <li>Santiago de Compostela</li>
                        <li>Sarajevo</li>
                        <li>Sibiu</li>
                        <li>SanJose</li>
                        <li>Seoul</li>
                        <li>Mahe Seychelles</li>
                        <li>San Francisco</li>
                        <li>Seattle</li>
                        <li>Santiago de Chile</li>
                        <li>SanJuan</li>
                        <li>Singapore</li>
                        <li>Ho Chi Minh City</li>
                        <li>Salt Lake City</li>
                        <li>Santo Domingo</li>
                        <li>Honshu</li>
                        <li>Shanghai</li>
                        <li>Shenyang</li>
                        <li>Seville</li>
                        <li>Stavanger</li>
                        <li>Tbilisi</li>
                        <li>Lamezia Terme</li>
                        <li>Salzburg</li>
                        <li>Sofia</li>
                        <li>Podgorica</li>
                        <li>Saint Louis</li>
                        <li>Santa Cruz Dela Sierra</li>
                        <li>Surabaya</li>
                        <li>Salvador</li>
                        <li>Sapporo</li>
                        <li>Sydney</li>
                        <li>Qingdao</li>
                        <li>Varna</li>
                        <li>Tromso</li>
                        <li>Turin</li>
                        <li>Timișoara</li>
                        <li>Trieste</li>
                        <li>Tirana</li>
                        <li>Trondheim</li>
                        <li>Teheran</li>
                        <li>Nursultan</li>
                        <li>Tampa</li>
                        <li>Koh Samui</li>
                        <li>Taipei</li>
                        <li>Tucson</li>
                        <li>Tokyo</li>
                        <li>Warsaw</li>
                        <li>Jerez de la Frontera</li>
                        <li>Verona</li>
                        <li>Wrocław</li>
                        <li>Halifax</li>
                        <li>Quebec</li>
                        <li>Ottawa</li>
                        <li>Moncton</li>
                        <li>Winnipeg</li>
                        <li>Windhoek</li>
                        <li>Calgary</li>
                        <li>Vancouver</li>
                        <li>Vientiane</li>
                        <li>Rennes</li>
                        <li>Bristol</li>
                        <li>Ponta Delgada</li>
                        <li>Djerba</li>
                        <li>Zanzibar</li>
                        <li>Lampang</li>
                        <li>Victoria Harbour</li>
                        <li>Cork</li>
                        <li>Kavala</li>
                        <li>Ohrid</li>
                        <li>Puerto Plata</li>
                        <li>Grenoble</li>
                        <li>Medan</li>
                        <li>Nanjing</li>
                        <li>Changchun</li>
                        <li>Bydgoszcz</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Codeshare agreements</p>

            <p class="secondary-font">The arrangement of a codeshare agreement is beneficial for both the airline and the passengers. Under this, passengers get access to more flights. It also helps bring down the airfare. Here are the airlines with which Brussels Airlines has codeshare agreements.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Aegean Airlines</li>
                        <li>Aeroflot</li>
                        <li>Africa World Airlines</li>
                        <li>airBaltic</li>
                        <li>Air Canada</li>
                        <li>Air Malta</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>All Nippon Airways</li>
                        <li>Asiana Airlines</li>
                        <li>Austrian Airlines</li>
                        <li>Cathay Pacific</li>
                        <li>Croatia Airlines</li>
                        <li>EgyptAir</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Etihad Airways</li>
                        <li>Eurowings</li>
                        <li>Hainan Airlines</li>
                        <li>Lufthansa</li>
                        <li>Royal Air Maroc</li>
                        <li>Singapore Airlines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Swiss International Air Lines</li>
                        <li>TAAG Angola Airlines</li>
                        <li>TAP Air Portugal</li>
                        <li>TAROM</li>
                        <li>Thai Airways International</li>
                        <li>United Airlines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Class</p>
            <p>Brussels Airlines has specially designed travel classes to meet the needs of every passenger. Though each class offers distinctive amenities, passengers can be sure about getting perfect service on each trip. This airline offers three travel classes - Economy, Premium Economy, and Business.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">Economy class is available on both long-haul and short flights. Here are some of the highlights of this travel class.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>One carry-on baggage is allowed in the cabin</li>
                        <li>One check-in luggage</li>
                        <li>Passengers have the option to select preferred seats</li>
                        <li>Digital newspaper</li>
                        <li>Complimentary meal service</li>
                        <li>Free entertainment options for long-haul flights</li>
                        <li>Spacious seats</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Comfortable backrests</li>
                        <li>Generous leg space</li>
                        <li>Personal tray table</li>
                        <li>Adjustable neck support</li>
                        <li>USB power outlet</li>
                        <li>Lighting tailored to flight phases for a comfortable journey</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy</p>
            <p class="secondary-font">With a separate seating area on a long-haul flight, this class gives you the experience of flying in privacy while ensuring absolute comfort. Here are some of the features of this travel class.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>This class has only 21 seats</li>
                        <li>More personal space</li>
                        <li>One hand luggage</li>
                        <li>Two check-in luggage</li>
                        <li>Upgraded culinary experience</li>
                        <li>Lounge access at selected airports</li>
                        <li>Free water bottle</li>
                        <li>Priority check-in at selected airports</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>About 23% more leg space than Economy class</li>
                        <li>Semi-recline seat</li>
                        <li>Expanded armrest for privacy</li>
                        <li>Footrest</li>
                        <li>Large table tray</li>
                        <li>HD touchscreen</li>
                        <li>AC power plug</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">This class is known for providing passengers with the utmost luxurious journey. With exclusive services, travelling in this class is an experience in itself. So, what are the features that make this class stand out among others? Take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Lounge access</li>
                        <li>Priority Boarding</li>
                        <li>More baggage allowance and that too free of cost</li>
                        <li>Priority check-in</li>
                        <li>Exclusive in-flight meals</li>
                        <li>Two hand pieces of baggage</li>
                        <li>Two check-in luggage</li>
                        <li>Priority boarding</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority access at security checkpoints</li>
                        <li>Unoccupied next seat on short or medium-haul flights</li>
                        <li>Fully-flat beds</li>
                        <li>Adjustable seat</li>
                        <li>Large HD screen</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Exclusive Amenity kit</li>
                        <li>Food prepared by Michelin-starred chefs</li>
                        <li>Selection of award-winning wines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Lounges</p>
            <p>Waiting for a connecting flight? Want to get comfortable and catch some rest? Or are you at the airport early and looking for a space to rest? Brussels Airlines offers luxurious lounge options at airports that help passengers catch relaxing moments before their next air travel.</p>

            <p class="airline-subtitle">Lounges at Brussels</p>
            <p class="secondary-font">Have some time before you catch your next flight? Here are two lounges, besides the Diamond Lounge operated by Brussels Airport, that you can access. Take a look at the distinctive features of each place at Brussels Airport.</p>

            <p class="airline-subtitle">THE LOFT by Brussels Airlines and Lexus:</p>

            <p class="secondary-font">Uniquely designed lounge, this place is perfect to relax, be productive, or even getting entertained. Here are things to know about this lounge.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Shower</li>
                        <li>Working area</li>
                        <li>Television</li>
                        <li>Meeting rooms</li>
                        <li>Lockers</li>
                        <li>Sleeping area</li>
                        <li>Close to gate</li>
                        <li>Finest hospitality</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Premium roasted Belgian coffee</li>
                        <li>Draft beer at a Belgian bar</li>
                        <li>Fresh culinary delight</li>
                        <li>Belgian chocolates</li>
                        <li>Exclusive VIP area with a living room and a state-of-the-art kitchen</li>
                        <li>Touch screen for games</li>
                        <li>Individual living rooms</li>
                        <li>Pets are allowed in this lounge</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">The Sunrise</p>
            <p class="secondary-font">The next lounge you can access at Brussels airport is this beautifully decorated lounge. Here are some of the distinctive features:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Relax area</li>
                        <li>Working area</li>
                        <li>Located at the end of the pier, this lounge offers an amazing view to passengers</li>
                        <li>Premium Belgian coffee</li>
                        <li>Comfortable chairs</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Massage chairs</li>
                        <li>Lounge beds</li>
                        <li>Shower</li>
                        <li>Pets are allowed in this lounge</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Lounges at Kinshasa</p>
            <p class="secondary-font">When in N’Djili Airport in Kinshasa, passengers can access this business class lounge to relax or get entertainment before they catch their flight. Take a look at some of the features of this lounge:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Stylish Design with a signature Belgian touch</li>
                        <li>Comfortable lounge</li>
                        <li>Working area</li>
                        <li>Television</li>
                        <li>Wi-fi</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Near airlines gate</li>
                        <li>Delicious snacks and refreshments</li>
                        <li>Soft drinks and alcoholic beverages</li>
                        <li>Entertainment options</li>
                        <li>You can take your four-legged pet babies inside this lounge</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-subtitle">Worldwide lounges</p>
            <p class="secondary-font">There are different lounges situated across various airports that you can access while travelling with Brussels Airlines. Each lounge offers incredible services to travellers.</p>

            <p class="airline-title">Travelling with kids</p>
            <p class="secondary-font">Travelling with kids is fun but alongside it is tough too. Hence, there are certain things that you need to keep in mind and also know about.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>If your kid turns two years before the return flight, then he or she would be considered an infant</li>
                        <li>Children must be seated close to you. They shouldn’t be more than one or two rows away from you</li>
                        <li>Infants are not allowed hand pieces of luggage but their check-in luggage capacity is the same as an adult</li>
                        <li>One carry basket, seat, or pushchair for an infant is allowed on board</li>
                        <li>When travelling with partner airlines, the rules of that particular airline will apply</li>
                        <li>If you have booked a seat for your kid, then you are allowed to bring a leg extension or inflated bed for your kids</li>
                        <li>Children between the ages of 5 to 11 years are allowed to travel alone but if you have booked a special service</li>
                        <li>There are certain documents you need when booking a special service for your kid. You need a valid passport, child’s ID card, health certificate, visa for the destination country, and a special form allowing your kid to travel alone</li>
                        <li>Make sure that your kid wears a band with his or her name written on it</li>
                        <li>The trained cabin crew would take care of your children in the best possible way. However, also teach your child to stay in their seats during the flight. Also, if they have any issues teach them it’s ok to ask for help from the cabin crew</li>
                        <li>Once the airline crew have checked all the proper documentation upon arrival, they will hand over the kid to the designated person</li>
                        <li>There is infant food available online. Also, parents can order special food while booking the tickets</li>
                        <li>Peanuts are not allowed onboard</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Special assistance</p>
            <p class="secondary-font">The airline always tries to make people’s journeys as comfortable as possible. They have special services designed for people with special needs. Here are some of the aspects of the service:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can book service for special assistance while booking your ticket</li>
                        <li>If you have any special medical needs, do let the airline know about that while booking your tickets</li>
                        <li>Under special service, the crew can assist you to the toilet, assist you to eat meals, and administer medication</li>
                        <li>In case of a connecting flight, the assist team will help you move from one place to another comfortably</li>
                        <li>Upon arrival, the cabin crew will assist you in getting down from the plane and help you exit the airport</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Medical assistance</p>
            <p>Passengers with impairments could be capable of being independent in their day-to-day lives. However, it is always advisable to travel with a friend or a family member. Passengers are obligated to travel with a companion if they have visual or hearing impairment. Also, you need a companion if you need help during an emergency evacuation. You can also book medical assistance services in case you’re unable to travel with a companion. The airline has specialised services and collaboration with medical travel companions. Hence, you can have a doctor, a paramedic, or a nurse accompany you on your trip.</p>

            <p class="airline-title">Meals</p>
            <p class="secondary-font">The airline has specially designed menus for travellers. The food is cooked and packed ensuring all the safety guidelines. So, here are the options that you can explore.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>On long-haul flights, assorted meals are provided for the passengers. The food is fresh and will leave your taste buds very happy</li>
                        <li>In case you have any dietary restrictions, make sure to let the airline know</li>
                        <li>You can book special meals while booking your ticket or 48 hours before the departure time</li>
                        <li>There are special fruit-based meals for infants</li>
                        <li>There is also the option for nutritious and well-balanced tasty meals for children</li>
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