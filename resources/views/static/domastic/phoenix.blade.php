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
    <img src="{{ url('/images/flights/phoenix.jpg') }}" class="lazyload img-fluid" alt="Phoenix" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Phoenix?</h2>
            </div>
        </div>
    </div>
    <div class="sidebar-widget">
        <blockquote>
            <p>We offer deals for both non-stop and connecting flights with all the major airlines to Phoenix, one of the major cities in the state of Arizona. It is also the capital of the famous state of Arizona. Phoenix is among the most populated cities in the United States.</p>
            <p>Phoenix is the home of a unique architectural tradition and community. The tourist industry is the longest-running of today&rsquo;s top industries in Phoenix.</p>
            <p>Phoenix is also renowned for Mexican food due to its large Hispanic population.</p>
        </blockquote>
        <p class="airline-title">Things to know about Phoenix</p>
        <div class="row">
            <div class="col-md-12">
                <ul class="airline_ul">
                    <li>Phoenix has a hot desert climate.</li>
                    <li>It is famous for Golf.</li>
                    <li>A Non-Stop flight from the east coast takes 3-4 hours.</li>
                    <li>Currency: - USD</li>
                    <li>Language: English (US)</li>
                </ul>
            </div>
        </div>

        <p class="airline-title">Airlines that fly to Phoenix</p>
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

        <p class="airline-title">Airports in Phoenix</p>
        <ul class="airline_ul">
            <li>Phoenix Sky-Harbour International Airport</li>
        </ul>

        <p class="airline-title">Our Popular Routes</p>
        <div class="row">
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from New York to Phoenix</li>
                    <li>Flights from Miami to Phoenix</li>
                    <li>Flights from Philadelphia to Phoenix</li>
                    <li>Flights from Washington DC to Phoenix</li>
                    <li>Flights from Boston to Phoenix</li>
                    <li>Flights from Orlando to Phoenix</li>
                    <li>Flights from Los Angeles to Phoenix</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="airline_ul">
                    <li>Flights from San Diego to Phoenix</li>
                    <li>Flights from Phoenix to Phoenix</li>
                    <li>Flights from Houston to Phoenix</li>
                    <li>Flights from Dallas to Phoenix</li>
                    <li>Flights from San Antonio to Phoenix</li>
                    <li>Flights from Chicago to Phoenix</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('site.footer')