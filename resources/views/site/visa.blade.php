@include('site.header')
<style>
    .header-menu-wrapper {
    transition: all 0.5s;
    --tw-bg-opacity: 0.6;
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
    backdrop-filter: blur(-1px);
    background-color: rgba(255, 255, 255, 0.5);
}
</style>
<section class="hotels-banner">
    <img src="{{ asset('images/visa-banner.jpg') }}" class="img-fluid" alt="">
</section>
<section class="call-section pb-4 pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="call-box d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/telephone.png') }}" alt="" />
                    <div>
                        <p class="call-title text-center"><span class="">For Unpublished </span><span class="text-light"> Deal Call</span></p>
                        <p class="text-center"><a href="tel:+1-877-317-1625" class="num btn secondary-btn btn-rounded">+1-877-317-1625</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="booking-area padding-top-30px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <div class="form-box">
                    <div class="section-heading pb-1 pt-4">
                        <h2 class="sec__title text-center">Visa</h2>
                    </div>
                    <div class="form-content px-3">
                        <div class="alert alert-success d-none">
                            Message sent successfully. </div>
                        <div class="contact-form-action-2">
                            <form method="post" action="{{ route('visa.booking') }}" class="row">
                                @csrf
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input type="search" class="form-control an-from" placeholder="Travelling From" name="travel_from_city" id="travel_from_city" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input type="search" class="form-control an-to" id="travel_to_city" name="travel_to_city" placeholder="Travelling To" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-cc-visa form-icon"></span>
                                            <input class="form-control" id="visa_purpose" type="text" name="visa_purpose" placeholder="Visa Purpose" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-building form-icon"></span>
                                            <input class="depart form-control" id="travel_date" type="text" name="travel_date" placeholder="Date of Travel" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 g-2">
                                    <div class="col-lg-6 offset-md-3">
                                        <div class="btn-box">
                                            <button type="submit" class="btn btn-block btn-primary w-100" id="button"><span class="ladda-label">Send</span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('site.footer')