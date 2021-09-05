@extends('layouts.app')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Flavours</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="cakes.html">Flavours</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================flavours Main Area =================-->
    <section class="our_cakes_area p_100">
        <div class="container">
            <div class="cake_feature_row row">
                @forelse ($entries as $entry)
                    @switch($entry->id)
                    @case(5)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/raspberry.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i>{{ $entry->likes}}</h4>
                                <h3>Raspberry orange with raspberry filling</h3>
                                <a class="pest_btn" href="./flavours/5" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(15)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/lemon.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i> {{ $entry->likes}}</h4>
                                <h3>Lemon blueberry with blueberry filling</h3>
                                <a class="pest_btn" href="./flavours/15" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(35)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/chocolate-caramel.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i> {{ $entry->likes}}</h4>
                                <h3>Chocolate caramel</h3>
                                <a class="pest_btn" href="./flavours/35" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(45)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/vanilla.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i> {{ $entry->likes}}</h4>
                                <h3>Fluffy vanilla with strawberry filling</h3>
                                <a class="pest_btn" href="./flavours/45" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(55)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/strawberry.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i> {{ $entry->likes}}</h4>
                                <h3>Pink strawberry and Oreo crunch</h3>
                                <a class="pest_btn" href="./flavours/55" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @case(65)
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="cake_feature_item">
                            <div class="cake_img">
                                <img src="{{asset('assets/img/nutella.jpg')}}" alt="">
                            </div>
                            <div class="cake_text">
                                <h4><i class="fa fa-heart"></i> {{ $entry->likes}}</h4>
                                <h3>Red velvet N' Nutella</h3>
                                <a class="pest_btn" href="./flavours/65" @if($disableButton) disabled='disabled' @endif >Like</a>
                            </div>
                        </div>
                    </div>
                        @break
                    @default
                        <p>No flavours</p>
                @endswitch  
                @empty
                    
                @endforelse
            </div>
        </div>
    </section>
    <!--================End flavours Main Area =================-->
@endsection
