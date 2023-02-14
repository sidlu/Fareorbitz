@include('site.header')
@php $page = 'Swiss International Airlines'; $logo = 'images/partners/swiss-international-airline.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/swiss-international-airline.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Swiss International Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/swiss-international-airline.jpg') }}" class="img-fluid" alt="swiss international airlines" />
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
            <div class="section-heading mb-3">
                <h2 class="sec__title text-center">SWISS International Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-2">
                    Switzerland's national airline is called SWISS International Airlines or SWISS in short. Serving over 43 countries and nearly 100 destinations, this airline covers a huge area across the globe. Each year, the airline's aircraft fleet carries over 16 million passengers to different destinations. True to its roots, the airline is known for providing quality service to its passengers. Furthermore, it is also known for maintaining its sustainability while providing quality air services to its customers.
                </p>
                <p>
                    With its headquarters in Zurich Airport, the company has around 10,000 employees under its wings. It was founded in 2002 and decades later has emerged as a market leader. Here are some of the essential aspects related to the airlines that you should know about.
                </p>
            </blockquote>
            <p class="airline-title">About the fleet</p>
            <p>There are mainly three types of aircraft that are operated by the airlines. They're Airbus short-haul fleet, Airbus long-haul fleet, and Boeing</p>
            <p class="airline-subtitle">Airbus short-haul fleet</p>
            <p>
                This is an aircraft model that the airline uses mainly for its short or medium-haul flights. They are supplied to the company by the European manufacturer Airbus.
            </p>
            <p class="airline-subtitle">Airbus short-haul fleet</p>
            <p>
                This type of airbus is refurbished to provide a premium flying experience along with safety to the passengers onboard for a long haul.
            </p>
            <p class="airline-subtitle">Boeing</p>
            <p>
                Not only used for the long haul, but this aircraft type is also a flagship of the fleet operated by SWISS.
            </p>
            <p class="airline-title">Destinations</p>
            <p class="secondary-font">
                The airlines have flights to different corners of the world. While in some countries, the flight route is restricted to one place, for other nations the number may go up to three to four destinations. Here is a quick list of some of the places where SWISS International Airlines offers its services.
            </p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Albania</li>
                        <li>Argentina</li>
                        <li>Austria</li>
                        <li>Belgium</li>
                        <li>Bosnia and Herzegovina</li>
                        <li>Brazil</li>
                        <li>Bulgaria</li>
                        <li>Cameroon</li>
                        <li>Canada</li>
                        <li>Chile</li>
                        <li>China</li>
                        <li>Croatia</li>
                        <li>Czech Republic</li>
                        <li>Denmark</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Egypt</li>
                        <li>Equatorial Guinea</li>
                        <li>Luxembourg</li>
                        <li>Finland</li>
                        <li>France</li>
                        <li>Gabon</li>
                        <li>Germany</li>
                        <li>Ghana</li>
                        <li>Greece</li>
                        <li>Hong Kong</li>
                        <li>Hungary</li>
                        <li>India</li>
                        <li>Iran</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Ireland</li>
                        <li>Israel</li>
                        <li>Italy</li>
                        <li>Japan</li>
                        <li>Kenya</li>
                        <li>Kosovo</li>
                        <li>Lebanon</li>
                        <li>Malta</li>
                        <li>Morocco</li>
                        <li>Netherlands</li>
                        <li>Norway</li>
                        <li>Poland</li>
                        <li>Romania</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Russia</li>
                        <li>Serbia</li>
                        <li>Singapore</li>
                        <li>Slovenia</li>
                        <li>South Africa</li>
                        <li>Spain</li>
                        <li>Sweden</li>
                        <li>Switzerland</li>
                        <li>Thailand</li>
                        <li>Turkey</li>
                        <li>Ukraine</li>
                        <li>United Arab Emirates</li>
                        <li>United Kingdom</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">
                While flights on some routes are operated regularly or daily, a few are operational only during certain seasons.
            </p>
            <p class="airline-title">Codesharing agreements</p>
            <p class="secondary-font">
                Common in the aviation industry, this is a type of agreement that involves two or more airlines. It is done by the airlines to offer customers numerous flight options without incurring additional costs for resources or equipment. Furthermore, the customers also get an option to choose from multiple flights, an option for easy booking and proper luggage handling. Like other airlines, SWISS too has codesharing agreements with some of the well-known airlines across the world.
            </p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Air China</li>
                        <li>Air Canada</li>
                        <li>Air India</li>
                        <li>Air France</li>
                        <li>Croatia Airlines</li>
                        <li>Asiana Airlines</li>
                        <li>LOT Polish Airlines</li>
                        <li>Edelweiss Air (Subsidiary)</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>United Airlines</li>
                        <li>Air Malta</li>
                        <li>United Airlines</li>
                        <li>Cathay Pacific</li>
                        <li>Austrian Airlines</li>
                        <li>Singapore Airlines</li>
                        <li>TAP Air Portugal</li>
                        <li>All Nippon Airways</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>EgyptAir</li>
                        <li>South African Airways</li>
                        <li>Avianca</li>
                        <li>Lufthansa</li>
                        <li>Brussels Airlines</li>
                        <li>Eurowings</li>
                        <li>Scandinavian Airlines</li>
                        <li>El Al</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Most preferred flight routes</p>
            <p class="secondary-font">
                It is no secret that when it comes to travelling, people often prefer one destination more than the others. Hence, here are some of the most popular travel destinations that people visit with SWISS flights. Furthermore, customers can often find interesting offers for flights operating on these routes.
            </p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Nice</li>
                        <li>Barcelona</li>
                        <li>Athens</li>
                        <li>Tokyo</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul"></ul>
                    <li>Mumbai</li>
                    <li>Hong Kong</li>
                    <li>Bangkok</li>
                </div>
            </div>
            <p class="secondary-font">Though these are some of the popular destinations, that doesn't mean that people don't opt for the other travel routes offered by the airlines.</p>

            <p class="airline-title">Onboard services</p>
            <p>SWISS, just like every other airline, too provides a wide range of services to the passengers on board their flights. Here are some of the services by the airlines.</p>
            <p class="airline-subtitle">Food and beverages</p>
            <p>There is an option for in-flight catering depending on the duration of travel. Also, there is a feature under which travellers can pre-book special food menus.</p>
            <p class="airline-subtitle">Entertainment</p>
            <p>The airlines especially take care of passengers on long-haul flights by providing individual screens and headphones. Besides offering a selected range of movies and music, the airlines also have in-flight magazines and e-journals for people to enjoy. On some flights, passengers can also enjoy the internet on board.</p>
            <p class="airline-subtitle">Duty-free shopping</p>
            <p>It is another exciting feature of the airlines. You can pre-book items to get them directly delivered during your travel.</p>

            <p class="mt-3">Other than these, there are certain safety aspects that passengers need to follow while flying with SWISS. For instance, cigarettes, including e-cigarettes, are strictly prohibited. Also, items or devices that can modify or restrict the functionality of the aircraft are prohibited onboard.</p>

            <p class="airline-title">Travel Classes</p>
            <p class="airline-subtitle">SWISS Economy</p>
            <p class="secondary-font">Under this travel class, the services are divided depending on the place of travel. The two categories are Europe and the Intercontinental. Though both categories offer travellers the best options, the nitty-gritty of the services they provide differs a little bit.</p>
            <p class="mt-3 secondary-font"><span class="airline-subtitle"><b>Europe: </b></span> Here is a quick look at the services provided while travelling in the country:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Three fare options from which travellers can select to help them form flexible travel plans</li>
                        <li>Comfortable travel</li>
                        <li>Enjoy delicious food with the option of SWISS Saveurs. It is a menu that caters to the personal preferences of passengers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Easy check-in</li>
                        <li>Miles to frequent travellers and members</li>
                        <li>Special service for passengers on business travel</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font"><span class="airline-subtitle">Intercontinental:</span> Take a look at the services provided under this category</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Adjustable headrest for long flights</li>
                        <li>Menu according to your food preferences</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight entertainment in multiple languages</li>
                        <li>Beneficial frequent flyer programs</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">SWISS Premium Economy</p>
            <p class="secondary-font">This travel class is relatively newer than the others but has amazing benefits that travellers can enjoy. This class promises more privacy and also better comfort when compared to SWISS Economy. Take a look at some of the features of this travel class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Innovative hard shell design for comfortable travel</li>
                        <li>Easy seat adjustments</li>
                        <li>Wide food selection</li>
                        <li>Entertainment on 15.6-inch screens</li>
                        <li>High-quality noise reduction headphones</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Extra baggage options</li>
                        <li>Easy check-in</li>
                        <li>Special toiletries bag</li>
                        <li>Option to earn miles</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">SWISS Business</p>
            <p class="secondary-font">Just like SWISS Economy, this travel class is also divided into two categories. One of them is for the passengers travelling within Europe and the other is for Intercontinental travel.</p>
            <p class="secondary-font"><span class="airline-subtitle">Europe: </span>What are the services to expect when you select this category? Have a look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Meals and drinks</li>
                        <li>Extra baggage</li>
                        <li>Access to lounges</li>
                        <li>Seat reservation</li>
                        <li>Miles</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority boarding and check-in</li>
                        <li>Vacant neighbouring seat</li>
                        <li>Wide selection of newspapers and magazines</li>
                        <li>Excellent dining</li>
                        <li>Separate business shuttle for quick embankment</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font"><span class="airline-subtitle">Intercontinental: </span>What are the advantages of Intercontinental travel with SWISS? Take a look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Exclusive services for travelling professionals ensuring utmost comfort</li>
                        <li>The business seats can be converted into a spacious workplace and also roomy beds</li>
                        <li>Excellent dining options</li>
                        <li>Adjustable screen for in-flight entertainment</li>
                        <li>Exclusive magazines for business class travellers</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Increased baggage limit</li>
                        <li>Priority check-in and boarding</li>
                        <li>Comfort Kit</li>
                        <li>Miles option</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle">SWISS First</p>
            <p class="secondary-font">This is the finest travel class that SWISS has to offer. The first class travellers not only enjoy redefined ambience but also get personalised services. Furthermore, they can browse the first-class products on board. Here are some of the features that make the first-class journey with this airline a trip worth remembering.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Armchairs that turn into spacious flat beds</li>
                        <li>Private sphere for comfort and privacy</li>
                        <li>Individual service</li>
                        <li>The gourmet menu along with selected fine wine</li>
                        <li>Latest films, games, and exclusive magazines for entertainment</li>
                        <li>Separate check-in at the terminal</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in and boarding</li>
                        <li>Access to star lounge</li>
                        <li>Increased baggage options</li>
                        <li>Miles options</li>
                        <li>Luxury products on board including pillow, cover, and nightwear</li>
                        <li>Special personalised toiletry bag</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">These are the four classes that SWISS offers to its passengers.</p>
            <p class="airline-title">Travelling with children</p>
            <p class="secondary-font">Here is a quick look at some of the important aspects to remember while travelling with your kids.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>A baby's ticket cost 10% of the regular fee along with additional charges until their second birthday. In this, no service fee is charged</li>
                        <li>For a two-year-old kid, a separate seat is booked. Children's fare is applied in this case</li>
                        <li>You can take your child's seat (car seat) if you have booked a separate seat for your child. However, it should have a specific dimension that cannot exceed 40 x 40 cm</li>
                        <li>One piece of folding pushchair is allowed on the aircraft. However, more than one needs to be checked as baggage</li>
                        <li>Children under the age of five are not allowed to fly alone. However, the kids between the ages of 5 and 11 may travel alone if the parents book unaccompanied minors (UM service). The service is not mandatory but is available for children aged 12 -17 years too. You can book the UM service for your kids through the service centre of the airlines</li>
                        <li>SWISS flights allow liquid baby food in hand baggage. Special baby food is also offered as a part of the in-flight menu</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">Also, an adult can travel with two kids if a seat is booked for one or both of them.</p>
            <p class="airline-title">Points to note about check-in</p>
            <p class="secondary-font">Here are some of the points related to check-in that you need to remember while travelling with SWISS</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>You can check in online 23 hours before the scheduled departure time</li>
                        <li>There are mainly four check-in options. They're automated check-in, online check-in, check-in through a machine at the airport, and check-in at the airport counter</li>
                        <li>You can also check in using your mobile, All you have to do is give your booking reference and choose your seat</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>The check-in is allowed till one hour before the departure and not after that</li>
                        <li>When unable to print a boarding pass, you can pick it up at the airport</li>
                        <li>In case of a stopover flight, you will get boarding passes for the entire route</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">Here you need to remember that the required time to enter the airport for your flight differs from one country to another. Hence, you have to abide by the rule of that country from where you are boarding your flight.</p>
            <p class="airline-title">Most popular destinations</p>
            <p class="secondary-font">SWISS has certain destinations which are preferred by travellers more than the others. Here is a quick look at some of the popular destinations.</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Atlanta (ATL)</li>
                        <li>Flights from Chicago (ORD)</li>
                        <li>Flights from San Francisco (SFO)</li>
                        <li>Flights from Los Angeles (LAX)</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul"></ul>
                    <li>Flights from Las Vegas (LAS)</li>
                    <li>Flights from Orlando (MCO)</li>
                    <li>Flights from Miami (MIA)</li>
                    <li>Flights from New York (JFK)</li>
                </div>
            </div>
            <p class="secondary-font">Be it for business trips or to explore the beauty of a foreign land, travellers love including these destinations while travelling with SWISS.</p>
            <p class="airline-title">Lounge services at the airport</p>
            <p>While waiting for your flight at the airport, the passengers can avail the lounge services provided by SWISS. Divided into three categories, here are the points on how you can avail of different services.</p>

            <p class="airline-title">Worldwide lounges</p>
            <p class="secondary-font">As a premium guest of SWISS, you have the option to select airport lounges at major airports all across the world.</p>
            <p class="secondary-font">The services you can receive will be as per the rules set by the international airports:</p>

            <p class="airline-subtitle">SWISS Lounges Geneva:</p>
            <p>Located at Geneva Airport, three lounges are designed to provide maximum comfort to the passengers.</p>

            <p class="airline-subtitle">SWISS First Lounge:</p>
            <p>With separate reserved areas for VIPs, this lounge also has a dedicated team that escorts the passengers to the aircraft. It also has a special buffet service.</p>

            <p class="airline-subtitle">SWISS Senator Lounge:</p>
            <p>Located right next to the gates, this lounge has a special menu for the passengers.</p>

            <p class="airline-subtitle">SWISS Business Lounge:</p>
            <p>This is the perfect place to catch some rest when you are between check-in and boarding. You can also enjoy delicious meals.</p>

            <p class="airline-title">SWISS Lounges Zurich</p>
            <p class="secondary-font">Multiple lounges are strategically placed around this airport. Let's take a quick look:</p>

            <p class="airline-subtitle">SWISS First Lounge E:</p>
            <p>
                Designed to offer pure luxury to travellers, this place has hotel rooms, suites, restaurants and a champagne bar. The 5-star chefs also prepare a la carte meals at the restaurants. The lounge also has a wine humidor. There are also sub-categories like the Lounges Geneva under this lounge. Their services differ slightly for each. They’re Senator Lounge E and SWISS Business Lounge E.
            </p>
            <p class="airline-subtitle">SWISS First Lounge A:</p>
            <p>It is another option that the passengers can explore. With a relaxed environment, passengers travelling by a few select classes can also use private security lanes. There are certain categories under this lounge type - they’re SWISS Business Lounge A, SWISS Senator Lounge A, and SWISS Alpine Lounge.</p>
            <p class="airline-subtitle">SWISS Arrival Lounge:</p>
            <p>This lounge welcomes SWISS First and SWISS Business passengers from incoming long-haul flights. Here the guests can access showers, bathrooms, and business rooms. However, it is operational daily from morning 6 am to afternoon 1 pm. There is an option for a delicious buffet too.</p>
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