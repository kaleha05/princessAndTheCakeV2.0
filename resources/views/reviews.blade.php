@extends('layouts.app')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Reviews</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="service.html">Reviews</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->
    
    <!--================Testimonials item Area =================-->
    <section class="testimonials_item_area ">
        <div class="container">
            <div class="testi_item_inner">
                @forelse($reviews as $review)
                <div class="media">
                    <div class="media-body">
                        <p>{{ $review->comment }}</p>
                        <h5> -{{ $review->author}} </h5>
                    </div>
                </div>
                @empty
                <p class="text-warning">No blog reviews available</p>
                @endforelse
            </div>
        </div>
    </section>
    <!--================End Testimonials item Area =================-->  

    <section class="main_blog_area p_100">
        <div class="container">
            <div class="row blog_area_inner">
                <div class="col-lg-12">
                    <div class="main_blog_inner single_blog_inner">
                        <div class="s_comment_area">
                            <h3 class="cm_title_br">Submit a Review</h3>
                            <div class="s_comment_inner">
                                <form class="row contact_us_form" action="/save" method="post" id="contactForm" novalidate="novalidate">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="post_id" value="1" />
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie a review"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn order_s_btn form-control">Submit now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection