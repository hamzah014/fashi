<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANNE LIPPIE HOUSE</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <?php include('header_link.php'); ?>
    
</head>

<body>
    
    <!-- Register Section Begin -->
    <div class="register-login-section spad" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2 class="text-white">Register</h2>
                        <form action="user/add_user.php" method="POST">
                            <div class="group-input">
                                <label class="text-white" for="username">Fullname *</label>
                                <input type="text" id="fullname" name="fullname" required>
                            </div>
                            <div class="group-input">
                                <label class="text-white" for="username">Username *</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="group-input">
                                <label class="text-white" for="password">Password *</label>
                                <input type="password" id="password" name="password" required onkeyup="checkpass()">
                            </div>
                            <div class="group-input">
                                <label class="text-white" for="con-pass">Confirm Password *</label>
                                <input type="password" id="con-pass" name="con-pass" required onkeyup="checkpass()">
                            </div>
                            <div class="group-input">
                                <label class="" id="text-result"></label>
                            </div>
                            <button id="btnrg" type="submit" class="site-btn register-btn">REGISTER</button>
                            <a class="login-btn btn btn-danger" href="index.php">Back to Home <i class="fa fa-home" aria-hidden="true"></i></a>
                        
                        </form>
                        <div class="switch-login">
                            <a href="login.php" class="or-login text-white">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
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
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
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
        
        <?php include('footer.php'); ?>
    
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php include('script_link.php'); ?>
    
    <script>

        $('#btnrg').attr('disabled','true');
        $('#btnrg').css('cursor','not-allowed');

        function checkpass(){

            usm = $('#username').val();
            pass1 = $('#password').val();
            pass2 = $('#con-pass').val();

            if(pass1=="" && pass2==""){
                $('#text-result').html("");
                $('#btnrg').attr('disabled','true');
                $('#btnrg').css('cursor','not-allowed');
            }else if(pass1 == pass2){
                $('#text-result').html('<span class="alert alert-success">Password Matched.</span>');

                if(usm==""){
                    $('#btnrg').attr('disabled','true');
                    $('#btnrg').css('cursor','not-allowed');
                }else{
                    $('#btnrg').removeAttr('disabled');
                    $('#btnrg').css('cursor','pointer');
                    
                }

            }else if(pass1 != pass2){
                $('#text-result').html('<span class="alert alert-danger">Not Matched.</span>');
                $('#btnrg').attr('disabled','true');
                $('#btnrg').css('cursor','not-allowed');
            }




        }

    </script>

</body>

</html>