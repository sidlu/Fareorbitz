@include('site.header')
@php $page = 'Caribbean Airlines'; $logo = 'images/partners/caribbean.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/caribbean.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Caribbean Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/caribbean-airline.jpg') }}" class="img-fluid" alt="caribbean airline" />
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
                <h2 class="sec__title text-center">Caribbean Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Caribbean Airlines is a state-owned airline which is also the flag carrier of Trinidad and Tobago. With an operational base in Jamaica, this airline has a fairly large route network that helps people travel from one part of the world to another. The airline has also received multiple awards for its excellent service. Equipped with state-of-the-art facilities, this airline helps passengers in having a comfortable and hassle-free journey.
            </blockquote>
            <p class="airline-title">Travel Destinations</p>
            <p class="secondary-font">Caribbean Airlines is a well-connected service provider that has routes all across the world. This airline is known for covering different cities in various countries. Though due to the pandemic, some routes are temporarily closed the airline will resume services as soon as possible. So, what are the places you can visit while travelling with Caribbean Airlines? Let’s take a look at the destinations:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Nassau</li>
                        <li>Bridgetown</li>
                        <li>Toronto</li>
                        <li>Havana</li>
                        <li>Willemstad</li>
                        <li>Marigot</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>St. George's</li>
                        <li>Georgetown</li>
                        <li>Kingston</li>
                        <li>Montego Bay</li>
                        <li>Castries</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Kingstown</li>
                        <li>Philipsburg</li>
                        <li>Paramaribo</li>
                        <li>Port of Spain</li>
                        <li>Scarborough</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Houston</li>
                        <li>Miami</li>
                        <li>New York City</li>
                        <li>Orlando</li>
                        <li>Caracas</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">Don’t see your destination on the list? Worry not, get in touch with our experienced team who can help you book your ticket. We also have other specialised services to help you plan your trip better.</p>

            <p class="airline-title">Travelling with pets?</p>
            <p class="secondary-font">Your pet baby is a part of your family. The airline understands that. Hence, they have a special service that helps you in travelling with your pet. However, the service is guided by certain rules and regulations that you need to know about before booking a ticket for your pet. So, take a look at the important points related to this service.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Pets must not be above a certain weight. The calculation is including the weight of their carrier or kennel</li>
                        <li>Passengers have to bear the pet-related taxes</li>
                        <li>Some breeds of dogs and cats are not allowed onboard</li>
                        <li>The other types of animals are not allowed in the cabin and are accepted as cargo</li>
                        <li>Besides pets, service dogs are also allowed onboard. They are permitted to board free of charge</li>
                        <li>If you want to transport a live animal in the cargo, you will have to give prior notice to the airline. It is advisable to give the notice at least 72 hours before departure</li>
                        <li>Make sure you have all the necessary documents. Some of the documents that are required for your pet are permits, licences, and health certificates. Here it is important to mention that the certificate needs to be issued by a credible and licensed veterinarian. Furthermore, you also need to carry the vaccination certificate of your pet</li>
                        <li>In case of a connecting flight, make sure to check the pet policy of that particular airline</li>
                        <li>Travelling with your pet is a fun idea. However, while booking the ticket for air travel, there are numerous issues that you have to face. Also, the rules regarding pets vary from one country to another. That is why we have a special service in place that helps you in booking your tickets without any worry. At Fareorbitz, we make sure to plan and arrange your trip perfectly so that you can enjoy it.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Service Animals</p>
            <p>Besides pets, service animals are also allowed onboard. However, there are certain things that you need to know about while bringing your service animal to fly on this airline. The first thing that you need to know is what a service animal is. At the moment, trained dogs, irrespective of their breeds, are considered service animals. If a person with any kind of impairment is getting help from the animal accompanying him or her, then they are allowed on board</p>
            <p class="secondary-font">However, these are not the only points that you should pay attention to. Here are a few more points to remember:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Passengers travelling from or to the US need to fill out the US Department of Transportation Service Animal Air Transportation Form</li>
                        <li>Service dogs are not allotted seats. However, they can be accommodated in the space near the passenger’s feet</li>
                        <li>A person with a service dog cannot seat in an exit row</li>
                        <li>A vaccination certificate and permit are required for the service dog</li>
                        <li>Service animal policies may vary for different airlines. Hence, if you have a connecting flight always make sure to confirm your service animal with the particular airline you are flying with</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Unaccompanied Minors</p>
            <p class="secondary-font">Does your kid need to travel alone without being accompanied by a parent or guardian? There is a special service in place that allows children to fly unaccompanied. The service ensures that your kid reaches his or her destination safely while enjoying a comfortable journey. Expectedly, there are certain rules and regulations regarding this service. Let's take a quick look at the different points you need to remember before booking this service.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The service is available for children between the ages of 5 to 11</li>
                        <li>Children below the age of 5 cannot travel without a parent or a guardian</li>
                        <li>The kids who are above the age of 11 years to below the age of 18, can opt for the service but it is not mandatory</li>
                        <li>This service cannot be booked online. You need to call the airline to book the service. Alternatively, you can also let us handle the booking for your child’s unaccompanied travel</li>
                        <li>Parents have to fill and sign the Unaccompanied Minors form</li>
                        <li>The kid should have all the relevant documents with him or her before boarding the flight</li>
                        <li>The guardian or parent needs to fill out necessary Customs and Immigration forms. If not, then the kids will not be allowed onboard</li>
                        <li>There is an option for advanced seat selection. Under this, the airline will arrange for the kid to seat in the forward section of the cabin</li>
                        <li>Special meals are available on request</li>
                        <li>This service is not available for connecting flights</li>
                        <li>The number of seats for children travelling alone is limited on each flight</li>
                        <li>The kid should reach the airport minimum of three hours before the departure for processing</li>
                        <li>Parents or guardians who dropped off the kid at the airport, need to remain there until the flight takes off</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">How does it work</p>
            <p class="secondary-font">How does the actual travel take place when your kid is flying alone? Here are a few points to know.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Upon reaching the airport, inform the airline about your arrival. They will arrange for an agent who will take your child through the check-in and security processes. They will help the kid reach the gate area and then hand him or her over to the airline crew</li>
                        <li>When boarding is announced, the kid will be escorted inside the aircraft before any other passenger</li>
                        <li>Someone from the cabin crew will take charge of the kid inside the flight and he or she will help the kid find their seat</li>
                        <li>Make sure that you take your kid through the entire travel process. Furthermore, teach them that they should stay in their seats during the journey</li>
                        <li>Teach your child that it is perfectly fine to ask for the cabin crew’s help</li>
                        <li>When the kid arrives at the destination, he or she will be handed over to another airport agent. They will take the child through customs and Immigration formalities</li>
                        <li>Once the formalities are completed, the child would be handed over to the designated person. Make sure to bring your ID with you</li>
                        <li>Children must carry government-issued ID</li>
                        <li>Pack extra snacks in your kid’s bag. However, be careful not to add items that are restricted on board</li>
                        <li>Make sure that she or he is well rested before the travel</li>
                        <li>Dress your kid in comfortable clothing and also pack a second set of clothes</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel Class</p>
            <p>Every airline offers passengers a choice of various travel classes. Each class has different services. Here are some of the points to keep in mind about the travel classes of Caribbean Airlines.</p>

            <p class="airline-subtitle">Economy Class</p>
            <p class="secondary-font">This is a kind of travel class that helps you in having a comfortable journey without burdening your wallet. Here are some of the features of this travel class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Comfortable seat</li>
                        <li>Generous leg space</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>In-flight meal option</li>
                        <li>In-flight entertainment</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Business Class</p>
            <p class="secondary-font">This is a class that gives you all the comfort of an Economy Class and something more. This travel class helps the passengers in many ways. Take a quick look:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority check-in</li>
                        <li>Priority baggage handling</li>
                        <li>Priority boarding</li>
                        <li>Modern reclining seats</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Extra large seat fitted with leather</li>
                        <li>Huge leg space to stretch your legs properly</li>
                        <li>13.3-inch touch screen to enjoy during your flight</li>
                        <li>Numerous entertainment options</li>
                    </ul>
                </div>
            </div>
            <p>Need some more information about the various travel classes that this airline offers? We can help. Our dedicated team can take you through each step of your trip and help you book a ticket in the travel class of your choice.</p>

            <p class="airline-title">Baggage Policies</p>
            <p>What to carry or what not to carry, that is the question. Each airline has its own set of rules and regulations when it comes to the baggage that the passengers can carry either in the cabin or in the hold. The case is the same for Caribbean Airlines. Here are some of the important points about the baggage that you need to keep in mind.</p>

            <p class="airline-subtitle">Carry-on</p>
            <p class="secondary-font">Carry-on refers to the bag that you can take with you inside the aircraft. Take a look at the points related to this service of the airline.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>One carry-on bag is allowed inside the cabin</li>
                        <li>One personal item is also allowed, It can be a handbag, a small briefcase, or a laptop bag</li>
                        <li>Passengers travelling with infants are allowed to carry one stroller or pushchair</li>
                        <li>Wheelchairs, crutches or walkers are allowed onboard to ensure a safe journey for passengers with special needs</li>
                        <li>Non-flammable gels are allowed on board. However, you need to pack each item like shampoo, moisturiser, etc in 100 ml bottles. Then, the bottles need to be placed inside a transparent pouch</li>
                        <li>Powder-like substances are usually restricted. However, there are certain conditions under which it is allowed onboard. Medically prescribed powder-like substance or baby formula is allowed in a restricted amount</li>
                        <li>Passengers can carry drones in the cabin</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Check-in</p>
            <p class="secondary-font">What are the items that are considered as check-in luggage? Here are a few points that will help you understand better:</p>
            <ul class="airline_ul">
                <li>The number of bags you can carry depends on the type of travel class and the ticket you are selecting</li>
                <li>You can increase your baggage allocation limit with a fee</li>
                <li>Oversized or overweight baggage could incur an extra cost at the airport</li>
                <li>Mobility aids can be taken as a check-in luggage</li>
                <li>Special baggage like sports or musical items are also allowed</li>
                <li>Make sure that your luggage is properly packed without any protruding parts as that may damage your baggage</li>
                <li>Make sure to add the baggage tag. Also, you can put a label with your name and contact details</li>
            </ul>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">Certain items are not allowed on board but can be taken in the hold or vice versa. Furthermore, some items are strictly restricted and cannot be accommodated in the aircraft.</p>
            <p class="secondary-font">Here is a list of items that you cannot carry as check-in or hand baggage. Also, you cannot carry them on you </p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Smart baggage</li>
                        <li>Disabling devices such as pepper spray or mace</li>
                        <li>Liquid oxygen</li>
                        <li>Weapons that give electric shocks</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Matches</li>
                        <li>Samsung Galaxy Note 7 device</li>
                        <li>Recalled or damaged lithium batteries</li>
                        <li>Small vehicles like hoverboards or mini-segway</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">Take a look at the list of the items that need to be declared to the airline and could be subjected to further scrutiny.</p>

            <div class="row">
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Breathing apparatus</li>
                        <li>Camping equipment</li>
                        <li>Cars, car parts</li>
                        <li>Cylinders</li>
                        <li>Dental apparatus</li>
                        <li>Expeditionary equipment</li>
                        <li>Film crew or media equipment</li>
                        <li>Frozen embryos</li>
                        <li>Dry ice</li>
                        <li>Hot air balloons</li>
                        <li>Samples for testing</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Diagnostic specimens</li>
                        <li>Oven cleaner</li>
                        <li>Pharmaceuticals</li>
                        <li>Photographic supplies</li>
                        <li>Repair kits Household goods</li>
                        <li>Diving equipment</li>
                        <li>Drilling and mining equipment</li>
                        <li>Electrical equipment</li>
                        <li>Toolboxes</li>
                        <li>Torches</li>
                        <li>Spray starch</li>
                        <li>Switches in electrical equipment or instruments</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="airline_ul">
                        <li>Electrically-powered apparatus</li>
                        <li>Instruments</li>
                        <li>Laboratory/testing equipment</li>
                        <li>Machinery parts</li>
                        <li>Magnets and other items of similar material</li>
                        <li>Medical supplies</li>
                        <li>Fuel control units</li>
                        <li>Fuels</li>
                        <li>Vaccines</li>
                        <li>Vehicle shocks</li>
                        <li>Swimming pool chemicals</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">Want to carry special baggage? Let us help you. We have specialised teams who can understand your travel requirements to present you with a properly planned trip.</p>
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