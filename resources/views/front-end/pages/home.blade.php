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
                <h2>@if(!empty($data['about'])){{ $data['about']->translate($locale)->title }}@else About us @endif</h2>
                <div class="car-icon"><img src="{{ asset("assets/img/cars.png") }}" alt="car"></div>
            </div>
            @if(!empty($data['about']))
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
            @endif
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
    <div class="count-down-area @if(empty($data['statistics_photo'])) count-bg @endif jarallax" @if(!empty($data['statistics_photo'])) style="background-image: url({{ Voyager::image($data['statistics_photo']->photo) }})" @endif>
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
    @if($data['auto_body'][0])
    <!-- Start Auto Body Services Area -->
    <div class="content-block-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="body-service-boxed-item auto-body-bg" style="background-image: url({{ Voyager::image( $data['auto_body'][0]->photo) }});"></div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-0 col-md-8 offset-md-2">
                            <div class="section-title text-center">
                                <h2>{{ $data['auto_body'][0]->translate($locale)->title }}</h2>
                                <div class="car-icon"><img src="assets/img/cars.png" alt="car"></div>
                                <p>{{ $data['auto_body'][0]->translate($locale)->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if($data['auto_body'][1] && count($data['auto_body'][1]) > 0)
                        @foreach($data['auto_body'][1] as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="services-list">
                                <ul>
                                    @foreach($item as $value)
                                    <li>{{ $value->translate($locale)->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="col-lg-8 text-center">
                        <a href="{{ route('products') }}" class="btn theme-btn">@lang('translate.look_at')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Auto Body Services Area -->
    @endif
    @if(count($data['partner']) > 0)
        <!-- Start Our Parners Area -->
        <div class="content-block-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        <div class="section-title text-center">
                            <h2>Our Partner</h2>
                            <div class="car-icon"><img src="{{ asset("assets/img/cars.png") }}" alt="car"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="partner-slides">
                    @foreach($data['partner'] as $partner)
                    <div class="single-partner-slide">
                        <a class="partners-logo" href="{{ $partner->link }}" target="_blank">
                            <img src="{{ Voyager::image($partner->photo) }}" alt="Image Description">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Our Parners Area -->
    @endif

@endsection
