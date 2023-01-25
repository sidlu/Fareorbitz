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
    <img src="{{ asset('images/hotel-banner.jpg') }}" class="img-fluid" alt="">
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
                        <h2 class="sec__title text-center">Hotels</h2>
                    </div>
                    <div class="form-content px-3">
                        <div class="alert alert-success d-none">
                            Message sent successfully. </div>
                        <div class="contact-form-action-2">
                            <form method="post" action="{{ route('hotel.booking') }}" class="row">
                                @csrf
                                <div class="col-lg-12 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-map-marker form-icon"></span>
                                            <input class="form-control" type="text" name="hotels_city" id="hotels_city" value="" required placeholder="City">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="form-control depart" type="text" name="check_in" placeholder="Check-in" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-calendar form-icon"></span>
                                            <input class="form-control depart" type="text" name="check_out" placeholder="Check-out" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box mb-3">
                                        <div class="form-group">
                                            <span class="la la-building form-icon"></span>
                                            <select class="form-control" id="rooms" required name="rooms" placeholder="Rooms">
                                                <option value="" disabled selected>Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 responsive-column">
                                    <div class="input-box mb-2">
                                        <div class="form-group">
                                            <div class="dropdown dropdown-contain">
                                                <button type="button" class="dropdown-toggle dropdown-btn d-flex align-items-center justify-content-center" style="color: #333 !important; font-size:16px" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="la la-user form-icon"></i>
                                                    <span class="" style="color: #333; font-size:18px"><span class="guest_hotels d-block text-center"></span> </span>  &nbsp;&nbsp;Guest
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-wrap">
                                                    <div class="dropdown-item">
                                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>
                                                                <i class="la la-user"></i> Adults
                                                            </label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <input type="text" name="hotel_adults" id="fadults2" value="2" class="qtyInput_hotels">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="qty-box d-flex align-items-center justify-content-between">
                                                            <label>
                                                                <i class="la la-female"></i> Childs
                                                            </label>
                                                            <div class="qtyBtn d-flex align-items-center">
                                                                <input type="text" name="hotel_childs" id="fchilds2" value="0" class="qtyInput_hotels">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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