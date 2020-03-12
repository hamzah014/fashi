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

            //include connection for mysql
            include('conn.php');

            //defined get value to menu variable
            $menu = $_GET['alh'];

            switch ($menu) {
                case 1:
                    $filename = "user/edit_profile.php";
                    break;
                case 2:
                    $filename = "user/list_user.php";

                    $sql = "SELECT * FROM user WHERE role != 'admin' AND status=1";
                    
                    //get all data that role not equal to admin
                    $result = $conn->query($sql);

                    //turn the result into array
                    $dataresult = getdata_rowall($result);

                    break;
                
                case 3:
                    $filename = "product/list_product.php";

                    $sql = "SELECT * FROM product WHERE status=1";
                    
                    //get all data that status equal to 1 (active)
                    $result = $conn->query($sql);

                    //turn the result into array
                    $dataresult = getdata_rowall($result);

                    break;
                
                case 4:
                    $filename = "product/add_product.php";

                    break;
                
                default:
                    $filename = "homepage.php";

                    $sql = "SELECT * FROM product WHERE status=1";
                    
                    //get all data that status equal to 1 (active)
                    $result = $conn->query($sql);

                    //turn the result into array
                    $dataresult = getdata_rowall($result);

                    break;
            }

        }else{

            include('conn.php');

            $filename = "homepage.php";

            $sql = "SELECT * FROM product WHERE status=1";
                    
            //get all data that status equal to 1 (active)
            $result = $conn->query($sql);

            //turn the result into array
            $dataresult = getdata_rowall($result);
            
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