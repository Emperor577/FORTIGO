@extends('front-end.index')

@section('content')

    <!-- Start Breadcumbs Area -->
    <div class="breadcumbs-banner-area @if(empty($data['contact_photo'])) breadcumbs-banner-bg @endif jarallax" @if(!empty($data['contact_photo']))  style="background-image: url({{ Voyager::image($data['contact_photo']->photo) }})" @endif>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>@lang('translate.contact')</h2>
                            <span><a href="{{ route('home') }}">@lang('translate.home')</a> / @lang('translate.contact')</span>
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
            <h2 class="area-title">@lang('translate.contact_info')</h2>
            <div class="row">
                <div class="contact-items col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-location-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>@php $address = explode(',', $data['contact']->address); foreach ($address as $item) {
                                    echo $item.'</br>';
                                } @endphp
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="contact-items col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-telephone-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>@php $phone = explode(',', $data['contact']->phone); foreach ($phone as $item) {
                                echo $item.'</br>';
                            } @endphp</h4>
                        </div>
                    </div>
                </div>

                <div class="contact-items col-md-6 col-lg-4">
                    <div class="media">
                        <div class="media-left">
                            <i class="ion-ios-email-outline"></i>
                        </div>
                        <div class="media-body">
                            <h4>@php $email = explode(',', $data['contact']->email); foreach ($email as $item) {
                                echo $item.'</br>';
                            } @endphp</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form-area">
                <h2 class="area-title">@lang('translate.get_in_touch')</h2>
                <div class="row">
                    <div class="col-md-5 col-lg-4">
                        <div class="contact-img-bg" style="background-image: url({{ Voyager::image($data['contact']->photo) }});"></div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <form method="POST" action="{{ route('contact-form') }}" >
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('translate.name')</label>
                                        <input type="text" class="form-control" id="contact_name" name="name" placeholder="@lang('translate.name')" required="" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('translate.email')</label>
                                        <input type="email" class="form-control" name="email" id="contact_email" placeholder="@lang('translate.email')" required="">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('translate.subject')</label>
                                        <input type="text" class="form-control" name="subject" id="contact_subject" placeholder="@lang('translate.subject')" required="" data-parsley-minlength="4"/>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>@lang('translate.phone')</label>
                                        <input type="text" class="form-control" name="phone" id="contact_phone" placeholder="@lang('translate.phone')" data-parsley-type="integer" data-parsley-minlength="6" data-parsley-type-message="Only numbers" required="" />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>@lang('translate.message')</label>
                                        <textarea id="contact_message" class="form-control" name="message" rows="6" placeholder="@lang('translate.message')" required="" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-minlength-message="Come on! You need to enter at least a 10 character comment.."></textarea>
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LeMly8UAAAAAG8FJH-xbRYPyV825xNA3KzwWtcr"></div>
                                    <div id="contact_send_status"></div>
                                    <button type="submit" class="btn theme-btn">@lang('translate.send')</button>
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
    <iframe src="https://yandex.com/map-widget/v1/?um=constructor%3Aca0f2991e2315445e3fb1ab39c0ac8444c23d102bbfc12b315b1d4f544080828&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
    <!-- Google Map Area -->
@endsection
