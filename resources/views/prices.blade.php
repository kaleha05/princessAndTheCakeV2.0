@extends('layouts.app')
@section('content')

    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Price Guide</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="menu.html">Price guide</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--================Recipe Menu list Area =================-->
    <section class="price_list_area p_100">
        <div class="container">
            <div class="price_list_inner">
                <div class="single_pest_title">
                    <h2>Our Price List</h2>
                    <p>The list below contains the base prices for our cakes. Please note that these prices do not include delivery or decorations such as cake toppers and florals. Every cake is customised with different sets of skill and time. Please contact us for a detailed quote. More sizes are available on request</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Cupcakes</h4>
                                <p>12 cupcakes<span>Ksh 1200</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Muffins</h4>
                                <p>Minimum of 12<span>Ksh 850</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Single tier cake</h4>
                                <p>1.5 kg<span>Ksh 2900 - 3300</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Single/double tier cake</h4>
                                <p>2 kg<span>Ksh 3200 - 3800</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double tier cake</h4>
                                <p>3 kg<span>Ksh 4400 - 5000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection