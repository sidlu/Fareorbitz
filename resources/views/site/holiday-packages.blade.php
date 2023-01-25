@include('site.header')
<style>
    .header-menu-wrapper {
    transition: all 0.5s;
    --tw-bg-opacity: 0.6;
    --tw-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 transparent), var(--tw-ring-shadow, 0 0 transparent), var(--tw-shadow);
    backdrop-filter: blur(-1px);
    background-color: rgba(255, 255, 255, 0.6);
}
</style>
<section class="hotels-banner">
    <img src="{{ asset('images/holiday-packages.jpg') }}" class="img-fluid" alt="">
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
                        <h2 class="sec__title text-center">Holiday Packages</h2>
                    </div>
                    <div class="form-content px-3">
                        <div class="alert alert-success d-none">
                            Message sent successfully. </div>
                        <div class="contact-form-action-2">
                            <form method="post" action="{{ route('holiday.package.booking') }}" class="row">
                                @csrf
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input class="form-control" type="text" name="destination" value="" required placeholder="Destination">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-phone form-icon"></span>
                                            <input class="form-control" type="tel" name="mobile" placeholder="Your Mobile No." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="number" name="travelers" required placeholder="No. of Travelers">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="number" name="adults" value="" required placeholder="Adults">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="number" name="child" value="" required placeholder="Child">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="form-control" type="number" name="days" value="" required placeholder="Days">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="form-control" type="text" name="travel_date" value="" required placeholder="Date of Departure" onclick="this.type='date'" onblur="this.type='text'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-dollar form-icon"></span>
                                            <input class="form-control" type="number" name="budget" value="" required placeholder="Budget">
                                        </div>
                                    </div>
                                </div>                              
                                <div class="col-lg-12">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2 g-2">
                                    <!-- <div class="col-lg-6">
                                        <div class="input-box mb-3 mx-2">
                                            <div class="recapcha-box pb-4 d-flex align-items-center">
                                                <div class="g-recaptcha" data-sitekey="6LdX3JoUAAAAAFCG5tm0MFJaCF3LKxUN4pVusJIF" data-callback="correctCaptcha">
                                                    <div style="width: 304px; height: 78px;">
                                                        <div>
                                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdX3JoUAAAAAFCG5tm0MFJaCF3LKxUN4pVusJIF&amp;co=aHR0cHM6Ly9waHB0cmF2ZWxzLm5ldDo0NDM.&amp;hl=en&amp;v=6pQzWaE1NP-gB4FrqRViKjM-&amp;size=normal&amp;cb=40y9c4xtdshm" width="304" height="78" role="presentation" name="a-uyrjvzbbweef" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                        </div>
                                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                    </div><iframe style="display: none;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
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