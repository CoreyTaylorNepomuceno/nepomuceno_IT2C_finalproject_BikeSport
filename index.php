<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href='fonts/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>

    <link href='css/owl.carousel.css' rel='stylesheet' type='text/css'>
    <link href='css/owl.theme.css' rel='stylesheet' type='text/css'>
    <link href="rs-plugin/css/settings.css" rel="stylesheet" type='text/css'>
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
                        echo '<a href="shop-register.php">My Account</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="#">Wishlist</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-cart.php">My Cart</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-checkout.php">Checkout</a>';
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
                        echo 'Dont have an account? <a href="shop-register.php">Register Here</a>';
                        echo '</p>';
                        echo '</form>';
                        echo '</div>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="header-content">';
                        echo '<h3 class="tz-logo pull-left"><a href="index.php"><img src="images/logo.png" alt="home" /></a></h3>';
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
                        echo '<a href="index.php">Home</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.php">category';
                        echo '<span class="red-light">On sale!</span>';
                        echo '</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.php">Bikes</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.php">Gear</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.php">Shop</a>';
                        echo '<ul class="sub-menu">';
                        echo '<li>';
                        echo '<a href="shop-cart.php">Shop Cart</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-checkout.php">Shop Checkout</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop-register.php">Shop Register</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="blog.php">';
                        echo 'Blog';
                        echo '<span class="cyan-dark">Best off!</span>';
                        echo '</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="contact.php">Contact</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '<ul class="tz-ecommerce-meta pull-right">';
                        echo '<li class="tz-menu-wishlist">';
                        echo '<a href="#"><strong>0</strong></a>';
                        echo '</li>';
                        echo '<li class="tz-mini-cart">';
                        echo '<a href="shop-cart.php"><strong>2</strong>Cart : ₱3100</a>';
                        echo '<ul class="cart-inner">';
                        echo '<li class="mini-cart-content">';
                        echo '<div class="mini-cart-img"><img src="images/product/shorts.png" alt="product search one"></div>';
                        echo '<div class="mini-cart-ds">';
                        echo '<h6><a href="single-product.php">Liv Race Day Short</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.php">₱600</a>';
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
                        echo '<h6><a href="single-product.php">Shimano Cleats Pedal</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.php">₱2500</a>';
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
                        echo '<h6><a href="single-product.php">Shimano Cleats Pedal</a></h6>';
                        echo '<span class="mini-cart-meta">';
                        echo '<a href="single-product.php">₱2500</a>';
                        echo '<span class="mini-meta">';
                        echo '<span class="mini-color">Color: <i class="orange"></i></span>';
                        echo '<span class="mini-qty">Qty: 1</span>';
                        echo '</span>';
                        echo '</span>';
                        echo '</div>';
                        echo '<span class="mini-cart-delete"><img src="images/delete.png" alt="delete"></span>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</li>';
?>
                    </ul>
                    <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>
        </header>
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="700"  data-saveperformance="off" >
                        <img src="images/slider/cyclist.png"  alt="cyclist"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sft stt"
                             data-x="275"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/T.png" alt="">
                        </div>
                        <div class="tp-caption sfb stb"
                             data-x="340"
                             data-y="160"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/h.png" alt="">
                        </div>
                        <div class="tp-caption sft stt"
                             data-x="405"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/E.png" alt="">
                        </div>
                        <div class="tp-caption sfb stb"
                             data-x="495"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/B.png" alt="">
                        </div>
                        <div class="tp-caption sft stt"
                             data-x="560"
                             data-y="160"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/i.png" alt="">
                        </div>
                        <div class="tp-caption sfb stb"
                             data-x="587"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/C.png" alt="">
                        </div>
                        <div class="tp-caption sft stt"
                             data-x="641"
                             data-y="160"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/y.png" alt="">
                        </div>
                        <div class="tp-caption sfb stb"
                             data-x="695"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/C.png" alt="">
                        </div>
                        <div class="tp-caption sft stt"
                             data-x="760"
                             data-y="160"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/L.png" alt="">
                        </div>
                        <div class="tp-caption sfb stb"
                             data-x="810"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><img src="images/slider/E.png" alt="">
                        </div>
                        <div class="tp-caption mediumlightwhite2 customin customout tp-resizeme"
                             data-x="center" data-hoffset="-19"
                             data-y="center" data-voffset="10"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:-180;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:3000;transformOrigin:50% 0%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1500"
                             data-start="1500"
                             data-easing="easeOutQuint"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut">Nothing compares to the simple pleasure of a bike ride
                        </div>
                        <div class="tp-caption black customin customout tp-resizeme"
                             data-x="center" data-hoffset="-19"
                             data-y="center" data-voffset="110"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                             data-speed="1500"
                             data-start="1600"
                             data-easing="Back.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="1000"
                             data-endeasing="Power4.easeOut"><a href='shop.php' class='buttom_bike'>Shop Now</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="700"  data-saveperformance="off" >
                        <img src="images/slider/cyclist2.png"  alt="cyclist2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption slider-title sfr tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-52"
                             data-speed="1200"
                             data-start="500"
                             data-easing="easeOutExpo"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300">COLLECTION FOR BIKE
                        </div>
                        <div class="tp-caption black sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="34"
                             data-speed="800"
                             data-start="2200"
                             data-easing="Quad.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><a href='shop.php' class='buttom_bike'>Shop Now</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="700"  data-saveperformance="off" >
                        <img src="images/slider/cyclist3.png"  alt="cyclist3"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption sft"
                             data-x="275"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/T.png" alt="">
                        </div>
                        <div class="tp-caption sfb"
                             data-x="340"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/h.png" alt="">
                        </div>
                        <div class="tp-caption sft"
                             data-x="405"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/E.png" alt="">
                        </div>
                        <div class="tp-caption sfb"
                             data-x="495"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/B.png" alt="">
                        </div>
                        <div class="tp-caption sft"
                             data-x="560"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/i.png" alt="">
                        </div>
                        <div class="tp-caption sfb"
                             data-x="587"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/C.png" alt="">
                        </div>
                        <div class="tp-caption sft"
                             data-x="641"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/y.png" alt="">
                        </div>
                        <div class="tp-caption sfb"
                             data-x="695"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/C.png" alt="">
                        </div>
                        <div class="tp-caption sft"
                             data-x="760"
                             data-y="180"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/L.png" alt="">
                        </div>
                        <div class="tp-caption sfb"
                             data-x="810"
                             data-y="200"
                             data-speed="1500"
                             data-start="600"
                             data-easing="Back.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><img src="images/slider/E.png" alt="">
                        </div>
                        <div class="tp-caption mediumlightwhite2 customin tp-resizeme"
                             data-x="center" data-hoffset="-19"
                             data-y="center" data-voffset="30"
                             data-customin="x:0;y:0;z:0;rotationX:0;rotationY:-180;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:3000;transformOrigin:50% 0%;"
                             data-speed="1500"
                             data-start="1500"
                             data-easing="Power4.easeOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"><?php
echo 'Life is like riding a bicycle – in order to keep your balance, you must keep moving.';
?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="box-shadow section-small">
                <div class="row">
                    <div class="col-md-4">
                        <div class="custom-content">
                        <?php
echo '<h3>FREE PHP DELIVERY</h3>';
echo '<p>International delivery available</p>';
?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="custom-content border-left">
                        <?php
echo '<h3>Safe and Secure</h3>';
echo '<p>The perfect way to bring bike to your door</p>';
?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="custom-content border-left">
                        <?php
echo '<h3>Professional Cyclists</h3>';
echo '<p>Bike Experts</p>';
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-large-top">
            <div class="container">
                <div class="tz-shortcode-tabs">
                    <div class="tz-tabs-header">
                    <?php
echo '<h2 class="tz-tabs-title pull-left">Featured Products</h2>';
echo '<ul class="nav nav-tabs pull-right tz-nav-tabs">';
echo '<li role="presentation" class="active"><a href="#one_read" data-toggle="tab">On-Road <i class="fa fa-circle"></i></a></li>';
echo '<li role="presentation"><a href="#x_road" data-toggle="tab">X-Road <i class="fa fa-circle"></i></a></li>';
echo '<li role="presentation"><a href="#off_road" data-toggle="tab">Off-Road <i class="fa fa-circle"></i></a></li>';
echo '<li role="presentation"><a href="#bmx" data-toggle="tab">BMX</a></li>';
echo '</ul>';
?>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="one_read">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-thubnail">
                                        <?php
echo '<img src="images/product/roadbike-feature.png" alt="product 1" />';
echo '<div class="product-meta">';
echo '<a class="add-to-cart" href="shop-cart.php">Add to cart</a>';
echo '<span class="quick-view">';
echo '<a href="#">Quick view</a>';
echo '</span>';
echo '</div>';
?>
                                        </div>
                                        <div class="product-infomation">
                                        <?php
echo '<h4><a href="single-product.php">Genesis SL 0</a></h4>';
echo '<span class="product-price">₱189,900</span>';
echo '<span class="product-attr">';
echo '<i class="fa fa-circle light-blue"></i>';
echo '<i class="fa fa-circle orange"></i>';
echo '<i class="fa fa-circle blueviolet"></i>';
echo '<i class="fa fa-circle orange-dark"></i>';
echo '<i class="fa fa-circle steelblue"></i>';
echo '</span>';
?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-thubnail">
                                        <?php
