@extends('layouts.app')
@section('content')

    <!--================End Main Header Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>{{ ucfirst($post->title) }}</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="single-blog.html">Recipes</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Blog Main Area =================-->
    <section class="main_blog_area p_100">
        <div class="container">
            <div class="row blog_area_inner">
                <div class="col-lg-12">
                    <div class="main_blog_inner single_blog_inner">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="img/banana-muffin1.jpeg" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">{{ ucfirst($post->created_at) }}</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By :  Admin</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#"><h4>{{ ucfirst($post->title) }}</h4></a>
                                <p>{!! $post->body !!}</p>
                            </div>
                        </div>
                        <div class="s_comment_list">
                            <h3 class="cm_title_br">Comments 4</h3>
                            <div class="s_comment_list_inner">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/comment/comment-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Michale Joe</h4></a>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <div class="date_rep">
                                            <a href="#">Nov 27 2017</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/comment/comment-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Michale Joe</h4></a>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <div class="date_rep">
                                            <a href="#">Nov 27 2017</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/comment/comment-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Michale Joe</h4></a>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <div class="date_rep">
                                            <a href="#">Nov 27 2017</a>
                                            <a href="#">Reply</a>
                                        </div>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="img/comment/comment-1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <a href="#"><h4>Michale Joe</h4></a>
                                                <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non.</p>
                                                <div class="date_rep">
                                                    <a href="#">Nov 27 2017</a>
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/comment/comment-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="#"><h4>Merry John</h4></a>
                                        <p>Duis aute irure dolor in reprehenderit in vol uptate velit esse cillum dolore eu fugiat nulla pari atur. Excepteur sint occaecat cupidatat non proid pent.</p>
                                        <div class="date_rep">
                                            <a href="#">Nov 27 2017</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="s_comment_area">
                            <h3 class="cm_title_br">Leave a Comment</h3>
                            <div class="s_comment_inner">
                                <form class="row contact_us_form" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Wrtie message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" value="submit" class="btn order_s_btn form-control">submit now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Blog Main Area =================-->
    
@endsection