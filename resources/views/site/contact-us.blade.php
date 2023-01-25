@include('site.header')
<section class="booking-area padding-top-100px padding-bottom-30px">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-7">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="section-heading pb-3">
                            <h2 class="sec__title">We'd love to hear from you</h2>
                        </div>
                        <p class="font-size-15">Send us a message and we'll respond as soon as possible</p>
                    </div>
                    <div class="form-content ">
                        <div class="alert alert-success d-none">
                            Message sent successfully. </div>
                        <div class="contact-form-action-2">
                            <form method="post" action="{{ route('enquiry') }}" class="row">
                                @csrf
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Your Name</label>
                                        <div class="form-group">
                                            <span class="la la-user form-icon"></span>
                                            <input class="form-control" type="text" name="name" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 responsive-column">
                                    <div class="input-box">
                                        <label class="label-text">Your Email</label>
                                        <div class="form-group">
                                            <span class="la la-envelope-o form-icon"></span>
                                            <input class="form-control" type="email" name="email" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <label class="label-text">Message</label>
                                        <div class="form-group">
                                            <span class="la la-pencil form-icon"></span>
                                            <textarea class="message-control form-control" name="message" rows="5" placeholder="Message"></textarea>
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
            </div> -->
            <div class="col-lg-12">
                <div class="form-box">
                    <div class="form-title-wrap">
                        <div class="section-heading pb-3">
                            <h2 class="sec__title">Contact Us</h2>
                        </div>
                    </div>
                    <div class="form-content">
                        <div class="address-book">
                            <div class="row">
                                <div class="col-md-4 d-flex">
                                    <div>
                                        <i class="la la-map-marker icon-element d-flex align-items-center justify-content-center"></i>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="title"> Address</h5>
                                        <p>
                                            <b>India:</b> 3799/7,Laxman Vihar Phase II,Gurgaon-122001(HR)<br>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4  d-flex">
                                    <div>
                                        <i class="la la-phone icon-element d-flex align-items-center justify-content-center"></i>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="title">Phone</h5>
                                        <p>+1-888-926-8555, +91-9017925544 </p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div>
                                        <i class="la la-envelope-o icon-element d-flex align-items-center justify-content-center"></i>
                                    </div>
                                    <div class="ms-2">
                                        <h5 class="title">Email</h5>
                                        <p>promotionalfare@fareorbitz.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-4 -->
        </div>
    </div>
</section>
@include('site.footer')