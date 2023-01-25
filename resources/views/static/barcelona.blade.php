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
    <img src="{{ url('/images/flights/barcelona.jpg') }}" class="lazyload img-fluid" alt="Barcelona" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Barcelona?</h2>
            </div>
        </div>

        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals, for both non-stop and connecting flights with more than 100 airlines to the City of Barcelona, Spain.</p>
                <p>Barcelona is perhaps among the most famous city in Spain. It is also known as the cosmopolitan capital of Spain&rsquo;s Catalonia region and is also known for its architecture. Barcelona is the most visited city in Spain. Barcelona is a Perfect Vacation Spot for Americans. &nbsp;</p>
            </blockquote>
            <p class="airline-title">Things to Know About Barcelona</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Barcelona is popular for its famous architecture.</li>
                        <li>Barcelona Football Club is the most famous thing about the city in the world.</li>
                        <li>Currency: Euros, USD (Accepted at Few Stores Only).</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Time Difference: Barcelona is 6 hours ahead of Washington, DC in the United States.</li>
                        <li>Language: Spanish, English (UK).</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">What To Visit in Barcelona</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Bas&iacute;lica de la Sagrada Fam&iacute;lia</li>
                        <li>Barri G&ograve;tic (Gothic Quarter)</li>
                        <li>Casa Mil&agrave; (La Pedrera)</li>
                        <li>La Rambla: Barcelona&apos;s Social Hub</li>
                        <li>Palau de la M&uacute;sica Catalana (Palace of Catalan Music)</li>
                        <li>Parc G&uuml;ell: Gaud&iacute;&apos;s Surrealist Park</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Casa Batll&oacute;</li>
                        <li>Camp Nou</li>
                        <li>The Magic Fountain of Montju&iuml;c</li>
                        <li>Scenic Views and Art Museums in Montju&iuml;c</li>
                        <li>La Barceloneta</li>
                        <li>Quadrat d&apos;Or</li>
                    </ul>
                </div>
            </div>

            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 9-10 hours, while a non-stop flight from the west coast takes 13&ndash;14 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly from the USA To Barcelona</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines&nbsp;</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                        <li>KLM</li>
                        <li>Emirates</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Air Italy&nbsp;</li>
                        <li>Brussel Airlines</li>
                        <li>Swiss Airlines</li>
                        <li>Lufthansa</li>
                        <li>Turkish Airlines</li>
                        <li>Air Canada</li>
                        <li>Aer Lingus</li>
                    </ul>
                </div>
            </div>

            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Barcelona: </span>El Prat de Llobregat Aeropuerto</p>
            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Barcelona</li>
                        <li>Flights from Miami to Barcelona</li>
                        <li>Flights from Philadelphia to Barcelona</li>
                        <li>Flights from Boston to Barcelona</li>
                        <li>Flights from Washington DC to Barcelona</li>
                        <li>Flights from Newark to Barcelona</li>
                        <li>Flights from Los Angeles to Barcelona</li>
                        <li>Flights from San Francisco to Barcelona</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Barcelona</li>
                        <li>Flights from Las Vegas to Barcelona</li>
                        <li>Flights from Phoenix to Barcelona</li>
                        <li>Flights from Houston to Barcelona</li>
                        <li>Flights from Dallas to Barcelona</li>
                        <li>Flights from San Antonio to Barcelona</li>
                        <li>Flights from Chicago to Barcelona</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')