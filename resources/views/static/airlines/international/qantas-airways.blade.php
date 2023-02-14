@include('site.header')
@php $page = 'Qantas Airlines'; $logo = 'images/partners/qantas-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/qantas-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Qantas Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/qantas-airlines.jpg') }}" class="img-fluid" alt="qatar airlines" />
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
                <h2 class="sec__title text-center">Qantas: Fly With Australia's Most Popular Airline</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Qantas Airways Limited is the flag carrier of Australia and the country's largest airline by fleet size, international flights, and international destinations. It is the world's third-oldest airline still in operation, having been founded in November 1920; it began international passenger flights in May 1935.
            </blockquote>

            <p class="mb-3">Qantas and its subsidiaries operated 323 aircraft, including 75 aircraft by Jetstar Airways.</p>
            <p class="mb-3">Domestic Economy Class is offered on all Boeing 737 and Airbus A330 aircraft. Qantas has an extensive international network, with flights To the Americas, Europe and Asia. The airline is a member of the Oneworld alliance with its own air-mile program (Qantas Frequent Flyer).</p>
            <p class="mb-3">Qantas is also a founding member of the Star Alliance. As of March 2018, Qantas flies To over 100 destinations in 15 countries on five continents from its main hub in Sydney. Qantas also operates a luxury first-class service on its Boeing 747 and Airbus A380 aircraft, called “The Jetstream Lounge”. The airline has been the subject of numerous safety incidents throughout its hisTory, including two crashes that resulted in loss of life. Qantas is one of the oldest airlines in the world, second only To KLM which was founded a few months earlier in OcTober 1920. It is also one of the few airlines To have been founded and continuously operated by Australians. The airline was a pioneer of the European-North American route network and was instrumental in making direct transatlantic flights a viable proposition for all commercial aircraft, including the Boeing 707, Douglas DC-8 and British Aircraft Corporation BAC One-Eleven. Qantas also operated a luxury first-class service on its Boeing 747 aircraft, called “The Qantas Jetstream Lounge”. In 1995, Qantas merged with Australian Airlines To form the international carrier Virgin Australia.</p>
            <p class="mb-3">The Qantas logo features a stylised kangaroo, an indigenous marsupial of Australia. The airline is nicknamed “The Flying Kangaroo” because of this logo, which was first introduced in 1944. The airline also has a “koala badge” which has been worn by Qantas employees since 1947 and is still seen on uniforms Today. It is also one of the few airlines To operate a Boeing 747 aircraft in its fleet. Qantas has operated a luxury first-class service on its Boeing 747 aircraft, called “The Qantas Jetstream Lounge”. In 1995, Qantas merged with Australian Airlines To form the international carrier Virgin Australia.</p>
            <p class="mb-3">It is one of the few airlines To operate a Boeing 747 aircraft in its fleet. Qantas has operated a luxury first-class service on its Boeing 747 aircraft, called “The Qantas Jetstream Lounge”. In 1995, Qantas merged with Australian Airlines To form the international carrier Virgin Australia. Qantas is the largest airline in Australia. It operates international and domestic flights To destinations in over 30 countries.</p>
            <p class="mb-3">In 2018, Qantas was ranked the second safest airline in the world by AirlineRatings.com. It is one of the few airlines To operate a Boeing 747 aircraft in its fleet. Qantas has operated a luxury first-class service on its Boeing 747 aircraft, called “The Qantas Jetstream Lounge”. In 1995, Qantas merged with Australian Airlines To form the international carrier Virgin Australia.</p>
            <p class="mb-3">Qantas is the largest airline in Australia. It operates international and domestic flights To destinations in over 30 countries. In 2018. Qantas was ranked the second safest airline in the world by AirlineRatings.com. It is one of the few airlines To operate a Boeing 747 aircraft in its fleet. Qantas has operated a luxury first-class service on its Boeing 747 aircraft, called “The Qantas Jetstream Lounge”. In 1995, Qantas merged with Australian Airlines To form the international carrier Virgin Australia.</p>
            <p class="mb-3">The airline has been named “Best Airline in the World” by Conde Nast Traveler readers for 16 consecutive years. Qantas is currently ranked number two on the list of the world's safest airlines. It is one of only five airlines To earn a 9/10 safety rating from AirlineRatings.com. In November 2018.</p>
            <p class="mb-3">Qantas announced it would be retiring its last Boeing 747-400 aircraft in December 2018. The airline will replace the 747 with Boeing 787 Dreamliners, Airbus A330s and Boeing 737s as part of its fleet renewal strategy. Qantas has an extensive network, flying To more than 80 destinations in 20 countries across the Asia Pacific region. It also operates flights between Australia and New Zealand. The airline flies To major cities such as Auckland, Brisbane, Melbourne and Sydney. Qantas is a member of the Oneworld alliance, which includes American Airlines and British Airways among its members. Qantas also has codeshare agreements with Air France, China Eastern Airlines, Finnair and Jet Airways. The airline is headquartered in Sydney and employs more than 20,000 people worldwide. Qantas is Australia’s largest and best-known airline. It has a fleet of more than 100 aircraft, including Airbus A330s, Boeing 737s and 767s. The airline also has a number of regional subsidiaries that operate smaller aircraft such as Bombardier Q400 turboprops. Qantas flies To more than 80 destinations in 20 countries across the Asia Pacific region.</p>

            <p class="airline-title">Qantas Airways Seat Rules</p>
            <p>You can select your seat on Qantas operated flights when making your booking, or any time before you fly. The earlier you do so, the more choice you have. A charge may apply, depending on the seat type selected. Discover your Economy seating options with Qantas. </p>
            <p class="airline-title">Qantas Airways Baggage Rules</p>

            <p class="mb-3">Baggage allowance is included on every domestic flight within Australia on Qantas and QantasLink</p>
            <p class="mb-3">No single piece can exceed 32kg (70lb).</p>
            <p class="mb-3">If you are travelling on a Jetstar flight booked via qantas.com, you will have 7kg of carry on baggage, and a minimum of 20kg of checked baggage, depending on the fare type you have booked. Additional baggage may be booked via Jetstar.comOpens external site in a new window.</p>

            <p class="airline-title">Destinations</p>
            <p class="airline-subtitle">Australia</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Adelaide</li>
                        <li>Alice Springs and Red Centre</li>
                        <li>Bendigo</li>
                        <li>Brisbane</li>
                        <li>Broome</li>
                        <li>Byron Bay</li>
                        <li>Cairns and Port Douglas</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Canberra</li>
                        <li>Coffs Harbour</li>
                        <li>Darwin</li>
                        <li>Exmouth and Ningaloo Reef</li>
                        <li>Gold Coast</li>
                        <li>HamilTon and Hayman Island</li>
                        <li>Hobart</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Lord Howe Island</li>
                        <li>Mackay</li>
                        <li>Melbourne</li>
                        <li>Orange</li>
                        <li>Perth</li>
                        <li>Port Macquarie</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>RockhampTon and Great Keppel Island</li>
                        <li>Sunshine Coast</li>
                        <li>Sydney</li>
                        <li>Tamworth</li>
                        <li>Uluṟu-Kata Tjuṯa National Park</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">New Zealand</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Auckland</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Christchurch</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>QueensTown</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>WellingTon</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">South Pacific</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Nadi</li>
                        <li>Noumea</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Solomon Islands</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Tahiti</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Vanuatu</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Europe</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>London</li>
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