@extends('front-end.index')

@section('content')
    <!-- Start Breadcumbs Area -->
    <div class="breadcumbs-banner-area @if(empty($data['product_photo'])) breadcumbs-banner-bg @endif jarallax" @if(!empty($data['product_photo'])) style="background-image: url({{ Voyager::image($data['product_photo']->photo) }})" @endif>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>@lang('translate.products')</h2>
                            <span><a href="{{ route('home') }}">@lang('translate.home')</a> / @lang('translate.products')</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcumbs Area -->

    <!-- Start Services Area -->
    <div class="content-block-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="shorting-menu">
                        <button type="button" data-filter="all">All</button>
                        @if(count($data['category']) > 0)
                        @foreach($data['category'] as $category)
                        <button type="button" data-filter=".{{ $category->slug }}">{{ $category->translate($locale)->name }}</button>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="row shorting">
                @if(count($data['category']) > 0)
                    @foreach($data['products'] as $product)
                    <div class="col-md-6 col-lg-4 mix @php foreach ($product->categories as $category) { echo $category->slug.' '; } @endphp">
                    <div class="gallery-item">
                        <div class="box">
                            <img src="{{ Voyager::image($product->photo) }}" alt="Image">
                            <div class="box-content">
                                <h3 class="title">{{ $product->translate($locale)->name }}</h3>
                                <span class="post">{{ $product->translate($locale)->description }}</span>
                                <ul class="icon">
                                    <li><a class="lightbox" href="{{ Voyager::image($product->photo) }}"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- End Services Area -->

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
