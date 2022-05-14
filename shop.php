<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shop</title>

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
?>
                </ul>
                <ul class="pull-right">
                <?php
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
?>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-content">
                <h3 class="tz-logo pull-left"><a href="index.html"><img src="images/logo.png" alt="home" /></a></h3>
                <div class="tz-search pull-right">
                    <form>
                        <label class="select-arrow">
                            <select name="category">
                                <option value="">All Category</option>
                                <option value="#">Baby Seats</option>
                                <option value="#">Halfwheelers</option>
                                <option value="#">Locks/Security</option>
                                <option value="#">WheelSystems</option>
                                <option value="#">Rim Tape</option>
                            </select>
                        </label>
                        <input type="text" class="tz-query" id="tz-query" value="" placeholder="Search for product">
                        <button type="submit"></button>
                    </form>                  
                </div>
            </div>
        </div>
        <nav class="tz-menu-primary">
            <div class="container">
                <ul class="tz-main-menu pull-left nav-collapse">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="shop.html">category
                        <span class="red-light">On sale!</span>
                        </a>
                    </li>
                    <li>
                        <a href="shop.html">Bikes</a>
                    </li>
                    <li>
                        <a href="shop.html">Gear</a>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="shop-cart.html">Shop Cart</a>
                            </li>
                            <li>
                                <a href="shop-checkout.html">Shop Checkout</a>
                            </li>
                            <li>
                                <a href="shop-register.html">Shop Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">
                            Blog
                            <span class="cyan-dark">Best off!</span>
                        </a>
                        </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="tz-ecommerce-meta pull-right">
                    <li class="tz-menu-wishlist">
                        <a href="#"><strong>0</strong></a>
                    </li>
                    <li class="tz-mini-cart">
                        <a href="shop-cart.html"><strong>2</strong>Cart : ₱3100</a>
                        <ul class="cart-inner">
                            <li class="mini-cart-content">
                                <div class="mini-cart-img"><img src="images/product/shorts.png" alt="product search one"></div>
                                <div class="mini-cart-ds">
                                    <h6><a href="single-product.html">Liv Race Day Short</a></h6>
                                    <span class="mini-cart-meta">
                                        <a href="single-product.html">₱600</a>
                                        <span class="mini-meta">
                                           <span class="mini-color">Color: <i class="orange"></i></span>
                                           <span class="mini-qty">Qty: 1</span>
                                        </span>
                                    </span>
                                </div>
                                <span class="mini-cart-delete"><img src="images/delete.png" alt="delete"></span>
                            </li>
                            <li class="mini-cart-content">
                                <div class="mini-cart-img"><img src="images/product/shimanocleats.png" alt="product search one"></div>
                                <div class="mini-cart-ds">
                                    <h6><a href="single-product.html">Shimano Cleats Pedal</a></h6>
                                    <span class="mini-cart-meta">
                                        <a href="single-product.html">₱2500</a>
                                        <span class="mini-meta">
                                           <span class="mini-color">Color: <i class="orange"></i></span>
                                           <span class="mini-qty">Qty: 1</span>
                                        </span>
                                    </span>
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
    <div class="tz-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="tz-shop-sidebar">
                        <aside class="widget widget_product_categories">
                            <h3 class="widget-title">Bikes product</h3>
                            <ul class="product-categories">
                                <li>
                                    <a href="shop.html">On-Road</a>
                                </li>
                                <li class="cat-parent">
                                    <a href="shop.html">X-Road</a>
                                    <ul class="children">
                                        <li>
                                            <a href="shop.html">Aero Race <span>(3)</span></a>
                                        </li>
                                        <li>
                                            <a href="shop.html">City <span>(3)</span></a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Comfort<span>(1)</span></a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cruiser<span>(1)</span></a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Endurance <span>(4)</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="shop.html">Off-Road</a>
                                </li>
                                <li>
                                    <a href="shop.html">BMX</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="product-catlog widget">
                            <h3 class="widget-title">Catalog</h3>
                            <div class="widget_color_filter">
                                <h4 class="widget-title-children">
                                    Color filter
                                </h4>
                                <ul>
                                    <li>
                                        <a href="shop.html" class="light-blue"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="orange"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="blueviolet"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="orange-dark"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="steelblue"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="red-light"></a>
                                    </li>
                                    <li>
                                        <a href="shop.html" class="cyan-dark"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-size-filter">
                                <h4 class="widget-title-children">
                                    Size Filter
                                </h4>
                                <ul>
                                    <li>
                                        <a href="shop.html">S - Small  <span>(24)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">M - Medium  <span>(18)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">L - Large <span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html"> XL - Extra Large <span>(39)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">xtra Extra Large  <span>(24)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget-size-filter">
                                <h4 class="widget-title-children">
                                    Brand Filter
                                </h4>
                                <ul>
                                    <li>
                                        <a href="shop.html">S - Small  <span>(24)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">M - Medium  <span>(18)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">L - Large <span>(9)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html"> XL - Extra Large <span>(39)</span></a>
                                    </li>
                                    <li>
                                        <a href="shop.html">xtra Extra Large  <span>(24)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tz-shop-content">
                        <ul class="tz-breadcrumbs">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li class="current">
                                Category
                            </li>
                        </ul>
                        <div class="shop-banner">
                            <img src="images/NOT JUST BIKES.png" alt="banner">
                        </div>
                        <div class="catalog-meta">
                            <div class="catalog_top">
                                <span class="style-switch">
                                    <a class="nav-grid-view fa fa-th-large active"></a>
                                    <a class="nav-list-view fa fa-list"></a>
                                </span>
                                <form class="shop-order">
                                    <label class="form-arrow">
                                        <select class="number-item" name="number_item">
                                            <option value="12">12 items/page</option>
                                            <option value="6">6 items/page</option>
                                            <option value="3">3 items/page</option>
                                        </select>
                                    </label>
                                    <label class="form-arrow">
                                        <select name="orderby" class="orderby">
                                            <option value="'">Sort By: Position</option>
                                            <option value="rating">Sort by rating</option>
                                            <option value="date">Sort by newness</option>
                                        </select>
                                    </label>
                                </form>
                            </div>
                        </div>

                        <div class="tz-product row grid-eff">
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike1.png" alt="Pivot Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[0]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[0]->price;
                                            ?>
                                            </span>
                                                <span class="p-vote">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span>
                                            </span>
                                            <span class="p-color">
                                                 <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                                <i class="fa fa-circle steelblue"></i>
                                            </span>
                                                <p>
                                                    It's more stable, capable, and forgiving than an XC race bike, and also more playful, efficient, and lighter than the more traditional trail bike.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike2.png" alt="Niner Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[1]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[1]->price;
                                            ?>
                                            </span>
                                                <span class="p-vote">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </span>
                                            </span>
                                            <span class="p-color">
                                                <i class="fa fa-circle steelblue"></i>
                                                <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                            </span>
                                                <p>
                                                    The geometry and 36 fork hanging on the front give off a gravity vibe, but this is a peppy and versatile trail bike that'll slay long rides and tight trails, and, yes, shred and send.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike3.png" alt="Giant Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[2]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[2]->price;
                                            ?>
                                            <span class="p-color">
                                                <i class="fa fa-circle steelblue"></i>
                                                <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                            </span>
                                                <p>
                                                    It consistently gets high ratings in its mountain and hybrid bike categories. Giant is also known for giving a comfortable ride.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike4.png" alt="GT Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[3]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[3]->price;
                                            ?>
                                            <span class="p-color">
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle steelblue"></i>
                                                <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                            </span>
                                                <p>
                                                    GT employs quality carbon and high-grade aluminum frames, which are exceptionally lightweight. The frames make it easy to maneuver the bikes outdoors and ride fast. As a result, GT road bikes and mountain bikes beat most of their counterparts in speed.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike5.png" alt="Santa Cruz Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[4]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[4]->price;
                                            ?>
                                            <span class="p-color">
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle steelblue"></i>
                                                <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                            </span>
                                                <p>
                                                    Employ innovative Virtual Pivot Point and superlight suspension, making them stiffer and more comfortable to ride. These bikes also come in a wide range of unisex choices and are generally quality in build with lifetime warranties.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/MountainBike6.png" alt="Specialized Mountain Bike">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[5]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[5]->price;
                                            ?>
                                            <span class="p-color">
                                                <i class="fa fa-circle orange"></i>
                                                <i class="fa fa-circle steelblue"></i>
                                                <i class="fa fa-circle light-blue"></i>
                                                <i class="fa fa-circle blueviolet"></i>
                                                <i class="fa fa-circle orange-dark"></i>
                                            </span>
                                                <p>
                                                    Good quality because they employ cutting-edge suspension and body geometry technologies to guarantee riding comfort. Moreover, these bikes feature durable precision-made components that promise longevity and better performance.
                                                </p>
                                            <span class="p-mask">
                                                <a href="shop-cart.html" class="add-to-cart">Add to cart</a>
                                                <a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>
                                               <span class="quick-view">
                                                    <a href="#"><i class="fa fa-eye"></i> Quick view</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination">
                            <ul class="pagination_list pull-right">
                                <li>
                                    <a href="shop1.html">1</a>
                                </li>
                                <li>
                                    <span class="current">2</span>
                                </li>
                                <li>
                                    <a href="shop3.html">3</a>
                                </li>
                                <li>
                                    <a href="shop4.html">4</a>
                                </li>
                                <li>
                                    <a href="shop5.html">5</a>
                                </li>
                                <li>
                                    <span>...</span>
                                </li>
                                <li>
                                    <a href="shop.html">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="tz-footer">
        <div class="footer-widget">
            <div class="container">
                <div class="footer-left">
                    <div class="contact-info widget">
                        <h3 class="widget-title">Contact info</h3>
                        <ul>
                            <li>
                                <span>Address :</span>
                                <address>
                                    San Miguel, #73 D.Reyes St. <br> Boac, Marinduque
                                </address>
                            </li>
                            <li>
                                <span>Phone :</span>
                                09270454469
                            </li>
                            <li>
                                <span>Email :</span>
                                bikesport@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <form class="tz-subcribe">
                            <input type="text" name="sub" value="" placeholder="Enter your email...">
                            <input type="submit" name="subscribe" value="Subscribe">
                        </form>
                    </div>
                    <div class="widget">
                        <ul class="tz-social">
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-tumblr" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-flickr" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="tz-widget-clients widget">
                        <h3 class="widget-title">What clients say?</h3>
                        <div class="tz-widget-say">
                            <img src="images/product/anonymous-avatar-icon.jpg" alt="Vincent Ray Orbien">
                            <div class="entry-say">
                                <p>This Bikes are great!</p>
                                <span>Vincent Ray Orbien</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">HOW TO BUY</h3>
                                <ul>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Site Map</a>
                                    </li>
                                    <li>
                                        <a href="#">Brands</a>
                                    </li>
                                    <li>
                                        <a href="#">Gift Vouchers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">MY ACCOUNT</h3>
                                <ul>
                                    <li>
                                        <a href="#">My Account</a>
                                    </li>
                                    <li>
                                        <a href="#">Order History</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish List</a>
                                    </li>
                                    <li>
                                        <a href="#">Newsletter</a>
                                    </li>
                                    <li>
                                        <a href="#">Specials</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget widget_nav_menu">
                                <h3 class="widget-title">Infomation</h3>
                                <ul>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Returns</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Term & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
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
                        <p>Copyright &copy; 2022 BikeSport by Corey Nepomuceno. All rights reserved.</p>
                    </div>
    </footer>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type='text/javascript' src="js/off-canvas.js"></script>
<script src="js/jquery.plugin.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/custom.js"></script>
<script>
    jQuery(function() {
        jQuery( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 500,
            values: [ 75, 300 ],
            slide: function( event, ui ) {
                jQuery('.from').text('$' + ui.values[ 0 ]);
                jQuery('.to').text('$' + ui.values[ 1 ]);
            }
        });
        jQuery('.from').text('$' + jQuery( "#slider-range" ).slider( "values", 0 ));
        jQuery('.to').text('$' + jQuery( "#slider-range" ).slider( "values", 1 ));
    });
</script>
</body>
</html>