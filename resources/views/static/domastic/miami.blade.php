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
    <img src="{{ url('/images/flights/miami.jpg') }}" class="lazyload img-fluid" alt="Miami" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Miami?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with all the major airlines to the biggest city of the United States.</p>
                <p>They say everyone should live in New York City at least once in their lifetime. New York is majorly known for its diverse cuisine, best museums, high-end fashion and culture in the world.</p><br>
            </blockquote>
            <p class="airline-title">Things to Know About New York</p>
            <ul class="airline_ul">
                <li>New York City became the capital of the United States first in 1789.</li>
                <li>New York is very famous for Oysters.</li>
                <li>The statue of Liberty was gifted by France to the United States in 1886.</li>
                <li>Times Square is named after the New York Times</li>
                <li>A Non-Stop Flight from the west coast takes 4-5 hours.</li>
                <li>Currency: USD</li>
                <li>Time Difference: New York is 5 hours ahead of Washington, DC in the United States.</li>
                <li>Language: English (US) and linguistically more than 800 languages are spoken in New York</li>
            </ul>

            <p class="airline-title">What To Visit in New York</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Statue of Liberty</li>
                        <li>Central Park</li>
                        <li>Rockefeller Centre &amp; Top of the Rock Observation Deck</li>
                        <li>Metropolitan Museum of Art</li>
                        <li>Broadway and the Theatre District</li>
                        <li>Empire State Building</li>
                        <li>9/11 Memorial and Museum</li>
                        <li>Times Square</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Brooklyn Bridge</li>
                        <li>Fifth Avenue</li>
                        <li>Grand Central Terminal</li>
                        <li>One World Observatory</li>
                        <li>Torre de Bel&eacute;m</li>
                        <li>Museu Nacional do Azulejo</li>
                        <li>Elevador de Santa Justa</li>
                        <li>Padr&atilde;o dos Descobrimentos</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Airlines that fly to NewYork</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>Southwest Airlines</li>
                        <li>Alaska Airlines</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>JetBlue Airways</li>
                        <li>Spirit Airlines</li>
                        <li>Frontier Airlines</li>
                        <li>Sun Country</li>
                        <li>Caribbean Airlines</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Airports in New York City</p>
            <ul class="airline_ul">
                <li>New York JFK International Airport</li>
                <li>New York LaGuardia Airport</li>
                <li>Newark International Airport is a nearby Airport to both of them</li>
            </ul>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Miami to NewYork</li>
                        <li>Flights from Philadelphia to NewYork</li>
                        <li>Flights from Boston to NewYork</li>
                        <li>Flights from Washington DC to NewYork</li>
                        <li>Flights from Newark to NewYork</li>
                        <li>Flights from Los Angeles to NewYork</li>
                        <li>Flights from San Francisco to NewYork</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to NewYork</li>
                        <li>Flights from Las Vegas to NewYork</li>
                        <li>Flights from Phoenix to NewYork</li>
                        <li>Flights from Houston to NewYork</li>
                        <li>Flights from Dallas to NewYork</li>
                        <li>Flights from San Antonio to NewYork</li>
                        <li>Flights from Chicago to NewYork</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')