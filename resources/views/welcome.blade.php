@extends('layouts.app')
@push('meta')

@endpush
@push('title')
<title>Home</title>
@endpush
@push('css')
<style>
    .catcard{
        width: 10rem;
        box-shadow: 1px 1px 59px #feffff, 1px 1px 0px #35A3DE, 1px 1px 5px #F01D7E;
    }
    .card:hover{
        box-shadow: 0px 0px 5px #feffff, 1px 1px 10px #1d5c7e, 1px 1px 5px #F01D7E;
    }
    @media screen and (min-width: 782px){
        .card:hover {
        transform: scale(1.1);
    }
    }
    .productcard {
        width: 11rem;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        margin-bottom: 1rem;
        text-align: center;
        height: 300px;
        position: relative;
    }
    @media screen and (max-width: 527px){
        .catcard{
            width: 7rem;
            margin: 5px;
        }
        .card-title{
            font-size: 10pt;
        }
        .productcard {
        width: 10.5rem;
        }
    }
    .productcardimg {
        max-height: 160px;
    }

    .cardproductname {
        font-size: medium;
        margin-top: 5px;
        position: absolute;
        bottom: 110px;
        left: 10px;
    }

    .productcardprice {
        color: grey;
        font-size: 18px;
        position: absolute;
        bottom: 25px;
        left: 15px;
    }

    .productcard button {
        position: absolute;
        bottom: 5px;
        left: 0;
        border: none;
        outline: 0;
        padding: 5px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
    }

    .productcard button:hover {
        opacity: 0.7;
        z-index: 99999;
    }

</style>
@endpush

@section('content')


<main class="main home">
    <div class="container">
                @include('slider')

                <section class="service-section mb-4">
                    <div class="col-md-6 col-xl-3">
                        <div class="service-widget">
                            <i class="service-icon icon-shipping"></i>
                            <div class="service-content">
                                <h3 class="service-title">free shipping & return</h3>
                                <p>Free shipping on all orders over $99.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="service-widget">
                            <i class="service-icon icon-money"></i>
                            <div class="service-content">
                                <h3 class="service-title">money back guarantee</h3>
                                <p>100% money back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="service-widget">
                            <i class="service-icon icon-support"></i>
                            <div class="service-content">
                                <h3 class="service-title">online support 24/7</h3>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="service-widget">
                            <i class="service-icon icon-secure-payment"></i>
                            <div class="service-content">
                                <h3 class="service-title">Secure Payment</h3>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-panel">
                    <div class="section-title">
                        <h2>Most Viewed Products</h2>
                    </div>

                    <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                        'margin': 0,
                        'items': 2,
                        'autoplayTimeout': 5000,
                        'dots': false,
                        'nav': true,
                        'responsive': {
                            '576': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items' : 5
                            }
                        }
                    }">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-1.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-2.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-3.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-4.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-5.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-6.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                </section>

                <div class="row row-sm">
                    <div class="col-lg-6">
                        <div class="banner-product bg-grey" style="background-image: url('assets/images/products/product-banner1.jpg');background-position : 50%;">
                            <h2>ACTION <br>CAMERAS</h2>
                            <div class="ml-3 primary-background">
                                <h3 class="skew-box">Starting from</h3>
                                <h4 class="skew-box"><span class=" product-price">$399</span><span class="old-price">$499</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-product bg-grey" style="background-image: url('assets/images/products/product-banner2.jpg');
                            background-position : 48% 10%;">
                            <h2>FOR ALL <br>STYLES</h2>
                            <div class="ml-3 secondary-background">
                                <h3 class="skew-box">Starting from</h3>
                                <h4 class="skew-box"><span class=" product-price">$399</span><span class="old-price">$499</span></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="product-category-panel mb-6">
                    <div class="section-title">
                        <h2>Top Categories</h2>
                    </div>

                    <div class="product-category-intro owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
                        'margin': 0,
                        'items': 2,
                        'autoplayTimeout': 5000,
                        'dots': false,
                        'nav': true,
                        'responsive': {
                            '480': {
                                'items': 3
                            },
                            '576': {
                                'items' : 4;
                            },
                            '768': {
                                'items': 5
                            },
                            '992': {
                                'items' : 6
                            },
                            '1200' : {
                                'items' : 7
                            }
                        }
                    }">
                        <a href="category.html"><i class="icon-category-fashion"></i>Fashion</a>
                        <a href="category.html"><i class="icon-category-electronics"></i>Electronics</a>
                        <a href="category.html"><i class="icon-category-gifts"></i>Gifts</a>
                        <a href="category.html"><i class="icon-category-garden"></i>Garden</a>
                        <a href="category.html"><i class="icon-category-music"></i>Music</a>
                        <a href="category.html"><i class="icon-category-motors"></i>Motors</a>
                        <a href="category.html"><i class="icon-category-furniture"></i>Furniture</a>
                    </div>
                </section>
            </div>

            <section class="bg-grey pt-3 pb-3">
                <div class="container">
                    <section class="product-panel mt-5 mb-5">
                        <div class="section-title mb-2">
                            <h2>Best Sellers on Electronics <a href="#">( View All )</a></h2>
                        </div>

                        <div class="grid margin-2">
                            <div class="grid-item height-x2 col-md-8 col-lg-9 col-xl-5col-2">
                                <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                                    'items' : 1,
                                    'margin' : 0,
                                    'nav' : true,
                                    'dots' : false
                                }">
                                    <img src="assets/images/products/product-1.jpg">
                                    <img src="assets/images/products/product-1.jpg">
                                    <img src="assets/images/products/product-1.jpg">
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-4 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-2.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-4 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-3.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-3 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-4.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-3 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-5.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-3 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-6.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                            <div class="grid-item height-x1 col-md-3 col-6 col-lg-3 col-xl-5col">
                                <div class="product-default inner-quickview inner-icon">
                                    <figure>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-7.jpg">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Product Short Name</a>
                                        </h2>
                                        <div class="price-box">
                                            <span class="old-price">$59.00</span>
                                            <span class="product-price">$49.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <div class="container">
                <section class="product-panel mt-6">
                    <div class="section-title">
                        <h2>Recently Viewed Products</h2>
                    </div>

                    <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                        'margin': 0,
                        'items': 2,
                        'autoplayTimeout': 5000,
                        'dots': false,
                        'nav': true,
                        'responsive': {
                            '576': {
                                'items': 3
                            },
                            '975': {
                                'items': 4
                            },
                            '1200': {
                                'items' : 5
                            }
                        }
                    }">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-13.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-12.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-13.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-14.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-15.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-16.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                </section>

                <div class="home-banner">
                    <div class="image-container">
                        <img src="assets/images/banners/banner.jpg">
                    </div>
                    <div class="info-group">
                        <div class="">
                            <p>check new arrivals</p>
                            <h2>Explore Smartphones</h2>
                        </div>
                        <div class="skew-box-group">
                            <span class="skew-box">Exclusive COUPON</span>
                            <h3 class="sale-off skew-box"><span>$200</span>off</h3>
                        </div>
                        <div class="">
                            <button class="btn">view all now</button>
                        </div>
                    </div>
                </div>

                <section class="detailed-category mt-5 mb-5">
                    <div class="section-title mb-0 no-border">
                        <h2>Electronics <a href="#">( View All )</a></h2>
                    </div>

                    <div class="grid">
                        <div class="col-5 col-lg-2 height-x2 grid-item">
                            <div class="category-lists">
                                <a href="category.html">Digital Microscope</a>
                                <a href="category.html">3D Printer Kit</a>
                                <a href="category.html">IP Camera</a>
                                <a href="category.html">TV Box</a>
                                <a href="category.html">Arduino Compatible Boards</a>
                                <a href="category.html">Power Tools</a>
                                <a href="category.html">Raspberry Pi 3</a>
                                <a href="category.html">Digital Multimeter</a>
                                <a href="category.html">Power Tool Parts</a>
                                <a href="category.html">Woodworking Tools</a>
                                <a href="category.html">Smart Light Bulbs</a>
                                <a href="category.html">Soldering Iron</a>
                            </div>
                        </div>
                        <div class="col-7 col-lg-3 height-x2 grid-item">
                            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                                'items' : 1,
                                'margin' : 0,
                                'nav' : false,
                                'dots' : false
                            }">
                                <div class="home-slide" style="background-image: url('assets/images/slider/home_slide3.jpg');">
                                    <div class="slide-content">
                                        <h2 class="text-center">electronic<br>deals</h2>
                                        <div class="skew-box-group">
                                            <span class="skew-box">Exclusive COUPON</span>
                                            <h3 class="sale-off skew-box"><span>$100</span>off</h3>
                                        </div>
                                        <button class="btn">View All Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-4-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-21.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x2 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-9.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-5.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-6.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="detailed-category mt-5 mb-5">
                    <div class="section-title mb-0 no-border">
                        <h2>Mobile Phones & Accessories <a href="#">( View All )</a></h2>
                    </div>

                    <div class="grid">
                        <div class="col-5 col-lg-2 height-x2 grid-item">
                            <div class="category-lists">
                                <a href="category.html">Type-c cable</a>
                                <a href="category.html">Oneplus 6</a>
                                <a href="category.html">Xiaomi Mi A2</a>
                                <a href="category.html">Xiaomi Mi Band 3</a>
                                <a href="category.html">Smart Watch</a>
                                <a href="category.html">Power Bank</a>
                                <a href="category.html">iPhone X Cases</a>
                                <a href="category.html">Nubia M2</a>
                                <a href="category.html">Xiaomi Redmi S2</a>
                                <a href="category.html">In-ear Headphones</a>
                                <a href="category.html">Xiaomi Mi8</a>
                                <a href="category.html">Xiaomi Mi8 SE</a>
                            </div>
                        </div>
                        <div class="col-7 col-lg-3 height-x2 grid-item">
                            <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                                'items' : 1,
                                'margin' : 0,
                                'nav' : false,
                                'dots' : false
                            }">
                                <div class="home-slide" style="background-image: url('assets/images/slider/home_slide4.jpg');">
                                    <div class="slide-content content-left">
                                        <h2 class="text-center">Top brands <br>smartphones</h2>
                                        <div class="skew-box-group">
                                            <span class="skew-box">STARTING FROM</span>
                                            <span class="skew-box">$199</span>
                                        </div>
                                        <button class="btn btn-primary">View All Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-4-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-22.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x2 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-16.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-12.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2-big height-x1 grid-item">
                            <div class="product-default inner-quickview inner-icon">
                                <figure>
                                    <a href="product.html">
                                        <img src="assets/images/products/product-13.jpg">
                                    </a>
                                </figure>
                                <div class="product-details">
                                    <h2 class="product-title">
                                        <a href="product.html">Product Short Name</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$59.00</span>
                                        <span class="product-price">$49.00</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="product-panel mt-6">
                    <div class="section-title">
                        <h2>Recommendations for You</h2>
                    </div>

                    <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
                        'margin': 0,
                        'items': 2,
                        'autoplayTimeout': 5000,
                        'dots': false,
                        'nav': true,
                        'responsive': {
                            '559': {
                                'items': 3
                            },
                            '975': {
                                'items': 4
                            },
                            '1200': {
                                'items' : 5
                            }
                        }
                    }">
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-7.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-8.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-9.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-12.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-17.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                        <div class="product-default inner-quickview inner-icon">
                            <figure>
                                <a href="product.html">
                                    <img src="assets/images/products/product-18.jpg">
                                </a>
                                <div class="label-group">
                                    <span class="product-label label-cut">27% OFF</span>
                                </div>
                                <div class="btn-icon-group">
                                    <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                                </div>
                                <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="category-wrap">
                                    <div class="category-list">
                                        <a href="category.html" class="product-category">category</a>
                                    </div>
                                    <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                </div>
                                <h2 class="product-title">
                                    <a href="product.html">Product Short Name</a>
                                </h2>
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <div class="price-box">
                                    <span class="old-price">$59.00</span>
                                    <span class="product-price">$49.00</span>
                                </div><!-- End .price-box -->
                            </div><!-- End .product-details -->
                        </div>
                    </div>
                </section>
            </div>

            <section class="container mt-3 mb-7" id="topBrands">
                <div class="section-title mb-6">
                    <h2>Top Brands</h2>
                </div>
                <div class="partners-carousel owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
                    'loop' : true,
                    'nav': false,
                    'dots': true,
                    'autoHeight': true,
                    'autoplay': true,
                    'autoplayTimeout': 5000,
                    'responsive': {
                      '0': {
                        'items': 2,
                        'margin': 0
                      },
                      '480': {
                        'items': 3
                      },
                      '768': {
                        'items': 4
                      },
                      '992': {
                        'items': 5
                      }
                    }
                }">
                    <img src="assets/images/logos/1.png" alt="logo">
                    <img src="assets/images/logos/2.png" alt="logo">
                    <img src="assets/images/logos/3.png" alt="logo">
                    <img src="assets/images/logos/4.png" alt="logo">
                    <img src="assets/images/logos/5.png" alt="logo">
                </div>
            </section>
        </main><!-- End .main -->

        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <a href="#" class="widget-newsletter-title">Sign Up to Newsletter</a>
                        </div>
                        <div class="col-lg-4">
                            <p class="widget-newsletter-content">Get all the latest information on Events, Sales and Offers.<br>
                                <span class="widget-newsletter-content">Receive $10 coupon for first shopping.</span>
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <form action="#">
                                <div class="footer-submit-wrapper">
                                    <input type="email" class="form-control" placeholder="Enter your Email address" required>
                                    <button type="submit" class="btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-middle">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-4">
                            <a href="index.html">
                                <img src="assets/images/logo-black.png" alt="Porto Logo">
                            </a>
                            <div class="row row-sm">
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">ADDRESS</h4>
                                        <a href="#">123 Street Name, City, England</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget email">
                                        <h4 class="widget-title">EMAIL</h4>
                                        <a href="mailto:mail@example.com">mail@example.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">PHONE</h4>
                                        <a href="#">Toll Free (123) 456-7890</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-widget">
                                        <h4 class="widget-title">WORKING DAYS/HOURS</h4>
                                        <a href="#">Mon - Sun / 9:00AM - 8:00PM</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icons mb-3">
                                        <a href="#" class="social-icon" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="social-icon" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </div><!-- End .social-icons -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-3">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>
                                <ul class="links link-parts">
                                    <div class="link-part">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="#">Track Your Order</a></li>
                                        <li><a href="#">Payment Methods</a></li>
                                        <li><a href="#">Shipping Guide</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Product Support</a></li>
                                        <li><a href="#">Privacy</a></li>
                                    </div>
                                    <div class="link-part">
                                        <li><a href="my-account.html">Orders History</a></li>
                                        <li><a href="#">Advanced Search</a></li>
                                        <li><a href="#">Affiliate Program</a></li>
                                    </div>
                                </ul>
                            </div><!-- End .widget -->
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-3">
                            <div class="widget">
                                <h4 class="widget-title">About</h4>
                                <ul class="links">
                                    <li><a href="about.html">About Porto</a></li>
                                    <li><a href="#">Our Guarantees</a></li>
                                    <li><a href="#">Terms And Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Intellectual Property Claims</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div>
                        <div class="col-md-4 col-lg-2 col-xl-2">
                            <div class="widget">
                                <h4 class="widget-title">Features</h4>
                                <ul class="links">
                                    <li><a href="#">Powerful Admin Panel</a></li>
                                    <li><a href="#">Mobile & Retina Optimized</a></li>
                                    <li><a href="#">Super Fast Magento Theme</a></li>
                                    <li><a href="#">1st Fully working Ajax Theme</a></li>
                                    <li><a href="#">10 Unique Homepage Layouts</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom">
                    <p class="footer-copyright">Porto eCommerce. &copy;  2020.  All Rights Reserved</p>
                    <img src="assets/images/payments_long.png" width="180px" style="max-height: 24px">
                </div>
            </div>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-retweet"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a>
                        <ul>
                            <li><a href="single.html">Blog Post</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- newsletter-popup-form -->
    <div class="newsletter-popup mfp-hide" id="newsletter-popup" style="background-image: url(assets/images/newsletter_popup_bg.jpg)">
        <div class="newsletter-popup-content">
            <img src="assets/images/logo-black.png" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>
{{-- -----===========================-------------=================--= --}}

@include('modules.productModal')
{{-- /featured products --}}
@endsection

@push('js')
@endpush
