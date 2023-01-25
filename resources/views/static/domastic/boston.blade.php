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
    <img src="{{ url('/images/flights/boston.jpg') }}" class="lazyload img-fluid" alt="Boston" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Boston?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with all the major airlines to Boston.</p>
                <p>Boston is the oldest Municipality in the United States founded in 1630.</p>
            </blockquote>
            <p class="airline-title">Things to Know About Boston</p>
            <ul class="airline_ul">
                <li>Boston is a thriving centre of Scientific research. Boston&rsquo;s economic base includes finance, business services and the city is considered to be a giant in the sector of innovation and entrepreneurship</li>
                <li>A Non-Stop Flight from the west coast takes 4-5 hours.</li>
                <li>Currency: - USD</li>
                <li>Language: English (US)</li>
            </ul>

            <p class="airline-title">Airlines that fly to Boston</p>
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
            <p class="airline-subtitle"><span class="text-dark">Airports in Boston: </span> Boston International Airport</p>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Boston</li>
                        <li>Flights from Miami to Boston</li>
                        <li>Flights from Philadelphia to Boston</li>
                        <li>Flights from Washington DC to Boston</li>
                        <li>Flights from Orlando to Boston</li>
                        <li>Flights from Los Angeles to Boston</li>
                        <li>Flights from San Francisco to Boston</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Boston</li>
                        <li>Flights from Las Vegas to Boston</li>
                        <li>Flights from Phoenix to Boston</li>
                        <li>Flights from Houston to Boston</li>
                        <li>Flights from Dallas to Boston</li>
                        <li>Flights from San Antonio to Boston</li>
                        <li>Flights from Chicago to Boston</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')