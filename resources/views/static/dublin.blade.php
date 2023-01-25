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
    <img src="{{ url('/images/flights/dublin.jpg') }}" class="lazyload img-fluid" alt="Dublin" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Dublin?</h2>
            </div>
        </div>

        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with more than 100 airlines to the Capital City of the Republic of Ireland.</p>
                <p>Dublin is located on the east coast at the mouth of River Liffey.</p>
            </blockquote>
            <p class="airline-title">Things to Know About Dublin</p>
            <ul class="airline_ul">
                <li>Dublin is a contemporary and historical centre for Irish education, arts and culture.</li>
                <li>Dublin is the economic centre of Ireland.</li>
                <li>Currency: Great British Pounds, Euros, USD (Accepted at Few Stores Only).</li>
                <li>Time Difference: Dublin is 6 hours ahead of Washington, DC in the United States.</li>
                <li>Language: English (UK).</li>
            </ul>

            <p class="airline-title">What To Visit in Dublin</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Trinity College and College Green</li>
                        <li>Grafton Street</li>
                        <li>St. Stephens Green</li>
                        <li>The Little Museum of Dublin</li>
                        <li>Kildare Street Museums and Houses of Parliament</li>
                        <li>National Museum of Ireland: Archaeology</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Irish Art at the National Gallery of Ireland</li>
                        <li>Merrion Square</li>
                        <li>The Irish Emigration Museum</li>
                        <li>History Museum</li>
                        <li>Phoenix Park and Dublin Zoo</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 6-7 hours, while a non-stop flight from the west coast takes 10&ndash;11 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly from the USA To Dublin</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>KLM</li>
                        <li>Swiss Airlines</li>
                        <li>Lufthansa</li>
                        <li>Air Canada</li>
                        <li>Aer Lingus</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Dublin: </span>Dublin International Airport</p>
            <p class="airline-title">Our Popular Routes:</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Dublin</li>
                        <li>Flights from Miami to Dublin</li>
                        <li>Flights from Philadelphia to Dublin</li>
                        <li>Flights from Boston to Dublin</li>
                        <li>Flights from Washington DC to Dublin</li>
                        <li>Flights from Newark to Dublin</li>
                        <li>Flights from Los Angeles to Dublin</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Francisco to Dublin</li>
                        <li>Flights from San Diego to Dublin</li>
                        <li>Flights from Las Vegas to Dublin</li>
                        <li>Flights from Phoenix to Dublin</li>
                        <li>Flights from Houston to Dublin</li>
                        <li>Flights from Dallas to Dublin</li>
                        <li>Flights from San Antonio to Dublin</li>
                        <li>Flights from Chicago to Dublin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@include('site.footer')