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
    <img src="{{ url('/images/flights/amsterdam.jpg') }}" class="lazyload img-fluid" alt="Amsterdam" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Amsterdam?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with more than 100 airlines to the Capital City of the Netherlands. </p>
                <p>Amsterdam has always been a popular destination for travellers looking to experience the very best of artistic heritage, narrow houses and gabled facades. In the last decade, Amsterdam has become a popular destination for bachelor parties due to its nightlife</p>
            </blockquote>
            <p class="airline-title">Things to Know About Amsterdam</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Rich Artistic Heritage</li>
                        <li>Elaborate Canal System</li>
                        <li>Narrow Houses with Gabled facades</li>
                        <li>Rich Party Culture</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Currency: Euros, USD (Accepted at Few Stores Only)</li>
                        <li>Time Difference: Amsterdam is 5 hours ahead of Washington, DC in the United States.</li>
                        <li>Language: Dutch, English (UK)</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">What To Visit in Amsterdam</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Art Collections at the Rijksmuseum</li>
                        <li>Anne Frank House</li>
                        <li>Van Gogh Museum.</li>
                        <li>Jordaan Neighbourhood.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Vondelpark.</li>
                        <li>Dam Square.</li>
                        <li>Royal Palace of Amsterdam.</li>
                        <li>Rembrandt.</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">A Non-Stop Flight From The East Coast Of The United States It usually takes 8-9 hours, while a non-stop flight from the west coast takes 11&ndash;12 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly Non-Stop from the USA To Amsterdam</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>JetBlue</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                        <li>KLM</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Amsterdam:</span>  Amsterdam Schiphol (AMS) Airport</p>
            <p class="airline-title">Our Popular Routes</p>

            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Amsterdam</li>
                        <li>Flights from Miami to Amsterdam</li>
                        <li>Flights from Philadelphia to Amsterdam</li>
                        <li>Flights from Boston to Amsterdam</li>
                        <li>Flights from Washington DC to Amsterdam</li>
                        <li>Flights from Newark to Amsterdam</li>
                        <li>Flights from Los Angeles to Amsterdam</li>
                        <li>Flights from San Francisco to Amsterdam</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Amsterdam</li>
                        <li>Flights from Las Vegas to Amsterdam</li>
                        <li>Flights from Phoenix to Amsterdam</li>
                        <li>Flights from Houston to Amsterdam</li>
                        <li>Flights from Dallas to Amsterdam</li>
                        <li>Flights from San Antonio to Amsterdam</li>
                        <li>Flights from Chicago to Amsterdam</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')