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
    <img src="{{ url('/images/flights/san-antonio.jpg') }}" class="lazyload img-fluid" alt="San Antonio" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to San Antonio?</h2>
            </div>
        </div>
    </div>
    <div class="sidebar-widget">
        <blockquote>
            <p>We offer deals for non-stop and connecting flights with all the major airlines to San Antonio, Texas. San Antonio is the second-most populous city in the state of Texas and the seventh most populous city in the United States. San Antonio&apos;s economy focuses primarily on military, health care, government&ndash;civil service, financial services, oil and gas, and tourism.</p>
        </blockquote>
        <p class="airline-title">Things to know about San Antonio</p>
        <ul class="airline_ul">
            <li>San Antonio has Humid Subtropical Climate</li>
            <li>It is famous for the San Antonio River</li>
            <li>San Antonio Fort Worth Airport is the domestic hub for Southwest Airlines.</li>
            <li>Currency: USD</li>
            <li>Language: English (US)</li>
        </ul>

        <p class="airline-title">Airlines that fly to San Antonio</p>
        <div class="row">
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Delta Airlines</li>
                    <li>American Airlines</li>
                    <li>United Airlines</li>
                    <li>Southwest Airlines</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Alaska Airlines</li>
                    <li>JetBlue Airways</li>
                    <li>Spirit Airlines</li>
                    <li>Frontier Airlines</li>
                    <li>Sun Country</li>
                </ul>
            </div>
        </div>
        <p class="airline-title">Airports in San Antonio</p>
        <ul class="airline_ul">
            <li>San Antonio International Airport</li>
        </ul>
        <p class="airline-title">Our Popular Routes</p>
        <div class="row">
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from New York to San Antonio</li>
                    <li>Flights from Miami to San Antonio</li>
                    <li>Flights from Philadelphia to San Antonio</li>
                    <li>Flights from Washington DC to San Antonio</li>
                    <li>Flights from Boston to San Antonio</li>
                    <li>Flights from Orlando to San Antonio</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from Los Angeles to San Antonio</li>
                    <li>Flights from San Diego to San Antonio</li>
                    <li>Flights from Phoenix to San Antonio</li>
                    <li>Flights from Houston to San Antonio</li>
                    <li>Flights from Dallas Fort-Worth to San Antonio</li>
                    <li>Flights from Chicago to San Antonio</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('site.footer')