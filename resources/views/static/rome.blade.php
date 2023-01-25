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
    <img src="{{ url('/images/flights/rome.jpg') }}" class="lazyload img-fluid" alt="Rome" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Rome?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals, for both non-stop and connecting flights with more than 100 airlines to the Capital City of Italy.</p>
                <p>Rome is Perhaps the most famous city in Italy. It was built in 753 BC and was the capital of the Roman Empire during its reign over the European continent. Rome is the most visited city in Italy. It has the world&rsquo;s history, fantastic architecture and luxury life with great climate to offer to the travellers. Rome is a Perfect Holiday Destination &nbsp;</p>
            </blockquote>
            <p class="airline-title">Things to Know About Rome</p>
            <ul class="airline_ul">
                <li>Rome is popular for its famous architecture with the Colosseum, Pantheon and Trevi Fountain as the main attractions.&nbsp;</li>
                <li>Rome was the centre of the Roman Empire that ruled Europe for ages.</li>
                <li>The smallest country in the world (Vatican City) is in Rome.</li>
                <li>Currency: - Euros, USD (Accepted at Few Stores Only)</li>
                <li>Time Difference: Rome is 6 hours ahead of Washington, DC in the United States.</li>
                <li>Language: Roman, English (UK)</li>
            </ul>

            <p class="airline-title">What To Visit in Rome</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>The Colosseum and the Arch of Constantine</li>
                        <li>Vatican City</li>
                        <li>The Pantheon</li>
                        <li>Roman Forum</li>
                        <li>Trevi Fountain</li>
                        <li>Centro Storico &amp; the Spanish Steps</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Santa Maria Maggiore</li>
                        <li>Piazza Navona</li>
                        <li>Palatine Hill</li>
                        <li>Villa Borghese Gallery and Gardens</li>
                        <li>Castel Sant&apos;Angelo National Museum</li>
                        <li>Baths of Caracalla</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Nearby Cities to Visit</p>
            <p class="secondary-font">If you are in Rome, you should go to Naples, Pompeii, Mount Vesuvius, Venice &amp; Positano.</p>

            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 9-10 hours, while a non-stop flight from the west coast takes 13&ndash;14 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly from the USA To Rome</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>KLM</li>
                        <li>Emirates</li>
                        <li>Air Italy&nbsp;</li>
                        <li>Brussel Airlines</li>
                        <li>Swiss Airlines</li>
                        <li>Lufthansa</li>
                    </ul>
                </div>
            </div>

            <p  class="airline-subtitle"><span class="text-dark">There is only one international airport in Rome: </span> Rome-Fiumicino Airport</p>
            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Rome</li>
                        <li>Flights from Miami to Rome</li>
                        <li>Flights from Philadelphia to Rome</li>
                        <li>Flights from Boston to Rome</li>
                        <li>Flights from Washington DC to Rome</li>
                        <li>Flights from Newark to Rome</li>
                        <li>Flights from Los Angeles to Rome</li>
                        <li>Flights from San Francisco to Rome</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Rome</li>
                        <li>Flights from Las Vegas to Rome</li>
                        <li>Flights from Phoenix to Rome</li>
                        <li>Flights from Houston to Rome</li>
                        <li>Flights from Dallas to Rome</li>
                        <li>Flights from San Antonio to Rome</li>
                        <li>Flights from Chicago to Rome</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')