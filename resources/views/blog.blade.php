<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{asset('assets/img/faiza-logo.png')}}"  type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/linearicons/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/flat-icon/flaticon.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/stroke-icon/style.css')}}" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="{{asset('assets/vendors/revolution/css/settings.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/revolution/css/layers.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/revolution/css/navigation.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/animate-css/animate.css')}}" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendors/magnifc-popup/magnific-popup.css')}}" rel="stylesheet">
        
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
   
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
        <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Rev slider js -->
        <script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script src="{{asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <!-- Extra plugin js -->
        <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/vendors/magnifc-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/vendors/datetime-picker/js/moment.min.js')}}"></script>
        <script src="{{asset('assets/vendors/datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('assets/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/comingsoon.js')}}"></script>
        <script src="{{asset('assets/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        
        <script src="{{asset('assets/js/theme.js')}}"></script>
    </body>

</html>