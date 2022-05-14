<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Single Product</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href='fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>

    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href="css/custom.css" rel="stylesheet" type='text/css'>
</head>
<body>
<div class="tz-site">
        <header id="tz-header" class="bk-white">
            <div class="container">
                <div class="header-top">
                    <ul class="pull-left">
                    <?php
                        echo '<li>';
                        echo '<a href="#">';
                        echo 'PHP';
                        echo '<span class="fa fa-angle-down tz-down"></span>';
                        echo '</a>';
                        echo '<ul class="sub-menu">';
                        echo '<li>';
                        echo '<a href="#">EURO</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">USD</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">PHP</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">';
                        echo 'English';
                        echo '<span class="fa fa-angle-down tz-down"></span>';
                        echo '</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">Call us:   09270454469</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-register.html">My Account</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">Wishlist</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-cart.html">My Cart</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-checkout.html">Checkout</a>';
                        echo '</li>';
                        echo '<li class="tz-header-login">';
                        ?>
                        <a href="#">Login</a>
                        <div class="tz-login-form">
                        <?php
                        echo '<form>';
                        echo '<p class="form-content">';
                        echo '<label for="username">Username / Email</label>';
                        echo '<input type="text" name="username" id="username" value="">';
                        echo '</p>';
                        echo '<p class="form-content">';
                        echo '<label for="password">Password</label>';
                        echo '<input type="password" name="username" id="password" value="">';
                        echo '</p>';
                        echo '<p class="form-footer">';
                        echo '<a href="#">Lost Password?</a>';
                        echo '<button type="submit" class="pull-right button_class">LOGIN</button>';
                        echo '</p>';
                        echo '<p class="form-text">';
                        echo 'Dont have an account? <a href="shop-register.html">Register Here</a>';
                        echo '</p>';
                        echo '</form>';
                        echo '</div>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="header-content">';
                        echo '<h3 class="tz-logo pull-left"><a href="index.html"><img src="images/logo.png" alt="home" /></a></h3>';
                        echo '<div class="tz-search pull-right">';
                        echo '<form>';
                        echo '<label class="select-arrow">';
                        echo '<select name="category">';
                        echo '<option value="">All Category</option>';
                        echo '<option value="#">Baby Seats</option>';
                        echo '<option value="#">Halfwheelers</option>';
                        echo '<option value="#">Locks/Security</option>';
                        echo '<option value="#">WheelSystems</option>';
                        echo '<option value="#">Rim Tape</option>';
                        echo '</select>';
                        echo '</label>';
                        echo '<input type="text" class="tz-query" id="tz-query" value="" placeholder="Search for product">';
                        echo '<button type="submit"></button>';
                        echo '</form>';
                        echo '';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '<nav class="tz-menu-primary">';
                        echo '<div class="container">';
                        echo '<ul class="tz-main-menu pull-left nav-collapse">';
                        echo '<li>';
                        echo '<a href="index.html">Home</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">category';
                        echo '<span class="red-light">On sale!</span>';
                        echo '</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Bikes</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Gear</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Shop</a>';
                        echo '<ul class="sub-menu">';
                        echo '<li>';
                        echo '<a href="shop-cart.html">Shop Cart</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-checkout.html">Shop Checkout</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-register.html">Shop Register</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="blog.html">';
                        echo 'Blog';
                        echo '<span class="cyan-dark">Best off!</span>';
                        echo '</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="contact.html">Contact</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '<ul class="tz-ecommerce-meta pull-right">';
                        echo '<li class="tz-menu-wishlist">';
                        echo '<a href="#"><strong>0</strong></a>';
                        echo '</li>';
                        echo '<li class="tz-mini-cart">';
                        echo '<a href="shop-cart.html"><strong>2</strong>Cart : ₱3100</a>';
                        echo '<ul class="cart-inner">';
                        echo '<li class="mini-cart-content">';
                        echo '<div class="mini-cart-img"><img src="images/product/shorts.png" alt="product search one"></div>';
                        echo '<div class="mini-cart-ds">';
                        echo '<h6><a href="single-product.html">Liv Race Day Short</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.html">₱600</a>';
                        echo '<span class="mini-meta">';
                        echo '<span class="mini-color">Color: <i class="orange"></i></span>';
                        echo '<span class="mini-qty">Qty: 1</span>';
                        echo '</span>';
                        echo '</span>';
                        echo '</div>';
                        echo '<span class="mini-cart-delete"><img src="images/delete.png" alt="delete"></span>';
                        echo '</li>';
                        echo '<li class="mini-cart-content">';
                        echo '<div class="mini-cart-img"><img src="images/product/shimanocleats.png" alt="product search one"></div>';
                        echo '<div class="mini-cart-ds">';
                        echo '<h6><a href="single-product.html">Shimano Cleats Pedal</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.html">₱2500</a>';
                        echo '<span class="mini-meta">';
                        echo '<span class="mini-color">Color: <i class="orange"></i></span>';
                        echo '<span class="mini-qty">Qty: 1</span>';
                        echo '</span>';
                        echo '</span>';
                        ?>
                                    </div>
                                    <span class="mini-cart-delete"><img src="images/delete.png" alt="delete"></span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>
        </header>
    <section class="tz-shop-single">
        <div class="container">
            <ul class="tz-breadcrumbs">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li class="current">
                    Category
                </li>
            </ul>
            <div class="row">
            <?php
                echo '<div class="col-md-6 col-sm-6">';
                echo '<div class="shop-images">';
                echo '<ul class="single-gallery">';
                echo '<li>';
                echo '<img src="images/product/frameset.png" alt="Propel Advanced Pro">';
                echo '</li>';
                echo '<li>';
                echo '<img src="images/product/frameset.png" alt="Propel Advanced Pro">';
                echo '</li>';
                echo '<li>';
                echo '<img src="images/product/frameset.png" alt="Propel Advanced Pro">';
                echo '</li>';
                echo '</ul>';
                echo '<div class="product-social">';
                echo '<a href="#" class="fa fa-facebook"></a>';
                echo '<a href="#" class="fa fa-twitter"></a>';
                echo '<a href="#" class="fa fa-google-plus"></a>';
                echo '<a href="#" class="fa fa-dribbble"></a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';               
                echo '<div class="col-md-6 col-sm-6">';
                echo '<div class="entry-summary">';
                echo '<h1>Propel Advanced Pro</h1>';
                echo '<span class="p-vote">';
                echo '<i class="fa fa-star"></i>';
                echo '<i class="fa fa-star"></i>';
                echo '<i class="fa fa-star"></i>';
                echo '<i class="fa fa-star"></i>';
                echo '<i class="fa fa-star-half-o"></i>';
                echo '</span>';
                echo '<p class="product-price">';
                echo '<span class="price">₱120,000</span>';
                echo '<span class="stock">Availability:  <span>In stock</span></span>';
                echo '</p>';
                echo '<div class="description">';
                echo '<p>';
                echo 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry is standard dummy';
                echo 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
                echo '</p>';
                echo '</div>';
                echo '<form class="tz_variations_form ">';
                echo '<p class="form-attr">';
                echo '<span class="color">';
                echo '<label>Color:</label>';
                echo '<select name="color">';
                echo '<option value="blue">Blue</option>';
                echo '<option value="blue">Red</option>';
                echo '<option value="blue">Yellow</option>';
                echo '</select>';
                echo '</span>';
                echo '<span class="tzqty">';
                echo '<label>Qty:</label>';
                echo '<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">';
                echo '</span>';
                echo '</p>';
                echo '<p>';
                echo '<button type="submit" class="single_add_to_cart_button">Add to cart</button>';
                echo '<button type="submit" class="single_add_to_wishlist">add to wishlist</button>';
                echo '</p>';
                echo '</form>';
                echo '</div>';
                echo '</div>';              
                echo '</div>';
                echo '</div>';
                echo '<div class="tz-shop-tabs">';
                echo '<div class="container">';
                echo '<div class="tab-head">';
                echo '<ul class="nav nav-tabs">';
                echo '<li role="presentation" class="active"><a href="#description" data-toggle="tab">Description</a></li>';
                echo '<li role="presentation"><a href="#reviews" data-toggle="tab">Reviews</a></li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="tab-content">';
                echo '<div class="tab-pane active" id="description">';
                echo '<p>Giant Bicycles, as the biggest bike brand in the world, is also known as one of the best budget bike brands. It consistently gets high ratings in its mountain and hybrid bike categories. Giant is also known for giving a comfortable ride.</p>';
                echo '<p>From high mountain peaks to neighborhood streets and bike paths, Giant road bikes for men are your invitation to ride. Whether you are digging deep for a new PR, commuting in the city, or on a casual cruise, make the most of every ride with one of our mens road bikes.</p>';
                echo '</div>';
                echo '<div class="tab-pane" id="reviews">';
                echo '<p> This is Good Bike.</p>';
                echo '<p>This is Great Bike.</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="container">';
                echo '<div class="box-shadow">';
                echo '<div class="tz-tabs-header">';
                echo '<h2 class="tz-tabs-title pull-left">Widget Products</h2>';
                echo '<ul class="nav nav-tabs pull-right tz-nav-tabs">';
                echo '<li role="presentation" class="active"><a href="#one_read" data-toggle="tab">On-Road <i class="fa fa-circle"></i></a></li>';
                echo '<li role="presentation"><a href="#x_road" data-toggle="tab">X-Road <i class="fa fa-circle"></i></a></li>';
                echo '<li role="presentation"><a href="#off_road" data-toggle="tab">Off-Road <i class="fa fa-circle"></i></a></li>';
                echo '<li role="presentation"><a href="#bmx" data-toggle="tab">BMX</a></li>';
                echo '</ul>';
                echo '</div>';
                echo '<div class="tab-content">';
                echo '<div class="tab-pane active" id="one_read">';
                echo '<div class="row row-item">';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature.png" alt="product 4" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Genesis Advanced SL 0</a></h4>';
                echo '<span class="product-price">₱189,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature1.png" alt="product 2" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Defy Advanced SL</a></h4>';
                echo '<span class="product-price">₱230,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature2.png" alt="product 3" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">FastRoad CoMax</a></h4>';
                echo '<span class="product-price">₱200,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="tab-pane" id="x_road">';
                echo '<div class="row row-item">';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature.png" alt="product 4" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Genesis Advanced SL 0</a></h4>';
                echo '<span class="product-price">₱189,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature1.png" alt="product 2" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Defy Advanced SL</a></h4>';
                echo '<span class="product-price">₱230,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature2.png" alt="product 3" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">FastRoad CoMax</a></h4>';
                echo '<span class="product-price">₱200,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="tab-pane" id="bmx">';
                echo '<div class="row row-item">';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature.png" alt="product 4" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.php">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Genesis Advanced SL 0</a></h4>';
                echo '<span class="product-price">₱189,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature1.png" alt="product 2" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">Defy Advanced SL</a></h4>';
                echo '<span class="product-price">₱230,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3 col-sm-6">';
                echo '<div class="product-item">';
                echo '<div class="product-thubnail">';
                echo '<img src="images/product/roadbike-feature2.png" alt="product 3" />';
                echo '<div class="product-meta">';
                echo '<a class="add-to-cart" href="shop-cart.html">Add to cart</a>';
                echo '<span class="quick-view">';
                echo '<a href="#">Quick view</a>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="product-infomation">';
                echo '<h4><a href="single-product.html">FastRoad CoMax</a></h4>';
                echo '<span class="product-price">₱200,000</span>';
                echo '<span class="product-attr">';
                echo '<i class="fa fa-circle light-blue"></i>';
                echo '<i class="fa fa-circle orange"></i>';
                echo '<i class="fa fa-circle blueviolet"></i>';
                echo '<i class="fa fa-circle orange-dark"></i>';
                echo '<i class="fa fa-circle steelblue"></i>';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</section>';
                ?>
                <footer class="tz-footer">
                    <div class="footer-widget">
                        <div class="container">
                            <div class="footer-left">
                                <div class="contact-info widget">
                                <?php
                        echo '<h3 class="widget-title">Contact info</h3>';
                        echo '<ul>';
                        echo '<li>';
                        echo '<span>Address :</span>';
                        echo '<address>';
                        echo 'San Miguel, #73 D.Reyes St. <br> Boac, Marinduque';
                        echo '</address>';
                        echo '</li>';
                        echo '<li>';
                        echo '<span>Phone :</span>';
                        echo '09270454469';
                        echo '</li>';
                        echo '<li>';
                        echo '<span>Email :</span>';
                        echo 'bikesport@gmail.com';
                        echo '</li>';
                        echo '</ul>';
                        ?>
                        </div>
                        <div class="widget">
                            <form class="tz-subcribe">
                                <input type="text" name="sub" value="" placeholder="Enter your email...">
                                <input type="submit" name="subscribe" value="Subscribe">
                            </form>
                        </div>
                        <div class="widget">
                        <?php
                    echo '<ul class="tz-social">';
                    echo '<li>';
                    echo '<a class="fa fa-facebook" href="#"></a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a class="fa fa-twitter" href="#"></a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a class="fa fa-google-plus" href="#"></a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a class="fa fa-tumblr" href="#"></a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a class="fa fa-flickr" href="#"></a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a class="fa fa-pinterest" href="#"></a>';
                    echo '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="footer-right">';
                    echo '<div class="tz-widget-clients widget">';
                    echo '<h3 class="widget-title">What clients say?</h3>';
                    echo '<div class="tz-widget-say">';
                    echo '<img src="images/product/anonymous-avatar-icon.jpg" alt="Vincent Ray Orbien">';
                    echo '<div class="entry-say">';
                    echo '<p>This Bikes are great!</p>';
                    echo '<span>Vincent Ray Orbien</span>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="row">';
                    echo '<div class="col-md-4">';
                    echo '<div class="widget widget_nav_menu">';
                    echo '<h3 class="widget-title">HOW TO BUY</h3>';
                    echo '<ul>';
                    echo '<li>';
                    echo '<a href="#">Contact Us</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Returns</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Site Map</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Brands</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Gift Vouchers</a>';
                    echo '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col-md-4">';
                    echo '<div class="widget widget_nav_menu">';
                    echo '<h3 class="widget-title">MY ACCOUNT</h3>';
                    echo '<ul>';
                    echo '<li>';
                    echo '<a href="#">My Account</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Order History</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Wish List</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Newsletter</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Specials</a>';
                    echo '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="col-md-4">';
                    echo '<div class="widget widget_nav_menu">';
                    echo '<h3 class="widget-title">Infomation</h3>';
                    echo '<ul>';
                    echo '<li>';
                    echo '<a href="#">About Us</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Returns</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Contact Us</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Term & Conditions</a>';
                    echo '</li>';
                    echo '<li>';
                    echo '<a href="#">Privacy Policy</a>';
                    echo '</li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="tz-copyright">';
                    echo '<div class="container">';
                    echo '<div class="row">';
                    echo '<div class="col-md-6 col-sm-6">';
                    echo '<p>Copyright &copy; 2022 BikeSport by Corey Nepomuceno. All rights reserved.</p>';
                    echo '</div>';
                    echo '</footer>';
                    echo '</div>';
                    ?>

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type='text/javascript' src="js/off-canvas.js"></script>
            <script src="js/jquery.plugin.min.js"></script>
            <script src="js/jquery.countdown.min.js"></script>
            <script src="js/owl.carousel.js"></script>
            <script src="js/custom.js"></script>

            </body>
            </html>