<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://pluspng.com/img-png/avengers-logo-png-avengers-logo-png-1376.png">
    <title>ANNE LIPPIE HOUSE</title>

    <?php session_start(); ?>
    <?php include('header_link.php'); ?>

</head>

<body>

    <!-- Header Section Begin -->
    <header class="header-section">
        
        <?php include('top_header.php'); ?> <!-- header paling atas -->

        <?php include('top_navigation.php'); ?> <!-- top navigation menu dropdown -->

    </header>
    <!-- Header End -->

    <?php
        $filename = '';
        
        //check if there is any GET passing value
        if(isset($_GET['alh'])){

            //defined get value to menu variable
            $menu = $_GET['alh'];

            switch ($menu) {
                case 1:
                    $filename = "user/edit_profile.php";
                    break;
                
                default:
                    $filename = "homepage.php";
                    break;
            }

        }else{
            $filename = "homepage.php";
        }

    ?>
    
    
    <?php include($filename); //include pagename depends on menu id ?>

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        
        <?php include('footer_navigation.php'); ?>
        
        <?php include('footer.php'); ?>

    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php include('script_link.php'); ?>


</body>

</html>