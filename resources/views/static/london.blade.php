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
    <img src="{{ url('/images/flights/london.jpg') }}" class="lazyload img-fluid" alt="London" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to London?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals, for both non-stop and connecting flights with more than 100 airlines to the Capital City of England.</p>
                <p>London has always been a popular destination for travellers looking to experience the very best of British culture. For many years, London has always seen a significant increase in the number of passengers travelling from the United States for business as well as leisure.</p>
            </blockquote>
            <p class="airline-title">Things to Know About London</p>
            <p class="secondary-font">There are a few places you should visit if you are on vacation and have limited time to explore:-</p>
            <ul class="airline_ul">
                <li>Bermondsey Street: a coffee lover&apos;s paradise with beautiful boutiques and independent coffee shops.</li>
                <li>Peckham:-Over the past few years, Peckham has become the weekend spot due to its street food and bars.</li>
                <li>Kings Cross:-Another Best Area Of London To Explore, majorly known for its transformation in the last decade. If you are going to Kings Cross, don&apos;t miss seeing the famous platform 93/4.</li>
                <li>Notting Hills: Notting Hills is also a place with a heap of tasty restaurants.</li>
                <li>Currency:-GBP, Euros, USD (Accepted at Few Stores Only)</li>
                <li>Time Difference: London is 5 hours ahead of Washington, DC in the United States.</li>
                <li>Language: English (UK)</li>
            </ul>

            <p class="airline-title">What To Visit In London</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Jack and the Ripper Tour</li>
                        <li>Warner Brothers Studio Tour of Harry Potter</li>
                        <li>Visit the HardRock Cafe.</li>
                        <li>Beattle Taxi Tour.</li>
                        <li>Visit Windsor Castle.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Visit Oxford Street.</li>
                        <li>Go to 1 Pound Shop.</li>
                        <li>London Eye</li>
                        <li>Thames River</li>
                        <li>The Tower of London</li>
                    </ul>
                </div>
            </div>
            <p class="airline-title">Nearby Countries to Visit</p>
            <p class="secondary-font">If you are in London, you should go to Scotland and Northern Ireland as well. Travel to Scotland via train.</p>

            <p class="secondary-font">A Non-Stop Flight From The East Coast Of The United States It usually takes 7-8 hours, while a non-stop flight from the west coast takes 10&ndash;11 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly Non-Stop From the USA To London</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>JetBlue</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">There are three major international airports in London</p>
            <div class="row">
                <div class="col-md-12">
                    <ul class="airline_ul">
                        <li>Heathrow Airport in London</li>
                        <li>Gatwick Airport in London</li>
                        <li>Stanstead Airport in London</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to London</li>
                        <li>Flights from Miami to London</li>
                        <li>Flights from Philadelphia to London</li>
                        <li>Flights from Boston to London</li>
                        <li>Flights from Washington DC to London</li>
                        <li>Flights from Newark to London</li>
                        <li>Flights from Los Angeles to London</li>
                        <li>Flights from San Francisco to London</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to London</li>
                        <li>Flights from Las Vegas to London</li>
                        <li>Flights from Phoenix to London</li>
                        <li>Flights from Houston to London</li>
                        <li>Flights from Dallas to London</li>
                        <li>Flights from San Antonio to London</li>
                        <li>Flights from Chicago to London</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')