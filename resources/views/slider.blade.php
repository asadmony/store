{{-- slider --}}
{{-- <div style="background-color: rgba(0, 0, 224, 0.383);">
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/slider/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider/2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/slider/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div> --}}
<div class="container">
<div class="row">
                    <div class="col-lg-12">
                        <div class="home-slider owl-carousel owl-theme float-left" data-toggle="owl" data-owl-options="{
                            'items' : 1,
                            'margin' : 0,
                            'nav' : true,
                            'dots' : false
                        }">
                            <div class="home-slide" style="background-image: url('assets/images/slider/home_slide1.jpg');">
                                <div class="slide-content">
                                    <h2 class="text-right">electronic<br>deals</h2>
                                    <div class="skew-box-group">
                                        <span class="skew-box">Exclusive COUPON</span>
                                        <h3 class="sale-off skew-box"><span>$100</span>off</h3>
                                    </div>
                                    <button class="btn">View All Now</button>
                                </div>
                                <p>* Only 200 Available</p>
                            </div>
                            <div class="home-slide" style="background-image: url('assets/images/slider/home_slide2.jpg');">
                                <div class="slide-content content-left">
                                    <h2 class="text-left">Top brands<br>smartphones</h2>
                                    <div class="skew-box-group">
                                        <span class="skew-box">STARTING FROM</span>
                                        <span class="skew-box">$199</span>
                                    </div>
                                    <button class="btn">View All Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div class="product-slider owl-carousel owl-theme" data-toggle="owl">
                            <div class="product-slide">
                                <h3>Flash Deals</h3>
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-deal.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">1080p Wifi IP Camera</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="count-down-panel text-center">
                                    <h4>OFFER ENDS IN:
                                        <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/01/01 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                                    </h4>
                                </div>
                            </div>
                            <div class="product-slide">
                                <h3>Flash Deals</h3>
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-deal.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">1080p Wifi IP Camera</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="count-down-panel">
                                    <h4>OFFER ENDS IN:
                                        <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/12/31 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                                    </h4>
                                </div>
                            </div>
                            <div class="product-slide">
                                <h3>Flash Deals</h3>
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-deal.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">1080p Wifi IP Camera</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="count-down-panel">
                                    <h4>OFFER ENDS IN:
                                        <span class="countdown" data-plugin-countdown="" data-plugin-options="{'date': '2020/12/31 00:00:00', 'numberClass': 'font-weight-extra-bold'}"><span class="days"><span class=" font-weight-extra-bold">237</span> DAY<div class="d-inline text-uppercase">s,</div></span> <span class="hours"><span class=" font-weight-extra-bold">20:</span> </span> <span class="minutes"><span class=" font-weight-extra-bold">26:</span> </span> <span class="seconds"><span class=" font-weight-extra-bold">06</span> </span> </span>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
</div>
{{-- /slider  --}}
