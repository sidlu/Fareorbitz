@include('site.header')
@php $page = 'Thai Airways'; $logo = 'images/partners/thai-airways.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/thai-airways.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Thai Airways Reservations </p>
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
    <img src="{{ asset('images/airlines/thai-airways.jpg') }}" class="img-fluid" alt="Thai Airways" />
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
                <h2 class="sec__title text-center">Thai Airways, The National Carrier Of Thailand</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>Thai Airways, the national carrier of Thailand, has a long hisTory of providing travelers with a reliable, comfortable journey that is affordable and convenient. The airline is known for its friendly staff and impeccable service, but it also provides passengers with many perks that other airlines do not have.</p>
            </blockquote>
            <p class="mb-3">Thai Airways is a premium airline that caters To upper-middle-class travelers. The airline offers more legroom on domestic flights than any other Thai airline and offers greater choice in meal options than most other airlines.</p>
            <p class="mb-3">The airline's primary focus is on comfort and reliability, which means it will always be on time and provide passengers with the best possible service. It also has a reputation for having great cusTomer service when things go wrong or there are delays or cancellations.</p>
            <p class="mb-3">Thai Airways has been around for over 60 years and operates flights across Asia as well as Europe, Africa, Australia and New Zealand. The airline currently operates from Bangkok International Airport (BKK). The airline's primary focus is on comfort and reliability, which means it will always be on time and provide passengers with the best possible service. It also has a reputation for having great cusTomer service when things go wrong or there are delays or cancellations. Thai Airways has been around for over 60 years and operates flights across Asia as well as Europe, Africa, Australia and New Zealand. The airline currently operates from Bangkok International Airport (BKK). The airline's primary focus is on comfort and reliability, which means it will always be on time and provide passengers with the best possible service. It also has a reputation for having great cusTomer service when things go wrong or there are delays or cancellations.</p>
            <p class="mb-3">Thai Airways has been around for over 60 years and operates flights across Asia as well as Europe, Africa, Australia and New Zealand. The airline currently operates from Bangkok International Airport (BKK). The airline's primary focus is on comfort and reliability, which means it will always be on time and provide passengers with the best possible service. It also has a reputation for having great cusTomer service when things go wrong or there are delays or cancellations. The airline is known for its high-quality service and has won several awards including Skytrax's Best Airline in Asia and Best Economy Class Onboard Catering. Thai Airways flies To many destinations around the world, including Bangkok, Phuket, Chiang Mai and Krabi. It also has direct flights To London Heathrow and Manchester in the UK. Thai Airways offers many different classes of travel, including First Class and Business Class, as well as Economy Class. It has a range of on-board entertainment options including movies and TV shows, games and music.</p>
            <p class="mb-3">The airline runs a loyalty program called Royal First Class, which gives members the chance To earn points that can be redeemed for flights. It also offers other travel-related benefits such as car rental discounts and hotel deals. Thai Airways offers frequent flyer programs that can be used To earn points for free flights. It has a partnership with the Star Alliance network, which allows members To earn and redeem points on other airlines within this alliance. Thai Airways also partners with several hotel chains including Marriott and HilTon. Members can use these points To stay at these hotels for free or at a discounted rate. The airline has also partnered with other travel companies including Amtrak and Eurostar To provide special offers on tickets. Thai Airways offers a loyalty program called Royal First Class, which gives members the chance To earn points that can be redeemed for flights. It also offers other travel-related benefits such as car rental discounts and hotel deals. Members can earn points by booking flights with Thai Airways or its partners, as well as by redeeming miles for other travel products. The airline also offers a credit card that gives members a chance To earn bonus rewards points on all purchases made with their cards.</p>
            <p class="mb-3">The airline’s loyalty program is one of the best in the world, offering great rewards and benefits To frequent fliers. Thai Airways also provides discounts on hotel stays and car rentals. The airline has a dedicated cusTomer service team that can be reached via phone or email. The company also operates a Facebook page and Twitter feed where cusTomers can get help with their travel plans. Thai Airways offers a wide range of destinations and flights, making it one of the most popular airlines in Asia. The airline has an extensive route network that includes over 100 destinations in Asia, Europe, Australia and North America. It offers direct flights To major cities such as London, Paris, Frankfurt and New York City.</p>
            <p class="mb-3">The airline also has an extensive code-share agreement with many other carriers, allowing cusTomers To book connecting flights on their network at a discounted price. Thai Airways has one of the best safety records in Asia and is considered one of the most reliable airlines in the world. It was voted as one of the Top 10 safest airlines by Skytrax for five consecutive years from 2012 To 2016.</p>
            <p class="mb-3">The airline has a rewards program called Royal Orchid Plus, which gives members the opportunity To earn points that can be redeemed for flights and upgrades. Members of this program receive benefits such as free baggage allowance, seat selection prior To check-in and access To first-class lounges at airports around the world. Thai Airways also offers special offers on tickets. Members of this program receive benefits such as free baggage allowance, seat selection prior To check-in and access To first-class lounges at airports around the world. Thai Airways also offers special offers on tickets. The airline has a rewards program called Royal Orchid Plus, which gives members the opportunity To earn points that can be redeemed for flights and upgrades. Members of this program receive benefits such as free baggage allowance, seat selection prior To check-in and access To first-class lounges at airports around the world. Thai Airways also offers special offers on tickets.</p>

            <p class="airline-title">Thai Airways Seat Rules</p>
            <p class="secondary-font">Preferred seats fees* for economy class passengers</p>
            <table class="table table-striped">
                <tr>
                    <th>From/To</th>
                    <th>Bangkok</th>
                    <th>To Zone 1</th>
                    <th>To Zone 2</th>
                    <th>To Zone 3</th>
                    <th>To Zone 4</th>
                    <th>To Zone 5</th>
                </tr>
                <tr>
                    <td>From Bangkok</td>
                    <td></td>
                    <td>
                        <p class="mb-0">USD 15</p>
                        <p class="mb-0">THB 480</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 30</p>
                        <p class="mb-0">THB 960</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 50</p>
                        <p class="mb-0">THB 1,600</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 70</p>
                        <p class="mb-0">THB 2,235</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 100</p>
                        <p class="mb-0">THB 3,195</p>
                    </td>
                </tr>
                <tr>
                    <td>From Zone 1</td>
                    <td>USD 15</td>
                    <td>
                        <p class="mb-0">USD 30</p>
                        <p class="mb-0">THB 960</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 45</p>
                        <p class="mb-0">THB 1,440</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 65</p>
                        <p class="mb-0">THB 2,075</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 85</p>
                        <p class="mb-0">THB 2,715</p>
                    </td>
                    <td>
                        <p class="mb-0">USD 115</p>
                        <p class="mb-0">THB 3,670</p>
                    </td>
                </tr>
                <tr>
                    <td>From Zone 2</td>
                    <td>USD 30</td>
                    <td>USD 45</td>
                    <td>USD 60</td>
                    <td>USD 80</td>
                    <td>USD 100</td>
                    <td>USD 130</td>
                </tr>
                <tr>
                    <td>From Zone 3</td>
                    <td>USD 50</td>
                    <td>USD 65</td>
                    <td>USD 80</td>
                    <td>USD 100</td>
                    <td>USD 120</td>
                    <td>USD 150</td>
                </tr>
                <tr>
                    <td>From Zone 4</td>
                    <td>USD 70</td>
                    <td>USD 85</td>
                    <td>USD 100</td>
                    <td>USD 120</td>
                    <td>USD 140</td>
                    <td>USD 170</td>
                </tr>
                <tr>
                    <td>From Zone 5</td>
                    <td>USD 100</td>
                    <td>USD 115</td>
                    <td>USD 130</td>
                    <td>USD 150</td>
                    <td>USD 170</td>
                    <td>USD 200</td>
                </tr>
            </table>

            <p class="airline-title">Thai Airways Baggage Rules</p>
            <p class="secondary-font">The weight allowance has been introduced by THAI for a journey:</p>
            <ul class="airline_ul">
                <li>Wholly within Thailand Domestic secTors</li>
                <li>A journey within TC3 (Asia, Australia, New Zealand) and a journey between TC2 (Europe, Africa, Middle East) and TC3 (Asia, Australia, New Zealand)</li>

            </ul>

            <p class="airline-title">Destinations</p>
            <p class="airline-subtitle">THAILAND</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bangkok</li>
                        <li>Chiang Mai</li>
                        <li>Chiang Rai*</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Hat Yai*</li>
                        <li>Khon Kaen*</li>
                        <li>Krabi</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Koh Samui#</li>
                        <li>Narathiwat*</li>
                        <li>Phuket</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Surat Thani*</li>
                        <li>Ubon Ratchathani*</li>
                        <li>Udon Thani*</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">ASIA & MORE</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bangladesh</li>
                        <li>China</li>
                        <li>Hong Kong</li>
                        <li>Cambodia</li>
                        <li>India</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Indonesia</li>
                        <li>Japan</li>
                        <li>Laos</li>
                        <li>Korea</li>
                        <li>Malaysia</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Myanmar</li>
                        <li>Nepal</li>
                        <li>Philippines</li>
                        <li>Singapore</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Sri Lanka</li>
                        <li>Taiwan</li>
                        <li>Vietnam</li>
                        <li>Pakistan</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">EUROPE & MIDDLE EAST</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Brussels</li>
                        <li>Copenhagen</li>
                        <li>Frankfurt</li>
                        <li>London</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Munich</li>
                        <li>Milan</li>
                        <li>Moscow</li>
                        <li>Oslo</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Paris</li>
                        <li>Rome</li>
                        <li>STockholm</li>
                        <li>Vienna</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Zurich</li>
                        <li>Dubai</li>
                        <li>Muscat</li>
                    </ul>
                </div>
            </div>
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