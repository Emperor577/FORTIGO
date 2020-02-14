@extends('front-end.index')

@section('content')

    <!-- Start Homepage Slider -->
    <div class="homepage-slides">
        @if(count($data['sliders']) > 1)
        @foreach($data['sliders'] as $slider)
        <div class="swiper-slide" style="background-image: url({{ Voyager::image($slider->img) }});">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="homeslides-hero-content">
                            {!! $slider->translate($locale)->text !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @elseif(count($data['sliders']) === 1)
        @foreach($data['sliders'] as $slider)
            <div class="swiper-slide" style="background-image: url({{ Voyager::image($slider->img) }});">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="homeslides-hero-content">
                                {!! $slider->translate($locale)->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <div class="swiper-slide slide-bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="homeslides-hero-content">
                            <h1>With over 25 years of experience in auto services work</h1>
                            <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide slide-bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="homeslides-hero-content">
                            <h1>With over 25 years of experience in auto services work</h1>
                            <p>Value is a service of trust. The trust your customers have in you. The trust you have in your people, strategies and systems. And always delivering on expectation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!-- End Homepage Slider -->

    <!-- Start Top Banner Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{ $data['about']->translate($locale)->title }}</h2>
                <div class="car-icon"><img src="{{ asset("assets/img/cars.png") }}" alt="car"></div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner-man-boxed" style="background-image: url({{ Voyager::image($data['about']->photo ) }})"></div>
                </div>
                <div class="col-lg-7">
                    <div class="banner-boxed">
                        {!! $data['about']->translate($locale)->text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Banner Area -->

    <!-- Start Why Choose Us Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2><span>Why choose</span> us</h2>
                        <div class="car-icon"><img src="{{ asset("assets/img/cars.png") }}" alt="car"></div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                    </div>
                </div>
            </div>
            @if(count($data['whyChoose_2']) > 0)
            <div class="row">
                @foreach($data['whyChoose_2'] as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="boxed-item">
                        <span class="sirial-number">@if($item->id < 10)0{{ $item->id }}@else{{ $item->id }}@endif</span>
                        <span class="single-boxed"><i class="{{ $item->icon }}"></i></span>
                        <h3>{{ $item->translate($locale)->title }}</h3>
                        {!! $item->translate($locale)->description !!}
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
    <!-- End Why Choose Us Area -->
    @if(count($data['testimonials']) > 0)
    <!-- Start Our testimonials Area -->
    <div class="content-block-area gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="section-title text-right">
                        <h3>our clients</h3>
                        <h2><span>CLIENTS THAT TRUST</span> OUR SERVICES</h2>
                    </div>
                    <div class="testimonials-car-boxed">
                        <img src="assets/img/testimonial-car.png" alt="Image">
                    </div>
                </div>
                @foreach($data['testimonials'] as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="testimonial-item">
                        <div class="testimonial-single-item">
                            {!! $item->text !!}
                            <ul>
                                @if(isset($item->rate))
                                @foreach($item->rate as $val)
                                <li><i class="fa fa-star"></i></li>
                                @endforeach
                                @else
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                @endif
                            </ul>

                        </div>

                        <div class="quotation-profile">
                            <img src="{{ Voyager::image($item->photo) }}" alt="Image">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Our testimonials Area -->
    @endif
    @if(count($data['statistics']) > 0)
    <!-- Start Count-Down Area -->
    <div class="count-down-area count-bg jarallax">
        <div class="container">
            <div class="row">
                @foreach($data['statistics'] as $statistic)
                <div class="col-lg-3 col-md-6">
                    <div class="count-down-boxed text-center" style="height: 100%">
                        <span class="count-icon"><i class="{{ $statistic->icon }}"></i> <span class="count-number counter">{{ number_format($statistic->count) }}</span></span>
                        <h3 class="count-info">{{ $statistic->title }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Count-Down Area -->
    @endif
    <!-- Start Auto Body Services Area -->
    <div class="content-block-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="body-service-boxed-item auto-body-bg"></div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2">
                            <div class="section-title text-center">
                                <h2><span>Auto Body</span> services</h2>
                                <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="services-list">
                                <ul>
                                    <li>Aluminum Repair</li>
                                    <li>Paintless Dent Repair</li>
                                    <li>Auto Glass Repair</li>
                                    <li>Auto Painting</li>
                                    <li>Windshield Repairs</li>
                                    <li>Auto Paint Repair</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="services-list">
                                <ul>
                                    <li>Fender Repair</li>
                                    <li>Hail Damage Repair</li>
                                    <li>Towing Service</li>
                                    <li>Wheel Alignment</li>
                                    <li>Wheel Rim Repair</li>
                                    <li>Collision Repair</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 text-center">
                        <a href="#" class="btn theme-btn">request appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Auto Body Services Area -->

    <!-- Start Our Parners Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="section-title text-center">
                        <h2><span>Our</span> Partner</h2>
                        <div class="car-icon"><img src="{{ asset("assets/img/cars.png") }}" alt="car"></div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
            </div>
            <div class="partner-slides">
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-1.png") }}" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-2.png") }}" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-3.png") }}" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-4.png") }}" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-5.png") }}" alt="Image Description"></a>
                </div>
                <div class="single-partner-slide">
                    <a class="partners-logo" href="#"><img src="{{ asset("assets/img/partner-6.png") }}" alt="Image Description"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Parners Area -->

@endsection
