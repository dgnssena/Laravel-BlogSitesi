@extends('layouts.home')

@section('title','Laravel Blog Sitesi')
@section('description')
    En samimi blog...
@endsection

@section('content')
    @include('home._category')
    <!-- Divider Section -->
    <section class="py-5">
        <div class="container py-4">
            <!-- Home listing -->
            <div class="row align-items-stretch bg-full-left">
                <div class="col-lg-6 pr-lg-0 order-2 order-lg-1">
                    <div class="h-100 bg-light d-flex align-items-center">
                        <div class="py-5 pr-4 pl-3 pl-lg-0">
                            <p class="text-primary font-weight-bold small text-uppercase mb-2">Travel guide</p>
                            <h3 class="h4"> <a class="text-reset" href="{{asset('assets')}}/post.html"/>Book to inspire your travel</a></h3>
                            <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
                            <p class="text-muted text-small mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi quam nobis autem voluptate illum beatae atque suscipit inventore tenetur, perferendis facere sequi optio laudantium obcaecati aliquam, dolores ea. Pariatur, repellendus.</p>
                            <ul class="list-inline small text-uppercase mb-0">
                                <li class="list-inline-item align-middle"><img class="rounded-circle shadow-sm" src="{{asset('assets')}}/img/person-1.jpg" alt="" width="30"/></li>
                                <li class="list-inline-item mr-0 text-gray align-middle">By </li>
                                <li class="list-inline-item align-middle mr-0"><a class="font-weight-bold reset-anchor" href="#">Jason Doe</a></li>
                                <li class="list-inline-item text-gray align-middle mr-0">|</li>
                                <li class="list-inline-item text-gray align-middle">Jan, 2019</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-lg-0 order-1 order-lg-2"><a class="d-block h-100 bg-center bg-cover" href="post.html" style="background: url({{asset('assets')}}/img/travel-home-divider.jpg)"/></div>
            </div>
        </div>
    </section>


    </section>
    <!-- Subscribe section -->
    <section class="py-5">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-6 position-relative py-4"><img class="subscribe-img" src="img/subscribe-img-1.jpg" alt=""><img class="subscribe-img" src="img/subscribe-img-2.jpg" alt=""></div>
                <div class="col-lg-6">
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

@endsection
