<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <!-- HEADER-LEFT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-left-menu">
                    <div class="welcome-info">
                        <span><i class="fa fa-phone">: +{{ $settings-> hotline }}</i></span>
                    </div>
                    <div class="welcome-info">
                        <span>Chào mừng quý khách đến với Cửa Hàng Shop Mobile</span>
                    </div>
                </div>
            </div>
            <!-- HEADER-LEFT-MENU END -->
            <!-- HEADER-RIGHT-MENU START -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-right-menu">
                    <nav>
                        <ul class="list-inline">
                            <li><a href="checkout.html">Thanh Toán</a></li>
                            <li><a href="wishlist.html">Danh Sách Mong Ước</a></li>
                            <li><a href="my-account.html">Tài Khoản</a></li>
                            <li><a href="cart.html">Giỏ Hàng</a></li>
                            <li><a href="registration.html">Đăng Nhập</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- HEADER-RIGHT-MENU END -->
        </div>
    </div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- LOGO START -->
                <div class="logo">
                    <a href="index.html"><img src="/frontend/img/mobileshop3.png" alt="MobileShop logo" /></a>
                </div>
                <!-- LOGO END -->
                <!-- CATEGORYS-PRODUCT-SEARCH START -->
                <div class="categorys-product-search">
                    <form action="#" method="get" class="search-form-cat">
                        <div class="search-product form-group">
                            <select name="catsearch" class="cat-search">
                                <option value="">Danh Mục SP</option>
                                <option value="2">Điện Thoại</option>
                                <option value="3">>>Iphone</option>
                                <option value="4">>>Samsung</option>
                                <option value="5">>>Oppo</option>
                                <option value="6">Máy tính</option>
                                <option value="7">>>Dell</option>
                                <option value="8">>>Lenovo</option>
                                <option value="9">>>Asus</option>
                                <option value="10">>>Acer</option>
                            </select>
                            <input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
                            <button class="search-button" value="Search" name="s" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <!-- CATEGORYS-PRODUCT-SEARCH END -->
            </div>
        </div>
    </div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
    <div class="container">
        <div class="row">
            <!-- SHOPPING-CART START -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
                <div class="shopping-cart-out pull-right">
                    <div class="shopping-cart">
                        <a class="shop-link" href="cart.html" title="View my shopping cart">
                            <i class="fa fa-shopping-cart cart-icon"></i>
                            <b>Giỏ Hàng</b>
                            <span class="ajax-cart-quantity">2</span>
                        </a>
                        <div class="shipping-cart-overly">
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="#"><img src="/frontend/img/shopping-image.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Iphone</a></span>
                                    <span class="pro-quality"><a href="#">S,Black</a></span>
                                    <p></p>
                                </div>
                            </div>
                            <div class="shipping-item">
                                <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
                                <div class="shipping-item-image">
                                    <a href="#"><img src="/frontend/img/shopping-image2.jpg" alt="shopping image" /></a>
                                </div>
                                <div class="shipping-item-text">
                                    <span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
                                    <span class="pro-quality"><a href="#">S,Gary</a></span>
                                    <p>$19.95</p>
                                </div>
                            </div>
                            <div class="shipping-total-bill">
                                <div class="cart-prices">
                                    <span class="shipping-cost">$2.00</span>
                                    <span>Shipping</span>
                                </div>
                                <div class="total-shipping-prices">
                                    <span class="shipping-total">$24.95</span>
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="shipping-checkout-btn">
                                <a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOPPING-CART END -->
            <!-- MAINMENU START -->
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
                <div class="mainmenu">
                    <nav>
                        <ul class="list-inline mega-menu">
                            <li>
                                <a href="/">Trang Chủ</a>
                            </li>
                            <li><a href="/lien-he">Liên Hệ</a></li>
                            <li>
                                <a href="shop-gird.html">Women</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Watch</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="shop-gird.html">Men</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="shop-gird.html">clothing</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">new product</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Watch</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="shop-gird.html">Tops</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-4">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">top rate product</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">Latest product</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">popular product</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li>
                                <a href="shop-gird.html">T-shirts</a>
                                <!-- DRODOWN-MEGA-MENU START -->
                                <div class="drodown-mega-menu">
                                    <div class="left-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">TOPS</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">new product</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-mega col-xs-6">
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">Prodect</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Watch</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu-list">
                                            <a class="mega-menu-title" href="shop-gird.html">best sale month</a>
                                            <ul>
                                                <li><a href="shop-gird.html">T-shirts</a></li>
                                                <li><a href="shop-gird.html">clothing</a></li>
                                                <li><a href="shop-gird.html">Delivery</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- DRODOWN-MEGA-MENU END -->
                            </li>
                            <li><a href="#">Delivery</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MAINMENU END -->
        </div>
        <div class="row">
            <!-- MOBILE MENU START -->
            <div class="col-sm-12 mobile-menu-area">
                <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                    <span class="mobile-menu-title">MENU</span>
                    <nav>
                        <ul>
                            <li><a href="index.html">Home</a>
                                <ul>
                                    <li><a href="index.html">Home variation 1</a></li>
                                    <li><a href="index-2.html">Home variation 2</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-gird.html">Women</a>
                                <ul>
                                    <li><a href="shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="shop-gird.html">T-Shirts</a></li>
                                            <li><a href="shop-gird.html">Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Dresses</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Casual Dresses</a></li>
                                            <li><a href="shop-gird.html">Summer Dresses</a></li>
                                            <li><a href="shop-gird.html">Evening Dresses</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="shop-gird.html">men</a>
                                <ul>
                                    <li><a href="shop-gird.html">Tops</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Sports</a></li>
                                            <li><a href="shop-gird.html">Day</a></li>
                                            <li><a href="shop-gird.html">Evening</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Blouses</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Handbag</a></li>
                                            <li><a href="shop-gird.html">Headphone</a></li>
                                            <li><a href="shop-gird.html">Houseware</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-gird.html">Accessories</a>
                                        <ul>
                                            <li><a href="shop-gird.html">Houseware</a></li>
                                            <li><a href="shop-gird.html">Home</a></li>
                                            <li><a href="shop-gird.html">Health & Beauty</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-gird.html">clothing</a></li>
                            <li><a href="shop-gird.html">tops</a></li>
                            <li><a href="shop-gird.html">T-shirts</a></li>
                            <li><a href="#">Delivery</a></li>
                            <li><a href="about-us.html">About us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- MOBILE MENU END -->
        </div>
    </div>
</header>
<!-- MAIN-MENU-AREA END -->
