@include('site.header')
@php $page = 'Qatar Airways'; $logo = 'images/partners/qatar-airways.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/qatar-airways.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Qatar Airways Reservations </p>
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
    <img src="{{ asset('images/airlines/qatar-airways.jpg') }}" class="img-fluid" alt="qatar airlines" />
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
                <h2 class="sec__title text-center">Qatar Airways</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-2">
                    Qatar Airways has its service spread around all six continents. Despite being a relatively new airline, it is considered one of the world’s fastest-growing airlines. Their home and hub is at Hamad International Airport in Qatar’s Doha.
                </p>
                <p>Launched in 1997, the airline has earned several awards over the years. It is considered one of the elite groups of airlines in the whole world. They also have several programmes which make the travel experience of the passengers smooth.</p>
            </blockquote>
            <p class="airline-title">Booking and cancellation</p>
            <p>International travel entails several procedures in terms of booking and cancellation. At times, those procedures could be confusing and lengthy. Allow our specialised team to take care of the processes for you so that you can have a comfortable and hassle free trip.</p>

            <p class="airline-title">Destinations</p>
            <p class="secondary-font">Qatar Airways covers all the major destinations across the world. Several cities under some of the major places like America, Europe, Africa, the Middle East, and Asia and the Pacific are serviced by the airlines regularly. Here is a detailed look at the various places where travellers can visit through this airline.</p>

            <p class="airline-subtitle">Places in the Americas</p>
            <p class="secondary-font">Here is a list of the destinations in the United States of America and its neighbouring countries:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Atlanta</li>
                        <li>Houston</li>
                        <li>Montreal</li>
                        <li>San Francisco</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>New York</li>
                        <li>Dallas</li>
                        <li>Boston</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">

                        <li>Los Angeles</li>
                        <li>Miami</li>
                        <li>Philadelphia</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Chicago</li>
                        <li>Washington DC</li>
                        <li>Seattle</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Places in Europe</p>
            <p class="secondary-font">Take a look at the places this airline covers in Europe.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Paris</li>
                        <li>Helsinki</li>
                        <li>Barcelona</li>
                        <li>Madrid</li>
                        <li>Warsaw</li>
                        <li>Yerevan</li>
                        <li>Belgrade</li>
                        <li>Berlin</li>
                        <li>Copenhagen</li>
                        <li>Dublin</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Dusseldorf</li>
                        <li>Frankfurt</li>
                        <li>Munich</li>
                        <li>Baku</li>
                        <li>Bucharest</li>
                        <li>Larnaca</li>
                        <li>Oslo</li>
                        <li>Athenes</li>
                        <li>Mykonos</li>
                        <li>Santorini</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Zagreb</li>
                        <li>Amsterdam</li>
                        <li>Budapest</li>
                        <li>Edinburgh</li>
                        <li>London</li>
                        <li>Manchester</li>
                        <li>Geneva</li>
                        <li>Milan</li>
                        <li>Zurich</li>
                        <li>Almaty</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Brussels</li>
                        <li>Prague</li>
                        <li>Sofia</li>
                        <li>Stockholm</li>
                        <li>Ankara</li>
                        <li>Istanbul</li>
                        <li>St. Petersburg</li>
                        <li>Tbilisi</li>
                        <li>Vienna</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Africa</p>
            <p class="secondary-font">Here are the places in Africa that travellers can visit with Qatar Airways.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Durban</li>
                        <li>Cairo</li>
                        <li>Algiers</li>
                        <li>Kano</li>
                        <li>Lagos</li>
                        <li>Port Harcourt</li>
                        <li>Abuja</li>
                        <li>Alexandria</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Djibouti</li>
                        <li>Entebbe</li>
                        <li>Luxor</li>
                        <li>Sharm El Sheikh</li>
                        <li>Abidjan</li>
                        <li>Addis Ababa</li>
                        <li>Dar es Salaam</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Khartoum</li>
                        <li>Kilimanjaro</li>
                        <li>Luanda</li>
                        <li>Mogadishu</li>
                        <li>Zanzibar</li>
                        <li>Cape Town</li>
                        <li>Nairobi</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Johannesburg</li>
                        <li>Tunis</li>
                        <li>Casablanca</li>
                        <li>Harare</li>
                        <li>Maputo</li>
                        <li>Seychelles</li>
                        <li>Lusaka</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Middle East</p>
            <p class="secondary-font">Do you know which amazing places in the Middle East can you explore with this airline? Here is a quick look:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Doha</li>
                        <li>Kuwait</li>
                        <li>Abu Dhabi</li>
                        <li>Salalah</li>
                        <li>Basra</li>
                        <li>Medina</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Beirut</li>
                        <li>Baghdad</li>
                        <li>Dubai</li>
                        <li>Najaf</li>
                        <li>Sharjah</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Amman</li>
                        <li>Damman</li>
                        <li>Isfahan</li>
                        <li>Mashhad</li>
                        <li>Muscat</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Tehran</li>
                        <li>Shiraz</li>
                        <li>Jeddah</li>
                        <li>Qassim</li>
                        <li>Riyadh</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Asia and the Pacific</p>
            <p class="secondary-font">Full of beautiful and distinctive cultures, here are the regions where you can travel through Qatar Airways.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bali</li>
                        <li>Auckland</li>
                        <li>Hyderabad</li>
                        <li>Dhaka</li>
                        <li>Kuala Lumpur</li>
                        <li>Maldives</li>
                        <li>Guangzhou</li>
                        <li>Thiruvananthapuram</li>
                        <li>Delhi</li>
                        <li>Chennai</li>
                        <li>Seoul</li>
                        <li>Tokyo (NRT)</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Amritsar</li>
                        <li>Ahmedabad</li>
                        <li>Goa</li>
                        <li>Kochi</li>
                        <li>Kolkata</li>
                        <li>Mumbai</li>
                        <li>Kozhikode</li>
                        <li>Bengaluru</li>
                        <li>Cebu</li>
                        <li>Clark (CRK)</li>
                        <li>Hanoi</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Hong Kong</li>
                        <li>Manila</li>
                        <li>Bangkok</li>
                        <li>Jakarta</li>
                        <li>Phuket</li>
                        <li>Adelaide</li>
                        <li>Brisbane</li>
                        <li>Melbourne</li>
                        <li>Sydney</li>
                        <li>Canberra</li>
                        <li>Kathmandu</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Perth</li>
                        <li>Islamabad</li>
                        <li>Karachi</li>
                        <li>Colombo</li>
                        <li>Sialkot</li>
                        <li>Singapore</li>
                        <li>Ho Chi Minh City</li>
                        <li>Lahore</li>
                        <li>Multan</li>
                        <li>Peshawar</li>
                        <li>Tokyo (HND)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Trending destinations to visit</p>
            <p class="secondary-font">It is no secret that some destinations across the world are preferred more than others by travellers. So, what are the trending places of the season that have wonders to offer to the people? Here is a quick look at the popular destinations to travel to through Qatar Airways.</p>

            <p class="airline-subtitle">Cape Town</p>
            <p>A kaleidoscope of nature's beauty and colourful culture, this is a place worth visiting. There are numerous wonderful places people can visit and also they can try delicious cuisine. This place is so popular that it is better to plan in advance to book the best seat on the flight from the US.</p>

            <p class="airline-subtitle">Cairo</p>
            <p>Located on the banks of the river Nile, this is a place painted with the perfect balance of culture and modern amenities. This is a land of adventures that everyone must explore once in their life. With wonderful museums and marvellous pyramids, this place always offers travellers an exhilarating experience.</p>

            <p class="airline-subtitle">Qatar</p>
            <p>Home of Qatar Airways, this place has always been a popular destination for travellers. Even more so with the Fifa World Cup drawing so near. From museums to modern wonders to endless shopping to delicious food, this place has everything to offer.</p>

            <p class="airline-subtitle">São Paulo</p>
            <p>A vibrant cultural hub with roots in tradition, this wonderful place never fails to win people’s hearts. Travellers can have a fun-filled time and can make memorable memories while visiting this place.</p>

            <p class="airline-subtitle">Johannesburg</p>
            <p>One of the most diverse cities in South Africa, this place is a modern-day travel destination that attracts tourists from all across the world, especially the USA. If you are looking for your next holiday destination, hop onto a Qatar Airways flight from the US to reach Johannesburg.</p>

            <p class="airline-title">Travel classes</p>
            <p class="secondary-font">Like most airlines, Qatar Airways also has three distinctive travel classes to offer to passengers. Designed and developed keeping in mind the balance of luxury and affordability, these classes are exclusively tailored to meet the onboard needs of the passengers.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">With numerous entertainment options and comfortable sitting, this class is preferred by many during their journey with Qatar Airways. Here are some of the features of the Economy Class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>On-board cuisine</li>
                        <li>Family fun options</li>
                        <li>Connectivity</li>
                        <li>Multiple entertainment options</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Wide and spacious seats</li>
                        <li>Soft blanket</li>
                        <li>Recliner seats</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">The airline has developed a special business class section for its travellers and it’s known as QSuits. With comfortable seating and delectable cuisine, this class truly offers a remarkable experience to those travelling for business purposes. What are the features that make this class different from the others? Take a look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Forward-facing seats</li>
                        <li>Artistic cabin interiors</li>
                        <li>Seats dressed in the finest elegant fabrics</li>
                        <li>All-access port (with HDMI, USB, and NFC capabilities)</li>
                        <li>Reclining seats</li>
                        <li>Direct aisle access</li>
                        <li>Amenity kits</li>
                        <li>Designer loungewear</li>
                        <li>On demand a la carte menu</li>
                        <li>Spacious dining area</li>
                        <li>Endless entertainment options</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Innovative systems with touch screen</li>
                        <li>Dual-screen interface</li>
                        <li>Italian toiletries</li>
                        <li>Ultra-comfortable loungewear</li>
                        <li>Slippers</li>
                        <li>Spacious cabin to work or relax</li>
                        <li>Advanced LED lighting</li>
                        <li>Storage area</li>
                        <li>State-of-the-art communications system</li>
                        <li>Large working area</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">First Class</p>
            <p class="secondary-font">Designed for unparalleled comfort and complete privacy, this class will leave you feeling well-rested during your journey. Here are some of the prominent features of this travel class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Ample storage place</li>
                        <li>Ultra-comfortable lie-flat bed</li>
                        <li>Designer loungewear</li>
                        <li>Best amenity kit</li>
                        <li>Cuisine by the best chefs</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Mocktail</li>
                        <li>A cabin that can turn into a workspace</li>
                        <li>Private access to laptop power and USB plug</li>
                        <li>On-board Wifi</li>
                        <li>Innovative entertainment system with over 4,000 options</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with infant</p>
            <p class="secondary-font">Here are some points you need to remember while travelling with an infant below two years of age:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Infants need to be older than seven days</li>
                        <li>They should be younger than two years</li>
                        <li>For children above two years, a child fare ticket needs to be booked for the entire journey</li>
                        <li>Infants below two years of age can travel without a seat</li>
                        <li>If you want, you can book a seat through the child fare ticket option</li>
                    </ul>
                </div>
            </div>

            <p class="airline-tilte">Seat selection details</p>
            <p class="secondary-font">What are the options when it comes to selecting your preferred seat while travelling with Qatar Airways? Take a look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Seat selection charges are refunded when the change is involuntary due to security, safety or operational reasons</li>
                        <li>Non-refundable taxes are dedicated during the refund of preferred seat charges</li>
                        <li>First or business class passengers can select a seat free of charge at any time from the moment of booking</li>
                        <li>Charges are applied for seat change for Economy class passengers</li>
                        <li>Emergency exit seats with extra legroom can be allotted to people who are 18 years of age or above and can understand safety guidelines. Also, they need to be physically fit without any medical conditions. This seat is not allotted during pregnancy or in case of any form of vision, hearing, or mobility impairment</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel baggage</p>
            <p class="secondary-font">What are the things you need to keep in mind about your travelling baggage while taking a trip on Qatar Airways? Here is a quick look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The maximum dimension is calculated considering the length + width + height of the bag</li>
                        <li>Zam-Zam water in checked baggage is currently not permitted</li>
                        <li>One pushchair or stroller is accepted for infants without any charges</li>
                        <li>Excess weight in baggage above the permitted limit is chargeable</li>
                        <li>Sporting equipment can be checked as baggage</li>
                        <li>The same baggage allowance applies to children as adults</li>
                        <li>Human remains must accompany the certificate of death issued by authorities at the origin</li>
                        <li>Travellers can purchase excess baggage before travel to increase the allotted baggage allowance</li>
                        <li>A carry-on bag can have power banks and separate batteries. They are not allowed in check-in luggage</li>
                        <li>E-Cigarettes should be put in a carry-on bag</li>
                        <li>Passengers can carry drones in hand luggage</li>
                        <li>A small vehicle powered by lithium batteries like mini segways or hoverboards are not permitted in the cabin or checked-in baggage</li>
                        <li>Smoking, including electronic cigarettes, is not permitted on-board</li>
                        <li>Passengers can carry wheelchairs for personal use without any charges</li>
                        <li>Food items can be carried in hand luggage but rules may change depending on the regulations of the origin country</li>
                        <li>Aerosols, pastes and gels in 100 ml containers are allowed in hand luggage. Anything larger than that needs to be in checked-in luggage</li>
                        <li>A reasonable amount of baby food can be carried. Products like baby juice, baby milk, and steriliser are permitted</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Membership benefits</p>
            <p class="secondary-font">Qatar Airways have different tiered membership programmes for passengers. More benefits are enjoyed by those with a higher membership tier.</p>
            <p class="secondary-font">Members need to have appropriate qualifications to be eligible for the membership programme. Also, they need to earn Qpoints to retain the membership and move to higher tiers. These benefits are available and applicable only on flights operated or marketed by Qatar Airways.</p>

            <p class="airline-subtitle">Burgundy</p>
            <p class="secondary-font">These are the benefits that the members of this tier enjoy:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>100% mileage per family</li>
                        <li>100% mileage on transactions made with non-partner</li>
                        <li>Stand-by on priority</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flexi awards</li>
                        <li>Option to stop and pay with Avios</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Silver</p>
            <p class="secondary-font">Let us check the benefits of being a member of this tier:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>25% bonus on eligible flights</li>
                        <li>Priority stand-by</li>
                        <li>Priority boarding</li>
                        <li>Priority check-in</li>
                        <li>Flexi awards</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Shop and pay with Avios</li>
                        <li>Preferred seats</li>
                        <li>Lounge access</li>
                        <li>Extra baggage allowance</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Gold</p>
            <p class="secondary-font">Here are the benefits of gold membership:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>75% tier bonus</li>
                        <li>100% mileage per family</li>
                        <li>Priority check-in</li>
                        <li>Priority boarding</li>
                        <li>Preferred seats</li>
                        <li>Extra baggage allowance</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flexi awards</li>
                        <li>Shop and pay with Avios</li>
                        <li>Priority stand-by</li>
                        <li>Lounge access</li>
                        <li>Qcredits to redeem for upgrades. Can also be used for excess baggage and other services</li>
                        <li>'Meet and assist' service</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Platinum</p>
            <p class="secondary-font">Here are the tailor-made benefits of this tier:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority stand-by</li>
                        <li>Flexi awards</li>
                        <li>100% mileage per family</li>
                        <li>100% tier bonus</li>
                        <li>Preferred seats</li>
                        <li>Lounge access</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Extra baggage</li>
                        <li>Priority check-in</li>
                        <li>Priority boarding</li>
                        <li>Increased Qcredits</li>
                        <li>Discounts</li>
                        <li>‘Meet and assist’ gold service</li>
                        <li>No Avios expiry</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">Previously known as Qmiles, the point collection system of Qatar Airways is now known as Avios.</p>

            <p class="airline-title">Family programme</p>
            <p>This programme helps the travellers to pool Avios of nominated family members to get quicker awards. Up to nine close family members can be added to enjoy numerous benefits. There are Silver, Gold or Platinum members who can access different advantages through their pooled awards. The family members who are allowed are spouses, parents of the main member, parents of the spouse, and children above two years of age. Here are some points that you need to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can make changes in nomination through your online account. However, you will have to provide documents to confirm the relationship with the member</li>
                        <li>There is an option to de-link the previously selected family members but they cannot be replaced before 24 months from the date of addition</li>
                        <li>People who are above 18 years of age can have their own membership accounts where they can be main members, besides being nominated for another</li>
                        <li>De-linking can be done online through the edit option</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Special services</p>
            <p class="secondary-font">
                Qatar Airways always aims towards providing the best options to all of its customers. Hence, the company has special services to meet the special needs of travellers. The passengers need to inform the airline about their specific needs at least 48 hours before the departure time. It can also be done online. Here are some of the special services that the passengers can avail of:
            </p>
            <p class="airline-subtitle">Medical and disability assistance</p>
            <p>The passengers can fill Medical Information Form (MEDIF) while booking the flight or 48 hours before the departure. Depending on the information, the airline staff will provide the required services to the passengers.</p>

            <p class="airline-subtitle">Expectant mothers</p>
            <p>Certain medical forms are provided to the expectant mothers to ensure their safety and the safety of their unborn child. The pregnant traveller needs to provide the patient's name, estimated date of delivery, confirmation about uncomplicated or complicated pregnancy, confirmation about single or multiple pregnancies, proposed air travel dates, a medical certificate from a qualified doctor, and no objection certificate for fit to travel from a qualified doctor.</p>

            <p class="airline-subtitle">Children</p>
            <p>Special care for children is also provided on board.</p>
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