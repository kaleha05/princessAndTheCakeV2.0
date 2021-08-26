@extends('layouts.app')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Classes</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="special.html">Classes</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->
    
    <!--================Special Area =================-->
    <section class="special_area p_100">
        <div class="container">
            <div class="special_item_inner">
                <div class="specail_item">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="s_left_img">
                                <img class="img-fluid" src="{{asset('assets/img/special/special-1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="special_item_text">
                                <h4>Kids baking classes</h4>
                                <p>Does your little angel like to stay with you in the kitchen? This is the perfect opportunity for him or her to learn how to bake. Your child will receive one on one training so you do not have to worry about him or her leaving the training without any knowledge. Contact us today to book a slot</p>
                                <a class="pink_btn" href="#">Enroll now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Special Area =================-->
@endsection