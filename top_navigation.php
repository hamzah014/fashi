
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php" style="font-family: 'Squada One', cursive;font-size:22px;color:black;letter-spacing:2px">
                                ANNE LIPPIE HOUSE
                                <!-- <img src="img/logo.png" alt=""> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <?php 
                            
                            if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
                                //if user have login session
                            ?>
                            <li class="cart-icon"><a href="#">
                                    Hi,<?php echo $_SESSION['username']; ?>!
                                    <i class="fa fa-user"></i>
                                    <span><i class="fa fa-circle text-success"></i></span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-button">
                                        <a href="index.php?alh=1a" class="primary-btn view-card">My Profile</a>
                                        <a href="logout.php" class="primary-btn checkout-btn">LOG OUT</a>
                                    </div>
                                </div>
                            </li>

                            <?php }else{ //if user doesnt have login session ?>
                                
                            <li class="cart-icon"><a href="#">
                                    Hi,there!
                                    <i class="fa fa-user"></i>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-button">
                                        <a href="login.php" class="primary-btn checkout-btn">Login/Register</a>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart" style="display: block !important;">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="./shop.html">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>   
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>