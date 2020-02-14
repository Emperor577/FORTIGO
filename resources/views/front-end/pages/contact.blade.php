@extends('front-end.index')

@section('content')

    <!-- Start Breadcumbs Area -->
    <div class="breadcumbs-banner-area breadcumbs-banner-bg jarallax">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>Contact us</h2>
                            <span><a href="index.html">home</a> / Contact us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcumbs Area -->
    <!-- Contact Form Area -->
    <div class="content-block-area contact-us">
        <div class="container">
            <h2 class="area-title">Contact Info</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-location-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>1828 Johns Drive Glenview, IL 60025</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-telephone-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>(224) 228-8475 <br> (224) 228-8476</h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-email-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>support@carservice.com <br> admin@carservice.com</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-area">
                <h2 class="area-title">Get In Touch</h2>
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="contact-img-bg"></div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <form id="contatc_form" method="POST" action="assets/include/sendmail.php" name="myform">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="contact_name" name="name" placeholder="Name" required="" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" id="contact_email" placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control" name="sub" id="contact_subject" placeholder="Subject" required="" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="contact_phone" placeholder="Phone Number" data-parsley-type="integer" data-parsley-minlength="6" data-parsley-type-message="Only numbers" required="" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea id="contact_message" class="form-control" name="message" rows="6" placeholder="Message" required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.."></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeMly8UAAAAAG8FJH-xbRYPyV825xNA3KzwWtcr"></div>
                                    <div id="contact_send_status"></div>
                                    <button type="submit" class="btn theme-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Form Area -->

    <!-- Google Map Area -->
    <div id="map"></div>
    <!-- Google Map Area -->
@endsection
