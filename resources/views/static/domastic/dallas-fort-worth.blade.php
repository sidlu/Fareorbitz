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
    <img src="{{ url('/images/flights/dallas.jpg') }}" class="lazyload img-fluid" alt="Dallas Fort-Worth" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Dallas Fort-Worth?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for non-stop and connecting flights with all the major airlines to Dallas Fort-Worth, also known as Dallas Fort-Worth Fort Worth, Texas. Dallas Fort-Worth Worth metroplex is the fourth largest metropolitan area in the United States. Dallas Fort-Worth has a diversified economy due to various dominant sectors like defence, information technology, financial services, telecommunication and transportation. &nbsp;</p>
            </blockquote>
            <p class="airline-title">Things to know about Dallas Fort-Worth</p>
            <ul class="airline_ul">
                <li>Dallas Fort-Worth has Humid Subtropical Climate</li>
                <li>It is famous for AT&amp;T stadium</li>
                <li>Dallas Fort-Worth Fort Worth Airport is the domestic hub for American Airlines.</li>
                <li>Currency: - USD</li>
                <li>Language: English (US)&nbsp;</li>
            </ul>

            <p class="airline-title">What To Visit in Dallas Fort-Worth</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>The Sixth Floor Museum at Dealey Plaza</li>
                        <li>John F. Kennedy Memorial</li>
                        <li>The Dallas Fort-Worth Arboretum and Botanical Garden</li>
                        <li>Perot Museum of Nature and Science</li>
                        <li>Dallas Fort-Worth Museum of Art</li>
                        <li>Dallas Fort-Worth World Aquarium</li>
                        <li>Dallas Fort-Worth Cattle Drive Sculptures at Pioneer Plaza</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Dallas Fort-Worth Zoo</li>
                        <li>Reunion Tower</li>
                        <li>The Nasher Sculpture Centre</li>
                        <li>Frontiers of Flight Museum</li>
                        <li>The Cavanaugh Flight Museum</li>
                        <li>African American Museum</li>
                        <li>Bishop Arts District</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Airlines that fly to Dallas Fort-Worth</p>
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

            <p class="airline-title">Airports in Dallas Fort-Worth</p>
            <ul class="airline_ul">
                <li>Dallas Fort-Worth Fort-Worth International Airport</li>
                <li>Dallas Fort-Worth Love Field Airport (Hub for Southwest Airlines)</li>
            </ul>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Dallas Fort-Worth</li>
                        <li>Flights from Miami to Dallas Fort-Worth</li>
                        <li>Flights from Philadelphia to Dallas Fort-Worth</li>
                        <li>Flights from Washington DC to Dallas Fort-Worth</li>
                        <li>Flights from Boston to Dallas Fort-Worth</li>
                        <li>Flights from Orlando to Dallas Fort-Worth</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Los Angeles to Dallas Fort-Worth</li>
                        <li>Flights from San Diego to Dallas Fort-Worth</li>
                        <li>Flights from Phoenix to Dallas Fort-Worth</li>
                        <li>Flights from Houston to Dallas Fort-Worth</li>
                        <li>Flights from San Antonio to Dallas Fort-Worth</li>
                        <li>Flights from Chicago to Dallas Fort-Worth</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')