echo '<img src="images/product/roadbike-feature1.png" alt="product 2" />';
echo '<div class="product-meta">';
echo '<a class="add-to-cart" href="shop-cart.php">Add to cart</a>';
echo '<span class="quick-view">';
echo '<a href="#">Quick view</a>';
echo '</span>';
echo '</div>';
?>
                                        </div>
                                        <div class="product-infomation">
                                        <?php
echo '<h4><a href="single-product.php">Defy Advanced SL</a></h4>';
echo '<span class="product-price">₱230,000</span>';
echo '<span class="product-attr">';
echo '<i class="fa fa-circle light-blue"></i>';
echo '<i class="fa fa-circle orange"></i>';
echo '<i class="fa fa-circle blueviolet"></i>';
echo '<i class="fa fa-circle orange-dark"></i>';
echo '<i class="fa fa-circle steelblue"></i>';
echo '</span>';
?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-thubnail">
                                        <?php
echo '<img src="images/product/roadbike-feature2.png" alt="product 3" />';
echo '<div class="product-meta">';
echo '<a class="add-to-cart" href="shop-cart.php">Add to cart</a>';
echo '<span class="quick-view">';
echo '<a href="#">Quick view</a>';
echo '</span>';
echo '</div>';
?>
                                        </div>
                                        <div class="product-infomation">
                                        <?php
echo '<h4><a href="single-product.php">FastRoad CoMax</a></h4>';
echo '<span class="product-price">₱200,000</span>';
echo '<span class="product-attr">';
echo '<i class="fa fa-circle light-blue"></i>';
echo '<i class="fa fa-circle orange"></i>';
echo '<i class="fa fa-circle blueviolet"></i>';
echo '<i class="fa fa-circle orange-dark"></i>';
echo '<i class="fa fa-circle steelblue"></i>';
echo '</span>';
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <div class="section-medium bk-gray">
            <div class="container">
                <div class="product-event">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="event-thumbail">
                                <img src="images/product/frameset.png" alt="product event">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <?php
echo '<ul class="product-event-content">';
echo '<li>';
echo '<div id="defaultCountdown" class="tzCountdown"></div>';
echo '</li>';
echo '<li>';
echo '<h3><a href="single-product.php">Propel Advanced Pro Frameset</a></h3>';
echo '<span class="product-rating">';
echo '<i class="fa fa-star"></i>';
echo '<i class="fa fa-star"></i>';
echo '<i class="fa fa-star"></i>';
echo '<i class="fa fa-star"></i>';
echo '<i class="fa fa-star-half-o"></i>';
echo '</span>';
echo '<span class="event-price">₱120,000</span>';
echo '</li>';
echo '<li class="product-event-attr">';
echo '<span class="tz-color">';
echo 'Color:';
echo '<i class="fa fa-circle light-blue"></i>';
echo '<i class="fa fa-circle orange"></i>';
echo '<i class="fa fa-circle blueviolet"></i>';
echo '<i class="fa fa-circle orange-dark"></i>';
echo '<i class="fa fa-circle steelblue"></i>';
echo '</span>';
echo '<span class="tz-stock">';
echo 'In stock : 10';
echo '</span>';
echo '</li>';
echo '<li class="event-footer">';
echo '<a href="shop-cart.php" class="add-to-cart">Add to cart</a>';
echo '<a href="#" class="add-to-wishlist">Add to wishlist</a>';
echo '</li>';
echo '</ul>';
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-large-top">
            <div class="container"></div>
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
?>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="tz-widget-clients widget">
                        <?php
echo '<h3 class="widget-title">What clients say?</h3>';
echo '<div class="tz-widget-say">';
echo '<img src="images/product/anonymous-avatar-icon.jpg" alt="Vincent Ray Orbien">';
echo '<div class="entry-say">';
echo '<p>This Bikes are great!</p>';
echo '<span>Vincent Ray Orbien</span>';
echo '</div>';
echo '</div>';
?>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="widget widget_nav_menu">
                                <?php
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
?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget widget_nav_menu">
                                <?php
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
?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="widget widget_nav_menu">
                                <?php
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
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tz-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                        <?php
echo '<p>Copyright &copy; 2022 BikeSport by Corey Nepomuceno. All rights reserved.</p>';
?>
                        </div>
                        
            </div>
        </footer>
    </div>
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/off-canvas.js"></script>
    <script type='text/javascript' src="js/jquery.plugin.min.js"></script>
    <script type='text/javascript' src="js/jquery.countdown.min.js"></script>
    <script type='text/javascript' src="js/jquery.parallax-1.1.3.js"></script>
    <script type='text/javascript' src="js/owl.carousel.js"></script>
    <script type='text/javascript' src="js/custom.js"></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='rs-plugin/js/custom-rs.js'></script>
</body>
</html>