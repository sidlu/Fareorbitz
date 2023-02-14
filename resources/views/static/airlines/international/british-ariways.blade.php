@include('site.header')
@php $page = 'British Airways'; $logo = 'images/partners/british-ariways.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/british-ariways.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">British Airways Reservations </p>
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
    <img src="{{ asset('images/airlines/british-airways.jpg') }}" class="img-fluid" alt="british airways" />
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
                <h2 class="sec__title text-center">British Airways</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-2">
                    British Airways is a major global airline that has flights across various regions of the world. Serving people for more than 100 years, this airline has always taken pride in providing its customers with the best kind of service.
                </p>
            </blockquote>
            <p class="airline-title">How do we help?</p>
            <p>Flying is magic and we help in making that a reality for you. We have specially designed teams who know a lot about flight travel to different parts of the world. You can travel to any corner of the world with British Airways, and we will be there to make your trip smooth.</p>

            <p class="airline-title">Travel Routes</p>
            <p class="secondary-font">British Airways has amazing connectivity all across the world. They take travellers from one corner of the world to another while providing the utmost comfort and high-quality service. Take a look at the routes where you can travel with the help of this airline.</p>
            <p class="airline-subtitle">The United Kingdom and Ireland</p>
            <p>Here are the places in this region where you can fly with British Airways.</p>
            <ul class="airline_ul">
                <li>Ireland</li>
                <li>United Kingdom</li>
            </ul>

            <p class="airline-subtitle">Europe</p>
            <p class="secondary-font">In this continent, there are numerous regions where you can go with this airline.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Albania</li>
                        <li>Austria</li>
                        <li>Belgium</li>
                        <li>Bulgaria</li>
                        <li>Croatia</li>
                        <li>Cyprus</li>
                        <li>Czech Republic</li>
                        <li>Denmark</li>
                        <li>Estonia</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Finland</li>
                        <li>France</li>
                        <li>Germany</li>
                        <li>Gibraltar</li>
                        <li>Greece</li>
                        <li>Hungary</li>
                        <li>Iceland</li>
                        <li>Israel</li>
                        <li>Italy</li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Latvia</li>
                        <li>Lithuania</li>
                        <li>Luxembourg</li>
                        <li>Malta</li>
                        <li>Netherlands</li>
                        <li>Norway</li>
                        <li>Poland</li>
                        <li>Portugal</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Romania</li>
                        <li>Russia</li>
                        <li>Slovenia</li>
                        <li>Spain</li>
                        <li>Sweden</li>
                        <li>Switzerland</li>
                        <li>Turkey</li>
                        <li>Ukraine</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Far East & Australasia</p>
            <p class="secondary-font">What are the places that you can explore in these regions? Here’s a quick look:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Australia</li>
                        <li>Cambodia</li>
                        <li>China</li>
                        <li>Hong Kong</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Indonesia</li>
                        <li>Japan</li>
                        <li>Malaysia</li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>New Zealand</li>
                        <li>Singapore</li>
                        <li>South Korea</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Taiwan</li>
                        <li>Thailand</li>
                        <li>Vietnam</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">The Middle East and South As</p>
            <p class="secondary-font">Explore these wonderful places in the Middle East and South Asia regions with British Airways.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bahrain</li>
                        <li>Bangladesh</li>
                        <li>India</li>
                        <li>Iraq</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Jordan</li>
                        <li>Kuwait</li>
                        <li>Lebanon</li>
                        <li>Maldives</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Oman</li>
                        <li>Pakistan</li>
                        <li>Qatar</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Saudi Arabia</li>
                        <li>Sri Lanka</li>
                        <li>United Arab Emirates</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">North America</p>
            <p class="secondary-font">Where can you fly to in this vast region with British Airways? Let’s take a look</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bermuda</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Canada</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Mexico</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>United States</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">South America and Caribbean</p>
            <p class="secondary-font">Want to explore this region? Here are the places you can fly to:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Antigua</li>
                        <li>Argentina</li>
                        <li>Aruba</li>
                        <li>Bahamas</li>
                        <li>Barbados</li>
                        <li>Belize</li>
                        <li>Bolivia</li>
                        <li>Brazil</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Cayman Islands</li>
                        <li>Chile</li>
                        <li>Colombia</li>
                        <li>Costa Rica</li>
                        <li>Dominican Republic</li>
                        <li>El Salvador</li>
                        <li>Grenada</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Guatemala</li>
                        <li>Jamaica</li>
                        <li>Netherlands Antilles</li>
                        <li>Nicaragua</li>
                        <li>Panama</li>
                        <li>Peru</li>
                        <li>Puerto Rico</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>St Kitts</li>
                        <li>St Lucia</li>
                        <li>Trinidad and Tobago</li>
                        <li>Turks and Caicos</li>
                        <li>Uruguay</li>
                        <li>US Virgin Islands</li>
                        <li>Venezuela</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Africa</p>
            <p class="secondary-font">Thinking of visiting amazing Africa? British Airways has numerous options for travellers to explore.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Algeria</li>
                        <li>Djibouti</li>
                        <li>Egypt</li>
                        <li>Ethiopia</li>
                        <li>Ghana</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Kenya</li>
                        <li>Mauritius</li>
                        <li>Morocco</li>
                        <li>Mozambique</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul"></ul>
                    <li>Namibia</li>
                    <li>Nigeria</li>
                    <li>Seychelles</li>
                    <li>South Africa</li>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Sudan</li>
                        <li>Tanzania</li>
                        <li>Zambia</li>
                        <li>Zimbabwe</li>
                    </ul>
                </div>
            </div>

            <p>International travel has its own set of hassles. Hence, all you need to do is select a place where you want to travel and we will take care of the rest. Be it planning your leisure travel or business trip, Fareorbitz has dedicated teams that can take care of all your travel needs.</p>

            <p class="airline-title">Cancellation, delayed flights, and compensation</p>
            <p class="secondary-font">What will happen if your flight is delayed or you want to cancel your flight? Here are the answers to some such questions.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>If your flight is delayed, you’ll get intimation about it well before your fight time</li>
                        <li>You can get a partial refund if your flight is delayed for more than five hours</li>
                        <li>If the flight to the final destination is delayed for more than three hours, you are entitled to a refund</li>
                        <li>Once your flight is cancelled from the end of the airline due to any reason, you can claim a refund</li>
                        <li>When you book your travel with us, you can be sure we will take care of the cancellation and refund issues to save you from any kind of hassle</li>
                        <li>You are entitled to compensation for cancelled and delayed flights</li>
                        <li>Passengers can let us know about any form of impairment and the airline will schedule their services accordingly in case of cancelled or delayed flights</li>
                        <li>The airline also provides the option to transfer seats to preferred seats on rebooked flights</li>
                        <li>If your preferred meal choice is unavailable on a rebooked flight, you can get a refund</li>
                        <li>You are entitled to a refund if you paid for Wifi but didn’t get proper connectivity</li>
                        <li>In case you missed your connecting flight due to a delay in the previous flight, your seat will automatically be rebooked on the next British Airways flight</li>
                        <li>If you have incurred any additional expenses due to a delayed or cancelled flight, you can claim a reimbursement. You can get reimbursement for hotel accommodation, meals, refreshments, and transport between the airport and the hotel. You are also entitled to get a refund in case of internet-related costs and two telephone calls</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel classes</p>
            <p class="secondary-font">There are several travel classes that British Airways has designed for its travellers. Equipped with distinctive services and benefits, each class is meant to give the best flying experience to travellers. There are four classes offered by the airway - Economy, Premium Economy, Business and First. Some of the classes also have sub-categories for travellers to choose from.</p>

            <p class="airline-subtitle">Economy</p>
            <p class="secondary-font">Family-friendly service along with affordable travelling, this class has numerous benefits to offer to travellers. There are two categories that the passengers can explore - Euro traveller and World traveller. Here are the distinctive features of the two travel classes.</p>

            <p class="airline-subtitle">Euro Traveller</p>
            <p class="secondary-font">Great value fare across different countries in the world. Let’s see what this class has to offer:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Online purchase</li>
                        <li>Complimentary refreshment - a bottle of water and snacks</li>
                        <li>Generous baggage limit</li>
                        <li>Wi-fi on most of the aircraft</li>
                        <li>Newspapers and digital magazines, besides other options for in-flight entertainment</li>
                        <li>Duty-free products</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Personal protection pack</li>
                        <li>Movable headrests</li>
                        <li>In-seat power outlets</li>
                        <li>Leather seats</li>
                        <li>Priority boarding for families with young kids and infants</li>
                        <li>Free car seats or pushchairs allowed for families with infant</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">World Traveller</p>
            <p class="secondary-font">This class is designed for those who want to explore the world with British Airways. This class is for travellers who want to take flights beyond Europe. Here are some of the benefits you can explore:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Different fare options</li>
                        <li>Stylish interior</li>
                        <li>Delicious snacks and meals</li>
                        <li>Family-friendly services</li>
                        <li>Personal flat screen along with headphones</li>
                        <li>Adjustable headrest</li>
                        <li>Lumbar support</li>
                        <li>Generous recline</li>
                        <li>Soft cushion</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Blanket</li>
                        <li>Eye mask</li>
                        <li>Flight socks</li>
                        <li>Toothpaste and toothbrush available too on request</li>
                        <li>Baggage pickup from the doorstep</li>
                        <li>Priority boarding for families with infants, as well as, young kids</li>
                        <li>Pushchair for infants</li>
                        <li>Entertainment for children</li>
                        <li>Special meals for children</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy</p>
            <p class="secondary-font">You can enjoy a premium experience with this class. Be it travelling inside Europe or outside, you can be sure to enjoy the best travel experience. This class gives you a premium economy cabin experience. Here are some of the distinctive features of this British Airways travel class.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Wider seats</li>
                        <li>More legroom</li>
                        <li>Separate cabin</li>
                        <li>Delicious complimentary cocktails or mocktails</li>
                        <li>Personal screen</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Hours of entertainment</li>
                        <li>Amenity kit specially designed from recycled material</li>
                        <li>Priority baggage</li>
                        <li>Priority boarding</li>
                        <li>Double baggage allowance</li>
                        <li>Doorstep baggage pickup</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Doorstep check-in</li>
                        <li>Greater recline</li>
                        <li>Lumbar support</li>
                        <li>Foot and headrest</li>
                        <li>A stylish and comfortable quilt</li>
                        <li>A special travel bag that includes things like a toothbrush, toothpaste, pen, eye shade, and lip balm</li>
                        <li>Earplugs</li>
                        <li>A glass of sparkling wine after takeoff</li>
                        <li>Starter</li>
                        <li>Snacks and beverages delivered to the seat</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business</p>
            <p class="secondary-font">While travelling in this class, you can either work or relax and that too in style. With dedicated check-in options and flatbeds for the long haul, this class offers amazing services to those travelling for business. There are two categories to choose from in this travel class.</p>

            <p class="airline-subtitle">Club Europe</p>
            <p class="secondary-font">Travelling in the UK and other European countries for business trips? Enjoy luxurious travel with this category of business travel class.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Access to departure lounges</li>
                        <li>Personal space on-broad</li>
                        <li>Complimentary drinks and food</li>
                        <li>Priority boarding</li>
                        <li>Dedicated check-in desk</li>
                        <li>Increased baggage allowance</li>
                        <li>Contoured leather seats</li>
                        <li>Movable headrests</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Eye-level storage for magazines</li>
                        <li>LED lighting</li>
                        <li>Complimentary newspapers</li>
                        <li>Dedicated cabin crew</li>
                        <li>Calm and elegant lounge access</li>
                        <li>Doorstep check-in</li>
                        <li>Doorstep pick-up of baggage</li>
                        <li>First track through the airport</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Club World</p>
            <p class="secondary-font"> Designed especially for travellers looking forward to a comfortable trip while flying across the world for business, this is a class that offers you an unforgettable and unique journey. So, what are the different features of this class? Let’s explore:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>A full-flat bed that converts into a spacious seat</li>
                        <li>Delicious food and drinks</li>
                        <li>Private lounge access</li>
                        <li>Stylish bedding</li>
                        <li>Amenity Kit</li>
                        <li>Priority boarding</li>
                        <li>Dedicated check-in desk</li>
                        <li>Extra space on-board</li>
                        <li>Soft mattress topper</li>
                        <li>Luxury duvet</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Comfortable blanket</li>
                        <li>In-flight power adaptor</li>
                        <li>In-seat power outlets</li>
                        <li>Aisle access from every seat</li>
                        <li>High-resolution screens with endless entertainment options</li>
                        <li>Noise-cancelling headphones</li>
                        <li>Room for extra baggage</li>
                        <li>Doorstep baggage pick-up</li>
                        <li>Doorstep check-in</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">First Class</p>
            <p class="secondary-font">This is the most luxurious way of travel that British Airways has to offer. Be it stylish suite to fast-track security, this class offers you the high-class services and the best. Here are a few aspects of this excellent class you can explore while travelling in this class.</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Fully flat bed including duvet and mattress</li>
                        <li>A private suite that is spacious too</li>
                        <li>Luxury lounge access</li>
                        <li>Spa treatments</li>
                        <li>Delicious dining</li>
                        <li>A la carte meal options from the best chefs</li>
                        <li>Designer crockery, glassware and crockery</li>
                        <li>Priority boarding from the exclusive First class lounge</li>
                        <li>Exclusive designer loungewear</li>
                        <li>Amenity bag</li>
                        <li>Comfortable slippers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seven-piece body and skin care package</li>
                        <li>Dedicated onboard service</li>
                        <li>Personal charging point for electronic devices and laptop</li>
                        <li>Non-stop and endless entertainment options</li>
                        <li>State-of-the-art noise-cancellation headphones</li>
                        <li>Personal touchscreen handset</li>
                        <li>Free Wifi</li>
                        <li>Generous baggage allowance</li>
                        <li>Doorstep baggage check-in</li>
                        <li>Doorstep baggage pick-up</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Lounge options</p>
            <p class="secondary-font">The lounges for British Airways are located at the best locations across major airports around the world. The eligible passengers can access the British Airways departure lounges and also partner lounges. Take a look at some of the interesting options related to the lounges.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Passengers can access lounges depending on their First class or Business Class tickets</li>
                        <li>One guest, travelling through British Airways or some partner airlines, can join a First class passenger with an invitation</li>
                        <li>Flexible alcohol laws depending on the rule of the country</li>
                        <li>No alcoholic drinks for passengers under the age of 18 years</li>
                        <li>There are over 600 luxurious lounges all across the world for passengers to choose from</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Family travel</p>
            <p class="secondary-font">What are the benefits that you can enjoy while travelling with your family? Be it carrying pushchairs or opting for a delicious children's menu, there are numerous advantages provided by the airline. Here is a look at some points to explore:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in options</li>
                        <li>Priority boarding options</li>
                        <li>At London Heathrow Terminal 5 you can get an exclusive check-in zone</li>
                        <li>Screen-free entertainment for kids</li>
                        <li>Complimentary activity packs including fun-printed socks, crayons, and a fun eye mask</li>
                        <li>Complimentary carrycots for infants</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Pre Book your seats for better seating options</li>
                        <li>Pre-order your kid’s meals from exciting options</li>
                        <li>Additional assistance travellers</li>
                        <li>Additional assistance for travellers with impairment</li>
                        <li>Special children’s lounge with toys from London's Hamleys</li>
                        <li>Pushchair service for the kids</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage Essentials to know about</p>
            <p class="secondary-font">What to take? What not to take? There are various rules and regulations regarding baggage options. So, here are some points for you to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The handbag dimension should be up to 40 x 30 x 15cm</li>
                        <li>The maximum weight limit for a handbag is 23 kg</li>
                        <li>Besides a regular handbag, a small bag for medicine or carrying essential documents or mobile is allowed</li>
                        <li>Subject to availability of space, a larger bag may be allowed in the cabin</li>
                        <li>Baggage needs to be checked before you fly</li>
                        <li>Add a label with essential details inside and outside your baggage</li>
                        <li>You can pay for extra baggage</li>
                        <li>Items like tank harness, scuba regulator, fins, face marks, buoyancy control device, spear guns, weight belt, and cylinder tank are the sports equipment that is allowed</li>
                        <li>Musical instruments are also allowed on the flight. Some of the instruments that the passengers can take are violin, wind instruments, cello, guitar, double basses, and many more</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Restricted items</p>
            <p class="secondary-font">There are certain items that are restricted during the flight They are not permitted in either checked-in or hand luggage. Here is a list of the items you cannot take while flying:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Toiletries of larger quality</li>
                        <li>Alcoholic drinks (unless purchased from the airport and also depending on the regulations of the origin country)</li>
                        <li>Liquid components of e-cigarettes</li>
                        <li>Soups</li>
                        <li>Sauces</li>
                        <li>Jam and jelly</li>
                        <li>Powders especially on the flights to the US and Australia</li>
                        <li>Flammable materials</li>
                        <li>Toxic materials</li>
                        <li>Radioactive medicines</li>
                        <li>Peanuts</li>
                        <li>Damages batteries or equipment</li>
                        <li>Underwater lamps</li>
                        <li>Car batteries</li>
                        <li>Guns</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Firearms</li>
                        <li>Component of firearms</li>
                        <li>Bow and crossbow</li>
                        <li>CO2 guns</li>
                        <li>Acid</li>
                        <li>Bleach</li>
                        <li>Fertiliser</li>
                        <li>Weed killer</li>
                        <li>Insecticides</li>
                        <li>Stun guns</li>
                        <li>Stun baton</li>
                        <li>Animal stunner</li>
                        <li>Incapacitating chemicals</li>
                        <li>Animal repellant</li>
                        <li>Pepper spray</li>
                        <li>Mace spray</li>
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