@include('site.header')
@php $page = 'Avianca Airlines'; $logo = 'images/partners/avianca-airlines.jpg'; @endphp
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
    table tr td {
        vertical-align: middle;
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
                    <img src="{{ asset('images/partners/avianca-airlines.jpg') }}" alt="air-line-img" class="img-fluid greyscale">
                </div>
                <p class="ownmodal-title2 my-3">Avianca Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/avianca-airline.jpg') }}" class="img-fluid" alt="avianca airlines" />
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
                <h2 class="sec__title text-center">Avianca Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Avianca airline is well-known for its high standards and impeccable services. Being the largest airline in Colombia and the second largest in Chile, this airline offers comfortable and safe travel to passengers. They connect various places across the world. The receiver of different awards and acting as the flag carrier of Colombia, this airline is a perfect option to pick.
            </blockquote>
            <p class="airline-title">Travel destinations</p>
            <p>The airline has a huge network that helps people travel to various parts of the world. So, what are the places you can visit with the airline? Take a look.</p>
            <p class="airline-subtitle">Domestic</p>
            <p class="secondary-font">The first thing you need to know is the domestic destinations this airline caters to. They’re:</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Bogota</li>
                        <li>Cali</li>
                        <li>Arauca</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Armenia</li>
                        <li>Monteria</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Medellin</li>
                        <li>Neiva</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>San Andres island</li>
                        <li>Riohacha</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">International destinations</p>
            <p class="secondary-font">It is now time to take a look at the international destinations that the airline flies to.</p>
            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>BarcelonaM</li>
                        <li>BostonM</li>
                        <li>BridgetownM</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>LondonM</li>
                        <li>Bueno AiresM</li>
                        <li>FrankfurtM</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>ParisM</li>
                        <li>CorozalM</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>StockholmM</li>
                        <li>ZurichM</li>
                    </ul>
                </div>
            </div>

            <p>Unable to find your destination on the list? Worry not, we are here to help you. Get in touch with our designated team to fly to your destination comfortably.</p>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">Many want to travel with their pet babies. Like several renowned airlines, Avianca also has a facility through which you can easily travel with your pets. However, there are certain things that you should keep in mind while opting for this service. Wondering what they are? Let’s take a quick look:</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Small dogs, cats, and birds are allowed in the cabin. If they exceed a certain size, then they have to travel in the hold</li>
                        <li>This service isn’t available on connecting flights as every airline has its own set of rules and regulations regarding travelling with pets</li>
                        <li>Service dogs are allowed to fly in the cabin with their owners</li>
                        <li>There are a limited number of space available for pets on a flight, hence it is advisable to book your service soon</li>
                        <li>Your pet should have all the related travel documents. A certificate from a certified veterinarian is also required for the pet to be allowed to travel</li>
                        <li>The airline requires a special form for transport. Passengers can get the form from the official website. They have to fill it out and show it at the airport</li>
                        <li>Your pet carrier should meet all the requirements set by the airline. It should be spacious and properly secured. It should have a leakage-proof base. Proper ventilation is required</li>
                    </ul>
                </div>
            </div>

            <p>Travelling with your pet is fun but taking care of the various aspects of booking the service can take a lot of time. Allow us to help you. We can take care of booking air travel for your pet.</p>

            <p class="airline-title">Unaccompanied Minors</p>
            <p class="secondary-font">Are you unable to accompany your kid during his or her travel? Do you want to know the services that the airline provides to help your child have safe and comfortable travel? Then there are certain important things that you need to know about.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>This service is not available for kids who are under the age of 8 years. It means a minor below that age should travel with a parent, a guardian or a responsible adult</li>
                        <li>Children between the age of 8 to 14 travelling alone need to opt for this service. Without this service, kids under these age groups are not allowed to travel alone</li>
                        <li>For children from the age group of 15 to 17, this service is not mandatory but optional. It means they can travel unaccompanied without the service but can opt for it if they want</li>
                        <li>It is important to teach your children about the different stages involved in the travel</li>
                        <li>Ensure them that it is perfectly fine to ask for the cabin crew’s help if they need anything</li>
                        <li>Make sure to teach your kid to remind in the seat during the course of the travel</li>
                        <li>Always pack an extra set of clothes in your kid's carry-on luggage</li>
                        <li>You can also pack a light snack but make sure that the food items are allowed onboard</li>
                        <li>The adult dropping off the kid must remain on the premise till the flight departs</li>
                        <li>The child will be handed over to the concerned person upon arrival after checking their identification</li>
                        <li>The documents are also checked before the kid boards the flight. So, make sure that your child has all the necessary travel and related documents with him or her</li>
                        <li>Priority boarding is available for kids travelling alone</li>
                        <li>An unaccompanied minor cannot travel with a pet</li>
                        <li>The child must carry a biosafety kit including masks that can be changed at regular intervals</li>
                        <li>The unaccompanied minor service is not available for connecting flights</li>
                    </ul>
                </div>
            </div>

            <p>The service for your kid to travel alone can be booked only through a call. So, why take the hassle of booking the service yourself? Let us help. We can take care of your travel needs.</p>

            <p class="airline-title">Baggage Policy</p>
            <p>Every airline has certain rules and regulations when it comes to carrying different kinds of baggage. Avianca is no different. Hence, there are certain things that you need to remember while travelling with this airline.</p>
            <p>There are two types of baggage that a passenger can carry. One of them is the check-in baggage. It is the type that is carried in the hold of the aircraft. The other one is the check-in luggage which a traveller can carry with him or her inside the aircraft cabin.</p>
            <p class="secondary-font">So, what are the different baggage policies that you should know about? Take a look:</p>

            <p class="airline-subtitle">Carry-on baggage</p>
            <p>The weight and number limit of this kind of baggage usually depends on the fare and travel class type of the passenger. Alongside the carry-on baggage, a traveller is also allowed to bring one personal article. Certain things fall under this category. For instance, a purse, diaper bag, small backpack, or laptop bag are personal items that a passenger can carry. The personal item baggage must be small enough so that it can be stored under the seat in front of you.</p>
            <p class="secondary-font">So, what are the items you can carry in the cabin? Are there restrictions on any items? Here is a quick look at different aspects related to carry-on baggage on Avianca Airlines.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>If you want to carry extra carry-on luggage, there is an option to increase your limit by opting for extra baggage service</li>
                        <li>Only adults or children above the age of two are allowed to travel with carry-on luggage</li>
                        <li>The weight and height exceeding the allowed limit can incur additional cost</li>
                        <li>Along with your carry-on luggage, you can travel with a limited number of duty-free items</li>
                        <li>The carry-on luggage must be stored in the overhead compartment above the seat</li>
                        <li>Valuable items are only allowed in carry-on luggage. They may include money, jewellery, or important documents</li>
                        <li>Medicine is allowed onboard. However, the passenger may have to submit or show a prescription for the medicine they are carrying</li>
                        <li>Certain electronic items and medical devices can only be carried as carry-on luggage</li>
                        <li>A power bank can be carried in the cabin</li>
                        <li>Certain special items are allowed on board. For instance, you can carry several of your sporting equipment. For instance, you can take equipment for fishing, tennis, bowling, and archery as carry-on luggage</li>
                        <li>Food items such as meat, milk or fruit are not advisable to carry in the cabin</li>
                        <li>Foods should be declared at customs</li>
                        <li>Baby food and special diet for children are allowed on board</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Check-in luggage</p>
            <p class="secondary-font">As the name suggests, this is a type of luggage that you check in before boarding the aircraft. Under this, the luggage pieces are carried in the hold of the aeroplane. So, what are the baggage policies regarding check-in luggage?</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>The weight and number of baggage depend on the travel class and the ticket type</li>
                        <li>Make sure to check your baggage weight before coming to the airport to ensure you don’t have to pay extra</li>
                        <li>If you have additional luggage you want to carry, you can also opt for the paid service through which you can increase your baggage allowance limit</li>
                        <li>Make sure that the tags are properly attached to your bags</li>
                        <li>Pack your bags properly to make sure that there are no protruding parts</li>
                        <li>Ensure that the bags are not overpacked</li>
                        <li>Add labels with your name and contact details on the check-in luggage, so you can find them easily while collecting them from the baggage belt</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items</p>
            <p class="secondary-font">Certain items are not allowed in the aircraft. It means that you cannot travel with those items, either as check-in luggage or carry-on baggage. So, what are the items that are restricted?</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Disabling elements like pepper sprays or self-defence gases</li>
                        <li>Liquid oxygen devices</li>
                        <li>Electric weapons</li>
                        <li>Damaged electronic devices</li>
                        <li>Matches</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>A firearm of any kind</li>
                        <li>Pointed metal elements</li>
                        <li>Sharp elements like razors or axes</li>
                        <li>Vehicles powered by external batteries</li>
                        <li>Smart baggage with non-removable batterier</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Restricted items in the US</p>
            <p class="secondary-font">Besides the above-mentioned ones, there are also certain items that you cannot carry while you are travelling to the United States of America.</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Flammable aerosols like paint or cooking spray. This, however, doesn’t apply to toiletries like deodorants and lotions</li>
                        <li>Air or pressurised tanks including the ones used for scuba diving</li>
                        <li>Alcoholic beverages with over 70% alcohol content</li>
                        <li>Children’s games that contain lithium batteries</li>
                        <li>Lighters</li>
                        <li>Fireworks</li>
                        <li>Motorised equipment like a mower, a generator or a chainsaw</li>
                        <li>Signal flares</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Travel class</p>
            <p>Usually, the flights have different travel classes from which the passengers can choose. Expectedly, they have various services that make them distinctive from one another. Avianca is a little different in that aspect. This airline has travel classes. Besides, they also have different types of fare that the travellers can choose according to their preferences. Before knowing more about travel classes, let’s take a quick look at the fare types.</p>

            <table class="table table-striped my-3">
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">XS: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">This is a type that provides travellers with the basic service by transporting them from one place to another. One can bring a personal item while travelling with this ticket</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">S: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">This is a fare type perfect for those who love to travel light. Under this, a passenger can carry one personal item and one carry-on luggage</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">M: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">This is the next fare type on the list. Under this, a passenger is allowed to carry one check-in luggage, one carry-on luggage, and one personal item. Furthermore, they can also select Economy travel class</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">L: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">What are the features that make this fare type different from others? Besides check-in, carry-on, and a personal item, one can easily make changes in the flight time without any additional cost. Also, one can select plus travel class seat in this fare type</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">XL: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">This is the next one on the list. With this fare type, a passenger can have an increased baggage allowance in terms of check-in luggage. Also, she or he can select a Business class seat</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="airline-subtitle mb-0 mt-0">XXL: </p>
                    </td>
                    <td>
                        <p class="secondary-font mb-0">This fare type includes every kind of facility that the airline has to offer</p>
                    </td>
                </tr>
            </table>

            <p class="airline-title">Understanding the class</p>
            <p class="secondary-font">Now that you know about the different fare types offered by the airline, let’s take a quick look at the different classes.</p>
            
            <p class="airline-subtitle">Economy</p>
            <p class="secondary-font">What are the facticities you can expect while travelling by Economy class?</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Simple yet comfortable seats</li>
                        <li>The seats are located between rows 15 and 32</li>
                        <li>Option for purchasing additional services</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Pre-reclined seat</li>
                        <li>USB port</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Plus</p>
            <p class="secondary-font">Take a look at the features of the Plus class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>This is perfect for those who love being near the door for an easy disembarking</li>
                        <li>The seats are available between rows 4 to 14</li>
                        <li>Seats are designed to provide comfort</li>
                        <li>Independent headrest</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>A separate stand for personal device</li>
                        <li>Seat recline option</li>
                        <li>USB port</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium</p>
            <p class="secondary-font">Here are the features of this class:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Seats are available in the first three rows of the aircraft</li>
                        <li>Widest seats</li>
                        <li>Generous legroom</li>
                        <li>Greater recline</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Central console</li>
                        <li>Individual compartments</li>
                        <li>Power Plug</li>
                        <li>USB Port</li>
                    </ul>
                </div>
            </div>

            <p>What to know which class and fare type you should select for your travel? Allow us to help. All you need to do is tell us your requirements and budget so we can create the best travel plan for you. To know more or book your travel, get in touch with our dedicated team. You can either give us a call or drop us an email for further assistance.</p>
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