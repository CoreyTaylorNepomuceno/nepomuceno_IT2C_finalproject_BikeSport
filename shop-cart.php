<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shop Cart</title>

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
            <?php
                echo '</header>';
                echo '<section class="shop-checkout">';
                echo '<div class="container">';
                echo '<ul class="tz-breadcrumbs">';
                echo '<li>';
                echo '<a href="#">Home</a>';
                echo '</li>';
                echo '<li class="current">';
                echo 'Shop Cart';
                echo '</li>';
                echo '</ul>';
                echo '<h1 class="page-title">Shop Cart</h1>';
                echo '<form>';
                echo '<table class="shop_table cart">';
                echo '<thead>';
                echo '<tr>';
                echo '<th class="product-remove">&nbsp;</th>';
                echo '<th class="product-thumbnail">Product</th>';
                echo '<th class="product-name">&nbsp;</th>';
                echo '<th class="product-price">Price</th>';
                echo '<th class="product-quantity">Quantity</th>';
                echo '<th class="product-subtotal">Total</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                echo '<tr class="cart_item">';
                echo '<td class="product-remove">';
                echo '<a href="#" class="remove" title="Remove this item"></a>';
                echo '</td>';
                echo '<td class="product-thumbnail">';
                echo '<a href="single-product.html"><img src="images/product/shorts.png" alt="cart" /></a>';
                echo '</td>';
                echo '';
                echo '<td class="product-name">';
                echo '<a href="single-product.html">Liv Race Day Short </a>';
                echo '<span class="color">';
                echo 'Color: <i class="orange"></i>';
                echo '</span>';
                echo '</td>';
                echo '<td class="product-price">';
                echo '<span class="amount">₱600</span>';
                echo '</td>';
                echo '';
                echo '<td class="product-quantity">';
                echo '<div class="quantity"><input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="input-text qty text" size="4"></div>';
                echo '</td>';
                echo '';
                echo '<td class="product-subtotal">';
                echo '<span class="amount">₱600</span>';
                echo '</td>';
                echo '</tr>';
                echo '<tr class="cart_item">';
                echo '<td class="product-remove">';
                echo '<a href="#" class="remove fa-" title="Remove this item"></a>';
                echo '</td>';
                echo '<td class="product-thumbnail">';
                echo '<a href="single-product.html"><img src="images/product/shimanocleats.png" alt="cart" /></a>';
                echo '</td>';
                echo '';
                echo '<td class="product-name">';
                echo '<a href="single-product.html">Shimano Cleats Pedal </a>';
                echo '<span class="color">';
                echo 'Color: <i class="light-blue"></i>';
                echo '</span>';
                echo '</td>';
                echo '<td class="product-price">';
                echo '<span class="amount">₱2500</span>';
                echo '</td>';
                echo '';
                echo '<td class="product-quantity">';
                echo '<div class="quantity"><input type="number" step="1" min="0" name="cart" value="1" title="Qty" class="input-text qty text" size="4"></div>';
                echo '</td>';
                echo '';
                echo '<td class="product-subtotal">';
                echo '<span class="amount">₱2500</span>';
                echo '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td class="actions" colspan="6">';
                echo '<a class="back-shop" href="shop.html"><i class="fa fa-angle-left"></i> BACK TO SHOP</a>';
                echo '<button class="update-cart" type="submit">update cart</button>';
                echo '</td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
                echo '</form>';
                echo '<div class="row">';
                echo '<div class="col-md-6 col-sm-6">';
                echo '<div class="coupon">';
                echo '<h3>Coupon</h3>';
                echo '<form>';
                echo '<p>Enter your coupon code if you have one.</p>';
                echo '<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">';
                echo '<input type="submit" class="button" name="apply_coupon" value="Apply Coupon">';
                echo '</form>';
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-6 col-sm-6">';
                echo '<div class="cart_totals">';
                echo '<div class="cart_totals_inner">';
                echo '<table>';
                echo '<tbody>';
                echo '<tr class="cart-subtotal">';
                echo '<th>Subtotal</th>';
                echo '<td><span class="amount">₱3100</span></td>';
                echo '</tr>';
                echo '<tr class="shipping">';
                echo '<th>Shipping and handling</th>';
                echo '<td>';
                echo '<form class="shop-shipping-calculator"  method="post">';
                echo '<p class="form-r">';
                echo '<input type="checkbox" name="rate" value="1" />';
                echo '<span>';
                echo 'Flat Rate:';
                echo '<span class="price">';
                echo '₱30.00';
                echo '</span>';
                echo '</span>';
                echo '</p>';
                echo '<p class="form-r">';
                echo '<input type="checkbox" name="rate" value="1" />';
                echo '<span>';
                echo 'Local Delivery:';
                echo '<span class="price">';
                echo '₱150';
                echo '</span>';
                echo '</span>';
                echo '</p>';
                echo '<p class="form-r">';
                echo '<input type="checkbox" name="pickup" value="1" />';
                echo '<span>';
                echo 'Local Pickup(Free):';
                echo '<span class="price">';
                echo '₱0';
                echo '</span>';
                echo '</span>';
                echo '</p>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
                echo '<tr class="order-total">';
                echo '<th>Order total</th>';
                echo '<td><span class="amount">₱3100</span></td>';
                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
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
<script src="js/off-canvas.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/custom.js"></script>

</body>
</html>