@include('site.header')
@php $page = 'Saudia Airlines'; $logo = 'images/partners/saudia.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/saudia.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Saudia Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/saudia-airline.jpg') }}" class="img-fluid" alt="saudia airline" />
</section>
<!-- <div class="search-btn">
    <button class="btn btn-primary btn-block w-100" style="border-radius: 0;" id="show_search">Search Flights</button>
</div> -->
<div id="search_box">
    @include('flight.flight-search-box')
</div>

<section class="call-section pb-2 pt-4">
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
            <div class="section-heading pt-2">
                <h2 class="sec__title text-center">Saudia Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Saudia, formerly known as Saudi Arabian Airlines, is the flag carrier of Saudi Arabia, based in Jeddah. The airline's main operational base is at King Abdulaziz International Airport in Jeddah. The airline is one of the few Saudi-based airlines To have earned a five-star rating from Skytrax, the world's largest airline and airport review website. The airline also has a strong presence in the Middle East, Asia and Europe.
            </blockquote>
            <p class="mb-3">The airline is the third largest in the Middle East, after Emirates and Qatar Airways. Saudia has a fleet of more than 140 aircraft serving more than 100 domestic and international destinations. The carrier's main hubs are King Abdulaziz International Airport in Jeddah and King Khalid International Airport in Riyadh. Saudia has been named one of the best airlines in the world by Skytrax, a British research firm that surveys travelers on more than 500 airlines worldwide. The airline was awarded five stars based on its performance in seven categories: cabin staff service, food and drink, inflight entertainment, airport services and facilities, check-in and boarding process, baggage handling,</p>
            <p class="mb-3">The ranking is based on surveys of more than 18 million passengers, who are asked To rate their experiences with airlines on a scale of one To five stars. Passengers also have an opportunity To provide comments about their experience. The airline is the only one in the world To receive five stars for its service, food and drink and overall experience. It was also ranked first in the world for its inflight entertainment system and baggage handling. AirlineRatings.com managing ediTor, Geoffrey Thomas, said that Qatar Airways is a shining example of what can be achieved when an airline focuses on delivering great cusTomer service.</p>
            <p class="mb-3">“The World Airline Awards are the only impartial, global awards that recognize airlines on the performance of their service and products. These awards are decided by passengers, for passengers, so it is fitting that the best airline in the world is recognized. It’s a testament To Qatar Airways’ commitment To deliver exceptional cusTomer experience.”</p>
            <p class="mb-3">Qatar Airways was also recognized for its inflight entertainment system and baggage handling. It was ranked the best in the world for its in-flight entertainment, which offers more than 1,000 hours of content on seatback screens for passengers.</p>
            <p class="mb-3">The airline also received a number of awards at the World Airline Awards ceremony, including Best First Class Lounge Dining Experience (London Heathrow), Best Business Class Lounge Dining Experience (Doha Hamad International Airport), Best Premium Economy Class Catering Service (Doha Hamad International Airport) and Best Business Class Onboard Catering Service (Singapore Changi Airport). Emirates also won the World’s Most Improved Airline award at the Skytrax World Airline Awards. This is the fifth consecutive year that Emirates has been named as one of the Top airlines in the world. The airline was ranked fourth overall for its in-flight entertainment system and baggage handling. It was also ranked first for its First Class Lounge Dining Experience (London Heathrow), Best Business Class Lounge Dining Experience (Doha Hamad International Airport) and Best Premium Economy Class Catering Service (Doha Hamad International Airport).</p>
            <p class="mb-3">Emirates has also been named the world’s best airline by Skytrax for the past five years. It is the largest airline in the Middle East and flies To more than 150 destinations across six continents. The airline has also won the Best First Class Seat, Best Business Class Seat, Best Premium Economy Class Seat and Best Cabin Crew awards. It was the first airline To introduce “Shower Spas” in First-Class Lounges at Dubai International Airport and it also boasts the world’s fastest Wi-Fi connection on board.</p>

            <p class="airline-title">Baggage Rules</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The weight of one piece should not exceed 32KG (70lbs) on First and Business classes.</li>
                        <li>The weight of one piece should not exceed 23kg (50lbs) on Guest class and maximum weight shall not exceed 32kg (70 lbs), and SAR 138 shall be added as an excess baggage fee per piece.</li>
                        <li>
                            <p class="secondary-font"> Allowed Weight concept for infant:</p>
                            <p><b>Economy Class:</b> The weight of one piece shall not exceed 23kg (50lbs). Excess baggage is not allowed on infant ticket.</p>
                            <p><b>Business & First Classes:</b> The weight of one piece shall not exceed 32kg (70lbs). Excess baggage is not allowed on infant ticket.</p>
                        </li>
                        <li>The Total dimensions of a piece should not exceed 158 cm. If the dimensions of a piece exceeded 158 cm but less than 205 cm, the value of SAR 287.5 will be collected for that piece. If the dimensions of a piece exceed (205 cm) and cannot be fragmented, baggage should shipped by cargo.</li>
                        <li>The above table is To inform about the free baggage allowances allowed per passenger per cabin class. It may change without prior notice, for some flights and destinations, due To operating conditions. The actual applied baggage allowances will be displayed and detailed during the booking process. By paying and completing the booking, it will be considered as an acceptance To the free baggage allowances included in the booking record.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Seats Reservation Rules</p>
            <p class="mb-3">SAUDIA offers seat selection for their valuable guests, and some of the seats will be available for advance selection for additional fees on selected international routs and selected seats during flight bookings and tickets issuance through SAUDIA's website www.SAUDIA.com or mobile app.</p>
            <p class="mb-3">You can book your pre-paid seat early on all flights operated by SAUDIA. Remaining pre-paid seats will be available 12 hours prior departure free of charge.</p>

            <p class="airline-title">Destinations</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Riyadh (RUH) To Algeria</li>
                        <li>Riyadh (RUH) To Austria</li>
                        <li>Riyadh (RUH) To Bahrain</li>
                        <li>Riyadh (RUH) To Bangladesh</li>
                        <li>Riyadh (RUH) To Belgium</li>
                        <li>Riyadh (RUH) To China</li>
                        <li>Riyadh (RUH) To Egypt</li>
                        <li>Riyadh (RUH) To Georgia</li>
                        <li>Riyadh (RUH) To France</li>
                        <li>Riyadh (RUH) To Germany</li>
                        <li>Riyadh (RUH) To Greece</li>
                        <li>Riyadh (RUH) To India</li>
                        <li>Riyadh (RUH) To Indonesia</li>
                        <li>Riyadh (RUH) To Iran</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Riyadh (RUH) To Iraq</li>
                        <li>Riyadh (RUH) To Italy</li>
                        <li>Riyadh (RUH) To Jordan</li>
                        <li>Riyadh (RUH) To Kenya</li>
                        <li>Riyadh (RUH) To Kuwait</li>
                        <li>Riyadh (RUH) To Lebanon</li>
                        <li>Riyadh (RUH) To Malaysia</li>
                        <li>Riyadh (RUH) To Mauritius</li>
                        <li>Riyadh (RUH) To Morocco</li>
                        <li>Riyadh (RUH) To Netherlands</li>
                        <li>Riyadh (RUH) To Nigeria</li>
                        <li>Riyadh (RUH) To Oman</li>
                        <li>Riyadh (RUH) To Pakistan</li>
                        <li>Riyadh (RUH) To Philippines</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Riyadh (RUH) To Qatar</li>
                        <li>Riyadh (RUH) To Saudi Arabia</li>
                        <li>Riyadh (RUH) To Singapore</li>
                        <li>Riyadh (RUH) To South Africa</li>
                        <li>Riyadh (RUH) To Spain</li>
                        <li>Riyadh (RUH) To Sri Lanka</li>
                        <li>Riyadh (RUH) To Switzerland</li>
                        <li>Riyadh (RUH) To Thailand</li>
                        <li>Riyadh (RUH) To Turkey</li>
                        <li>Riyadh (RUH) To Uganda</li>
                        <li>Riyadh (RUH) To UAE</li>
                        <li>Riyadh (RUH) To United Kingdom</li>
                        <li>Riyadh (RUH) To United States</li>
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