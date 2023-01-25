@include('site.header')
@php $page = 'Air India'; $logo = 'images/partners/air-india.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/air-india.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Air India Reservations </p>
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
    <img src="{{ asset('images/airlines/air-india.jpg') }}" class="img-fluid" alt="Air India" />
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
                <h2 class="sec__title text-center">Air India - History Of An Excellent Customer Experience</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-3">Air India is the national flag carrier of India. It was founded in 1932 and has since grown To become one of the largest carriers in the world, flying To more than 100 destinations across Asia, Africa, Europe and North America.</p>
                <p>Air India has a long hisTory of providing an excellent cusTomer experience with its award-winning service and wide range of award-winning products. Air India's cusTomers can choose from a variety of different product types including economy fares, business class fares and luxury suites. </p>
            </blockquote>
            <p class="mb-3">Air India is a national airline of India. It was founded in 1932 and is owned by the Government of India. It operates domestic and international scheduled flights from its main base at Delhi, with plans To open more bases at Mumbai and Chennai in the near future. Air India has a fleet of over 130 planes, which includes Airbus A320s, Boeing 737s, Boeing 777s, B737-800s and Embraer E190s.</p>
            <p class="mb-3">Air India is the flag carrier airline of India. It is headquartered in Mumbai and it operates on domestic and international routes.</p>
            <p class="mb-3">It was founded in 1932 as Tata Airlines by Jamsetji Tata, who also founded Tata Sons, a conglomerate that owns the airline. As of 2016, it has a fleet of 100 aircraft operating primarily on high-density routes across India, as well as To Cambodia and Dubai. The airline's primary base of operations is Mumbai, where its headquarters are located. It also maintains offices at Delhi, Kolkata, Chennai and Kochi.</p>
            <p class="mb-3">In February 2017, Air India announced plans To merge its low-cost carrier GoAir with Indian Regional Airlines' JetKonnect service. The combined entity will be named Vistara.</p>
            <p class="mb-3">Air India's domestic services include flights To 11 major cities including Delhi, Mumbai, Kolkata, Chennai and Bangalore. Domestic destinations are served in six classes: economy/first class (E), business/first class (C), economy/economy plus (EP), business/business plus (BC) and first class seats with extra legroom (FC).</p>
            <p class="mb-3">In addition To domestic flights, Air India also flies international routes To Europe, Middle East and South East Asia as well as North America. The airline's fleet includes Airbus A340-600s, Airbus A330-300s and Boeing 777-300ERs for long-haul services; these aircraft are fitted with lie flat seats in business class which can accommodate up To 165 passengers each.</p>
            <p class="mb-3">The airline's fleet also includes Airbus A320-200s, Boeing 737-700s and ATR 72-500 turboprops for medium-haul flights.</p>
            <p class="mb-3">Air India Express is a low-cost carrier operating on domestic and international routes To over 50 destinations in the Middle East, Africa and Europe. It operates an all Boeing 737 fleet of four aircraft types fitted with 184 seats.</p>
            <p class="mb-3">The airline also operates a fleet of Boeing 737-800s and Embraer 190s for short-haul flights; these aircraft are configured with economy seats only. The airline aims To improve its operational efficiency by deploying newer aircraft such as Boeing 787 Dreamliners on domestic routes and Airbus A321neos on international routes from 2021 onwards.</p>
            <p class="mb-3">Air India Express was launched as a low-cost carrier in 2004. It commenced operations on 21 May 2004 with two Boeing 737-800s leased from Air India and flew To Colombo, Chennai and Kochi. The airline initially operated flights only To the Middle East, but later expanded its network To include domestic routes within India. In OcTober 2018, Air India Express partnered with international airlines such as Emirates, Etihad Airways and Qatar Airways for codeshare agreements.</p>
            <p class="mb-3">The airline's frequent flyer program is called JetPrivilege. It offers various membership tiers, which are divided inTo two categories: Blue and Silver.</p>
            <p class="mb-3">The Air India is a national flag carrier of India. It is the second oldest airline in India. The Air India has been in operation since 1932 and it flies To 13 domestic and international destinations in Asia, Africa and Europe. This airline is owned by the government of India.</p>
            <p class="mb-3">The Air India offers a wide range of services including scheduled flights, charter flights, maintenance and repair services To passengers on board its aircrafts. The Air India has also launched direct flights from Mumbai To New York, Los Angeles and San Francisco as well as direct flights between Delhi and Los Angeles.</p>
            <p class="mb-3">Air India also offers a wide variety of domestic and international destinations for their passengers. Their routes include Chennai (Chennai), Ahmedabad (Ahmedabad), Bangalore (Bangalore), Bhubaneswar (Bhubaneswar), Calcutta (Kolkata) Kochi (Kochi), Lucknow (Lucknow), Mumbai (Mumbai), Ahmedabad (Ahmedabad) Madurai (Madurai), Bangalore (Bangalore) Trichy (Trichy) Tiruchirapalli (Tiruchirapalli), Chandigarh (Chandigarh) Chennai (Chennai) Hyderabad (Hyderabad), Kolkata (Kolkata) Mumbai (Mumbai), Pune (Pune).</p>

            <p class="airline-title">Seat rules</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Seat reservation for our First & Business Class passengers on all select routes operated by Air India will be Free of Charge as per the current policy.</li>
                        <li>The paid seat selection doesn't include Bassinet seats for infants which continue To be free of charge subject To availability.</li>
                        <li>The preferred seat selection scheme for Economy Class passengers is available on select routes operated by Air India. This scheme is not available on-Air India code share.</li>
                        <li>The scheme extends To cover Window, Aisle and Middle Seats in the Front and Middle zone of the Aircraft. All seats in the rear section including Window, Aisle and Middle are currently available free of charge, and available through our website on first come basis.</li>
                        <li>The facility of paid seat selection will be available till 240 minutes (D-4 Hours) before departure.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage Rules</p>
            <div class="row">
                <ul class="airline_ul">
                    <li>Checked baggage allowance is applicable only on Air India operated flights and not on Air India Express or any other Code Share flights.</li>
                    <li>Passenger travelling on Air India domestic secTor and connecting To Air India International secTor or vice versa on the same ticket, the Free Baggage Allowance of International secTor will be applicable.</li>
                    <li>Gold Member of Star Alliance would continue To be permitted an additional 20Kgs of baggage allowance in Economy Class</li>
                    <li>Members of Premium Club and Flying Returns members would continue To be permitted additional baggage, as notified from time To time, over the same.</li>
                    <li>Infants will be entitled To 1 collapsible stroller/carrycot/infant car seat.</li>
                    <li>The maximum weight permissible for a single piece of baggage is 32 kgs. This rule is applicable on the entire Air India network.</li>
                    <li>Passengers who are dependent on a wheelchair or other assistive devices and are travelling with such equipment would be entitled To an additional baggage allowance up To 15 kg free of charge subject To the limitations of the aircraft as per DGCA guidelines. Passengers can carry their personal wheelchairs (which are fully collapsible To be sTored in the aircraft hold retrievable at the boarding gate) or other assistive devices as additional checked baggage up To 15 kg, free of charge.</li>
                </ul>
            </div>

            <p class="airline-title">Air India Destinations</p>
            <div class="row mb-3">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>India To Australia</li>
                        <li>India To Bahrain</li>
                        <li>India To Bangladesh</li>
                        <li>India To Canada</li>
                        <li>India To China</li>
                        <li>India To France</li>
                        <li>India To Germany</li>
                        <li>India To Hong Kong</li>
                        <li>India To Israel</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>India To Italy</li>
                        <li>India To Japan</li>
                        <li>India To Kuwait</li>
                        <li>India To Maldives</li>
                        <li>India To Myanmar</li>
                        <li>India To Nepal</li>
                        <li>India To Nigeria</li>
                        <li>India To Oman</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>India To Qatar</li>
                        <li>India To Russia</li>
                        <li>India To Saudi Arabia</li>
                        <li>India To South Korea</li>
                        <li>India To Thailand</li>
                        <li>India To UAE</li>
                        <li>India To UK</li>
                        <li>India To USA</li>
                    </ul>
                </div>
            </div>

            <p>Air India is one of the oldest airlines in India. It was founded in 1932, and it was originally known as Tata Airlines. It began operations with a single aircraft named “Jal Vayu” which means “Water Wind” in Sanskrit. The airline is based in Mumbai, and it currently has a fleet of over 100 aircrafts. It offers services To more than 100 destinations across India and abroad. Air India has flights connecting major cities such as Delhi, Mumbai, Kolkata and Chennai with other important cities like CoimbaTore, Tiruchirappalli, Kochi (Cochin), Mangalore , Vijayawada and Visakhapatnam. It also offers international flights To cities like Colombo, Dubai, Frankfurt (Frankfurt am Main), London (London), Singapore and ToronTo. The airline’s website is www.airindiaexpress.in</p>
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