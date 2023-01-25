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
    <img src="{{ url('/images/flights/madrid.jpg') }}" class="lazyload img-fluid" alt="Madrid" />
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
                <h2 class="sec__title text-left">Looking to Book Flights to Madrid?</h2>
            </div>
        </div>
        <div class="sidebar-widget">
            <blockquote>
                <p>We offer deals for both non-stop and connecting flights with more than 100 airlines to the Capital City of Spain.</p>
                <p>Madrid is perhaps among the most visited city in Spain in 2021. It is also known as the city of elegant boulevards and expensive manicured parks such as Buen Retiro. Madrid is also famous for its rich repositories of European art, the work of Goya in the Prado Museum is one of the examples of it.</p>
            </blockquote>
            <p class="airline-title">Things to Know About Madrid</p>
            <ul class="airline_ul">
                <li>Madrid is the Headquarter of the United Nations World Tourism Organisation.</li>
                <li>Real Madrid Football Club is a famous Football Club.</li>
                <li>Currency: Euros, USD (Accepted at Few Stores Only).</li>
                <li>Time Difference: Madrid is 6 hours ahead of Washington, DC in the United States.</li>
                <li>Language: Spanish, English (UK).</li>
            </ul>

            <p class="airline-title">What To Visit in Madrid</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Prado Museum</li>
                        <li>Explore Buen Retiro Park and the Crystal Palace</li>
                        <li>Royal Palace and Gardens</li>
                        <li>Wander through the Plaza Mayor</li>
                        <li>Puerta del Sol: The Heart of the City</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Museo Nacional Centro de Arte Reina Sof&iacute;a</li>
                        <li>Fuente de Cibeles and Gran Via</li>
                        <li>Temple of Debod: An Ancient Egyptian Temple</li>
                        <li>Goya Frescoes at Ermita de San Antonio de la Florida</li>
                        <li>Museo Thyssen-Bornemisza: Fine Arts Museum</li>
                    </ul>
                </div>
            </div>
            <p class="secondary-font">A Non-Stop Flight from The East Coast of The United States usually takes 9-10 hours, while a non-stop flight from the west coast takes 13&ndash;14 hours.</p>
            <p class="secondary-font">To check the Visa and other document requirements, you must check with the local Embassy or CIBTVISAS.com.</p>

            <p class="airline-title">Airlines To Fly from the USA To Madrid</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Delta Airlines</li>
                        <li>American Airlines</li>
                        <li>United Airlines</li>
                        <li>British Airways</li>
                        <li>Virgin Atlantic</li>
                        <li>Air France</li>
                        <li>KLM</li>
                        <li>Emirates</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Air Italy</li>
                        <li>Brussel Airlines</li>
                        <li>Swiss Airlines</li>
                        <li>Lufthansa</li>
                        <li>Turkish Airlines</li>
                        <li>Air Canada</li>
                        <li>Aer Lingus</li>
                    </ul>
                </div>
            </div>
            <p class="airline-subtitle"><span class="text-dark">There is only one international airport in Madrid: </span>dolfo Su&aacute;rez Madrid&ndash;Barajas Airport</p>
            <p class="airline-title">Our Popular Routes</p>
            <div class="row">
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from New York to Madrid</li>
                        <li>Flights from Miami to Madrid</li>
                        <li>Flights from Philadelphia to Madrid</li>
                        <li>Flights from Boston to Madrid</li>
                        <li>Flights from Washington DC to Madrid</li>
                        <li>Flights from Newark to Madrid</li>
                        <li>Flights from Los Angeles to Madrid</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="airline_ul">
                        <li>Flights from San Francisco to Madrid</li>
                        <li>Flights from San Diego to Madrid</li>
                        <li>Flights from Las Vegas to Madrid</li>
                        <li>Flights from Phoenix to Madrid</li>
                        <li>Flights from Houston to Madrid</li>
                        <li>Flights from Dallas to Madrid</li>
                        <li>Flights from San Antonio to Madrid</li>
                        <li>Flights from Chicago to Madrid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')