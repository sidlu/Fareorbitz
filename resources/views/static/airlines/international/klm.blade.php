@include('site.header')
@php $page = 'KLM'; $logo = 'images/partners/KLM.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/KLM.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">KLM Reservations </p>
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
    <img src="{{ asset('images/airlines/klm-airline.jpg') }}" class="img-fluid" alt="KLM airline" />
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
                <h2 class="sec__title text-center">KLM</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                KLM Royal Dutch Airlines or Koninklijke Luchtvaart Maatschappij is the flag carrier of the Netherlands. It is also the oldest airline in the world to run under the same name with which it started its journey. Established in 1919, this airline is also a member of the Star Alliance, which is the world's largest global airline alliance. This airline takes millions of people daily from one corner of the world to another.
            </blockquote>
            <p class="airline-title">Booking and cancellation</p>
            <p>International travel is fun until you get tied up in the long web of rules and regulations that vary from one country to another. Also, during your flight booking or cancellation, there are various things that you need to take care of. We at Fareorbitz make your journey smooth and hassle-free by taking care of all your travel needs.</p>
            <p class="airline-title">Travel destinations</p>
            <p class="secondary-font">KLM is a well-connected airline that takes passengers across numerous regions. Here is a detailed look at different cities on various continents that you can explore with this airline.</p>
            <p class="airline-subtitle">Africa </p>
            <p class="secondary-font">Which are the places you can explore on this continent with KLM? Here is a quick look:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Algiers</li>
                        <li>Luanda</li>
                        <li>Cotonou</li>
                        <li>Ouagadougou</li>
                        <li>Douala</li>
                        <li>Yaoundé</li>
                        <li>Casablanca</li>
                        <li>Marrakech</li>
                        <li>Rabat</li>
                        <li>Windhoek</li>
                        <li>Niamey</li>
                        <li>Abuja</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bangui</li>
                        <li>Kinshasa</li>
                        <li>Cairo</li>
                        <li>Malabo</li>
                        <li>Addis Ababa</li>
                        <li>Libreville</li>
                        <li>Lagos</li>
                        <li>Port Harcourt</li>
                        <li>Brazzaville</li>
                        <li>Pointe Noire</li>
                        <li>Kigali</li>
                        <li>Dakar</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Accra</li>
                        <li>Conakry</li>
                        <li>Abidjan</li>
                        <li>Kisumu</li>
                        <li>Mombasa</li>
                        <li>Nairobi</li>
                        <li>Mahe</li>
                        <li>Freetown</li>
                        <li>Cape Town</li>
                        <li>Johannesburg</li>
                        <li>Dar es Salaam</li>
                        <li>Kilimanjaro</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Monrovia</li>
                        <li>Antananarivo</li>
                        <li>Lilongwe</li>
                        <li>Bamako</li>
                        <li>Nouakchott</li>
                        <li>Port Louis</li>
                        <li>Zanzibar</li>
                        <li>Lomé</li>
                        <li>Tunis</li>
                        <li>Entebbe</li>
                        <li>Lusaka</li>
                        <li>Harare</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Asia & Oceania</p>
            <p class="secondary-font">Want to know which places in this region you can fly to? Take a quick look:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Phnom Penh</li>
                        <li>Beijing</li>
                        <li>Chengdu</li>
                        <li>Dalian</li>
                        <li>Guangzhou</li>
                        <li>Hangzhou</li>
                        <li>Shanghai</li>
                        <li>Shenyang</li>
                        <li>Shenzhen</li>
                        <li>Wuhan</li>
                        <li>Xiamen</li>
                        <li>Papeete, Tahiti</li>
                        <li>Hong Kong</li>
                        <li>Ahmedabad</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Amritsar</li>
                        <li>Bangalore</li>
                        <li>Chennai</li>
                        <li>Coimbatore</li>
                        <li>Delhi</li>
                        <li>Goa</li>
                        <li>Hyderabad</li>
                        <li>Indore</li>
                        <li>Jaipur</li>
                        <li>Kochi</li>
                        <li>Kolkata</li>
                        <li>Kozhikode</li>
                        <li>Kuala Lumpur</li>
                        <li>Male</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Lucknow</li>
                        <li>Mumbai</li>
                        <li>Pune</li>
                        <li>Thiruvananthapuram</li>
                        <li>Vadodara</li>
                        <li>Varanasi</li>
                        <li>Bali (Denpasar)</li>
                        <li>Jakarta</li>
                        <li>Fukuoka</li>
                        <li>Osaka</li>
                        <li>Tokyo</li>
                        <li>Cebu</li>
                        <li>Manila</li>
                        <li>Singapore</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Busan</li>
                        <li>Seoul</li>
                        <li>Colombo</li>
                        <li>Taipei</li>
                        <li>Bangkok</li>
                        <li>Ko Samui</li>
                        <li>Phuket</li>
                        <li>Hanoi</li>
                        <li>Ho Chi Minh City</li>
                        <li>Islamabad</li>
                        <li>Karachi</li>
                        <li>Lahore</li>
                        <li>Nur-Sultan</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Europe</p>
            <p class="secondary-font">Want to travel to Europe? Here are the places you can fly to with KLM:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Tirana</li>
                        <li>Yerevan</li>
                        <li>Graz</li>
                        <li>Innsbruck</li>
                        <li>Vienna</li>
                        <li>Minsk</li>
                        <li>Antwerp</li>
                        <li>Brussels</li>
                        <li>Sofia</li>
                        <li>Dubrovnik</li>
                        <li>Split</li>
                        <li>Zagreb</li>
                        <li>Larnaka</li>
                        <li>Prague</li>
                        <li>Aalborg</li>
                        <li>Billund</li>
                        <li>Copenhagen</li>
                        <li>Sønderborg</li>
                        <li>Tallinn</li>
                        <li>Helsinki</li>
                        <li>Rovaniemi</li>
                        <li>Biarritz</li>
                        <li>Bordeaux</li>
                        <li>Brest</li>
                        <li>Clermont-Ferrand</li>
                        <li>Lyon</li>
                        <li>Marseille</li>
                        <li>Montpellier</li>
                        <li>Nantes</li>
                        <li>Nice</li>
                        <li>Paris</li>
                        <li>Pau</li>
                        <li>Rennes</li>
                        <li>Strasbourg</li>
                        <li>Toulouse</li>
                        <li>Tbilisi</li>
                        <li>Berlin</li>
                        <li>Bremen</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Dresden</li>
                        <li>Dusseldorf</li>
                        <li>Frankfurt</li>
                        <li>Hamburg</li>
                        <li>Hanover</li>
                        <li>Munich</li>
                        <li>Nuremberg</li>
                        <li>Stuttgart</li>
                        <li>Athens</li>
                        <li>Chania</li>
                        <li>Heraklion</li>
                        <li>Kos</li>
                        <li>Mykonos</li>
                        <li>Mytilene</li>
                        <li>Rhodes</li>
                        <li>Santorini</li>
                        <li>Thessaloniki</li>
                        <li>Budapest</li>
                        <li>Reykjavik</li>
                        <li>Cork</li>
                        <li>Dublin</li>
                        <li>Shannon</li>
                        <li>Bari</li>
                        <li>Bologna</li>
                        <li>Brindisi</li>
                        <li>Cagliari</li>
                        <li>Catania</li>
                        <li>Florence</li>
                        <li>Genoa</li>
                        <li>Lamezia Terme</li>
                        <li>Milan</li>
                        <li>Naples</li>
                        <li>Olbia</li>
                        <li>Palermo</li>
                        <li>Pisa</li>
                        <li>Reggio Calabria</li>
                        <li>Rome</li>
                        <li>Trieste</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Turin</li>
                        <li>Venice</li>
                        <li>Verona</li>
                        <li>Riga</li>
                        <li>Vilnius</li>
                        <li>Luxembourg City</li>
                        <li>Amsterdam</li>
                        <li>Arnhem</li>
                        <li>Eindhoven</li>
                        <li>Maastricht</li>
                        <li>Alesund</li>
                        <li>Bergen</li>
                        <li>Kristiansand</li>
                        <li>Oslo</li>
                        <li>Sandefjord</li>
                        <li>Stavanger</li>
                        <li>Trondheim</li>
                        <li>Gdansk</li>
                        <li>Krakow</li>
                        <li>Poznan</li>
                        <li>Warsaw</li>
                        <li>Wroclaw</li>
                        <li>Faro</li>
                        <li>Lisbon</li>
                        <li>Porto</li>
                        <li>Malta</li>
                        <li>Bucharest</li>
                        <li>Cluj-Napoca</li>
                        <li>Krasnoyarsk</li>
                        <li>Moscow</li>
                        <li>Saint Petersburg</li>
                        <li>Sochi</li>
                        <li>Yekaterinburg</li>
                        <li>Belgrade</li>
                        <li>Košice</li>
                        <li>Ljubljana</li>
                        <li>A Coruna</li>
                        <li>Alicante</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Barcelona</li>
                        <li>Bilbao</li>
                        <li>Gran Canaria</li>
                        <li>Ibiza</li>
                        <li>Lanzarote</li>
                        <li>Madrid</li>
                        <li>Malaga</li>
                        <li>Palma de Mallorca</li>
                        <li>Sevilla</li>
                        <li>Tenerife</li>
                        <li>Valencia</li>
                        <li>Vigo</li>
                        <li>Gothenburg</li>
                        <li>Linköping</li>
                        <li>Stockholm</li>
                        <li>Vaxjo</li>
                        <li>Basel</li>
                        <li>Geneva</li>
                        <li>Zurich</li>
                        <li>Istanbul</li>
                        <li>Kiev</li>
                        <li>Lviv</li>
                        <li>Aberdeen</li>
                        <li>Belfast</li>
                        <li>Birmingham</li>
                        <li>Bristol</li>
                        <li>Cardiff</li>
                        <li>Durham</li>
                        <li>Edinburgh</li>
                        <li>Glasgow</li>
                        <li>Hull</li>
                        <li>Inverness</li>
                        <li>Leeds</li>
                        <li>London</li>
                        <li>Manchester</li>
                        <li>Newcastle upon Tyne</li>
                        <li>Norwich</li>
                        <li>Southampton</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">North-, Central- & South America</p>
            <p class="secondary-font">You can visit Pointe-à-Pitre and Fort-de-France in this region.</p>

            <p class="airline-subtitle">Middle East: </p>
            <p class="secondary-font">Visit these places with KLM in the Middle East region:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Baku</li>
                        <li>Tehran</li>
                        <li>Tel Aviv</li>
                        <li>Amman</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bahrain</li>
                        <li>Kuwait City</li>
                        <li>Beirut</li>
                        <li>Muscat</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Doha</li>
                        <li>Dammam</li>
                        <li>Jeddah</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Riyadh</li>
                        <li>Abu Dhabi</li>
                        <li>Dubai</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Codeshare agreements</p>
            <p class="secondary-font">Airlines often enter into agreements with other air companies. It is a way that is not just profitable for the airlines but is beneficial for the passengers too. Due to this agreement, passengers get the chance to get air tickets at a reduced price. Also, they can access more travel routes. Here are the airlines with which KLM shares codeshare agreements:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Aerolineas Argentinas</li>
                        <li>Aeromexico</li>
                        <li>Air Astana</li>
                        <li>Air Baltic</li>
                        <li>Air Europa</li>
                        <li>Air France</li>
                        <li>Air Malta</li>
                        <li>Air Serbia</li>
                        <li>Bangkok Airways</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Belavia</li>
                        <li>Bulgaria Air</li>
                        <li>China Airlines</li>
                        <li>China Eastern</li>
                        <li>China Southern</li>
                        <li>Copa Airlines</li>
                        <li>Czech Airlines</li>
                        <li>Delta Air Lines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Etihad Airways</li>
                        <li>Garuda Indonesia</li>
                        <li>Georgian Airways</li>
                        <li>GOL Linhas Aéreas Inteligentes</li>
                        <li>Kenya Airways</li>
                        <li>Korean Air</li>
                        <li>Malaysia Airlines</li>
                        <li>Middle East Airlines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Saudia</li>
                        <li>Sichuan Airlines</li>
                        <li>Tarom</li>
                        <li>Transavia</li>
                        <li>Vietnam Airlines</li>
                        <li>Westjet</li>
                        <li>Widerøe Airlines</li>
                        <li>Xiamen Airlines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Top destinations</p>
            <p class="secondary-font">Certain destinations are preferred more by the passengers than others. Here are some of the popular destinations that people prefer.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Amsterdam</li>
                        <li>Barcelona</li>
                        <li>Berlin</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Cape Town</li>
                        <li>Kilimanjaro</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>London</li>
                        <li>Nairobi</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Paris</li>
                        <li>Rome</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage Details</p>
            <p>Be it your hand baggage or your check-in luggage, there are certain things that you need to keep in mind while travelling with KLM. These are some of the rules that will apply to every passenger travelling with this airline. Some of the rules may vary depending on the travel class of the passenger.</p>

            <p class="airline-subtitle">Hand Baggage</p>
            <p class="secondary-font">What can you carry onboard with you? Also, how much baggage is permitted in the cabin? Here's a quick look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>For Economy Class passengers one hand baggage is allowed and one personal item is permitted</li>
                        <li>For Premium Comfort Class, two hand items of baggage are allowed. Also, one personal item is allowed</li>
                        <li>If you are travelling by Business Class, then you can take two items of hand baggage along with one personal item</li>
                        <li>In case your kid is travelling on your lap, you can bring one item for them</li>
                        <li>The baggage allocation for kids with seats is the same as the adults</li>
                        <li>One stroller or pushchair or car seat is allowed in the aircraft cabin</li>
                        <li>These are the rules that are set by KLM. However, if you have a connecting airline, then the rule of that particular airline will apply to the passenger. Also, if you have any special requirements, you can connect with the airline before flying.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Checked baggage</p>
            <p class="secondary-font">When you are travelling with baggage that needs to be checked in, there are certain rules you need to follow. Here are some of the things to remember:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>There is no included baggage for Economy class passengers travelling with a light ticket. However, if you have a standard or flex ticket, you can check in one item</li>
                        <li>Travelling in Premium Comfort Class? You are allowed to bring two items of checked luggage</li>
                        <li>While travelling with Business Class, you can bring two pieces of luggage as check-in items</li>
                        <li>The number of bags for children depends on their ticket type</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted Items</p>
            <p class="secondary-font">There are certain items that you are not allowed to fly with, either in the cabin or in the hold. Also, some of the items are permitted either as hand luggage or as check-in baggage. Take a look at some of the points:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can bring liquids like lotions, paste, shampoo, etc on board. However, you need to pack each item in 100 ml bottles and then store them in a transparent packet</li>
                        <li>Baby food is allowed onboard</li>
                        <li>Medicines are allowed to take in the cabin</li>
                        <li>Duty-free items, properly sealed, can be taken</li>
                        <li>Electronic cigarettes can be carried but they cannot be used during travel</li>
                        <li>You cannot bring any smart bag equipped with a lithium battery</li>
                        <li>Self-balancing devices like hoverboards aren't allowed. Only the devices used to assist reduced mobility are allowed</li>
                        <li>Guns, firearms, and other weapons aren't allowed during the travel</li>
                        <li>Stunning devices that are designed to immobilise others aren't allowed</li>
                        <li>Passengers can never bring toxic or chemical substances during their travel</li>
                        <li>Travellers aren't allowed to bring jewellery made of bullets or empty bullet shells while flying to Rwanda, Kenta, Tanzania or the Philippines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Other points</p>
            <p class="secondary-font">Here are some other aspects that you need to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>If you have extra baggage, you can always book an increased allotment while booking tickets</li>
                        <li>If you have large luggage, you can book a cargo service</li>
                        <li>Sports equipment can be taken as check-in luggage. However, for some, you may need to pay an extra fee</li>
                        <li>There is a service under which you can drop off your checked-in baggage. You can do so at check-in desks or self-service drop-off</li>
                        <li>Passengers can make a reservation to take their manual or electric wheelchair for free</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with kids</p>
            <p class="secondary-font">KLM always tries to make the journey of its passengers as smooth as possible. Hence, they have special rules and services for those travelling with kids. Here are some aspects to know about if you are going on a trip with your kids:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Children up to the age of 11, having their seats, will always be seated next to their parents. Alternatively, you can also select preferred seats before travel</li>
                        <li>Special kit available on board to keep children engaged during travel</li>
                        <li>Ticket prices for children under two years of age are reduced as they are not provided separate seats</li>
                        <li>Each adult can travel with not more than two kids</li>
                        <li>Kids between the ages of 2 to 11 years old can have their seats while flying</li>
                        <li>There is no discount available for children above 12 years of age</li>
                        <li>Carrycot is allowed upon special prior request</li>
                        <li>At times, parents need to bring additional documents while travelling with kids</li>
                        <li>Make sure to carry your kid's passport and ID</li>
                        <li>A consent form is required if a kid is travelling with only one parent or a guardian</li>
                        <li>Bring your kid's birth certificate in case you have different surnames</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Children travelling alone</p>
            <p class="secondary-font">There are situations in which a parent or a guardian is unable to accompany a kid on their air travel. There is a special service for such situations. Here are certain things that you need to know about kids travelling alone:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The service for children travelling alone is not available for every connecting flight. However, transfer of kids travelling by themselves is allowed only on Delta Air Lines and Air France</li>
                        <li>If your kid is between the ages of 5 to 14 years and is travelling alone, then the service is mandatory</li>
                        <li>The service is optional for kids between kids ages of 15 to 17 years</li>
                        <li>Provide proper details of the people who will drop off and pick up children travelling alone</li>
                        <li>Make sure that your kid has all the necessary documents with him or her before the travel</li>
                        <li>Teach them that it is absolutely fine to ask for the cabin crew's help at any point during travel</li>
                        <li>It is important to teach your kids to stay in their seats during travel</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Flying while pregnant</p>
            <p class="secondary-font">Expecting mothers travelling with KLM can always expect special care from the officials that can help in making their journey smooth and comfortable. Here are certain aspects to remember when you are travelling during your pregnancy:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Passengers who are 36 weeks or more into pregnancy aren't allowed to travel</li>
                        <li>Passengers aren't allowed to travel in the first week after giving birth</li>
                        <li>Expecting mothers need to get medical clearance from a certified physician before boarding the aircraft</li>
                        <li>Make sure to let the airline know that you are pregnant and your delivery date. This will help KLM serve the passengers better</li>
                        <li>If you are expecting more than one baby or have a complicated pregnancy, you need to get a “Fit to fly” certification from a registered doctor before departure</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">What are the things that you need to keep in mind while travelling with your pet or your assistance animal? Here's a quick look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>While some pets can accompany you in the aircraft cabin, others need to be transported in the hold</li>
                        <li>Make a reservation for your pet as soon as possible as there is limited space in the aircraft</li>
                        <li>Pet should travel on the same flight as you</li>
                        <li>The pet must be above 15 weeks of age to be eligible for air travel</li>
                        <li>Economy Class passengers can bring one cat or dog. However, make sure to put your pet in a comfortable carrier</li>
                        <li>During intercontinental travel in Premium Comfort Class or Business Class, pets aren't allowed in the cabin. They have to be transported in the hold</li>
                        <li>Pets other than cats or dogs aren't allowed to travel</li>
                        <li>Keep your pets vaccination certificate, health certificate, and travel documents handy</li>
                        <li>Cats or dogs travelling within the European Union must have an ID chip. Also, they should have a European passport</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Ticket options</p>
            <p>KLM has specially designed different ticket options for its passengers to fulfil their travel needs. There are three ticket options that the airline offers. They’re Light, Standard and Flex.</p>

            <p class="airline-title">Travel Class</p>
            <p>Just like all the renowned airlines across the world, KLM has also designed special travel classes for its passengers to help them have a comfortable and affordable journey. Here are the classes that the airline offers.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">Designed for comfortable travel without too much financial burden, this class has some distinctive services to offer to passengers. Take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Ergonomically designed seats</li>
                        <li>Generous legroom</li>
                        <li>USB-A connection on intercontinental flights</li>
                        <li>Passengers are offered snacks and drinks depending on the flight time</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Option of both alcoholic and non-alcoholic beverages</li>
                        <li>In-flight Wi-Fi</li>
                        <li>Watch movies or listen to music to stay entertained during your travel</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Comfort Class</p>
            <p class="secondary-font">What are the features that make this class different from others? Take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Comfortable seat with generous legroom</li>
                        <li>Fully separated from other classes</li>
                        <li>A quiet cabin with just 21 to 28 seats</li>
                        <li>Charging option for electronic devices</li>
                        <li>Premium meal</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Chosen different wine and liquor</li>
                        <li>Amenity kit</li>
                        <li>In-flight Wi-Fi</li>
                        <li>Endless entertainment options</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">Want to travel in ultimate luxury and comfort? Here are the options of this class that you need to know about:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in</li>
                        <li>Priority boarding</li>
                        <li>Privacy</li>
                        <li>Extra legroom</li>
                        <li>Full-flat seat</li>
                        <li>In-seat power outlets or USB-A option</li>
                        <li>Welcome drinks as passengers settle in</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delicious food and drinks</li>
                        <li>Comfort kit with essential items</li>
                        <li>In-flight Wi-Fi</li>
                        <li>Touchscreen</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Endless entertainment option</li>
                        <li>Gin served in Iconic Delft Blue miniature houses</li>
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