@include('site.header')
<style>
    .header-menu-wrapper {
    transition: all 0.5s;
    --tw-bg-opacity: 0.6;
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
    backdrop-filter: blur(-1px);
    background-color: rgba(255, 255, 255, 0.8);
}
</style>
<section class="page-banner">
    <img src="{{ url('/images/flights/athens.jpg') }}" class="lazyload img-fluid" alt="Athens" />
</section>

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
                <h2 class="sec__title text-left">Looking to Book Flights to Athens?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals, for both non-stop and connecting flights with more than 100 airlines to the Capital City of Greece.</p>
                <p>Athens is the ancient heart of Greece, a powerful civilisation and empire. The city is still dominated by 5th-century BC landmarks, including the Acropolis, a hilltop citadel topped with ancient buildings like the collonaded Parthenon temple.</p><br>
            </blockquote>
            <p class="airline-title">Things to Know About Athens</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Rich Ancient Monuments</li>
                        <li>Famous for Ancient Greek Art</li>
                        <li>Famous Urban Sculpture</li>
                        <li>Archaeological hub of the World</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Athens has hot summer</li>
                        <li>Currency: - Euros, USD (Accepted at Few Stores Only)</li>
                        <li>Time Difference: Athens is 7 hours ahead of Washington, DC in the United States.</li>
                        <li>Language: Greek, English (UK)</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">What To Visit in Athens</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Acropolis</li>
                        <li>Parthenon</li>
                        <li> Acropolis Museum</li>
                        <li>Erechtheion</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>National Archaeological Museum</li>
                        <li>Temple of Hephaestus</li>
                        <li>Museum of Cycladic Art</li>
                        <li>Temple of Athena Nike</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Nearby Cities to Visit</p>
            <p class="secondary-font">If you are in Athens, you should go to Santorini, an island in the southern Aegean Sea, about 200 km southeast of the Greek mainland.</p>

            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 8-9 hours, while a non-stop flight from the west coast takes 11&ndash;12 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly Non-Stop from the USA To Athens</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>JetBlue</li>
                        <li>British Airways</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                        <li>KLM</li>
                        <li>Emirates</li>
                    </ul>
                </div>
            </div>


            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Athens: </span> Athens International Airport</p>
            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Athens</li>
                        <li>Flights from Miami to Athens</li>
                        <li>Flights from Philadelphia to Athens</li>
                        <li>Flights from Boston to Athens</li>
                        <li>Flights from Washington DC to Athens</li>
                        <li>Flights from Newark to Athens</li>
                        <li>Flights from Los Angeles to Athens</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Francisco to Athens</li>
                        <li>Flights from San Diego to Athens</li>
                        <li>Flights from Las Vegas to Athens</li>
                        <li>Flights from Phoenix to Athens</li>
                        <li>Flights from Houston to Athens</li>
                        <li>Flights from Dallas to Athens</li>
                        <li>Flights from San Antonio to Athens</li>
                        <li>Flights from Chicago to Athens</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')