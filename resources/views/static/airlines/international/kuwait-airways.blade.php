@include('site.header')
@php $page = 'Kuwait Airways'; $logo = 'images/partners/kuwait-airways.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/kuwait-airways.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Kuwait Airways Reservations </p>
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
    <img src="{{ asset('images/airlines/kuwait-airways.jpg') }}" class="img-fluid" alt="kuwait airways" />
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
                <h2 class="sec__title text-center">Kuwait Airways</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-3">Kuwait Airways is a national airline of Kuwait, with its head office on the grounds of Kuwait International Airport, Al Farwaniyah Governorate. It operates as a part of the Kuwait Group. The airline's main hub is at Kuwait International Airport in the city of Shuwaikh. It operates domestic and international flights to over 30 destinations in Europe, Asia, the Middle East and Africa. The airline's fleet consists of an all Airbus fleet consisting of A320-200s and A321-200s.</p>
                <p>Kuwait Airways was founded on 15 May 1946 as part of the Kuwait National Petroleum Company, which also owns 100% shareholding in the carrier. It began operations with a single Handley Page Halifax aircraft on routes within the Arabian Peninsula. In 1953, it became one of 16 airlines to join the now defunct "Association Internationale de Transport Air Courier" (AITAC). </p>
            </blockquote>
            <p class="mb-3">In 1954, the airline began operating as Kuwait Airways Corporation (KAC), a joint venture between British European Airways and Kuwait Petroleum Company. The carrier's first Boeing aircraft, a 737-200, arrived in 1971; by 1976 it had acquired its first wide-body aircraft—an Airbus A300. In October 1991, KAC was rebranded as Kuwait Airways Corporation after being fully privatized. It joined the Oneworld alliance in June 2000 and became an affiliate member of Star Alliance in 2004.</p>
            <p class="mb-3">In the late 2000s, the carrier acquired new Airbus A330 and Boeing 777-200LR aircraft. In 2009, Kuwait Airways began operations at its new hub at Hamad International Airport (HIA) in Doha, Qatar. At the time of its opening, it was the only airline with direct flights to HIA from Europe and North America; however, it subsequently faced stiff competition from other Oneworld member airlines serving the same route network. In 2014, Kuwait Airways announced plans for an initial public offering—the first by an Arab airline since 1991—to raise $500 million in capital. The IPO was completed on March 8th 2015.</p>
            <p class="mb-3">In 2017 Kuwait Airways was named the best airline in the Middle East. The carrier was also ranked first for on-time performance, baggage handling and airport lounges. The airline’s fleet consists of a mix of Airbus and Boeing aircraft, the majority of which are Airbus A320 family and Boeing 777 models. Kuwait Airways has an all-Airbus fleet with more than 40 aircraft in its Airbus A320 Family, currently consisting of 12 A320s and 30 A321s. It also operates two Boeing 777-200ER wide body aircraft for long haul flights to Europe and North America. Kuwait Airways has won multiple awards from Skytrax, including the Best Middle Eastern Airline in 2017 and 2018. It was also named Best Business Class Lounge in the Middle East at the 2018 World Airport Awards.</p>

            <p class="airline-title">SEAT</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Economy Class Chargeable Seats can be booked up to 6 hours before departure time from any Kuwait Airways sales channels; including Online, Mobile, APP, Web Check-In, Kuwait Airways Office or Call Center (171).</li>
                        <li>Chargeable seats are applicable only on Economy Class of Travel.</li>
                        <li>Chargeable seats are priced per passenger/flight segment in the booking.</li>
                        <li>Chargeable seats are applicable only on Kuwait Airways operated flights.</li>
                        <li>Chargeable seats likewise are applicable for OASIS redemption tickets.</li>
                        <li>Chargeable seats cannot be transferred to any other passengers.</li>
                        <li>Chargeable seats are subject to availability.</li>
                        <li>Existing assigned seats on bookings created before 20 January 2020 will be protected and kept without additional charges.</li>
                        <li>Seat with baby bassinet facility is chargeable, but the seat is available only for bookings that includes an infant</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Baggage</p>
            <p class="airline-subtitle">Standard Free Baggage Policy</p>
            <table class="table table-striped">
                <tr>
                    <th>Destination</th>
                    <th>Class</th>
                    <th>Baggage Allowance</th>
                    <th>Infant</th>
                </tr>
                <tr>
                    <td rowspan="4" style="vertical-align: middle;">All Destination</td>
                    <td>Royal Class</td>
                    <td>3 (32 kgs each price)</td>
                    <td rowspan="4" style="vertical-align: middle;">1 (10 kgs) not exceeding total dimensions 115 cms or 45 inch</td>
                </tr>
                <tr>
                    <td>First Class</td>
                    <td>3 (32 kgs each price)</td>
                </tr>
                <tr>
                    <td>Business Class</td>
                    <td>2 (32 kgs each price)</td>
                </tr>
                <tr>
                    <td>Economy Class</td>
                    <td>2 (23 kgs each price)</td>
                </tr>
            </table>

            <p class="airline-title">Oasis Club</p>
            <p class="airline-subtitle">Platinum Member</p>
            <table class="table table-striped">
                <tr>
                    <td>Royal/First/Business</td>
                    <td>1 Extra piece 32Kg</td>
                </tr>
                <tr>
                    <td>Economy</td>
                    <td>1 Extra piece 32Kg or overweight waiver of 9 Kg per piece for maximum 2 pieces</td>
                </tr>
            </table>

            <p class="airline-subtitle">Gold Member</p>
            <table class="table table-striped">
                <tr>
                    <td>Royal/First/Business</td>
                    <td>1 Extra piece 32Kg</td>
                </tr>
                <tr>
                    <td>Economy</td>
                    <td>1 Extra piece 32Kg or overweight waiver of 9 Kg per piece for maximum 2 pieces</td>
                </tr>
            </table>
            <p class="secodary-text">N.B. for economy class both benefits cannot be cumulative one can be given either the 1 extra piece or the overweight waiver for 2 pieces.</p>

            <p class="airline-subtitle">Silver Member</p>
            <table class="table table-striped">
                <tr>
                    <td>Royal/First/Business/Economy</td>
                    <td>1 Extra piece 32Kg</td>
                </tr>
                <tr>
                    <td>Economy</td>
                    <td>1 Extra piece of 23Kg</td>
                </tr>
            </table>

            <p class="airline-title">Destination</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To New York (JFK)</li>
                        <li>Kuwait (KWI) To London (LHR)</li>
                        <li>Kuwait (KWI) To Munich (MUC)</li>
                        <li>Kuwait (KWI) To Frankfurt (FRA)</li>
                        <li>Kuwait (KWI) To Tbilisi (TBS)</li>
                        <li>Kuwait (KWI) To Amsterdam (AMS)</li>
                        <li>Kuwait (KWI) To Baku (GYD)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Istanbul (SAW)</li>
                        <li>Kuwait (KWI) To Madrid (MAD)</li>
                        <li>Kuwait (KWI) To Malaga (AGP)</li>
                        <li>Kuwait (KWI) To Milan (MXP)</li>
                        <li>Kuwait (KWI) To Paris (CDG)</li>
                        <li>Kuwait (KWI) To Rome (FCO)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Middle East & Africa Flights</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Alexandria (HBE)</li>
                        <li>Kuwait (KWI) To Amman (AMM)</li>
                        <li>Kuwait (KWI) To Bahrain (BAH)</li>
                        <li>Kuwait (KWI) To Beirut (BEY)</li>
                        <li>Kuwait (KWI) To Cairo (CAI)</li>
                        <li>Kuwait (KWI) To Casablanca (CMN)</li>
                        <li>Kuwait (KWI) To Dammam (DMM)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Doha (DOH)</li>
                        <li>Kuwait (KWI) To Dubai (DXB)</li>
                        <li>Kuwait (KWI) To Jeddah (JED)</li>
                        <li>Kuwait (KWI) To Muscat (MCT)</li>
                        <li>Kuwait (KWI) To Najaf (NJF)</li>
                        <li>Kuwait (KWI) To Riyadh (RUH)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Indian Sub-Continent</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Bengaluru (BLR)</li>
                        <li>KU Kuwait (KWI) To Chennai (MAA)</li>
                        <li>Kuwait (KWI) To Delhi (DEL)</li>
                        <li>Kuwait (KWI) To Dhaka (DAC)</li>
                        <li>Kuwait (KWI) To Hyderabad (HYD)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Islamabad (ISB)</li>
                        <li>Kuwait (KWI) To Kochi (COK)</li>
                        <li>Kuwait (KWI) To Lahore (LHE)</li>
                        <li>Kuwait (KWI) To Mumbai (BOM)</li>
                        <li>Kuwait (KWI) To Thiruvananthapuram (TRV)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Far East</p>
            <div class="row mb-3">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Kuwait (KWI) To Bangkok (BKK)</li>
                        <li>Kuwait (KWI) To Guangzhou (CAN)</li>
                        <li>Kuwait (KWI) To Manila (MNL)</li>
                    </ul>
                </div>
            </div>

            <p class="mb-3">Kuwait Airways is the national carrier of Kuwait and operates a number of domestic and international routes. It has its main hub at Kuwait International Airport, which is also known as Mubarak Al-Kabir Airport, located 19 km (12 mi) from the city center. The airline flies To over 70 destinations across Europe, Asia, Africa and North America.</p>
            <p class="mb-3">Kuwait Airways has four classes of service: First Class, Business Class, Premium Economy Class and Economy Class. The airline also has an in-flight entertainment system with multiple channels for movies, music and games. Kuwait Airways offers a wide range of amenities such as Wi-Fi internet access, personal on-demand video screens and food & beverage services. It has an economy class with a variety of packages To suit the needs of its cusTomers. The airline also offers special fares for students, children and senior citizens. It has won several awards including Skytrax’s Best Airline in the Middle East award in 2017 and 2018. The airline offers special fares for students, children and senior citizens. It also has an award-winning in-flight magazine called Al Safwa (The Enchanted). The airline has won several awards including Skytrax’s Best Airline in the Middle East award in 2017 and 2018. Kuwait Airways is one of the few airlines that offer direct flights from New York City To Kuwait City via London Heathrow Airport.</p>
            <p class="mb-3">Kuwait Airways is an award-winning airline with a strong reputation for safety and cusTomer service. It has won several awards including Skytrax’s Best Airline in the Middle East award in 2017 and 2018. It has won several awards including Skytrax’s Best Airline in the Middle East award in 2017 and 2018. It has won several awards including Skytrax’s Best Airline in the Middle East award in 2017 and 2018.</p>
            <p class="mb-3">The airline has also been voted Best Middle Eastern Airline in 2016 and 2017 by the UK’s Telegraph Travel Awards. Kuwait Airways is one of the few airlines that offer direct flights from New York City To Kuwait City via London Heathrow Airport. The airline operates a fleet of 48 aircraft including Boeing 777-300ER, Airbus A320 family aircraft and Embrarer E175 jets.</p>
            <p class="mb-3">The airline has a very good safety record and has never had an aircraft crash. It is one of only a few airlines that have been awarded 5-star status by Skytrax. The airline is a member of the SkyTeam Alliance, which is the second largest airline alliance in the world. It has codeshare agreements with more than 30 airlines including Aeroflot, Air France, China Eastern Airlines and Alitalia. Kuwait Airways services destinations in Europe, North America, Asia and Africa. Its main hub is at Kuwait International Airport (KWI).</p>

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