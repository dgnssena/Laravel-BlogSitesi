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
