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
    <img src="{{ url('/images/flights/chicago.jpg') }}" class="lazyload img-fluid" alt="Chicago" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Chicago?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p class="mb-0">We offer deals for non-stop and connecting flights with all the major airlines to Chicago, Illinois. Chicago is the third-most populous city in the United State following New York and Los Angeles. It is an international hub for finance, culture, commerce, education, technology, telecommunications and transportation. Chicago has been voted as the best large city in the United States for four years in a row.&nbsp;</p><br>
            </blockquote>
            <p class="airline-title">Things to know about Chicago</p>
            <ul class="airline_ul">
                <li>Chicago has Humid Continental Climate</li>
                <li>It is famous for its Winters</li>
                <li>Chicago Airport is the domestic hub for American Airlines and United Airlines</li>
                <li>Currency: USD</li>
                <li>Language: English (US)</li>
            </ul>

            <p class="airline-title">What To Visit in Chicago</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Art Institute of Chicago</li>
                        <li>Walk Through Millennium Park</li>
                        <li>Stroll around Navy Pier</li>
                        <li>Museum of Science and Industry</li>
                        <li>Willis Tower Sky Deck</li>
                        <li>Buckingham Fountain</li>
                        <li>360 Chicago</li>
                        <li>Field Museum of Natural History</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Michigan Avenue and the Magnificent Mile</li>
                        <li>Wrigley Field</li>
                        <li>Lincoln Park</li>
                        <li>Shedd Aquarium</li>
                        <li>Lincoln Park Zoo</li>
                        <li>Chicago Riverwalk and Lakefront Trail</li>
                        <li>Oriental Institute Museum</li>
                        <li>The Rookery Building</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Airlines that fly to Chicago</p>
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
                    </ul>
                </div>
            </div>
            <br>
            <p class="airline-subtitle"><span class="text-dark">Airports in Chicago: </span>Chicago O&apos;Hare International Airport</p>
            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Chicago</li>
                        <li>Flights from Miami to Chicago</li>
                        <li>Flights from Philadelphia to Chicago</li>
                        <li>Flights from Washington DC to Chicago</li>
                        <li>Flights from Boston to Chicago</li>
                        <li>Flights from Orlando to Chicago</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from Los Angeles to Chicago</li>
                        <li>Flights from San Diego to Chicago</li>
                        <li>Flights from Phoenix to Chicago</li>
                        <li>Flights from Houston to Chicago</li>
                        <li>Flights from Dallas Fort-Worth to Chicago</li>
                        <li>Flights from San Antonio to Chicago</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')