
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.php" style="font-family: 'Squada One', cursive;font-size:22px;color:white;letter-spacing:2px">
                                <?php echo $info_shopname; ?>
                            </a>
                            <!-- <a href="#"><img src="img/footer-logo.png" alt=""></a> -->
                        </div>
                        <ul>
                            <li>Address: <?php echo $info_address; ?></li>
                            <li>Phone: <?php echo $info_contactno; ?></li>
                            <li>Email: <?php echo $info_email; ?></li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Shop</a></li>
                            <li><a href="index.php?alh=100">About Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <?php

                                if(isset($_SESSION['userid']) && isset($_SESSION['username'])){
                            ?>

                            <li><a href="index.php?alh=1">My Profile</a></li>
                            <li><a href="index.php?alh=7">My Order</a></li>
                            
                            <?php
                                }else{
                            ?>

                            <li><a href="login.php">Login</a></li>
                            <li><a href="register.php">Register</a></li>

                            <?php
                                }

                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        