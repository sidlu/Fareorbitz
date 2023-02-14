@include('site.header')
<section class="hero-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="hero-subheading pt-5">Fly Off Your Dream <br> Destination with </h1>
                <h2 class="hero-heading">Fareorbitz</h2>
            </div>
        </div>
    </div>
</section>
@include('flight.flight-search-box')
@include('site.pormotion')
<section class="info-area info-bg padding-top-30px padding-bottom-0px mb-3 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box min-260">
                    <div class="info-icon">
                        <i class="la la-bullhorn"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="info__title">Best Flight Deals For Europe</h4>
                        <p class="info__desc">
                            Call Our Travel Expert To Find You Best Flight Prices To Europe !!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box min-260">
                    <div class="info-icon">
                        <i class="la la-globe"></i>
                    </div>
                    <!-- end info-icon-->
                    <div class="info-content">
                        <h4 class="info__title">Travel Anywhere In United States</h4>
                        <p class="info__desc">
                            Compare The Flight Prices With Our Travel Experts To Find You The Cheapest Airlines Ticket
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box min-260">
                    <div class="info-icon">
                        <i class="la la-thumbs-up"></i>
                    </div>
                    <div class="info-content">
                        <h4 class="info__title">Cancellation Rebooking </h4>
                        <p class="info__desc">
                            Book Airlines Tickets With Travel Advisors And Cancel At Zero Airlines Penalty Within 24 Hours of Booking The Flight
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="call-section pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="call-box d-flex align-items-center justify-content-center">
                    <img data-src="{{ asset('images/telephone.png') }}" alt="" />
                    <div>
                        <p class="call-title text-center"><span class="">For Unpublished </span><span class="text-light"> Deal Call</span></p>
                        <p class="text-center"><a href="tel:+1-888-926-8555" class="num btn secondary-btn btn-rounded">+1-888-926-8555</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="round-trip-flight partner-section section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title ">Our Top Airlines</h2>
                </div>
            </div>
        </div>
        <div class="row padding-top-20px">
            <div class="col-lg-12">
                <div class="popular-round-trip-wrap">
                    <nav class="pb-3 mx-3">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="domestic-tab" data-bs-toggle="tab" data-bs-target="#domestic" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Domestic</button>
                            <button class="nav-link" id="international-tab" data-bs-toggle="tab" data-bs-target="#international" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">International</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="myTabContent4">
                        <div class="tab-pane fade show active" id="domestic" role="tabpanel" aria-labelledby="domestic-tab">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('delta-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/delta-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Delta Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('united-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="https://images.kiwi.com/airlines/64/UA.png" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">United Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('spirit-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/spirit-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Spirit Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('frontier-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/frontier-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Frontier Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('southwest-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/southwest-airline.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Southwest Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('jetblue-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="https://images.kiwi.com/airlines/64/B6.png" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">JetBlue Airways</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('caribbean-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/caribbean.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Caribbean Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('alaska-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/alaska-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Alaska Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('american-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/american-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">American Airlines</h6>
                                        </div>
                                    </a>
                                </div>    
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('hawaiian-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/hawaiian-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Hawaiian Airlines</h6>
                                        </div>
                                    </a>
                                </div>                           
                            </div>
                        </div>
                        <div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('swiss-international-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/swiss-international-airline.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Swiss International Airlines </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('klm')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/KLM.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">KLM </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('air-france')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/air-france.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Air France</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('qatar-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/qatar-airways.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Qatar Airways </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('singapore-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/singaport-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Singapore Airlines </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('british-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/british-ariways.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">British Airways </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('thai-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/thai-airways.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Thai Airways </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('air-newzeland')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/air-newzeland.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Air NewZeland </h6>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="row" id="show_more_partners" style="display: none;">
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('austrian-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/austrian-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Austrian Airlines </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('qantas-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/qantas-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Qantas Airways </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('virgin-atlantic')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/virgin-atlantic.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Virgin Atlantic</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('saudia')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/saudia.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Saudia </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('kuwait-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/kuwait-airways.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Kuwait Airways </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('air-india')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/air-india.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Air India </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('brussels-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/brussels-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Brussels Airlines </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('air-canada')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/air-canada.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Air Canada </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('west-jet')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/west-jet.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">West Jet </h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('tap-air-portugal')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/tap-air-portugal.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">TAP Air Portugal</h6>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('emirates')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="https://images.kiwi.com/airlines/64/EK.png" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Emirates Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-2">
                                    <a href="{{url('etihad-airways')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="https://images.kiwi.com/airlines/64/EY.png" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Eithad Airways</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('lufthansa')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="https://images.kiwi.com/airlines/64/LH.png" alt="air-line-img" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Lufthansa</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('latam-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/latam-airlines.jpg') }}" alt="air-line-img" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Latam Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-3">
                                    <a href="{{url('avianca-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/avianca-airlines.jpg') }}" alt="air-line-img" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Avianca Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('turkish-airlines')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/turkish-airlines.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Turkish Airlines</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-xs-6 deal-bg-1">
                                    <a href="{{url('korean-air')}}">
                                        <div class="deal-card">
                                            <div class="deal-image">
                                                <img data-src="{{ asset('images/partners/korean-air.jpg') }}" alt="air-line-img" class="img-fluid lazyload">
                                            </div>
                                            <h6 class="deal-title">Korean Air</h6>
                                        </div>
                                    </a>
                                </div>                               
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button class="btn primary-btn btn-sm" id="show_more_part_button">Show More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="why-us-section padding-top-0px padding-bottom-50px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading padding-bottom-30px">
                    <h2 class="sec__title">Why Us ?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="why-box">
                    <img data-src="{{ asset('images/travelling.png') }}" alt="air-line-img" class="img-fluid lazyload">
                    <p class="why-title"><span class="why-main-title">Best</span> Flights Deals For Europe</p>
                    <p>Our travel experts will get you the best flight prices to Europe.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-box">
                    <img data-src="{{ asset('images/call-center.png') }}" alt="air-line-img" class="img-fluid lazyload">
                    <p class="why-title"><span class="why-main-title">24/7</span> Assistance</p>
                    <p>Our support team is there to cover your trip every moment.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-box">
                    <img data-src="{{ asset('images/card.png') }}" alt="air-line-img" class="img-fluid lazyload">
                    <p class="why-title"><span class="why-main-title">Safe</span> and Secure Payments</p>
                    <p>Remarkable and 99% service uptime payment gateway.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="why-box">
                    <img data-src="{{ asset('images/cancel.png') }}" alt="air-line-img" class="img-fluid lazyload">
                    <p class="why-title"><span class="why-main-title">Cancellation</span> at Ease</p>
                    <p>Cancellations are much easier with our automated process.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-section padding-top-50px padding-bottom-30px grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-heading padding-bottom-30px">
                    <h2 class="sec__title">Our Blogs <small>Inspire To Travel</small></h2>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <a href="" class="primary-text">View All Blogs&nbsp; <i class="la la-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme testimonial-carousel-2">
                    <div class="item">
                        <figure class="blog-box">
                            <img data-src="{{ asset('images/blog_img.jpg') }}" class="img-fluid lazyload" alt="sample72" />
                            <h4 class="blog-title text-white">Lorem ipsum dolor sit amet</h4>
                            <figcaption class="text-center">
                                <i class="la la-book"></i>
                                <h3>Blog Title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laudantium, autem ducimus culpa officiis. </p>
                                <a href="#" class="btn primary-btn">Read More</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="blog-box">
                            <img data-src="{{ asset('images/blog_img.jpg') }}" class="img-fluid lazyload" alt="sample72" />
                            <figcaption class="text-center">
                                <i class="la la-book"></i>
                                <h3>Blog Title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laudantium, autem ducimus culpa officiis. </p>
                                <a href="#" class="btn primary-btn">Read More</a>
                            </figcaption>
                            <h4 class="blog-title text-white">Lorem ipsum dolor sit amet</h4>
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="blog-box">
                            <img data-src="{{ asset('images/blog_img.jpg') }}" class="img-fluid lazyload" alt="sample72" />
                            <figcaption class="text-center">
                                <i class="la la-book"></i>
                                <h3>Blog Title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laudantium, autem ducimus culpa officiis. </p>
                                <a href="#" class="btn primary-btn">Read More</a>
                            </figcaption>
                            <h4 class="blog-title text-white">Lorem ipsum dolor sit amet</h4>
                        </figure>
                    </div>
                    <div class="item">
                        <figure class="blog-box">
                            <img data-src="{{ asset('images/blog_img.jpg') }}" class="img-fluid lazyload" alt="sample72" />
                            <figcaption class="text-center">
                                <i class="la la-book"></i>
                                <h3>Blog Title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, laudantium, autem ducimus culpa officiis. </p>
                                <a href="#" class="btn primary-btn">Read More</a>
                            </figcaption>
                            <h4 class="blog-title text-white">Lorem ipsum dolor sit amet</h4>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="onload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content popup-bg">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="la la-times"></i></button>
                <div class="ownmodal2">
                    <a href="tel:+1-888-926-8555">
                        <p class="ownmodal-title2 text-white">Airlines Customer Service </p>
                        <p class="ownmodal-tollfree2"><i class="la la-phone"></i>+1-888-926-8555</p>
                        <p class="modal-prgh2">Bookings, Cancellations, Changes and Inquiry </p>
                        <p class="ownmodal-callicon2"><i class="la la-phone"></i></p>
                        <p class="ownmodal-calltxt2">Click to Call !</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('site.footer')

