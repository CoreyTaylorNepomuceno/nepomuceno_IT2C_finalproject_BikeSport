<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Checkout</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href='fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>
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
                        echo '<a href="shop-cart.php">My Cart</a>';
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
                        echo '<a href="shop-cart.html"><strong>2</strong>Cart : ???3100</a>';
                        echo '<ul class="cart-inner">';
                        echo '<li class="mini-cart-content">';
                        echo '<div class="mini-cart-img"><img src="images/product/shorts.png" alt="product search one"></div>';
                        echo '<div class="mini-cart-ds">';
                        echo '<h6><a href="single-product.html">Liv Race Day Short</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.html">???600</a>';
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
                        echo '<a href="single-product.html">???2500</a>';
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
            echo '<section class="shop-cart">';
            echo '<div class="container">';
            echo '<ul class="tz-breadcrumbs">';
            echo '<li>';
            echo '<a href="#">Home</a>';
            echo '</li>';
            echo '<li class="current">';
            echo 'Checkout';
            echo '</li>';
            echo '</ul>';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo '<h1 class="page-title">Checkout</h1>';
            echo '<div class="shop-info">';
            echo '<p>Returning customer? <a href="#">Click here to login</a></p>';
            echo '<p>Have a coupon?  <a href="#">Click here to enter your code</a></p>';
            echo '</div>';
            echo '<form>';
            echo '<div class="shop-billing-fields">';
            echo '<h3>Billing Details</h3>';
            echo '<p class="form-row">';
            echo '<label>Country <span class="required">*</span></label>';
            echo '<select>';
            echo '<option>Philippines(PH)</option>';
            echo '</select>';
            echo '</p>';
            echo '<p class="form-row form-row-first">';
            echo '<label for="billing_first_name" class="">First Name <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row form-row-last">';
            echo '<label for="billing_last_name" class="">Last Name <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">';
            echo '</p>';
            echo '<div class="clear"></div>';
            echo '<p class="form-row">';
            echo '<label for="company_name">Company Name</label>';
            echo '<input type="text" class="input-text " name="company_name" id="company_name" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row">';
            echo '<label for="address">Address  <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="address" id="address" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row">';
            echo '<label for="city">Town / City<span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="city" id="city" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row form-row-first">';
            echo '<label for="state">State <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="state" id="state" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row form-row-last">';
            echo '<label for="zip">Zip  <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="zip" id="zip" placeholder="" value="">';
            echo '</p>';
            echo '<div class="clear"></div>';
            echo '<p class="form-row form-row-first">';
            echo '<label for="email">Email Address<span class="required">*</span></label>';
            echo '<input type="email" class="input-text " name="email" id="email" placeholder="" value="">';
            echo '</p>';
            echo '<p class="form-row form-row-last">';
            echo '<label for="phone">Phone  <span class="required">*</span></label>';
            echo '<input type="text" class="input-text " name="phone" id="phone" placeholder="" value="">';
            echo '</p>';
            echo '<div class="clear"></div>';
            echo '<p class="form-row create-account">';
            echo '<input class="createaccount" id="createaccount" type="checkbox" name="createaccount" value="1"> <label for="createaccount" class="checkbox">Create an account?</label>';
            echo '</p>';
            echo '<p class="form-row ship-to-different-address-checkbox">';
            echo '<input class="input-checkbox" id="ship-to-different-address-checkbox" type="checkbox" name="ship-to-different-address-checkbox" value="1">';
            echo '<label for="ship-to-different-address-checkbox" class="ship-to-different-address-checkbox">Ship to a different address?</label>';
            echo '</p>';
            echo '<p class="form-row notes">';
            echo '<label for="order_comments" class="">Order Notes</label>';
            echo '<textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>';
            echo '</p>';
            echo '</div>';
            echo '</form>';
            echo '</div>';
            echo '<div class="col-md-6">';
            echo '<div id="order_review">';
            echo '<h3>Your Order</h3>';
            echo '<table class="shop_table">';
            echo '<thead>';
            echo '<tr>';
            echo '<th class="product-name">Product</th>';
            echo '<th class="product-total">Total</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr class="cart_item">';
            echo '<td class="product-name">';
            echo 'Liv Race Day Short';
            echo '<strong class="product-quantity">?? 1</strong>';
            echo '</td>';
            echo '<td class="product-total">';
            echo '<span class="amount">???600</span>';
            echo '</td>';
            echo '</tr>';
            echo '<tr class="cart_item">';
            echo '<td class="product-name">';
            echo 'Shimano Cleats Pedal';
            echo '<strong class="product-quantity">?? 1</strong>';
            echo '</td>';
            echo '<td class="product-total">';
            echo '<span class="amount">???2500</span>';
            echo '</td>';
            echo '</tbody>';
            echo '<tfoot>';
            echo '<tr class="cart-subtotal">';
            echo '<th>Cart Subtotal</th>';
            echo '<td><span class="amount">???3100</span></td>';
            echo '</tr>';
            echo '';
            echo '<tr class="shipping">';
            echo '<th>Shipping and handling</th>';
            echo '<td>';
            echo '<form class="shop-shipping-calculator"  method="post">';
            echo '<p class="form-r">';
            echo '<input type="checkbox" name="rate" value="1" />';
            echo '<span>';
            echo 'Flat Rate:';
            echo '<span class="price">';
            echo '???30.00';
            echo '</span>';
            echo '</span>';
            echo '</p>';
            echo '<p class="form-r">';
            echo '<input type="checkbox" name="rate" value="1" />';
            echo '<span>';
            echo 'Local Delivery:';
            echo '<span class="price">';
            echo '???150';
            echo '</span>';
            echo '</span>';
            echo '</p>';
            echo '<p class="form-r">';
            echo '<input type="checkbox" name="pickup" value="1" />';
            echo '<span>';
            echo 'Local Pickup(Free):';
            echo '<span class="price">';
            echo '???0';
            echo '</span>';
            echo '</span>';
            echo '</p>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
            echo '<tr class="order-total">';
            echo '<th>Order Total</th>';
            echo '<td><strong><span class="amount">???3100</span></strong> </td>';
            echo '</tr>';
            echo '</tfoot>';
            echo '</table>';
            echo '<div id="payment" class="checkout-payment">';
            echo '<ul class="payment_methods methods">';
            echo '<li class="payment_method_bacs">';
            echo '<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">';
            echo '<label for="payment_method_bacs">';
            echo 'Direct Bank Transfer';
            echo '</label>';
            echo '<div class="payment_box payment_method_bacs">';
            echo '<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won???t be shipped until the funds have cleared in our account.</p>';
            echo '</div>';
            echo '</li>';
            echo '<li class="payment_method_cheque">';
            echo '<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">';
            echo '<label for="payment_method_cheque">';
            echo 'Gcash';
            echo '</label>';
            echo '</li>';
            echo '<li class="payment_method_paypal">';
            echo '<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">';
            echo '<label for="payment_method_paypal">';
            echo 'PayPal';
            echo '</label>';
            echo '</li>';
            echo '</ul>';
            echo '<div class="clear"></div>';
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
                    echo '</div>';echo '<div class="tz-copyright">';
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
<script src="js/custom.js"></script>

</body>
</html>