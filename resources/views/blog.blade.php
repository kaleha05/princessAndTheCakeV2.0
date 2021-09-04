@include('layouts.includes.header')
   
    <!--================End Main Header Area =================-->
    <!-- <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Blog</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="blog.html">Blog</a></li>
                </ul>
            </div>
        </div>
    </section> -->
    <!--================End Main Header Area =================-->
    
    <!--================Blog Main Area =================-->
    <!-- <section class="main_blog_area p_100">
        <div class="container">
            <div class="blog_area_inner">
                <div class="main_blog_column row">
                    @forelse($posts as $post)
                    <div class="col-lg-6">
                        <div class="blog_item">
                            <div class="blog_img">
                                <img class="img-fluid" src="{{ $post->image }}" alt="">
                            </div>
                            <div class="blog_text">
                                <div class="blog_time">
                                    <div class="float-left">
                                        <a href="#">{{ ucfirst($post->created_at) }}</a>
                                    </div>
                                    <div class="float-right">
                                        <ul class="list_style">
                                            <li><a href="#">By :  Faiza</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="./blog/{{ $post->id }}"><h4>{{ ucfirst($post->title) }}</h4></a>
                                <p>{{ ucfirst($post->Description) }}</p>
                                <a class="pink_more" href="./blog/{{ $post->id }}">Read more</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p class="text-warning">No blog Posts available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section> -->
    <!--================End Blog Main Area =================-->

            <!--================Comming Soon Area =================-->
		<section class="coming_soon_area">
            <div class="coming_soon">
                <div class="welcome-text-area">
                    <div class="container">
                        <h2 class="coming-header">Coming Soon</h2>
                        <div id="clockdiv" class="coming_soon_counter">
                            <div class="counter-item">
                                <span class="days"></span>
                                <div class="smalltext">Days</div>
                            </div>
                            <div class="counter-item">
                                <span class="hours"></span>
                                <div class="smalltext">Hours</div>
                            </div>
                            <div class="counter-item">
                                <span class="minutes"></span>
                                <div class="smalltext">Minutes</div>
                            </div>
                            <div class="counter-item">
                                <span class="seconds"></span>
                                <div class="smalltext">Seconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Footer Area =================-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/comingsoon.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>