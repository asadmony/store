{{-- <div class="">
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-light my-0 py-0">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navigation-trigger d-md-none" data-action="aside-open" data-target=".sidebar" >
                <div class="navigation-trigger-inner">
                    <i class="navigation-trigger-line"></i>
                    <i class="navigation-trigger-line"></i>
                    <i class="navigation-trigger-line"></i>
                </div>
            </div>
            <a class="navbar-brand" href="/">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="{{ __('pickmart') }}">
            </a>
            <div class="navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="button">
                            Go!
                        </button>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div> --}}
<div class="header-middle sticky-header" style="background-color: rgb(200, 200, 200)">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler" type="button">
                <i class="icon-menu"></i>
            </button>
            <a class="navbar-brand" href="/">
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="{{ __('pickmart') }}">
            </a>
        </div><!-- End .header-left -->

        <div class="header-center">
            <div class="header-search">
                <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper black">
                        <input type="search" class="form-control" name="q" id="q" placeholder="I'm searching for..." required>
                        <div class="select-custom">
                            <select id="cat" name="cat">
                                <option value="">All Categories</option>
                                <option value="4">Fashion</option>
                                <option value="12">- Women</option>
                                <option value="13">- Men</option>
                                <option value="66">- Jewellery</option>
                                <option value="67">- Kids Fashion</option>
                                <option value="5">Electronics</option>
                                <option value="21">- Smart TVs</option>
                                <option value="22">- Cameras</option>
                                <option value="63">- Games</option>
                                <option value="7">Home &amp; Garden</option>
                                <option value="11">Motors</option>
                                <option value="31">- Cars and Trucks</option>
                                <option value="32">- Motorcycles &amp; Powersports</option>
                                <option value="33">- Parts &amp; Accessories</option>
                                <option value="34">- Boats</option>
                                <option value="57">- Auto Tools &amp; Supplies</option>
                            </select>
                        </div><!-- End .select-custom -->
                        <button class="btn" type="submit"><i class="icon-magnifier"></i></button>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->

            <div class="links">
                <a href="#">tablet</a>
                <a href="#">smartphone</a>
                <a href="#">smartwatch</a>
                <a href="#">ipcamera</a>
                <a href="#">box</a>
                <a href="#">smart</a>
                <a href="#">portable</a>
            </div>
        </div><!-- End .headeer-center -->

        <div class="header-right">
            <a href="login.html">
                <div class="header-user">
                    <i class="icon-user-2"></i>
                    <div class="header-userinfo">
                        <span>Hello!</span>
                        <h4>My Account</h4>
                    </div>
                </div>
            </a>

            <a href="#" class="porto-icon"><i class="icon icon-heart"></i></a>

            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="minicart-icon"></i>
                    <span class="cart-count">2</span>
                </a>

                <div class="dropdown-menu" >
                    <div class="dropdownmenu-wrapper">
                        <div class="dropdown-cart-header">
                            <span>2 Items</span>

                            <a href="cart.html">View Cart</a>
                        </div><!-- End .dropdown-cart-header -->
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Woman Ring</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $99.00
                                    </span>
                                </div><!-- End .product-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                    </a>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                </figure>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-details">
                                    <h4 class="product-title">
                                        <a href="product.html">Woman Necklace</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $35.00
                                    </span>
                                </div><!-- End .product-details -->

                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                    </a>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-retweet"></i></a>
                                </figure>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$134.00</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="checkout-shipping.html" class="btn btn-block">Checkout</a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdownmenu-wrapper -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .dropdown -->
        </div><!-- End .header-right -->
    </div><!-- End .container -->
</div><!-- End .header-middle -->
