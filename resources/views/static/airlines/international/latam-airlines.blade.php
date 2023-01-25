@include('site.header')
@php $page = 'Latam Airlines'; $logo = 'images/partners/latam-airlines.jpg'; @endphp
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
                    <img src="{{ asset('images/partners/latam-airlines.jpg') }}" alt="air-line-img" class="img-fluid">
                </div>
                <p class="ownmodal-title2 my-3">Latam Airlines Reservations </p>
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
    <img src="{{ asset('images/airlines/latam-airline.jpg') }}" class="img-fluid" alt="latam airline" />
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
                <h2 class="sec__title text-center">Latam Airlines</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                Latam is the largest airline in Latin America. With headquarters in Chile, this airline connects different parts of the world. It has a huge network that allows passengers to travel in comfort from one corner of the globe to another. The airline was formed after Chile's LAN Chile entered into a merger with Brazil's TAM Linhas Aéreas nearly a decade ago. Over the years, the airline has also received several awards for its outstanding and excellent services. Equipped with different types of airbuses, the airline is also known for providing passengers with incredible onboard experiences.
            </blockquote>
            <p class="airline-title">Travel destinations</p>
            <p>It is important to know the places you can fly to with the help of this airline. The airline caters to multiple cities domestically and across the world. Though due to the pandemic, some of the routes are temporarily suspended, the airline will restart their service as soon as flying becomes viable at those destinations.</p>
            <p>At present, the airline routes are spread across countries like Argentina, Australia, Bolivia, Brazil, Chile, Colombia, Costa Rica, Dominican Republic, Ecuador, Falkland Islands (Islas Malvinas), France, Germany, Italy, Mexico, New Zealand, Paraguay, Peru, Portugal, Spain, United Kingdoms, United States, and Uruguay.</p>
            <p class="secondary-font">Here is a detailed list of most of the cities you can reach with the help of LATAM.</p>

            <div class="row">
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Buenos Aires</li>
                        <li>Buenos Aires</li>
                        <li>Córdoba</li>
                        <li>Mendoza</li>
                        <li>Río Gallegos</li>
                        <li>Sydney</li>
                        <li>La Paz</li>
                        <li>Santa Cruz de la Sierra</li>
                        <li>Aracaju</li>
                        <li>Belém</li>
                        <li>Belo Horizonte</li>
                        <li>Boa Vista</li>
                        <li>Brasília</li>
                        <li>Campo Grande</li>
                        <li>Cascavel</li>
                        <li>Caxias do Sul</li>
                        <li>Chapecó</li>
                        <li>Cruz, Ceará</li>
                        <li>Cuiabá</li>
                        <li>Curitiba</li>
                        <li>Fernando de Noronha</li>
                        <li>Florianópolis</li>
                        <li>Fortaleza</li>
                        <li>Foz do Iguaçu</li>
                        <li>Goiânia</li>
                        <li>Ilhéus</li>
                        <li>Imperatriz</li>
                        <li>Jaguaruna</li>
                        <li>João Pessoa, Paraíba</li>
                        <li>Joinville</li>
                        <li>Juazeiro do Norte</li>
                        <li>Juiz de Fora</li>
                        <li>Londrina</li>
                        <li>Macapá</li>
                        <li>Maceió</li>
                        <li>Manaus</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Marabá, Pará</li>
                        <li>Maringá</li>
                        <li>Montes Claros</li>
                        <li>Natal</li>
                        <li>Navegantes</li>
                        <li>Palmas</li>
                        <li>Petrolina</li>
                        <li>Porto Alegre</li>
                        <li>Porto Seguro</li>
                        <li>Porto Velho</li>
                        <li>Presidente Prudente</li>
                        <li>Recife</li>
                        <li>Ribeirão Preto</li>
                        <li>Rio Branco</li>
                        <li>Rio de Janeiro</li>
                        <li>Rio de Janeiro</li>
                        <li>Salvador da Bahia</li>
                        <li>Santarém</li>
                        <li>São José do Rio Preto</li>
                        <li>São Luís</li>
                        <li>São Paulo</li>
                        <li>São Paulo</li>
                        <li>Sinop, Mato Grosso</li>
                        <li>Teresina</li>
                        <li>Uberlândia</li>
                        <li>Vitória da Conquista</li>
                        <li>Vitória, Espírito Santo</li>
                        <li>Antofagasta</li>
                        <li>Arica</li>
                        <li>Balmaceda</li>
                        <li>Calama</li>
                        <li>Castro</li>
                        <li>Concepción</li>
                        <li>Copiapó</li>
                        <li>Easter Island</li>
                        <li>Iquique</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>La Serena</li>
                        <li>Los Angeles</li>
                        <li>Osorno</li>
                        <li>Puerto Montt</li>
                        <li>Puerto Natales</li>
                        <li>Punta Arenas</li>
                        <li>Santiago de Chile</li>
                        <li>Temuco</li>
                        <li>Valdivia</li>
                        <li>Armenia</li>
                        <li>Barranquilla</li>
                        <li>Bogotá</li>
                        <li>Bucaramanga</li>
                        <li>Cartagena</li>
                        <li>Cúcuta</li>
                        <li>Leticia, Amazonas</li>
                        <li>Medellin</li>
                        <li>Montería</li>
                        <li>Neiva, Huila</li>
                        <li>Pasto</li>
                        <li>Pereira</li>
                        <li>San Andrés</li>
                        <li>Santa Marta</li>
                        <li>Valledupar</li>
                        <li>Yopal</li>
                        <li>San José</li>
                        <li>Punta Cana</li>
                        <li>Baltra Island</li>
                        <li>Coca</li>
                        <li>Cuenca</li>
                        <li>Guayaquil</li>
                        <li>Loja</li>
                        <li>Manta</li>
                        <li>Quito</li>
                        <li>San Cristóbal Island (Galápagos Islands)</li>
                        <li>Paris</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="airline_ul">
                        <li>Frankfurt</li>
                        <li>Mount Pleasant, Falkland Islands</li>
                        <li>Milan</li>
                        <li>Rome</li>
                        <li>Mexico City</li>
                        <li>Auckland</li>
                        <li>Cancun</li>
                        <li>Asunción</li>
                        <li>Arequipa</li>
                        <li>Ayacucho</li>
                        <li>Cajamarca</li>
                        <li>Chiclayo</li>
                        <li>Cusco</li>
                        <li>Iquitos</li>
                        <li>Jaén</li>
                        <li>Jauja</li>
                        <li>Juliaca</li>
                        <li>Lima</li>
                        <li>Piura</li>
                        <li>Pucallpa</li>
                        <li>Puerto Maldonado</li>
                        <li>Tacna</li>
                        <li>Talara</li>
                        <li>Tarapoto</li>
                        <li>Trujillo</li>
                        <li>Tumbes</li>
                        <li>Lisbon</li>
                        <li>Barcelona</li>
                        <li>Madrid</li>
                        <li>London</li>
                        <li>Boston</li>
                        <li>Los Angeles</li>
                        <li>Miami</li>
                        <li>New York City</li>
                        <li>Orlando</li>
                        <li>Montevideo</li>
                    </ul>
                </div>
            </div>

            <p>Are you looking for a destination that you are unable to find on the above list? Worry not! We are here to help you. Our dedicated team is trained to ensure that you get the best travel plan that can help you in having a comfortable journey. Want to make your travel hassle-free? Give us a call or drop an email. You can also reach out to us to know more about the popular destinations connected by LATAM.</p>

            <p class="airline-title">Baggage Policies</p>
            <p>When one travels by air, there are certain restrictions that the passengers need to follow in terms of weight, height, size, and the number of baggage they can carry. The rules also include the type of items that are allowed or restricted. These rules, however, are not the same for every airline. Though there could be some common ones, mostly the regulations are specific to each airline. Hence, a passenger needs to know more about the rules and regulations to ensure a safe and hassle-free journey. So, what are the things that you need to remember while travelling with LATAM? Here is a quick look.</p>

            <p class="airline-subtitle">Carry-on baggage</p>
            <p class="secondary-font">This baggage type refers to the bags that you can carry with you in the cabin. These are some of the important points to remember.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>You can bring one carry-on baggage, depending on your type of ticket. However, it should fit in the overhead compartment</li>
                        <li>You can also bring a bag beside your carry-on luggage. However, it should fit under your seat</li>
                        <li>Certain items are not allowed on board. They are aerosols, firearms, liquids, gels, nail files, work tools, tweezers, nail clippers, knives, and razors</li>
                        <li>You can carry baby bags, laptop bags, or backpacks as carry-on luggage. Also, cages to transport pets are included in this facility. It is, however, important to remember that the carrier should meet the size requirements set by the airline</li>
                        <li>You can take one carry-on luggage if you have a Plus, Light, Promo, or Top fare. The facility, however, isn't available if you have a Basic fare. You can book an added service to carry an extra piece of baggage onboard while travelling on a Basic fare ticket</li>
                        <li>You will have to pay extra if your carry-on baggage exceeds the requirements set by the airline</li>
                        <li>You can carry cosmetics and personal care liquid items but they should be stored in 100 ml containers. Those containers should be packed inside a transparent bag</li>
                        <li>Medication is allowed in the cabin but the passengers may have to provide a prescription from a certified doctor</li>
                        <li>Baby food for infants and kids is allowed onboard</li>
                        <li>One folding chair, pushchair, or stroller is allowed in the cabin</li>
                        <li>The passengers must carry all the valuable items in the cabin. Some of the things that fall under this category are, art, money, personal documents, jewellery, keys, wallet, computers, medical equipment, handheld video game consoles, and storage devices</li>
                        <li>Smart baggage is allowed onboard only after the batteries are removed</li>
                        <li>You can carry what you purchase in duty-free in the cabin</li>
                        <li>Want to know if you can carry a specific item onboard? Reach out to us and we will help you to know more.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Check-in baggage</p>
            <p class="secondary-font">This refers to the luggage that you will have to check in before you board your flight. What are the rules that you need to remember about this luggage type? Read on.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Your check-in baggage allowance will depend on your ticket type and travel class</li>
                        <li>All the checked baggage needs to meet the dimension and weight limits, individually</li>
                        <li>In case your baggage exceeds the set requirements, you will have to pay extra at the airport</li>
                        <li>You can also pre-book excess baggage service</li>
                        <li>If you have interconnecting flights, your baggage will be shipped directly to the final destination</li>
                        <li>Special baggage like musical instruments, sports equipment, or audiovisual equipment is allowed as check-in luggage. However, before travelling make sure to confirm with the airline. Alternatively, we can also help you know more about the special luggage that you can carry in the hold</li>
                        <li>In case your baggage is delayed or damaged, reach out to the airline immediately. We can also help you by taking care of the issue</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Prohibited items</p>
            <p class="secondary-font">You cannot carry everything while you are travelling by air. While some items are only allowed onboard, others can be taken in the hold. However, there are also those items that are restricted and a passenger cannot carry them while travelling.</p>

            <p class="secondary-font">Take a look at the items that are prohibited by the airline:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Paint thinners</li>
                        <li>Cigarette lighters</li>
                        <li>Bleach</li>
                        <li>Poisons</li>
                        <li>Explosive materials</li>
                        <li>Flammable liquids</li>
                        <li>Acids</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Compressed gas</li>
                        <li>Electric skateboards, hoverboards, or mini-segways powered by lithium-ion batteries</li>
                        <li>Pepper Spray</li>
                        <li>Stun Guns</li>
                        <li>Baggage with non-removable lithium batteries</li>
                        <li>Samsung Galaxy Note7</li>
                    </ul>
                </div>
            </div>

            <p>Want to know more about the items you can carry in the cabin but not in the hold and vice versa? Our dedicated team can help you to know more about the baggage policy of the airline.</p>

            <p class="airline-title">Kids travelling alone</p>
            <p>It is always advisable for kids to travel with their parents or guardians. However, there are times when situations demand that the kid travel alone. Such a kid who is travelling with a guardian, parent or responsible adult is referred to as an ‘unaccompanied minor’ or UM in short. Every airline has certain rules and guidelines relating to kids travelling alone.</p>
            <p>LATAM airline has a set age group that can travel alone with help of UM service. Children between the ages of 8 to 11 years need to opt for this service while travelling alone. For children between the ages of 12 and 17, this service is not mandatory but optional. Here it is important to mention that the service is not available for connecting flights. This is because the rules regarding unaccompanied minors can vary from one airline to another.</p>
            <p class="secondary-font">Let’s take a look at some of the important points to remember while booking the UMRN service for your kid.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>One can request the service up to 48 hours before the flight’s scheduled departure time</li>
                        <li>The adult accompanying the children at the airport must remain on the premises till the departure of the flight</li>
                        <li>The child must carry all the necessary travel and related documents on him or her</li>
                        <li>The service isn’t available for minors who need medical help during travel, the ones who are not capable of attending to their personal physiological needs, and also the kids who need a medical certificate for travelling</li>
                        <li>Children with impairments are allowed to fly alone but there are certain requirements that they should meet. They should be able to evacuate by themselves in case of an emergency, they should be able to understand the safety instructions, they should be capable of taking care of their hygiene needs by themselves, and they should be able to satisfy their nutritional needs autonomously</li>
                        <li>Besides the unaccompanied minor service, the airline also has a special provision for monitoring kids travelling alone</li>
                        <li>The airline can ask for certain information while booking the service. Full name of the kid, contact number and relationship of a parent or a guardian, details of the adult dropping and receiving the minor, data of the adult booking the service</li>
                        <li>A minor travelling alone gets priority boarding privileges</li>
                        <li>The adult receiving the minor at the destination must provide proper identification</li>
                        <li>It is important to teach your kid about the steps involved in the journey before they fly alone</li>
                        <li>Make sure that the kid is well rested before travel</li>
                        <li>Teach him or her to remain in the seat during travel</li>
                        <li>It is important to teach the kid that it is absolutely fine to ask for the cabin crew’s help</li>
                        <li>Make sure to pack a set of clothes for the kid</li>
                        <li>You can also pack light snack but make sure that it is allowed in the cabin</li>
                    </ul>
                </div>
            </div>

            <p>Booking the unaccompanied minor service for your kid involves a lot of rules and regulations. It is always better to take help while opting for the service. We can help you by booking a proper service where your kid can travel alone by himself or herself comfortably and safely.</p>

            <p class="airline-title">Travelling with pets</p>
            <p class="secondary-font">Thousands of people across the world are pet owners. Most of them also love to travel with their pet babies. Many airlines allow pet owners to travel with their pets and LATAM is among them. However, there are certain rules and regulations in place regarding that. Here is a glance at some of the important aspects that you need to keep in mind while travelling with your pet. Also, the list details animals that are allowed to travel with you either in the cabin or in the hold.</p>

            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>A pet should have all the required travel documents</li>
                        <li>The carrier or container of the pet must meet all the requirements set by LATAM</li>
                        <li>The pet should not be sick or unhealthy. It should be in its optimal health condition to be allowed to travel by air</li>
                        <li>Small dogs and cats that don’t exceed 7 kg are allowed to travel in the cabin along with their owners</li>
                        <li>Service dogs are allowed in the cabin</li>
                        <li>Dogs and cats exceeding the 7 kg limit need to travel in the hold</li>
                        <li>There is also a service where pets can travel in cargo unaccompanied. It means they can be transported without being accompanied by an owner or guardian</li>
                        <li>One passenger is allowed to carry a maximum of two pets in the hold</li>
                        <li>Each passenger can bring one pet into the cabin</li>
                        <li>An unaccompanied minor cannot travel with a pet</li>
                        <li>The service of travelling with pets is not available for connecting flights</li>
                        <li>The service is not available on flights to and from certain places. They are New Zealand, Australia, England, and Galapagos Archipelago</li>
                        <li>Unaccompanied cargo transportation of pets is not available for connecting flights</li>
                        <li>Certified copies from two veterinarians are required before travel</li>
                        <li>Document indicating the pet’s name, age, vaccination details, and breed must be submitted to the airlines well in advance before the scheduled departure date</li>
                        <li>Make sure that the pet carrier is well-ventilated, it should be spacious, the base of the carrier should be leak-proof, the base should also be absorbent, the carrier should be properly secured, and it should be made of durable material. Furthermore, make sure that the carrier doesn’t have wheels</li>
                    </ul>
                </div>
            </div>

            <p>You can book the cargo service for your pet on the official website of the airline. However, if you wish to travel with your pet, then you will have to place a call to book the service. Let us handle the hassle involved in booking a ticket for your pet baby.</p>

            <p class="airline-title">Travel Classes</p>

            <p>Whenever you book a flight, you will be asked the kind of travel class that you want to select during your journey. Almost all the airlines in the world have different seating classes on their flights. The services offered in those classes and the fare vary from one another. The travel class you are selecting also has an impact on the facilities that you can access while onboard. So, what are the travel classes that LATAM offers and the specific services for each?</p>
            <p>This airline has three major travel classes. They’re Economy, Premium Economy, and Premium Business. Here is a look at the various features of each travel class. </p>

            <p class="airline-subtitle">Economy</p>
            <p class="secondary-font">This is the most affordable travel option for a passenger. Let’s take a look at the services that a traveller gets while travelling by this travel class:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>USB ports for electronic device charging</li>
                        <li>Uniquely designed seats</li>
                        <li>Adjustable headrests</li>
                        <li>Delicious menu</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Individual screen</li>
                        <li>Latest movies and music. However, music is not available in Colombia</li>
                        <li>Special entertainment option for children</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Economy</p>
            <p class="secondary-font">The next travel class on the list is Premium Economy. Here are some features that you should know:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Access to VIP lounges on international flights</li>
                        <li>An exclusive carry-on baggage compartment</li>
                        <li>Seat in the first rows of the aircraft</li>
                        <li>Exclusive bathroom use</li>
                        <li>USB port for charging electronic devices</li>
                        <li>Locked middle seat for privacy</li>
                        <li>Ergonomic seats</li>
                        <li>Adjustable headrests</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Generous legroom</li>
                        <li>Greater recline</li>
                        <li>Delicious meals and drinks</li>
                        <li>Option to enjoy entertainment on your device</li>
                        <li>Personal screen</li>
                        <li>Endless music, except in Colombia</li>
                        <li>Numerous movies, including the latest releases</li>
                        <li>Special entertainment options for kids</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle">Premium Business</p>
            <p class="secondary-font">This travel class is designed to provide the utmost comfort to passengers during travel. Certain features make this travel class different from the others. Take a look:</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Priority boarding</li>
                        <li>Priority disembarkation</li>
                        <li>Priority baggage handling</li>
                        <li>Priority check-in</li>
                        <li>Access to the best lounges across the world during international travel</li>
                        <li>Specially designed eco-kits containing toothbrush, hand cream, lip balm, earplugs, and other personal/skin care products</li>
                        <li>Lie-flat seat for a comfortable travel</li>
                        <li>Greater privacy</li>
                        <li>Direct aisle access</li>
                        <li>Fast-charging USB ports</li>
                        <li>Universal plug</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Unique cabin design</li>
                        <li>Softer pillow</li>
                        <li>Soothing light</li>
                        <li>Mattress created with NASA-developed material that regulates temperature, calms the body’s pressure points, and ensures airflow during sleeping</li>
                        <li>Amenity kits with special items</li>
                        <li>Delicious menu prepared by award-winning chefs</li>
                        <li>Selected beverages</li>
                        <li>18-inch touch screen</li>
                        <li>Noise-cancellation earphone</li>
                        <li>Endless movie and music options</li>
                        <li>Special entertainment option for children</li>
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