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
    <img src="{{ url('/images/flights/prague.jpg') }}" class="lazyload img-fluid" alt="Prague" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Prague?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with more than 100 airlines to the Capital City of the Czech Republic.</p>
                <p>Prague is bisected by the Vltava River.</p>
            </blockquote>
            <p class="airline-title">Things to Know About Prague</p>
            <ul class="airline_ul">
                <li>Prague is known for its Old Town Square, the heart of its historic core with colourful buildings and Gothic Churches and Medieval Astronomical clock.</li>
                <li>Prague is also the economic capital of the Czech Republic.</li>
                <li>Currency: - Euros, USD (Accepted at Few Stores Only).</li>
                <li>Time Difference: Prague is 6 hours ahead of Washington, DC in the United States.</li>
                <li>Language: Czech, English (UK).</li>
            </ul>

            <p class="airline-title">What To Visit in Prague</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Prague Castle</li>
                        <li>Charles Bridge</li>
                        <li>Wenceslas Square</li>
                        <li>National Museum</li>
                        <li>Clementinum and the National Library</li>
                        <li>Old Town Square and the Astronomical Clock</li>
                        <li>St. Vitus Cathedral</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>National Gallery</li>
                        <li>Municipal House</li>
                        <li>Prague Zoo</li>
                        <li>Josefov: The Jewish Quarter</li>
                        <li>Strahov Monastery and Library</li>
                        <li>Top of the Petr&iacute;n Lookout Tower</li>
                        <li>Lennon Wall</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 6-7 hours, while a non-stop flight from the west coast takes 10&ndash;11 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly from the USA To Prague</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                        <li>KLM</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Swiss Airlines</li>
                        <li>Lufthansa</li>
                        <li>Air Canada</li>
                        <li>Aer Lingus</li>
                        <li>Brussels Airlines</li>
                        <li>LOT Polish Airlines</li>
                        <li>Iceland Air</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Prague: </span>Prague International Airport</p>
            <p class="airline-title">Our Popular Routes</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Prague</li>
                        <li>Flights from Miami to Prague</li>
                        <li>Flights from Philadelphia to Prague</li>
                        <li>Flights from Boston to Prague</li>
                        <li>Flights from Washington DC to Prague</li>
                        <li>Flights from Newark to Prague</li>
                        <li>Flights from Los Angeles to Prague</li>
                        <li>Flights from San Francisco to Prague</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Prague</li>
                        <li>Flights from Las Vegas to Prague</li>
                        <li>Flights from Phoenix to Prague</li>
                        <li>Flights from Houston to Prague</li>
                        <li>Flights from Dallas to Prague</li>
                        <li>Flights from San Antonio to Prague</li>
                        <li>Flights from Chicago to Prague</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')