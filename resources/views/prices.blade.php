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
                    <p>The list below contains the base prices for our cakes. Please note that these prices do not include delivery or decorations such as cake toppers and florals. Every cake is customised with different sets of skill and time. Please contact us for a detailed quote.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Single tier cake</h4>
                                <p>Mini cake<span>Ksh 1200 - 1400</span></p>
                                <p>1 kg<span>Ksh 1900 - 2400</span></p>
                                <p>1.5 kg<span>Ksh 2300 - 2900</span></p>
                                <p>2 kg<span>Ksh 3000 - 3600</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Double tier cake</h4>
                                <p>2 kg<span>Ksh 3000 - 3600</span></p>
                                <p>2.5 kg<span>Ksh 3100 - 3800</span></p>
                                <p>3 kg<span>Ksh 3300 - 4000</span></p>
                                <p>3.5 kg<span>Ksh 3500 - 4200</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="discover_item_inner">
                            <div class="discover_item">
                                <h4>Treatboxes</h4>
                                <p>Mini treat box<span>Ksh 950</span></p>
                                <p>Medium treat box<span>Ksh 1050</span></p>
                                <p>Mega treat box<span>Ksh 1500</span></p>
                            </div>
                            <div class="discover_item">
                                <h4>Muffins and cupcakes</h4>
                                <p>Muffins (min 12)<span>Ksh 850</span></p>
                                <p>Jumbo muffins (min 12)<span>Ksh 950</span></p>
                                <p>Cupcakes (min 12)<span>Ksh 1100</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection