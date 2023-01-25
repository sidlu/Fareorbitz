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
    <img src="{{ url('/images/flights/washington.jpg') }}" class="lazyload img-fluid" alt="Washington DC" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Washington DC?</h2>
            </div>
        </div>
    </div>

    <div class="sidebar-widget">
        <blockquote>
            <p>We offer deals for both non-stop and connecting flights with all the major airlines to Washington DC, the Capitol of the United States of America.</p>
            <p>It was formerly known as the District of Columbia. It is located on the east bank of the Potomac River. The city was named for George Washing the first President Of the United States of America.</p>
        </blockquote>
        <p class="airline-title">Things to know about Washington DC</p>
        <ul class="airline_ul">
            <li>Washington is in the humid subtropical climate zone.</li>
            <li>It has the famous Capitol Building.</li>
            <li>A Non-Stop flight from the west coast takes 4-5 hours.</li>
            <li>Currency: - USD</li>
            <li>Language: English (US)</li>
        </ul>

        <p class="airline-title">Airlines that fly to Washington DC</p>
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

        <p class="airline-title">Airports in Washington DC</p>
        <ul class="airline_ul">
            <li>Washington Dulles International Airport</li>
            <li>Washington Regan Airport (Domestic)</li>
            <li>Baltimore is Another nearby Airport</li>
        </ul>

        <p class="airline-title">Our Popular Routes</p>
        <div class="row">
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from New York to Washington DC</li>
                    <li>Flights from Miami to Washington DC</li>
                    <li>Flights from Philadelphia to Washington DC</li>
                    <li>Flights from Washington DC to Washington DC</li>
                    <li>Flights from Orlando to Washington DC</li>
                    <li>Flights from Los Angeles to Washington DC</li>
                    <li>Flights from San Francisco to Washington DC</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from San Diego to Washington DC</li>
                    <li>Flights from Las Vegas to Washington DC</li>
                    <li>Flights from Phoenix to Washington DC</li>
                    <li>Flights from Houston to Washington DC</li>
                    <li>Flights from Dallas to Washington DC</li>
                    <li>Flights from San Antonio to Washington DC</li>
                    <li>Flights from Chicago to Washington DC</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('site.footer')