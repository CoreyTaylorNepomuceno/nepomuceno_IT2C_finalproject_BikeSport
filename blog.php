<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

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
                                    echo '<div class="blog">';
                                    echo '<div class="container">';
                                    echo '<ul class="tz-breadcrumbs">';
                                    echo '<li>';
                                    echo '<a href="#">Home</a>';
                                    echo '</li>';
                                    echo '<li class="current">';
                                    echo 'Category';
                                    echo '</li>';
                                    echo '</ul>';
                                    echo '<div class="blog-container">';
                                    echo '<div class="row">';
                                    echo '<div class="col-md-4">';
                                    echo '<div class="blog-sidebar">';
                                    echo '<aside class="widget widget_search">';
                                    echo '<form class="tz-search-form">';
                                    echo '<input class="needsclick" id="td-header-search" type="text" value="" name="s" autocomplete="off">';
                                    echo '<button class="tz-submit" type="submit"></button>';
                                    echo '</form>';
                                    echo '</aside>';
                                    echo '<aside class="widget widget_categories">';
                                    echo '<h4 class="widget-title">CATEGORIES</h4>';
                                    echo '<ul>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Creative <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Fashion <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Creative <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Image <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Photography <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Videos <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">WordPress <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Antiquarianism  <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Championship <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<a href="blog.html">Clerkship <span>(30)</span></a>';
                                    echo '</li>';
                                    echo '</ul>';
                                    echo '</aside>';
                                    echo '<aside class="widget widget_recent_posts">';
                                    echo '<h4 class="widget-title">RECENT POSTS</h4>';
                                    echo '<ul>';
                                    echo '<li>';
                                    echo '<img src="images/Blog/bikebike.png" alt="Ready tablet picture with rating review">';
                                    echo '<div class="recent-info">';
                                    echo '<h5><a href="single-blog.html">Lightest Bike</a></h5>';
                                    echo '<span class="date">Posted at May 15, 2022</span>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<img src="images/Blog/bikebike.png" alt="Room Post Format with Beautiful Water Nature">';
                                    echo '<div class="recent-info">';
                                    echo '<h5><a href="single-blog.html">Cheapest Bike</a></h5>';
                                    echo '<span class="date">Posted at May 15, 2022</span>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<img src="images/Blog/bikebike.png" alt="15 cooking gadgets new rating review system">';
                                    echo '<div class="recent-info">';
                                    echo '<h5><a href="single-blog.html">Heaviest Bike</a></h5>';
                                    echo '<span class="date">Posted at May 15, 2022</span>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<img src="images/Blog/bikebike.png" alt="Apple iPad Mini is Gorgeous For Business">';
                                    echo '<div class="recent-info">';
                                    echo '<h5><a href="single-blog.html">Affordable Bike</a></h5>';
                                    echo '<span class="date">Posted at May 15, 2022</span>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '<li>';
                                    echo '<img src="images/Blog/bikebike.png" alt="iPhone Fingerprint Scanner Hacked">';
                                    echo '<div class="recent-info">';
                                    echo '<h5><a href="single-blog.html">Bike ni Vincent</a></h5>';
                                    echo '<span class="date">Posted at May 15, 2022</span>';
                                    echo '</div>';
                                    echo '</li>';
                                    echo '</ul>';
                                    echo '</aside>';
                                    echo '<aside class="widget widget_instagram">';
                                    echo '<h4 class="widget-title">instagram</h4>';
                                    echo '<div class="img-instagram">';
                                    echo '<img src="images/Blog/MountainBike1.png" alt="instangram1">';
                                    echo '<img src="images/Blog/MountainBike2.png" alt="instangram1">';
                                    echo '<img src="images/Blog/MountainBike3.png" alt="instangram1">';
                                    echo '<img src="images/Blog/MountainBike4.png" alt="instangram1">';
                                    echo '<img src="images/Blog/MountainBike5.png" alt="instangram1">';
                                    echo '<img src="images/Blog/MountainBike6.png" alt="instangram1">';
                                    echo '</div>';
                                    echo '</aside>';
                                    ?>
                                <aside class="widget widget_recent_posts">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row tz-blog-content">
                                <div class="col-md-12">
                                    <article class="blog-item blog-heading">
                                        <div class="thumb">
                                            <img src="images/Blog/cyclistrace.png" alt="race">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Alaphilippe cleared to train indoors but Tour de France still in doubt</a></h3>';
                                            echo '<span class="entry-meta">By Zeus Jalac published about 22 hours ago</span>';
                                            echo '<p>';
                                            echo 'Julian Alaphilippe has been cleared to start training on the rollers three weeks after he crashed out of Li??ge-Bastogne-Li??ge';
                                            echo 'but his participation in this year???s Tour de France remains in doubt, just 50 days from the start in Copenhagen.';
                                            echo '</p>';
                                            ?>
                                            <a class="continue" href="single-blog.html">Continue Reading</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/crankset.png" alt="Room Post Format with Beautiful">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Groupset or Single speed?</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'It is just a question that I added because I do not have anything to put here so I just put this to have content for this news I guess.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/windbreaker.png" alt="windbreaker">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Wind Breaker Webtoon</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'The windbreaker manhwa is breaking the internet due to gaining massive attention to cyclists around the world.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/fixieriders.png" alt="fixieriders">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Fixed Gear Riders are taking over!</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'Fixed Gear Riders are taking over the city! Fixed Gear Bikes are trending nowadays and gaining a lot of popularity to teenagers.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/whipskid.png" alt="whipskid">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Do not know how to whip skid?</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'Do you even know how to whip skid bro? Click here to learn the basic steps on how to whip that skid on your Fixed Gears.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/chains.png" alt="chains">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Fixed Gear Chains</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'Surveys are being answered due to the growing questions about what chain is appropriate for Fixed-gear riders.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <article class="blog-item">
                                        <div class="thumb">
                                            <img src="images/Blog/expensive.png" alt="expensivebike">
                                        </div>
                                        <div class="blog-info">
                                        <?php
                                            echo '<h3><a href="single-blog.html">Worlds Most Expensive Mountain Bike</a></h3>';
                                            echo '<span class="entry-meta">Posted at May 15, 2022</span>';
                                            echo '<p>';
                                            echo 'The Worlds most expensive mountain bike is roughly worth 1 million dollars according to the makers.';
                                            echo '</p>';
                                            echo '<a class="continue" href="single-blog.html">Continue Reading</a>';
                                            ?>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <nav class="pagination">
                                <ul class="pagination_list pull-right">
                                    <li>
                                        <a href="blog1.html">1</a>
                                    </li>
                                    <li>
                                        <span class="current">2</span>
                                    </li>
                                    <li>
                                        <a href="blog3.html">3</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">4</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">5</a>
                                    </li>
                                    <li>
                                        <span>...</span>
                                    </li>
                                    <li>
                                        <a href="blog.html">Next</a>
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
                    </div>
                    <div class="footer-right">
                        <div class="tz-widget-clients widget">
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
                    <script type='text/javascript' src="js/off-canvas.js"></script>
                    <script src="js/owl.carousel.js"></script>
                    <script src="js/custom.js"></script>

                    </body>
                    </html>