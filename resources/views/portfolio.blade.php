@extends('layouts.app')
@section('content')

    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Portfolio</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================Portfolio Area Area =================-->
    <!-- <section class="portfolio_area p_100">
        <div class="container">
            <div class="row grid_portfolio_area imageGallery1">
                @forelse($images as $img)
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{ $img->image }}">
                                <img class="img-fluid" src="{{ $img->image }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-warning">No images available</p>
                @endforelse
            </div>
        </div>
    </section> -->
<!--================End Portfolio Area Area =================--> 
    <section class="portfolio_area p_100">
        <div class="container">
            <div class="row grid_portfolio_area imageGallery1">
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/cakesicle1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/newCupcake2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/cakesicle2.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/newCupcake3.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/cakesicle3.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/newCupcake4.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 cake bakery bread">
                    <div class="portfolio_item">
                        <div class="portfolio_img">
                            <a class="light" href="{{asset('assets/img/cakesicle1.jpg')}}">
                                <img class="img-fluid" src="{{asset('assets/img/cakesicle4.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection