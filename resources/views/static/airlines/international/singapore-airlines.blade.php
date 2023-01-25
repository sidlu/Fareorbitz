@include('site.header')
@php $page = 'Singapore Airlines'; $logo = 'images/partners/singaport-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/singaport-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Singapore Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/singapore-airline.jpg') }}" class="img-fluid" alt="singapore airlines" />
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
                <h2 class="sec__title text-center">Singapore Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Singapore Airlines is known for its well-connected routes and impeccable range of services. Formed in 1972, it is Singapore’s flag carrier. This airline is a member of Star Alliance and has won several awards over the years. This airline is also the world’s most awarded airline. From spacious seats to state-of-the-art entertainment to delicious meals, this airline has a lot to offer to the passengers.
            </blockquote>
            <p class="airline-title">Travel destinations</p>
            <p>Singapore Airlines has a huge network that connects different places across the world. You can explore various destinations while travelling with this airline. Want to know if your travel destination has a Singapore Airlines flight? You can also get in touch with Fareorbitz to explore more.</p>
            <p class="secondary-font mb-3">Here are some of the places you can travel with this airline. However, some of them are temporarily closed due to Covid-19 regulations.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Balikpapan</li>
                        <li>Bandar Seri Begawan</li>
                        <li>Bandung</li>
                        <li>Bangkok</li>
                        <li>Cebu</li>
                        <li>Chiang Mai</li>
                        <li>Clark</li>
                        <li>Da Nang</li>
                        <li>Davao</li>
                        <li>Denpasar (Bali)</li>
                        <li>Hanoi</li>
                        <li>Hat Yai</li>
                        <li>Ho Chi Minh City</li>
                        <li>Ipoh</li>
                        <li>Jakarta</li>
                        <li>Kalibo</li>
                        <li>Koh Samui</li>
                        <li>Kota Kinabalu</li>
                        <li>Krabi</li>
                        <li>Kuala Lumpur</li>
                        <li>Kuantan</li>
                        <li>Kuching</li>
                        <li>Langkawi</li>
                        <li>Lombok</li>
                        <li>Luang Prabang</li>
                        <li>Makassar</li>
                        <li>Mandalay</li>
                        <li>Manado</li>
                        <li>Manila</li>
                        <li>Medan</li>
                        <li>Palembang</li>
                        <li>Pekanbaru</li>
                        <li>Penang</li>
                        <li>Phnom Penh</li>
                        <li>Phuket</li>
                        <li>Semarang</li>
                        <li>Siem Reap</li>
                        <li>Singapore</li>
                        <li>Surabaya</li>
                        <li>Vientiane</li>
                        <li>Yangon</li>
                        <li>Yogyakarta</li>
                        <li>Beijing</li>
                        <li>Busan Gimhae</li>
                        <li>Changsha</li>
                        <li>Chengdu</li>
                        <li>Chongqing</li>
                        <li>Fukuoka</li>
                        <li>Fuzhou</li>
                        <li>Guangzhou</li>
                        <li>Haikou</li>
                        <li>Hangzhou</li>
                        <li>Harbin</li>
                        <li>Hong Kong</li>
                        <li>Jinan</li>
                        <li>Kaohsiung</li>
                        <li>Kunming</li>
                        <li>Macau</li>
                        <li>Nagoya</li>
                        <li>Nanchang</li>
                        <li>Nanjing</li>
                        <li>Ningbo</li>
                        <li>Nanning</li>
                        <li>Osaka</li>
                        <li>Qingdao</li>
                        <li>Quanzhou</li>
                        <li>Sapporo-New Chitose</li>
                        <li>Seoul</li>
                        <li>Shanghai</li>
                        <li>Shenyang</li>
                        <li>Shenzhen</li>
                        <li>Taipei</li>
                        <li>Tianjin</li>
                        <li>Tokyo Narita</li>
                        <li>Tokyo Haneda</li>
                        <li>Wuhan</li>
                        <li>Wuxi/Suzhou</li>
                        <li>Xi'an</li>
                        <li>Xiamen</li>
                        <li>Zhengzhou</li>
                        <li>Komatsu</li>
                        <li>Sendai</li>
                        <li>Toyama</li>
                        <li>Ahmedabad</li>
                        <li>Amritsar</li>
                        <li>Bengaluru</li>
                        <li>Cape Town</li>
                        <li>Chennai</li>
                        <li>Coimbatore</li>
                        <li>Colombo</li>
                        <li>Dhaka</li>
                        <li>Dubai</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Hyderabad</li>
                        <li>Jeddah</li>
                        <li>Johannesburg</li>
                        <li>Kathmandu</li>
                        <li>Kochi</li>
                        <li>Kolkata</li>
                        <li>Lucknow</li>
                        <li>Male (Maldives)</li>
                        <li>Mumbai</li>
                        <li>New Delhi</li>
                        <li>Thiruvananthapuram</li>
                        <li>Visakhapatnam</li>
                        <li>Tiruchirappalli</li>
                        <li>Abidjan</li>
                        <li>Accra</li>
                        <li>Addis Ababa</li>
                        <li>Bahrain</li>
                        <li>Bhubaneswar</li>
                        <li>Brazzaville</li>
                        <li>Bujumbura</li>
                        <li>Cairo</li>
                        <li>Dar es Salaam</li>
                        <li>Durban</li>
                        <li>East London</li>
                        <li>Entebbe</li>
                        <li>Enugu</li>
                        <li>Guwahati</li>
                        <li>Gaborone</li>
                        <li>Kigali</li>
                        <li>Kilimanjaro</li>
                        <li>Lagos</li>
                        <li>Mahe Island</li>
                        <li>Maputo</li>
                        <li>Mauritius</li>
                        <li>Mombasa</li>
                        <li>N'Djamena</li>
                        <li>Nairobi</li>
                        <li>Niamey</li>
                        <li>Ouagadougou</li>
                        <li>Pointe-Noire</li>
                        <li>Port Elizabeth</li>
                        <li>Varanasi</li>
                        <li>Victoria Falls</li>
                        <li>Zanzibar</li>
                        <li>Adelaide</li>
                        <li>Auckland</li>
                        <li>Brisbane</li>
                        <li>Cairns</li>
                        <li>Christchurch</li>
                        <li>Darwin</li>
                        <li>Gold Coast</li>
                        <li>Melbourne</li>
                        <li>Perth</li>
                        <li>Sydney</li>
                        <li>Albury</li>
                        <li>Alice Springs</li>
                        <li>Apia</li>
                        <li>Ayers Rock</li>
                        <li>Ballina</li>
                        <li>Canberra</li>
                        <li>Wellington</li>
                        <li>Blenheim</li>
                        <li>Christmas Island</li>
                        <li>Broome</li>
                        <li>Cloncurry</li>
                        <li>Coffs Harbour</li>
                        <li>Dunedin</li>
                        <li>Emerald</li>
                        <li>Geraldton</li>
                        <li>Gisborne</li>
                        <li>Hamilton</li>
                        <li>Hamilton Island</li>
                        <li>Hervey Bay</li>
                        <li>Hobart</li>
                        <li>Hokitika</li>
                        <li>Honiara</li>
                        <li>Invercargill</li>
                        <li>Kalgoorlie</li>
                        <li>Karratha</li>
                        <li>Kerikeri</li>
                        <li>Kununurra</li>
                        <li>Launceston</li>
                        <li>Mackay</li>
                        <li>Maroochydore</li>
                        <li>Mildura</li>
                        <li>Mount Isa</li>
                        <li>Nadi</li>
                        <li>Napier-Hastings</li>
                        <li>Nelson</li>
                        <li>New Plymouth</li>
                        <li>Newcastle</li>
                        <li>Newman</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Norfolk Island</li>
                        <li>Nuku'alofa</li>
                        <li>Palmerston North</li>
                        <li>Port Hedland</li>
                        <li>Port Macquarie</li>
                        <li>Port Vila</li>
                        <li>Proserpine</li>
                        <li>Queenstown</li>
                        <li>Rarotonga Island</li>
                        <li>Rockhampton</li>
                        <li>Rotorua</li>
                        <li>Tamworth</li>
                        <li>Taupo</li>
                        <li>Tauranga</li>
                        <li>Timaru</li>
                        <li>Townsville</li>
                        <li>Whangarei</li>
                        <li>Amsterdam</li>
                        <li>Athens</li>
                        <li>Berlin</li>
                        <li>Barcelona</li>
                        <li>Copenhagen</li>
                        <li>Frankfurt</li>
                        <li>Istanbul</li>
                        <li>London</li>
                        <li>Manchester</li>
                        <li>Milan</li>
                        <li>Moscow</li>
                        <li>Munich</li>
                        <li>Paris</li>
                        <li>Rome</li>
                        <li>Zurich</li>
                        <li>Dusseldorf</li>
                        <li>Stockholm</li>
                        <li>Aalborg</li>
                        <li>Aarhus</li>
                        <li>Aberdeen</li>
                        <li>Abidjan</li>
                        <li>Adana</li>
                        <li>Alesund</li>
                        <li>Ankara</li>
                        <li>Antalya</li>
                        <li>Astrakhan</li>
                        <li>Belfast</li>
                        <li>Belgrade</li>
                        <li>Bergen</li>
                        <li>Billund</li>
                        <li>Birmingham</li>
                        <li>Bologna</li>
                        <li>Bordeaux</li>
                        <li>Bremen</li>
                        <li>Brussels</li>
                        <li>Bucharest</li>
                        <li>Budapest</li>
                        <li>Cologne</li>
                        <li>Dalaman</li>
                        <li>Dresden</li>
                        <li>Dublin</li>
                        <li>Dubrovnik</li>
                        <li>Edinburgh</li>
                        <li>Exeter</li>
                        <li>Gaziantep</li>
                        <li>Gdansk</li>
                        <li>Geneva</li>
                        <li>Gothenburg</li>
                        <li>Graz</li>
                        <li>Hamburg</li>
                        <li>Hanover</li>
                        <li>Helsinki</li>
                        <li>Izmir</li>
                        <li>Kaliningrad</li>
                        <li>Kalmar</li>
                        <li>Kayseri</li>
                        <li>Kazan</li>
                        <li>Konya</li>
                        <li>Leipzig</li>
                        <li>Linz</li>
                        <li>Lisbon</li>
                        <li>Ljubljana</li>
                        <li>Lugano</li>
                        <li>Luxembourg</li>
                        <li>Lviv</li>
                        <li>Lyon</li>
                        <li>Madrid</li>
                        <li>Marseille</li>
                        <li>Newcastle upon Tyne</li>
                        <li>Nice</li>
                        <li>Nizhny Novgorod</li>
                        <li>Nuremberg</li>
                        <li>Oslo</li>
                        <li>Ostersund</li>
                        <li>Palanga</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Perm</li>
                        <li>Porto</li>
                        <li>Poznan</li>
                        <li>Prague</li>
                        <li>Ronneby</li>
                        <li>Rostov-on-Don</li>
                        <li>Samara</li>
                        <li>Samsun</li>
                        <li>Sofia</li>
                        <li>Southampton</li>
                        <li>Split</li>
                        <li>St Petersburg</li>
                        <li>Stavanger</li>
                        <li>Stavropol</li>
                        <li>Stuttgart</li>
                        <li>Sundsvall</li>
                        <li>Tallinn</li>
                        <li>Tampere</li>
                        <li>Thessaloniki</li>
                        <li>Tirana</li>
                        <li>Toulouse</li>
                        <li>Trabzon</li>
                        <li>Trondheim</li>
                        <li>Turku</li>
                        <li>Ufa</li>
                        <li>Vaasa</li>
                        <li>Vagar</li>
                        <li>Vienna</li>
                        <li>Vilnius</li>
                        <li>Visby</li>
                        <li>Vladikavkaz</li>
                        <li>Volgograd</li>
                        <li>Warsaw</li>
                        <li>Wroclaw</li>
                        <li>Yekaterinburg</li>
                        <li>Zagreb</li>
                        <li>Honolulu</li>
                        <li>Houston</li>
                        <li>Los Angeles</li>
                        <li>New York (JFK)</li>
                        <li>New York (Newark)</li>
                        <li>San Francisco</li>
                        <li>Seattle</li>
                        <li>Atlanta</li>
                        <li>Austin</li>
                        <li>Baltimore</li>
                        <li>Boise</li>
                        <li>Boston</li>
                        <li>Buffalo</li>
                        <li>Charlotte</li>
                        <li>Chicago</li>
                        <li>Dallas</li>
                        <li>(Forth Worth)</li>
                        <li>Dallas</li>
                        <li>(Love Field)</li>
                        <li>Fort Lauderdale</li>
                        <li>Fort Myers</li>
                        <li>Houston (Hobby)</li>
                        <li>Jacksonville</li>
                        <li>Kahului</li>
                        <li>Las Vegas</li>
                        <li>Loreto</li>
                        <li>Mammoth Lakes</li>
                        <li>Mexico City</li>
                        <li>Miami</li>
                        <li>Minneapolis</li>
                        <li>Montreal</li>
                        <li>Nashville</li>
                        <li>New Orleans</li>
                        <li>Orlando</li>
                        <li>Palm Springs</li>
                        <li>Portland</li>
                        <li>Puerto Vallarta</li>
                        <li>Raleigh</li>
                        <li>Rochester</li>
                        <li>Salt Lake City</li>
                        <li>San Diego</li>
                        <li>San Jose</li>
                        <li>San Jose del Cabo</li>
                        <li>Santa Ana</li>
                        <li>Santa Rosa</li>
                        <li>Syracuse</li>
                        <li>Tampa</li>
                        <li>Toronto</li>
                        <li>Vancouver</li>
                        <li>Washington DC</li>
                        <li>West Palm Beach</li>
                        <li>Cleveland</li>
                        <li>Denver</li>
                        <li>Phoenix</li>
                        <li>Reno</li>
                        <li>Sacramento</li>

                    </ul>
                </div>
            </div>

            <p class="airline-title">Top Destinations</p>
            <p class="secondary-font">There are some places that passengers prefer more than others. Here are some of the cities that people often explore with this airline.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bangkok</li>
                        <li>Taipei</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Seoul</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Manila</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Kuala Lumpur</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font mb-3">
                Also, here is a quick look at the countries that are considered trending destinations by many.
            </p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Thailand</li>
                        <li>South Korea</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Philippines</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Malaysia</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>United Kingdom</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Unaccompanied minors</p>
            <p class="secondary-font">Is your kid travelling from one place to another but you are unable to accompany them? Worry not! Singapore Airlines has a special service in place for unaccompanied minors that helps the kid travel alone without an adult. However, there are certain things that you need to know about this wonderful service. Take a look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The service is available for kids aged between 5 to 17 years of age</li>
                        <li>This service can also be available if your kid is travelling to the same destination as you on another flight or in a different class</li>
                        <li>The service is mandatory for kids between 5 to 12 years of age</li>
                        <li>Kids between 12 to 17 years of age can travel with or without the service</li>
                        <li>The service is not available for those below the age of 5 years</li>
                        <li>The service is not available for connecting flights</li>
                        <li>If your kid is travelling on one of the partner airlines, you need to book the service by placing a call directly to them</li>
                        <li>The service can be denied depending on the rules of the arrival/ departure country</li>
                        <li>In case the kid has some medical condition, both physical and psychological, make sure to contact the airline beforehand to make proper arrangements. In such a situation, you would also require a clearance certificate from a certified doctor</li>
                        <li>Make sure to teach your kid about staying in his or her seat while travelling</li>
                        <li>Explain the travel process to your kid properly</li>
                        <li>Make sure that they have all the necessary documents required for a smooth travel</li>
                    </ul>
                </div>
            </div>

            <p>You can book the Unaccompanied Minors Handling Service by placing a call in the local Singapore Airlines office. However, there are many aspects that you need to take care of especially in the case of international travel. It is advisable to take the help of our trained team to help in making your journey smooth and hassle-free.</p>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">Pet parents always want to get the best service for their pet babies. That is true while travelling with their pets too. The airline allows passengers to transport pets with them either in the cabin or in the hold. However, there are certain things that you should know about. Here is a quick look at points to remember while travelling with your pets.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Pets above three months of age can travel in cargo on the same flight with you</li>
                        <li>Most domesticated dogs and cats are allowed to travel</li>
                        <li>Pets can travel in air-conditioned comfort in cargo</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Things the airline checks</p>
            <p class="secondary-font">There are certain things that the airline checks before confirming your pet’s travel or booking. Take a look at the things that the airline can ask you:</p>

            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Gender</li>
                        <li>Type / breed / species</li>
                        <li>Name</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Colour</li>
                        <li>Age</li>
                        <li>Weight of container</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Dimensions of container (length x breadth x height)</li>
                        <li>Weight of pet</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">Restricted Dog Breeds</p>
            <p class="secondary-font">Certain dog breeds are not allowed. Passengers cannot take them in the cabin or the hold. Here’s a quick look:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Akita</li>
                        <li>Boerboel</li>
                        <li>Boxer</li>
                        <li>Brussels Griffon (Petit Brabancon)</li>
                        <li>Chow Chow</li>
                        <li>Dogo Argentino</li>
                        <li>English, French and American Bulldogs</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Fila Brasileiro</li>
                        <li>Japanese Chin (Japanese Spaniels)</li>
                        <li>Lhasa Apso</li>
                        <li>Mastiffs, including Neapolitan and Dogue de Bordeaux</li>
                        <li>Perro De Presa Canario</li>
                        <li>Pit Bull</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Pugs, including Carlino, Mopshond, Mops Hund and Pekingese</li>
                        <li>Shar-Pei</li>
                        <li>Shih Tzu</li>
                        <li>English Toy, King Charles and Tibetan Spaniels</li>
                        <li>Boston and Pit Bull Terriers</li>
                        <li>Tosa</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Other points</p>
            <p class="secondary-font">Here are some other points about your pet carrier or the things you need to know about before your trip.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Export or import licences from relevant authoritiesM</li>
                        <li>Health certificateM</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Vaccination certificatesM</li>
                        <li>The pet container needs to be well-ventilated, leak-proof, spacious, and properly securedM</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restriction of countries</p>
            <p class="secondary-font">There are certain places which do not allow the transportation of pets. These are the places where the airline cannot extend its services.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Into/Out of Australia</li>
                        <li>Into/Out of Denpasar, Bali</li>
                        <li>Into/Out of New Zealand</li>
                        <li>Into/Out of Brunei</li>
                        <li>Into Sri Lanka</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Into Dubai</li>
                        <li>Into Hong Kong SAR</li>
                        <li>Into/Out of South Africa</li>
                        <li>Into Shenzhen</li>
                        <li>Into the United Kingdom</li>
                    </ul>
                </div>
            </div>
            <p>The rules for each country are different when it comes to air travel with pets. Hence, it is advisable to always check the rules before travelling. However, that can seem like a lot of work and that is why we are here to help you. At Fareorbitz, we take care of your travel needs.</p>

            <p class="airline-title">Baggage policies</p>
            <p>Every airline has its own rules and regulations regarding the baggage that the passengers can carry. Here is a quick look at the baggage policies of Singapore Airlines.</p>

            <p class="airline-subtitle">Baggage allowance</p>
            <p class="secondary-font">How much luggage can you carry while travelling with this airline? Here are some points to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>There are limits on the number of baggage you can carry either in the cabin or as a check-in luggage</li>
                        <li>The weight of the baggage depends on the travel class and ticket type</li>
                        <li>Both check-in and hand luggage may be subjected to a security check by the airport authority</li>
                        <li>Carry travel documents, medication, cash, and valuables in your cabin baggage</li>
                        <li>Make sure your check-in luggage properly displays your baggage ID. Additionally, add a label with your name and contact details on your luggage</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Check-in luggage</p>
            <p class="secondary-font">There are certain things you need to keep in mind about check-in luggage. Take a look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>There are some things that you shouldn’t put in your check-in luggage. They’re medication, laptops, perishable items, money, important documents, and/or precious metals</li>
                        <li>You can get travel insurance on your baggage</li>
                        <li>You can get your baggage allowance increased with a fee</li>
                        <li>A Carry-cot or a stroller or a car seat is allowed and is considered as a piece of luggage</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Baggage tips</p>
            <p class="secondary-font">Here are some useful tips for your check-in luggage that can make your travel even easier:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Pack within the allowance</li>
                        <li>Make sure not to include the restricted items in your baggage</li>
                        <li>Check-in before the counter closes</li>
                        <li>Announce if you have any special items</li>
                        <li>Properly lock your baggage</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">                       
                        <li>Ensure that there are no loose or protruding parts</li>
                        <li>Collect all the luggage upon arrival</li>
                        <li>Check baggage tag properly to make sure that it is yours</li>
                        <li>If the baggage is delayed or lost, contact the airport authority immediately</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Personal items</p>
            <p class="secondary-font">Besides the hand luggage, you can take a piece of personal item in the cabin too. Here is a quick look at the items that are allowed on board:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Handbag</li>
                        <li>Small shoulder bag</li>
                        <li>Camera/Camera bag</li>
                        <li>Document bag</li>
                        <li>Overcoat</li>
                        <li>Umbrella</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Laptop / Notebook in bag</li>
                        <li>Infant’s amenities and food</li>
                        <li>A walking stick</li>
                        <li>A pair of crutches</li>
                        <li>Prosthetic devices you’re using</li>
                        <li>Limited amount of duty-free goods</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Non-standard baggage</p>
            <p class="secondary-font">There are times when you need to carry certain unusual items. Here are some of the points regarding a few of such items that can be transported in cargo:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Sporting equipment</li>
                        <li>With necessary permits and licences, you can carry a certain firearm that is used for sporting equipment</li>
                        <li>Certain musical items are allowed</li>
                        <li>In case you have a connecting flight, always make sure to check the baggage policy of that airline</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Delayed or damaged</p>
            <p class="secondary-font">What to do if your baggage is delayed or arrives in a damaged condition. Here are some points to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>In case of delayed baggage, file a report, note the reference number and then check status updates until your problem is solved. In case your problem persists after seven days, you can claim a refund</li>
                        <li>If you received a piece of damaged check-in baggage, file a report at the airport. However, certain situations are considered as normal wear and tear - cuts or dents, loss of protruding parts, damaged luggage due to overpacking, loss of zip tabs, etc</li>
                        <li>You can always opt for travel insurance with our ticket. To know more, get in touch with our designated team</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Class</p>
            <p>Singapore Airlines has carefully crafted travel classes that help you get a secure and comfortable journey. Here is a quick look at the different travel classes through which you can travel.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">What are things that you can expect while travelling in this class? Let’s take a look:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Ergonomically designed backrests</li>
                        <li>Headrest with perfect neck support</li>
                        <li>Adjustable headrests</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Delicious meals for adults</li>
                        <li>Option for child-friendly meal</li>
                        <li>HD touchscreen monitor</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Separate entertainment options for adults and kids</li>
                        <li>Power outlet and USB ports</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy Class</p>
            <p class="secondary-font">Why travel in this class? Let’s take a look:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Exclusive space</li>
                        <li>Spacious cabin</li>
                        <li>Greater comfort</li>
                        <li>Calf rest</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Footrest</li>
                        <li>Recline option</li>
                        <li>Two USB ports</li>
                        <li>Adjustable personal reading light</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Increased storage area</li>
                        <li>Delicious dishes and drinks</li>
                        <li>Entertainment for both adults and children</li>
                        <li>Priority check-in</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">Travelling for work? Here are the special services in the class that can help you in having a comfortable journey.</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Hand Stitch leather-covered seat</li>
                        <li>A seat that reclines into a bed</li>
                        <li>Wider armrest</li>
                        <li>Personal divider</li>
                        <li>Ultimate privacy</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Multiple storage compartments</li>
                        <li>An 18” touchscreen monitor</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Endless entertainment option</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Adjustable reading lights</li>
                        <li>Delicious meals and drinks</li>
                        <li>Own slippers</li>
                        <li>Eye mask</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">First Class</p>
            <p class="secondary-font">Equipped with amazing facilities, this is among the most sought-after travel class in the airline. Here are some points about this travel class:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Ultra comfortable headrestM</li>
                        <li>Plush seat cushionM</li>
                        <li>Lie-flat seatsM</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Hand-stitched luxurious leatherM</li>
                        <li>FootrestM</li>
                        <li>Mood lightingM</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Personal reading lightM</li>
                        <li>Delicious meals cooked by renowned chefsM</li>
                        <li>In-flight entertainment optionsM</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Suites</p>
            <p class="secondary-font">This is the most luxurious travel class that Singapore Airlines has to offer. Take a look:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Rich leather upholstery</li>
                        <li>Reclinable seats that swivel too</li>
                        <li>Complete lie-flat seats</li>
                        <li>Divider to make rooms even more luxurious</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Sliding doors that separate you from the outside world</li>
                        <li>Window blinds</li>
                        <li>A 32” HD touchscreen monitor for a private screening</li>
                        <li>Noise-cancelling headphones</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Endless entertainment options</li>
                        <li>Wireless tablet for control</li>
                        <li>Fine dining options</li>
                        <li>Amenity kit</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Booking and cancellation</p>
            <p class="secondary-font">You can book the tickets through the Singapore Airlines website or app. However, it is advisable to take help from our designated team who can ensure that your trip is managed perfectly. Also, our agents can help you with cancellation procedures and refunds.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The refund amount depends on the type of ticket you have purchased - refundable or non-refundable</li>
                        <li>If you cancel your ticket within 24 hours of booking, there is no penalty</li>
                        <li>In case you are cancelling your ticket after 24 hours, there is a certain cancellation fee that you will have to pay</li>
                        <li>To know more about the booking and cancellation policies, you can contact our team.</li>
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