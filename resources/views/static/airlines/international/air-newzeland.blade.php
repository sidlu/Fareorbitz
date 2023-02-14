@include('site.header')
@php $page = 'Air Newzeland'; $logo = 'images/partners/air-newzeland.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/air-newzeland.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Air Newzeland Reservations </p>
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
    <img src="{{ asset('images/airlines/air-newzeland.jpg') }}" class="img-fluid" alt="air newzeland" />
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
                <h2 class="sec__title text-center">Air Newzeland</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Air New Zealand, as you may have guessed, is the flag carrier airline of New Zealand. With a huge global network of passenger and cargo services, this airline flies across various destinations. The airline also provides its service in the New Zealand region. A member of Star Alliance, the airline is mainly popular for providing impeccable service in and around the Pacific Rim. The airline also has incredible services and lounge access for its passengers in different parts of the world. Though they have temporarily terminated some routes due to Covid-19, the airline is trying to re-open the routes to broaden their route network.
            </blockquote>
            <p class="airline-title">Travel Destination</p>
            <p class="secondary-font">Air New Zealand is a well-connected airline. It means that you can travel from one corner of the world to another with ease. So, what are the places you can visit with this airline? Let's take a look:</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Auckland</li>
                        <li>Gisborne</li>
                        <li>Hamilton</li>
                        <li>Kerikeri</li>
                        <li>Napier</li>
                        <li>New Plymouth</li>
                        <li>Palmerston North</li>
                        <li>Rotorua</li>
                        <li>Taupō</li>
                        <li>Tauranga</li>
                        <li>Wellington</li>
                        <li>Whangārei</li>
                        <li>Blenheim</li>
                        <li>Christchurch</li>
                        <li>Dunedin</li>
                        <li>Hokitika, West Coast</li>
                        <li>Invercargill</li>
                        <li>Nelson</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Queenstown</li>
                        <li>Timaru</li>
                        <li>Adelaide</li>
                        <li>Brisbane</li>
                        <li>Cairns</li>
                        <li>Gold Coast</li>
                        <li>Melbourne</li>
                        <li>Perth</li>
                        <li>Sunshine Coast</li>
                        <li>Sydney</li>
                        <li>Queensland</li>
                        <li>Tasmania</li>
                        <li>Bali</li>
                        <li>Fiji</li>
                        <li>Hawaii</li>
                        <li>New Caledonia</li>
                        <li>Niue</li>
                        <li>Rarotonga</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Samoa</li>
                        <li>Tahiti</li>
                        <li>Tonga</li>
                        <li>Denver</li>
                        <li>Washington DC</li>
                        <li>Boston</li>
                        <li>New York City</li>
                        <li>Orlando</li>
                        <li>Memphis</li>
                        <li>Portland</li>
                        <li>Utah</li>
                        <li>Miami</li>
                        <li>Los Angeles</li>
                        <li>San Francisco</li>
                        <li>Houston</li>
                        <li>Chicago</li>
                        <li>Hawaii</li>
                        <li>Las Vegas</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Beijing</li>
                        <li>Hong Kong</li>
                        <li>Osaka</li>
                        <li>Seoul</li>
                        <li>Shanghai</li>
                        <li>Singapore</li>
                        <li>Taipei</li>
                        <li>Tokyo</li>
                        <li>Vancouver</li>
                        <li>Ahmedabad</li>
                        <li>Chennai</li>
                        <li>New Delhi</li>
                        <li>Coimbatore</li>
                        <li>Hyderabad</li>
                        <li>Bengaluru</li>
                        <li>Kochi</li>
                        <li>Kolkata</li>
                        <li>Mumbai</li>
                        <li>Thiruvananthapuram</li>
                        <li>Visakhapatnam</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Children travelling alone</p>
            <p>Is your kid travelling all alone by himself or herself? Then the airline has a special service that can help your kid travel from one place to another without any hassle and in a comfortable way. Here are some aspects that you need to know about when you are looking forward to a service that helps your young one travel safely.</p>
            <p>Is your kid travelling within the country? Then you need to make sure to check the government travel restrictions to know more. It is advisable to take help from our dedicated team at Fareorbitz who can guide you properly in understanding the various rules and guidelines related to the service of children travelling alone within the country.</p>
            <p>You may wonder what about international travel. In the wake of the pandemic, the service is provided only to those countries which permit self-isolation or quarantine-free travel. Also, at the present moment Air New Zealand is not providing this service for the following regions:</p>

            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Samoa</li>
                        <li>Niue</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Shanghai Pudong</li>
                        <li>Seoul</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Hong Kong</li>
                        <li>Taipei</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">How the airline operates</p>
            <p class="secondary-font">Certain measures are implemented to make sure that the child travelling alone does not face any kind of issues. These services are also provided so that parents can have peace of mind while their kids travel alone. Here are some points to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The child travelling alone is given a special wristband after checking in at the airport</li>
                        <li>At different stages of their journey, the wristband is scanned by the airport and airline staff to make sure that everything goes smoothly</li>
                        <li>During the checking, five designated people also receive text messages</li>
                        <li>The text messages are sent during check-in at the airport, after the kid boards the plane, when the plane lands following which the kid is handed to the ground staff, and finally, when the designated person picks up the kid from the destination airport</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Other points</p>
            <p class="secondary-font">What are the other things that you need to know about the service? Let's take a look:</p>

            <ul class="airline_ul">
                <li>The service is allowed for children between the age of 5 to 11 years. However, they will be allowed if they meet all the conditions of the unaccompanied minor service</li>
                <li>Children under 5 years are not allowed to travel alone</li>
                <li>Children from the age of 12 to 16 may opt for the service or can travel alone</li>
                <li>The ticket for a child travelling alone is booked according to the adult fare</li>
                <li>Upon cancelling the ticket, you can get a refund if you have a fully refundable ticket</li>
                <li>In case of any change of plans, make sure to update the things like date, drop off and pick up details, etc</li>
                <li>This service is not available for connecting flights.</li>
                <li>In case of several impairments, children are not allowed to travel alone</li>
                <li>In some cases, children with special needs can travel alone after getting a clearance certificate from the special medical team</li>
            </ul>

            <p class="airline-subtitle">Day of travel</p>
            <p class="secondary-font">You must take your kid through the process of travelling alone and teach them what to expect on the day of travel.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>There are Special Assistance counter for kids to check-in</li>
                        <li>Ensure that your kid carries all the important documents required for the air travel</li>
                        <li>You can escort your kid to the departure gate at some airports The adult dropping off the kid needs to be at the airport until the plane takes off</li>
                        <li>Make sure to teach your kid to remain in their seat during travel and to ask for the cabin crew's help if they need anything</li>
                        <li>There are special meal options for kids on-board</li>
                        <li>The child can stay engaged with numerous entertainment options</li>
                        <li>Once the flight lands, the kid will be handed over to the designated person after verifying their ID</li>
                        <li>In case of delays due to unexpected reasons, the parents will receive periodical updates</li>
                        <li>The cabin crew can take care of the kid travelling alone but they won't be able to administer medicine. Hence, if your kid has a medical condition, teach them when to take their meds</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Baggage policies</p>
            <p>There are certain rules and regulations related to baggage that remain the same for the airlines. However, certain specific ones vary from one carrier to another. What are the baggage guidelines that you need to know about Air New Zealand? Let's take a look:</p>
            <p class="airline-subtitle">Check-in baggage</p>
            <p class="secondary-font">This is the type of luggage that you cannot carry with you in the cabin and you will have to check in so that they can be transported in the hold. Here are some points about this service that you need to know about:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The baggage allowance will be mentioned on your e-ticket when you directly fly with this airline. The allowance may change in case of connecting flights</li>
                        <li>The number of baggage or the weight depends on the travel class and the type of ticket you are booking. However, you can always increase your baggage allowance by paying a fee</li>
                        <li>If your bag is overweight, you will have to pay for the extra weight at the airport</li>
                        <li>The size of a bag is calculated by taking into consideration length, width and height</li>
                        <li>Smart baggage can only be checked in after the batteries are removed and carried in the cabin</li>
                        <li>Most sporting equipments are allowed as check-in luggage. However, if you have a piece of special equipment, make sure to contact the airline before travelling</li>
                        <li>Child fare includes the same allowance of baggage as adult fare</li>
                        <li>Adults can travel with two of these items - buggies, car seats, strollers, and/or booster seats</li>
                        <li>Aside from animals transported in cargo, passengers can book special services for the transportation of their pets</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Carry-on baggage</p>
            <p class="secondary-font">What are the points you need to remember about carry-on bags? Take a look:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The weight, size, and number of the carry-in bags will depend on the travel class and ticket type</li>
                        <li>Besides a carry-in suitcase, a passenger can carry one personal item</li>
                        <li>Always make sure that your bags don't have the prohibited items that are restricted to carry in the cabin</li>
                        <li>You can take one stroller or car seat on board</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">Certain items are restricted that you cannot carry as check-in luggage. Here is a quick list:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Computers and computer equipment</li>
                        <li>Money</li>
                        <li>Jewellery</li>
                        <li>Precious metals</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Silverware</li>
                        <li>Documents</li>
                        <li>Certificates</li>
                        <li>Fragile items</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Samples</li>
                        <li>Camera or video camera</li>
                        <li>Travel documents</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Passports</li>
                        <li>Odd-shaped items or items that are too heavy</li>
                        <li>Insufficiently packed items</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">Here is a list of other items that are restricted while you are travelling with the airline.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Liquid oxygen</li>
                        <li>Incapacitating substances</li>
                        <li>Disabling devices</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Explosives</li>
                        <li>Electric shock weapons</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Compressed gas</li>
                        <li>Aerosols other than toiletry or medical items</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Hoverboard or mini-segway or similar items</li>
                        <li>Durian fruit</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Tips during travel</p>
            <p class="secondary-font">Here are some important tips that can help in making your travel trouble-free and smooth:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Make sure that the destination is printed on your baggage tag</li>
                        <li>Always pack your bags properly to make sure there are no protruding parts</li>
                        <li>Put labels on your check-in baggage with your name and contact details clearly written on it</li>
                        <li>You can use identifying marks on your luggage</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travelling with pets</p>
            <p>Are you planning to take an Air New Zealand flight to fly with your pet from one place to another? Then there are several things you need to know about. Cats, dogs, and small caged birds can be carried as check-in baggage on domestic flights. If you are transporting animals for profit or your pet is travelling alone, then there is a special cargo service that you can opt for
                There are certain things that the airline can ask you when you are booking the service for your pet.
            </p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Name of pet</li>
                        <li>Pet's age</li>
                        <li>Weight of pet</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Pet type</li>
                        <li>Weight of carrier or cage</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">There are also certain points that you should know about the animal pet carrier:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Three animals from the same litter and aged less than six months can travel in the same carrier. However, their combined weights shouldn't be above 14 kg</li>
                        <li>Two adult animals of comparable size can travel together. However, their weight should not exceed 14 kg</li>
                        <li>A single animal travelling in a carrier shouldn't weigh more than 14 kg</li>
                        <li>The carrier should have adequate ventilation</li>
                        <li>It should be leakage proof</li>
                        <li>It should be secured properly</li>
                        <li>Passengers also need to carry separate water and food carriers for their pets</li>
                        <li>There are some things that you need to remember on the day you are travelling with your pet:</li>
                        <li>Make sure to check in at least one hour before your flight's departure time</li>
                        <li>Your pet must be in their carrier</li>
                        <li>Every airport has its own set of regulations, make sure to follow them while travelling with pets</li>
                    </ul>
                </div>
            </div>

            <p>It is always advisable to make your pet-related bookings through us. We can help you in understanding the different rules and regulations related to travelling with pets in different countries.</p>

            <p class="airline-title">Travel Classes</p>
            <p>Air New Zealand has specially designed travel classes that help passengers get the utmost comfort while travelling. Let's take a look at the services that the different travel classes have to offer:</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">What are the different features of this travel class? Take a look at the various points that make this travel class distinctive from the others:</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>One carry-on bag and one check-in bag are allowed</li>
                        <li>Standard seat</li>
                        <li>Fresh and delicious cuisine and drinks</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Special child's meal</li>
                        <li>Entertainment for kids</li>
                        <li>On-demand entertainment for passengers</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy</p>
            <p class="secondary-font">This travel class offers comfortable services at an affordable price. Here are the points to know about the Premium Economy class:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Two carry-on bag</li>
                        <li>Two check-in luggage</li>
                        <li>Customised leather seats</li>
                        <li>More personal space</li>
                        <li>Priority baggage</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority boarding</li>
                        <li>Premium check-in</li>
                        <li>Complimentary cuisine, including wine</li>
                        <li>Child's mean and activity pack</li>
                        <li>On-demand entertainment options</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Premier</p>
            <p class="secondary-font">This is the travel class that offers the ultimate comfort to travellers. Take a look at the features that make this travel class luxurious:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Two carry-on luggage</li>
                        <li>Three check-in bags</li>
                        <li>Lounge access</li>
                        <li>Luxury leather seats</li>
                        <li>Generous personal space</li>
                        <li>Premium check-in</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority baggage</li>
                        <li>Priority boarding</li>
                        <li>Different delicious menu and drink options</li>
                        <li>On-demand entertainment</li>
                        <li>Child's menu</li>
                        <li>Child's activity pack</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Booking and cancellation</p>
            <p>Each airline has its own set of rules and regulations when it comes to managing, changing or cancelling booked flights. There are many points to know about the policies of Air New Zealand. Take a look:</p>

            <ul class="airline_ul">
                <li>In case you have a refundable ticket, you also get back your credit card payment fee</li>
                <li>In certain types of tickets, there are no fees applied if the ticket is cancelled before departure</li>
                <li>Third-party fees cannot be refunded</li>
            </ul>

            <p>Your travel can get complicated, especially during international travel. That is why we are here to take care of all your travel needs. With our service, you won't have to worry about anything.</p>
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