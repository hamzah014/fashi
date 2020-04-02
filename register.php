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
        
        <?php //include('footer_navigation.php'); ?>
        
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