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
    <img src="{{ url('/images/flights/hoston.jpg') }}" class="lazyload img-fluid" alt="Houston" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Houston?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with all the major airlines to Houston, one of the major cities in the state of Texas. Houston is among the most expansive cities in the United States. Houston is the largest city in the United States by total area.</p>
            </blockquote>
            <p class="airline-title">Things to know about Houston</p>
            <ul class="airline_ul">
                <li>Houston has Humid Subtropical Climate</li>
                <li>It is famous for Golf</li>
                <li>A Non-Stop flight from the east coast takes 3-4 hours</li>
                <li>Currency: - USD</li>
                <li>Language: English (US)</li>
            </ul>

            <p class="airline-title">Airlines that fly to Houston</p>
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

            <p class="airline-title">Airports in Houston</p>
            <ul class="airline_ul">
                <li>Houston International Airport</li>
                <li>Houston Hobby Airport</li>
            </ul>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Houston</li>
                        <li>Flights from Miami to Houston</li>
                        <li>Flights from Philadelphia to Houston</li>
                        <li>Flights from Washington DC to Houston</li>
                        <li>Flights from Boston to Houston</li>
                        <li>Flights from Orlando to Houston</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Los Angeles to Houston</li>
                        <li>Flights from San Diego to Houston</li>
                        <li>Flights from Phoenix to Houston</li>
                        <li>Flights from Dallas to Houston</li>
                        <li>Flights from San Antonio to Houston</li>
                        <li>Flights from Chicago to Houston</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')