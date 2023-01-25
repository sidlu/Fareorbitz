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
    <img src="{{ url('/images/flights/philadelphia.jpg') }}" class="lazyload img-fluid" alt="Philadelphia" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Philadelphia?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with all the major airlines to the biggest city of Pennsylvania.</p>
                <p>Philadelphia is a coastal metropolis located in Philadelphia -Dade County. Philadelphia is well known for its beaches and is a very traveller who likes to go to the beach for vacations.&nbsp;</p>
            </blockquote>
            <p class="airline-title">Things to Know About Philadelphia</p>
            <ul class="airline_ul">
                <li>Tourism is also among Philadelphia&rsquo;s largest private-sector industries.</li>
                <li>Philadelphia is famous for hoagies, stromboli, sandwiches, scrapple, soft pretzels, water ice, Irish potato candy, tasty cakes.</li>
                <li>A Non-Stop Flight from the west coast takes 4-5 hours.</li>
                <li>Currency: - USD</li>
                <li>Language: English (US)</li>
            </ul>
            <p class="airline-title">What To Visit in Philadelphia</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Liberty Bell Pavilion</li>
                        <li>Independence Hall</li>
                        <li>Independence National Historical Park</li>
                        <li>Philadelphia Museum of Art and the &quot;Rocky Steps&quot;</li>
                        <li>Reading Terminal Market</li>
                        <li>The Barnes Foundation</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>LOVE Park</li>
                        <li>Please Touch Museum</li>
                        <li>Philadelphia Zoo</li>
                        <li>Rodin Museum</li>
                        <li>The Franklin Institute Science Museum</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Airlines that fly to Philadelphia</p>
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

            <p class="airline-title">Airports in Philadelphia City</p>
            <ul class="airline_ul">
                <li>Philadelphia International Airport</li>
            </ul>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Philadelphia</li>
                        <li>Flights from Miami to Philadelphia</li>
                        <li>Flights from Boston to Philadelphia</li>
                        <li>Flights from Washington DC to Philadelphia</li>
                        <li>Flights from Orlando to Philadelphia</li>
                        <li>Flights from Los Angeles to Philadelphia</li>
                        <li>Flights from San Francisco to Philadelphia</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Philadelphia</li>
                        <li>Flights from Las Vegas to Philadelphia</li>
                        <li>Flights from Phoenix to Philadelphia</li>
                        <li>Flights from Houston to Philadelphia</li>
                        <li>Flights from Dallas to Philadelphia</li>
                        <li>Flights from San Antonio to Philadelphia</li>
                        <li>Flights from Chicago to Philadelphia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')