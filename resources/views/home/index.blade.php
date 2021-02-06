@php
   $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp


@extends('layouts.home')

@section('title',$setting->title)
@section('description')
    {{$setting->description}}

@endsection

@section('keywords',$setting->keywords)

@section('content')

<!-- Subscribe section --
<section class="pycenter">
    <div class="col-lg-6 position-relative py-4"><img class="subscribe-img" src="{{ asset('assets')}}/img/subscribe-img-1.jpg" alt=""><img class="subscribe-img" src="{{ asset('assets')}}/img/subscribe-img-2.jpg" alt=""></div>
    <div class="col-lg-6-5">
        <div class="container py-4">
            <div class="row align-items-">
            <h2>Best money saving - Travel tips</h2>
            <p class="text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quidem facere aliquam, delectus, incidunt ipsum fugit deserunt ducimus quibusdam consequuntur quos numquam ipsa suscipit animi dolore. Est beatae inventore voluptas.</p>
            <form action="#">
                <div class="row">
                    <div class="form-group col-lg-8">
                        <input class="form-control" type="email" name="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group col-lg-4">
                        <button class="btn btn-dark btn-block" type="submit">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>
-->
<!-- Top categories section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <header class="mb-5 text-center">
            <h2>Top categories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
        </header>
        <div class="row text-center">
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#food-1"> </use>
                    </svg>
                    <h3 class="h5">Restaurants</h3>
                    <p class="text-muted text-small">3 Destinations</p></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#paper-bag-1"> </use>
                    </svg>
                    <h3 class="h5 mb-1">Markets</h3>
                    <p class="text-muted text-small">7 Destinations</p></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#special-price-1"> </use>
                    </svg>
                    <h3 class="h5 mb-1">Low budget</h3>
                    <p class="text-muted text-small">2 Destinations</p></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#movie-camera-1"> </use>
                    </svg>
                    <h3 class="h5 mb-1">Cinemas</h3>
                    <p class="text-muted text-small">4 Destinations</p></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#beach-1"> </use>
                    </svg>
                    <h3 class="h5 mb-1">Beaches</h3>
                    <p class="text-muted text-small">5 Destinations</p></a></div>
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4 mb-lg-0"><a class="reset-anchor d-block" href="listing.html">
                    <svg class="svg-icon mb-3 svg-icon-big svg-icon-light text-primary">
                        <use xlink:href="#camping-1"> </use>
                    </svg>
                    <h3 class="h5 mb-1">Camping</h3>
                    <p class="text-muted text-small">6 Destinations</p></a></div>
        </div>
    </div>
</section>
<!-- Sponsors section-->
<section class="py-5">
    <div class="container py-4">
        <header class="text-center mb-4">
            <h2>Our sponsors</h2>
        </header>


        <div class="owl-carousel sponsors-slider"><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-1.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-2.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-3.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-4.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-5.svg" alt=""></a><a href="#"><img class="d-block mx-auto my-3 sponsor" src="{{ asset('assets')}}/img/brand-6.svg" alt=""></a>
        </div>
    </div>
</section>
@endsection
