@include('site.header')
@php $page = 'Hawaiian Airlines'; $logo = 'images/partners/hawaiian-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/hawaiian-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Hawaiian Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/hawaiian-airline.jpg') }}" class="img-fluid" alt="Hawaiian Airlines" />
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
                <h2 class="sec__title text-center">Hawaiian Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Hawaiian Airlines is a privately owned and operated airline based in Honolulu, Hawaii. It is the only airline that serves the state of Hawaii, connecting the islands of Oahu, Maui, Lanai and Molokai with Kahului Airport on Maui. The airline also provides scheduled passenger and cargo services between Honolulu and Seattle, Portland (Oregon), Los Angeles and San Francisco. Its main base of operations is Honolulu International Airport (HNL).
            </blockquote>
            <p class="mb-3">The Hawaiian Airlines fleet consists of Airbus A330-200 aircraft. The airline flies To several international destinations including Honolulu, Seattle, San Jose, Las Vegas, Los Angeles and Oakland/San Francisco. The airline also operates charters for its cusTomers.</p>
            <p class="mb-3">In recent years Hawaiian Airlines has won several awards for its superior service from leading cusTomer review websites including TripAdvisor and Yelp.</p>
            <p class="mb-3">Hawaiian Airlines is a Hawaiian airline that operates international, domestic and connecting services. It was founded in 1961 and has been operating for over 50 years.</p>
            <p class="mb-3">Hawaiian Airlines offers a wide range of flight options To over 100 destinations in the Americas, Asia and Australia. The company operates more than 40 aircrafts and has a fleet of over 80 aircrafts.</p>
            <p class="mb-3">Hawaiian Airlines has been awarded with many awards including "Best Airline" award from Air Transport World magazine in 2011, "Best Airline On-time Performance" from Skytrax World Airline Awards 2013, "Best Regional Airline" by Flightglobal World Airline Awards 2014, "Most Profitable US airlines" by CAPA ( Centre for Aviation).</p>
            <p class="mb-3">Hawaiian Airlines is the largest airline in Hawaii, and it has been since it was founded in 1961. The airline’s name comes from its founder, Walter J. Alu, who named the airline after his grandfather, Hawaiian Airlines System.</p>
            <p class="mb-3">Alu owned a number of other airlines before founding Hawaiian Airlines, including Alaska Air and Pacific Air Lines. He also had an interest in aviation and spaceflight. He served as an advisor To NASA on the Apollo 11 mission. Alu died in 1981 after suffering a heart attack while playing tennis at his home in Honolulu.</p>
            <p class="mb-3">Hawaiian Airlines is one of only two airlines that fly To all six inhabited islands in Hawaii; the other is United Airlines. Hawaiian Airlines flies directly between Seattle, Tacoma and Portland through its hub at Honolulu International Airport (HNL). The airline has a fleet of Boeing 717 aircraft and Boeing 777 aircraft To carry passengers on nonsTop flights between HNL and Los Angeles (LAX) as well as Newark Liberty International Airport (EWR) and Los Angeles (LAX).</p>
            <p class="mb-3">In 2018/2019 Hawaiian Airlines won several awards including: #1 Overall Airline Brand; #1 Overall Airline Brand for Passengers Satisfaction;#2 Overall Airline Brand for CusTomer Service Satisfaction.</p>
            <p class="mb-2">Hawaiian Airlines is a subsidiary of Hawaiian Holdings, Inc. The airline was founded in 1929 and has its headquarters in Honolulu, Hawaii. Hawaiian Airlines operates an average fleet of 178 aircraft serving 34 destinations throughout the United States and Mexico with over 1,000 daily flights. In 2018/2019 Hawaiian Airlines won several awards including:</p>
            <ul class="airline_ul mb-3">
                <li>Overall Airline Brand</li>
                <li>Overall Airline Brand for Passengers Satisfaction</li>
            </ul>
            <p class="secondary-font">Hawaiian Airlines is the only airline To have won the coveted “Airline of the Year” award from Business Traveler magazine. The airline has also won awards for its sales and cusTomer service, as well as for its business and frequent-flier programs.</p>

            <p class="airline-title">SEAT</p>
            <ul class="airline_ul">
                <li>With Main Cabin Basic, seat assignments are not available when booking the flight. You will be able To select a seat when you check in for your flight (as early as 24 hours prior To departure), or one will be assigned To you at the gate.</li>
                <li>Guests will either be able To select a seat when they check in (as early as 24 hours prior To departure) or will get assigned a seat at the gate.</li>
                <li>seats are assigned at check-in, starting 24 hours prior To departure, we cannot guarantee that your family will be able To sit Together. If it’s important for you To have all family members sit Together, we recommend that you select another fare option with less restrictions.</li>
            </ul>

            <p class="airline-title">Baggage</p>
            <table class="table table-striped">
                <tr>
                    <th></th>
                    <th class="text-center">Neighbour Island</th>
                    <th class="text-center">North America</th>
                    <th class="text-center">International and First Class</th>
                </tr>
                <tr>
                    <td class="text-center">1st Bag</td>
                    <td class="text-center">$25</td>
                    <td class="text-center">$30</td>
                    <td class="text-center">Free</td>
                </tr>
                <tr>
                    <td class="text-center">2nd Bag</td>
                    <td class="text-center">$35</td>
                    <td class="text-center">$40</td>
                    <td class="text-center">Free</td>
                </tr>
            </table>

            <p class="airline-title">3+ Bags</p>
            <table class="table table-striped">
                <tr>
                    <th></th>
                    <th class="text-center">Neighbour Island</th>
                    <th class="text-center">North America</th>
                    <th class="text-center">International</th>
                </tr>
                <tr>
                    <td class="text-center">Each Additional Bag</td>
                    <td class="text-center">$50</td>
                    <td class="text-center">$100</td>
                    <td class="text-center">$150</td>
                </tr>
            </table>

            <p class="airline-title">Destinations</p>
            <p class="airline-subtitle">Local Hawaii</p>
            <ul class="airline_ul">
                <li>Inouye International airport (HNL) To O’ahu</li>
                <li>Inouye International airport (HNL) To Kahului Airport(Maui)</li>
                <li>Inouye International airport (HNL) To Kona International Airport</li>
                <li>Inouye International airport (HNL) To Lihue Airport</li>
            </ul>

            <p class="airline-subtitle">North America</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Honolulu (HNL) To Austin(AUS)</li>
                        <li>Honolulu (HNL) To BosTon(BOS)</li>
                        <li>Honolulu (HNL) To Mccarran International Airport(LAS)</li>
                        <li>Honolulu (HNL) To Long Beach Airport(LGB)</li>
                        <li>Honolulu (HNL) To Los Angeles International Airport(LAX)</li>
                        <li>Honolulu (HNL) To John F. Kennedy International Airport(JFK)</li>
                        <li>Honolulu (HNL) To Oakland International Airport(OAK)</li>
                        <li>Honolulu (HNL) To Ontario International Airport(ONT)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Honolulu (HNL) To Phoenix Sky Harbor International Airport(PHX)</li>
                        <li>Honolulu (HNL) To Portland International Airport(PDX)</li>
                        <li>Honolulu (HNL) To SacramenTo International Airport(SMF)</li>
                        <li>Honolulu (HNL) To San Diego International Airport(SAN)</li>
                        <li>Honolulu (HNL) To San Francisco International Airport(SFO)</li>
                        <li>Honolulu (HNL) To Norman Y. Mineta San Jose International Airport(SJC)</li>
                        <li>Honolulu (HNL) To King County International Airport(BFI)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Asia & South Pacific</p>
            <div class="row mb-3">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Honolulu (HNL) To Auckland Airport(AKL)</li>
                        <li>Honolulu (HNL) To RaroTonga International Airport(RAR)</li>
                        <li>Honolulu (HNL) To Osaka International (Itami) Airport(ITM)</li>
                        <li>Honolulu (HNL) To Pago Pago International Airport(PPG)</li>
                        <li>Honolulu (HNL) To Fa'a'ā International Airport(PPT)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Honolulu (HNL) To New ChiTose Airport(CTS)</li>
                        <li>Honolulu (HNL) To Incheon International Airport(ICN)</li>
                        <li>Honolulu (HNL) To Sydney Airport(SYD)</li>
                        <li>Honolulu (HNL) To Haneda Airport(HND)</li>
                    </ul>
                </div>
            </div>

           <p class="mb-3">Hawaiian Airlines was founded in 1933, when it started a route between Honolulu and Oakland, California. In 1965, Hawaiian Airlines began flying internationally To Asia. By 1966, it was operating routes between Honolulu and Los Angeles and San Francisco. In 1978, Hawaiian Airlines began flights between Hawaii and Japan. Today, Hawaiian Airlines operates more than 400 flights per day on more than 120 routes connecting all major cities in the United States and several countries in Asia, Europe and Oceania. Hawaiian Airlines serves more than 30 destinations in the United States and five countries in Asia. It has three major hubs: Honolulu International Airport, Kahului Airport on Maui and Daniel K Inouye International Airport on Oahu.</p>
           <p class="mb-3">The airline has won several awards for its service, including the Skytrax World’s Best Airline award for nine consecutive years from 2008 To 2016. Hawaiian Airlines is also known for its safety record. It has never had an accident with a fatality on board since its inception in 1929. Hawaiian Airlines has codeshare agreements with the following airlines: Air China, American Airlines, Delta Air Lines, Japan Airlines and United Airlines. It also has interline agreements with Aeromexico, Alaska Airlines and Southwest Airlines.</p>
           <p class="mb-3">Hawaiian Airlines has an extensive route network. It flies To destinations in the United States such as Los Angeles, San Francisco, Seattle and New York City. The airline also serves international destinations such as Tokyo, Beijing, Shanghai and Seoul. Hawaiian Airlines offers seasonal flights To the Northern Mariana Islands from Honolulu.</p>
           <p class="mb-3">Hawaiian Airlines offers a frequent flyer program called HawaiianMiles. The program allows members To earn miles when flying with Hawaiian Airlines and its codeshare partners or on purchases made with the airline’s partners. Members can redeem their miles for free flights, seat upgrades and other products. Hawaiian Airlines is a subsidiary of Hawaiian Holdings Inc., which also owns subsidiaries including Hawaiian Electric Industries Inc. and Mokulele Airlines. In 2018, the airline had $3 billion in revenue. The airline has codeshare agreements with the following airlines:</p>
           <p class="mb-3">Alaska Airlines (AS), American Airlines (AA), Delta Air Lines (DL), JetBlue Airways (B6) and United Airlines (UA). Hawaiian Airlines has an A rating from the Better Business Bureau, with over 1,000 cusTomer reviews. The airline has received a number of complaints about its frequent flyer program and problems with its website. The airline is rated 4.2 out of 5 stars on Skytrax, with over 80% of passengers saying they would recommend Hawaiian Airlines To their friends and family. The airline’s website has received a number of complaints about its frequent flyer program, as well as problems with its website.</p>

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