
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php" style="font-family: 'Squada One', cursive;font-size:22px;color:black;letter-spacing:2px">
                                <?php echo $info_shopname; ?>
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
                                        <a <?php if($_SESSION['userrole']=="admin"){ echo 'hidden';} ?> href="index.php?alh=1" class="primary-btn view-card">My Profile</a>
                                        <a <?php if($_SESSION['userrole']=="admin"){ echo 'hidden';} ?> href="index.php?alh=7" class="btn btn-info checkout-btn">My Order</a>
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
                        <span>All Categories</span>
                        <ul class="depart-hover">
                            <li><a href="index.php">All</a></li>
                            <li><a onclick="selectedcategory('sc')">Skincare</a></li>
                            <li><a onclick="selectedcategory('mk')">Makeup</a></li>
                            <li><a onclick="selectedcategory('bs')">Body and Sun</a></li>
                            <li><a onclick="selectedcategory('men')">Men's</a></li>
                            <li><a onclick="selectedcategory('frag')">Fragrance</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">Shop</a></li>
                        <li><a href="index.php?alh=100">Contact Us</a></li>
                        <?php
                            if(isset($_SESSION['userrole'])){

                                if($_SESSION['userrole']=="admin"){
                            ?>
                            <li><a href="#">Admin Option</a>
                                <ul class="dropdown">
                                    <li><a href="index.php?alh=2">List of User</a></li>
                                    <li><a href="index.php?alh=3">List of Product</a></li>
                                    <li><a href="index.php?alh=8">List of Order</a></li>
                                </ul>
                            </li>
                            <?php
                                }

                            }

                        ?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>