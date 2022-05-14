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
                        <?php
                        echo '<h3 class="widget-title">Bikes product</h3>';
                        echo '<ul class="product-categories">';
                        echo '<li>';
                        echo '<a href="shop.html">On-Road</a>';
                        echo '</li>';
                        echo '<li class="cat-parent">';
                        echo '<a href="shop.html">X-Road</a>';
                        echo '<ul class="children">';
                        echo '<li>';
                        echo '<a href="shop.html">Aero Race <span>(3)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">City <span>(3)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Comfort<span>(1)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Cruiser<span>(1)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Endurance <span>(4)</span></a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">Off-Road</a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">BMX</a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</aside>';
                        echo '<aside class="product-catlog widget">';
                        echo '<h3 class="widget-title">Catalog</h3>';
                        echo '<div class="widget_color_filter">';
                        echo '<h4 class="widget-title-children">';
                        echo 'Color filter';
                        echo '</h4>';
                        echo '<ul>';
                        echo '<li>';
                        echo '<a href="shop.html" class="light-blue"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="orange"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="blueviolet"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="orange-dark"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="steelblue"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="red-light"></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html" class="cyan-dark"></a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="widget-size-filter">';
                        echo '<h4 class="widget-title-children">';
                        echo 'Size Filter';
                        echo '</h4>';
                        echo '<ul>';
                        echo '<li>';
                        echo '<a href="shop.html">S - Small  <span>(24)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">M - Medium  <span>(18)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">L - Large <span>(9)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html"> XL - Extra Large <span>(39)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">xtra Extra Large  <span>(24)</span></a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '<div class="widget-size-filter">';
                        echo '<h4 class="widget-title-children">';
                        echo 'Brand Filter';
                        echo '</h4>';
                        echo '<ul>';
                        echo '<li>';
                        echo '<a href="shop.html">S - Small  <span>(24)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">M - Medium  <span>(18)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">L - Large <span>(9)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html"> XL - Extra Large <span>(39)</span></a>';
                        echo '</li>';
                        echo '<li>';
                        echo '<a href="shop.html">xtra Extra Large  <span>(24)</span></a>';
                        echo '</li>';
                        echo '</ul>';
                        echo '</div>';
                        echo '</aside>';
                        ?>
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
                                                <img src="images/product/BMX.png" alt="Classic">
                                            </div>
                                            <div class="product-info">
                                            <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[12]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[12]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'Its more stable, capable, and forgiving than an XC race bike, and also more playful, efficient, and lighter than the more traditional BMX bike.';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/BMX2.png" alt="gradient">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[13]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[13]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'Their simplistic design makes it as easy as possible to ride them in intense riding environments such as skate parks or pump tracks.';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/BMX3.png" alt="classic red">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[14]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[14]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'It consistently gets high ratings in its BMX categories and is also known for giving a comfortable ride.';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item col-md-4 col-sm-6">
                                <div class="item">
                                    <div class="product-item-inner">
                                        <div class="product-thumb">
                                            <img src="images/product/BMX4.png" alt="gold">
                                        </div>
                                        <div class="product-info">
                                        <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[15]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[15]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'Very durable and easy to maintain since it has few components that requires to be cleaned.';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="product-item col-md-4 col-sm-6">
                                    <div class="item">
                                        <div class="product-item-inner">
                                            <div class="product-thumb">
                                                <img src="images/product/BMX5.png" alt="dark">
                                            </div>
                                            <div class="product-info">
                                            <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[16]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[16]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'Dark as night!';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="product-item col-md-4 col-sm-6">
                                    <div class="item">
                                        <div class="product-item-inner">
                                            <div class="product-thumb">
                                                <img src="images/product/BMX6.png" alt="Classic">
                                            </div>
                                            <div class="product-info">
                                            <h4><a href="shop.html"><?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[17]->name;
                                            ?></a></h4>
                                            <span class="p-meta">
                                                <span class="p-price"> <?php 
                                            $item = simplexml_load_file('nepomuceno_IT2C_BikeSport.xml');
                                            echo $item->product[17]->price;
                                            ?>
                                            <?php
                                            echo '<span class="p-color">';
                                            echo '<i class="fa fa-circle orange"></i>';
                                            echo '<i class="fa fa-circle steelblue"></i>';
                                            echo '<i class="fa fa-circle light-blue"></i>';
                                            echo '<i class="fa fa-circle blueviolet"></i>';
                                            echo '<i class="fa fa-circle orange-dark"></i>';
                                            echo '</span>';
                                            echo '<p>';
                                            echo 'Good quality because they employ body geometry technologies to guarantee riding comfort. Moreover, these bikes feature durable precision-made components that promise longevity and better performance.';
                                            echo '</p>';
                                            echo '<span class="p-mask">';
                                            echo '<a href="shop-cart.html" class="add-to-cart">Add to cart</a>';
                                            echo '<a href="#" class="add-to-wishlist"><i class="fa fa-heart"></i> Add to wishlist</a>';
                                            echo '<span class="quick-view">';
                                            echo '<a href="#"><i class="fa fa-eye"></i> Quick view</a>';
                                            echo '</span>';
                                            echo '</span>';
                                            ?>
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
                                    <a href="shop.html">2</a>
                                </li>
                                <li>
                                    <span class="current">3</span>
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