@extends('layouts.app')
@section('content')

	<!--================Slider Area =================-->
	<section class="main_slider_area">
		<div id="main_slider" class="rev_slider" data-version="5.3.1.6">
			<ul>
				<li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
					data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
					data-thumb="img/home-slider/slider-1.jpg" data-rotate="0" data-saveperformance="off"
					data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5=""
					data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('assets/img/banana-muffin1.jpeg')}}" alt="" data-bgposition="center center" data-bgfit="cover"
						data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

					<!-- LAYER NR. 1 -->
					<div class="slider_text_box">
						<div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']"
							data-lineheight="['80','80','80','50','40']" data-width="['800','800','800','500']"
							data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							data-textAlign="['left','left','left','left']">Chocolate peanut butter cupcakes</div>

						<div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']"
							data-lineheight="['28','28','28','28']" data-width="['640','640','640','640','350']"
							data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
							data-transform_idle="o:1;"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
							Peanut butter lovers in the house, this one’s for you. Sometimes peanut butter on bread just
							isn’t enough. So why not try ...
						</div>

						<div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']"
							data-lineheight="['46','46','46','46']" data-width="none" data-height="none"
							data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
							<a class="main_btn" href="{{url('blog/4')}}">See the recipe</a>
						</div>
					</div>
				</li>
				<li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
					data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
					data-thumb="img/home-slider/slider-2.jpg" data-rotate="0" data-saveperformance="off"
					data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5=""
					data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<!-- MAIN IMAGE -->
					<img src="{{asset('assets/img/chocpb2.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover"
						data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
					<!-- LAYERS -->
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<div class="slider_text_box">
						<div class="tp-caption tp-resizeme first_text" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['175','175','125','165','160']" data-fontsize="['65','65','65','40','30']"
							data-lineheight="['80','80','80','50','40']" data-width="['800','800','800','500']"
							data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
							data-textAlign="['left','left','left','left']">Sugar free banana <br> muffins</div>

						<div class="tp-caption tp-resizeme secand_text" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['345','345','300','300','250']" data-fontsize="['20','20','20','20','16']"
							data-lineheight="['28','28','28','28']" data-width="['640','640','640','640','350']"
							data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="on"
							data-transform_idle="o:1;"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
							Who said that sugarless goodies have to be tasteless? Well, I fell in love with these
							muffins at first bite. I’ve never really been a fan of...
						</div>

						<div class="tp-caption tp-resizeme slider_button" data-x="['left','left','left','15','15']"
							data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
							data-voffset="['435','435','390','390','360']" data-fontsize="['14','14','14','14']"
							data-lineheight="['46','46','46','46']" data-width="none" data-height="none"
							data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
							data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
							<a class="main_btn" href="{{url('blog/3')}}">See the recipe</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!--================End Slider Area =================-->

	<!--================Welcome Area =================-->
	<section class="welcome_bakery_area">
		<div class="container">
			<div class="cake_feature_inner">
				<div class="cake_feature_slider owl-carousel">
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/cakesicle1.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/newCupcake2.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/cakesicle2.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/newCupcake3.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/cakesicle3.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/newCupcake4.jpg')}}" alt="">
						</div>
					</div>
					<div class="item">
						<div class="cake_img">
							<img src="{{asset('assets/img/cakesicle4.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

	<!--================Discover Menu Area =================-->
	<section class="discover_menu_area">
		<div class="discover_menu_inner">
			<div class="container">
				<div class="main_title">
					<h2>Our prices</h2>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="discover_item_inner">
							<div class="discover_item">
								<h4>Cakes</h4>
								<p>Your choice of flavour(s)<span>From Ksh 1200</span></p>
							</div>
							<div class="discover_item">
								<h4>Cupcakes</h4>
								<p>A minimum of 12<span>Ksh 1100</span></p>
							</div>
							<div class="discover_item">
								<h4>Treatboxes</h4>
								<p>Seasonal treatboxes <span>Ksh 950</span></p>
							</div>
						</div>
					</div>
				</div>
				<a class="pink_more" href="{{url('prices')}}">See all</a>
			</div>
		</div>
	</section>
	<!--================End Discover Menu Area =================-->

	<!--================Client Says Area =================-->
	<section class="client_says_area p_100">
		<div class="container">
			<div class="client_says_inner">
				<div class="c_says_title">
					<h2>What Our Clients Say</h2>
				</div>
				<div class="client_says_slider owl-carousel">
					<div class="item">
						<div class="media">
							<div class="media-body">
								<p>"I absolutely loved everything when I received my order. It came as a surprise and my family was all so grateful. The cake was amazing. Definitely my forever cake person!! "
								</p>
								<h5>- Patricia Ngunya</h5>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="media">
							<div class="media-body">
								<p>"Finally found a strawberry cake filled with so much flavour! Your strawberry cake gets my award. "
								</p>
								<h5>- Ian</h5>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="media">
							<div class="media-body">
								<p>"I simply love the cakes. What makes me appreciate them is the fact that theu actually taste good.love love chocolate mint & orange!!!!!"
								</p>
								<h5>- Awa</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Client Says Area =================-->

	<!--================Latest News Area =================-->
	<section class="latest_news_area p_100">
		<div class="container">
			<div class="main_title">
				<h2>Blog</h2>
			</div>
			<div class="row latest_news_inner">
				<div class="col-lg-4 col-md-6">
					<div class="l_news_item">
						<div class="l_news_img">
							<img class="img-fluid" src="{{asset('assets/img/banana-muffin1.jpeg')}}" alt="">
						</div>
						<div class="l_news_text">
							<a href="#">
								<h5></h5>
							</a>
							<a href="{{url('blog/3')}}">
								<h4>Sugar-free banana muffins</h4>
							</a>
							<p>Who said that sugarless goodies have to be tasteless? Well, I fell in love with these muffins at first bite. I’ve never really been a fan of...</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="l_news_item">
						<div class="l_news_img">
							<img class="img-fluid" src="{{asset('assets/img/sugar-cookies2.jpeg')}}" alt="">
						</div>
						<div class="l_news_text">
							<a href="#">
								<h5></h5>
							</a>
							<a href="{{url('blog/7')}}">
								<h4>Christmas sugar cookies</h4>
							</a>
							<p>Sugar cookies can be an all year round type of cookie but oh boy! They just get me as soon as December starts. It’s my tradition for...</p>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-6">
					<div class="l_news_item">
						<div class="l_news_img">
							<img class="img-fluid" src="{{asset('assets/img/chocpb2.jpg')}}" alt="">
						</div>
						<div class="l_news_text">
                            <a href="#">
								<h5></h5>
							</a>
							<a href="{{url('blog/4')}}">
								<h4>Chocolate Peanut Butter Cupcakes</h4>
							</a>
							<p>Peanut butter lovers in the house, this one’s for you. Sometimes peanut butter on bread just isn’t enough. So why not try them on  ....</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Latest News Area =================-->

@endsection