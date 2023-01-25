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
    <img src="{{ url('/images/flights/paris.jpg') }}" class="lazyload img-fluid" alt="Paris" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Paris?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with more than 100 airlines to the Capital City of France.</p>
                <p>Paris has always been a popular destination for travellers looking to experience the very best of Fashion and Imperial Architecture. For many years, Paris has been a popular destination for Luxury Vacation and Honeymoon.</p>
            </blockquote>
            <p class="airline-title">Things to Know About Paris</p>
            <ul class="airline_ul">
                <li>Currency: - Euros, USD (Accepted at Few Stores Only)</li>
                <li>Time Difference: Paris is 5 hours ahead of Washington, DC in the United States.</li>
                <li>Language: French, English (UK)</li>
            </ul>
            <p class="airline-title">Famous food to try in Paris</p>
            <p class="secondary-font">Apart from its Luxury fashion brands, Paris has luxury Cuisine as well to offer to the travellers.</p>
            <ul class="airline_ul">
                <li>Croissants</li>
                <li>Escargots</li>
                <li>Macarons</li>
                <li>Jambon-beurre</li>
                <li>Cheese</li>
            </ul>

            <p class="airline-title">What To Visit in Paris</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Eiffel Tower Tour</li>
                        <li>Louvre Museum</li>
                        <li>Visit Opera Garnier.</li>
                        <li>One Hour Illuminations River Tour.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Heart Of Paris Private Boat Tour.</li>
                        <li>Evening Cruise with Dinner on River Seine.</li>
                        <li>Shop the Best Perfumes in the World.</li>
                        <li>Visit World&rsquo;s Oldest Disneyland.</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">Nearby Cities to Visit </p>
            <p class="secondary-font">If you are in Paris, you should go to Corsica, Lyon and Marseille as well to get a glimpse of the most modern villages in the world.</p>

            <p class="secondary-font">A Non-Stop Flight From The East Coast Of The United States It usually takes 7-8 hours, while a non-stop flight from the west coast takes 10&ndash;11 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly Non-Stop From the USA To Paris</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>JetBlue</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                    </ul>
                </div>
            </div>

            <p class="airline-title">There are three major international airports in Paris:</p>
            <ul class="airline_ul">
                <li>Charles De Gaulle in Paris</li>
                <li>Orly Airport in Paris</li>
            </ul>

            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Paris</li>
                        <li>Flights from Miami to Paris</li>
                        <li>Flights from Philadelphia to Paris</li>
                        <li>Flights from Boston to Paris</li>
                        <li>Flights from Washington DC to Paris</li>
                        <li>Flights from Newark to Paris</li>
                        <li>Flights from Los Angeles to Paris</li>
                        <li>Flights from San Francisco to Paris</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Diego to Paris</li>
                        <li>Flights from Las Vegas to Paris</li>
                        <li>Flights from Phoenix to Paris</li>
                        <li>Flights from Houston to Paris</li>
                        <li>Flights from Dallas to Paris</li>
                        <li>Flights from San Antonio to Paris</li>
                        <li>Flights from Chicago to Paris</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')