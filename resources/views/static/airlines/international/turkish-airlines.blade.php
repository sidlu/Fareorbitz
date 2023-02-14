@include('site.header')
@php $page = 'Turkish Airlines'; $logo = 'images/partners/turkish-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/turkish-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Turkish Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/turkish-airline.jpg') }}" class="img-fluid" alt="turkish airline" />
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
                <h2 class="sec__title text-center">Turkish Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <p class="airline-title">About Turkish Airlines</p>
            <blockquote>
                <p>Turkish Airlines, in some cases, alluded to just as Turkish Air, is the public banner transporter carrier of Turkey and is settled at Ataturk Airport in Istanbul. The carrier moved their based air terminal to Istanbul Airport (IST) after Istanbul Ataturk Airport stopped activity. The aircraft works administrations to the north of 310 objections across the world, making it the fourth-biggest transporter on the planet. Starting around 2022, the significant transporter flies to many objections all over the planet, to nations all over the planet including inside Europe, Asia, Africa, America and the Middle East.</p>
            </blockquote>
            <p class="airline-title">Book Cheap Turkish Airlines Tickets</p>
            <p class="secondary-font">You've come to the perfect locations to effectively look and book Turkish Airlines tickets. Around here at Alternative Airlines, we offer loads of carriers and bunches of ways of paying. Utilize our pursuit structure to start your inquiry and make your internet booking today.</p>

            <p class="airline-title">Objections</p>
            <p>The carrier flies north of 120 nations all over the planet, with a sum of more than 300 objections. This remembers both homegrown trips for Turkey yet additionally to objections in Europe, Asia, Africa, the Middle East and America. Objections incorporate Addis Ababa, Almaty, Atlanta, Baku, Berlin, Boston, Dubai, Geneva, Hong Kong, Lisbon, London, Madrid, Singapore and numerous others. The accompanying tables sum up the ongoing traveller.</p>

            <p class="airline-title">Luggage Allowance</p>
            <p class="airline-subtitle"> Hand Luggage</p>
            <ul class="airline_ul">
                <li>Hand things estimations can't surpass 23cm x 40cm x 55 cm.</li>
                <li>Travellers going in Business Class are allowed 2 x 8kg sacks for their hand gear.</li>
                <li>Travellers who are babies or youngsters, or travellers in Economy Class, are allowed 1 piece of hand gear gauging a limit of 8kg.</li>
                <li>Furthermore, all travellers are allowed one individual thing to continue board with them. These can be things like cameras, PC, satchels or umbrellas.</li>
            </ul>

            <p class="airline-subtitle"> Handled Luggage</p>
            <p class="secondary-font">Gear can't surpass 32kg in weight and just a single piece of free handled baggage is permitted on all flights. New-born children are permitted one piece of stuff under 10kg.</p>

            <p class="airline-title">Economy Class</p>
            <p>Economy Class offers a wide scope of solace on both long stretch and short-pull ventures! From amusement to customizable seat support, there are parts to appreciate in Economy Class with this aircraft!</p>

            <p class="airline-title">Economy Class Facilities</p>
            <p>Offices remembered for Economy Class incorporate open to seating with customizable headrests and stools, dinners with a combination of world and Turkish foods and furthermore hot or cold morning meals. Inflight diversion is incorporated for your pleasure like motion pictures and music.</p>

            <p>The administrations are convenience unit, Skylife magazine and amusement for youngsters</p>

            <p class="ailrine-tilte">Economy Class Seats</p>
            <p class="secondary-font">Seats in Economy Class offer many elements.</p>
            <p>You get 78cm legroom to sit serenely with, you can lean back your seat up to 15 cm and 46 cm seat width. The ottoman and headrest is customizable to the solace that suits you.</p>
            <p>Likewise, there is a USB, Power and ethernet attachment to assist with charging that multitude of gadgets you can't be without! (They are extremely helpful for keeping the youngsters engaged as well!)</p>

            <p class="airline-title">Premium Economy</p>
            <p>There is at present no superior economy on board this carrier. In any case, travellers in economy class can go in solace with premium supper choices and different additional items to assist with adding the vibe of premium economy.</p>

            <p class="airline-title">Business Class</p>
            <p>Travellers in business have the most pleasurable in-flight experience conceivable. From grant-winning dinners to its astounding theatre setup, the carrier desires to furnish travellers with the best involvement with the air terminal and in the air.</p>

            <p class="airline-title">Business Class Facilities</p>
            <p>Business Class travellers can partake in a wide scope of movies, music and narratives as well as a delectable scope of dinners.</p>
            <p class="airline-title">How are Business Class Seats?</p>
            <p>The seating for Business Class travellers comes furnished with an in-seat knead, an understanding light, a power supply and a confidential screen for the greatest protection. Seats become level around evening time and travellers are given free cushions, covers, eye veils, earplugs, lip ointments and socks. At the point when the seat is completely lie-level, it converts to a 193 cm bed.</p>


            <p class="airline-title">Top of the line</p>
            <p>This aircraft presently has no top of the line office on its planes yet. For a more exceptional encounter, travellers can decide to fly in business class.</p>

            <p class="airline-title">Inflight Entertainment</p>
            <p>Turkish Airlines is continually improving the choice of media and new satisfied accessible installed its flights. Everybody can find something to assist them with sitting back with the inflight diversion determination!</p>

            <p class="airline-title">Television</p>
            <p>Whether you're into exemplary American sitcoms, or grasping dramatizations, there's a TV show for you installed your flight. Take it easy and partake in the thrilling scope of TV shows on offer with Turkish Airlines.</p>

            <p class="airline-title">Motion pictures</p>
            <p>There are countless various motion pictures on offer. Browse World Cinema, Turkish works of art as well as Hollywood works of art. Browse new deliveries as well as exemplary family films.</p>

            <p class="airline-title">Others</p>
            <p>There are additionally a great many melodies accessible installed alongside digital recordings all over the planet. In-flight games are additionally accessible for travellers of all ages gatherings.</p>

            <p class="airline-title">Food</p>
            <p class="airline-subtitle">Dinner Options</p>
            <ul class="airline_ul">
                <li>Turkish Airlines offer travellers grant-winning new dishes roused by Turkish and World food.</li>
                <li>Economy travellers on homegrown flights are offered sandwiches, starters and treats, yet the points of interest will rely upon the time and term of your flight.</li>
                <li>For economy travellers on global and overseas flights, travellers are given breakfast and fundamental supper decisions, with likewise a tidbit administration being accessible on certain flights. Your dinner choice relies upon your flight time and the hour of the flight.</li>
                <li>Business-class travellers on homegrown flights have a decision on Turkish cooking, from shish kebabs to karnıyarık and imam bayıldı.</li>
                <li>For these travellers on international flights, they will be offered a hot/cold breakfast administration notwithstanding a feast administration and on certain flights, a bite administration. On overseas trips in business class, travellers get two suppers and furthermore nibble administration.</li>
            </ul>

            <p class="airline-title">POPULAR Turkish Airlines Route From USA</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Atlanta (ATL) &ndash; Istanbul (IST)</li>
                        <li>Boston (BOS) &ndash; Istanbul (IST)</li>
                        <li>Dallas (DFW) &ndash; Istanbul (IST)</li>
                        <li>Chicago (ORD) &ndash; Istanbul (IST)</li>
                        <li>Houston (IAH) &ndash; Istanbul (IST)</li>
                        <li>Los Angeles (LAX) &ndash; Istanbul (IST)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Miami (MIA) &ndash; Istanbul (IST)</li>
                        <li>New York City (JFK) &ndash; Istanbul (IST)</li>
                        <li>Newark (EWR) &ndash; Istanbul (IST) </li>
                        <li>San Francisco (SFO) &ndash; Istanbul (IST)</li>
                        <li>Washington, D.C. (IAD) &ndash; Istanbul (IST)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Extraordinary Dietary Requirements</p>
            <p class="secondary-font">All Turkish Airlines suppers are ready as per Islamic standards. The carrier is glad to oblige any travellers with extraordinary dietary prerequisites. These should be mentioned something like 24 hours prior to flying. Travellers with sensitivities should report this 24 hours prior to flying and should go with a clinical report. The full rundown of accessible extraordinary suppers are:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Vegan Asian Meal</li>
                        <li>Non-veggie-lover Hindu supper</li>
                        <li>Crude vegetable dinner</li>
                        <li>Child Meal</li>
                        <li>Legitimate Meal</li>
                        <li>Fish Meal</li>
                        <li>Tasteless Meal</li>
                        <li>Low-calorie dinner</li>
                        <li>Severe veggie-lover supper</li>
                        <li>Kids' Meal</li>
                        <li>Low-fat dinner</li>
                        <li>Jain - Vegetarian Hindu dinner</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">                        
                        <li>Dinner for Diabetics</li>
                        <li>Low salt dinner</li>
                        <li>Lacto-ovo veggie-lover Meal</li>
                        <li>Natural product Meal</li>
                        <li>Vegan Oriental Meal</li>
                        <li>Supper for Gluten Intolerance</li>
                        <li>Lactose-free suppers</li>
                        <li>Drinks and Alcohol</li>
                        <li>Drinks are remembered for all Turkish Airlines flights, whether voyaging Business or Economy, Domestic, International or Transatlantic. There is a determination of cocktails remembered for this help.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">WIFI</p>
            <p>Accessible on Boeing B777, B787, Airbus A330, A321neo and B737MAX aeroplanes, WIFI permits you to remain associated with life on the ground by interfacing your gadget to high-velocity WIFI fuelled by T&uuml;rk Telekom. Stream your number one TV shows or movies with practically no interferences or make up for lost time with your messages similarly as you would at home.</p>

            <p class="airline-subtitle">WIFI Price</p>
            <p>WIFI is accessible for free for all travellers flying in Business Class or for any Miles and Smiles Elite and Elite Plus individuals.</p>
            <p>For non-individuals flying in Economy Class, WIFI is accessible for $9.99 USD each hour or $29.99 for a 24-hour pass as of March 2020.</p>

            <p class="airline-title">Registration Information</p>
            <p class="airline-subtitle">Online Check-In</p>
            <p>Travellers can register for their Turkish Airline trip by entering their flight subtleties on the Turkish Airlines web registration page. Online check-in for flights opens 24 hours before planned take-off time and closes an hour and a half previously.</p>

            <p class="airline-subtitle">Air terminal Check-In</p>
            <p>Travellers can register at the air terminal by visiting the Turkish Airlines registration work area with their movement archives. Registration closes 45 minutes before the planned take-off time for homegrown flights and an hour prior to booked take-off time for global flights. Self-Service Check-In is opened 12 hours preceding take-off.</p>

            <p class="airline-subtitle">Long-standing customer Program</p>
            <p>Turkish Airlines works a long-standing customer program called Miles to compensate standard travellers with the carrier. Travellers can procure miles for flying with Star Alliance individuals and its carrier accomplices.</p>
            <p>These miles can be traded for a significant distance on aircraft tickets, seat updates, inns, vehicle rentals and shopping.</p>
            <p>Turkish Airlines' Business Class administration for global flights offers to invite drinks preceding take-off as visitors load up the aeroplane, travellers experience caf&eacute; quality help with painstakingly chosen, top-notch menus that are consistently different to give fascinating new choices to normal explorers.</p>
            <p class="airline-subtitle">Carrier Alliance</p>
            <p>Turkish Airlines is essential for Star Alliance and has been a part beginning around 2008. The coalition incorporates Aegean, Air Canada, Air China, Air India, ANA, Copa Airlines, EgyptAir, Ethiopian Airlines, Lufthansa, Singapore Airlines es, and United Airlines and that's just the beginning.</p>
            <p class="airline-title">Centre point Airport</p>
            <p class="airline-subtitle">Istanbul Airport</p>
            <p>Istanbul Airport was opened in April 2019, the air terminal has a limit of 90 million travellers when stage one got done and it can oblige 200 million travellers once the undertaking is finished. It will be the greatest air terminal on the planet. Aeroflot, EgyptAir, Emirates, IndiGo, KLM, LOT Polish Airlines, Lufthansa, Oman Air, and Qatar Airways are among the carriers that fly to and from Istanbul Airport.</p>

            <p class="airline-title">Elective Airlines to Turkish Airlines</p>
            <p>Pegasus Airlines, EgyptAir, Air Algeria and Emirates are carriers that have comparable courses to Turkish Airlines.</p>
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