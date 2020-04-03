<!DOCTYPE html>
<html lang="zxx">

<?php include('admin/get_infosystem.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://pluspng.com/img-png/avengers-logo-png-avengers-logo-png-1376.png">
    <title><?php echo $info_shopname; ?></title>

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
                    include('user/getuser_detail.php');
                    $filename = "user/edit_profile.php";
                    break;
                case 2:
                    $filename = "user/list_user.php";

                    $sql = "SELECT * FROM user WHERE role != 'admin'";
                    
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
                
                case 5:

                    if( isset($_GET['prod']) ){
                        
                        $productid = $_GET['prod'];
                        
                        $sql = "SELECT * FROM product WHERE id='$productid'";
                    
                        //get all data that status equal to 1 (active)
                        $result = $conn->query($sql);

                        //turn the result into array
                        $dataresult = getdata_row($result);

                        //print_r($dataresult);

                        $filename = "product/view_product.php";

                    }else{
                        
                        $filename = "homepage.php";

                        $sql = "SELECT * FROM product WHERE status=1";
                        
                        //get all data that status equal to 1 (active)
                        $result = $conn->query($sql);

                        //turn the result into array
                        $dataresult = getdata_rowall($result);

                    }

                    break;

                case 6:

                    $filename = "product/order_product.php";

                    include('user/getuser_detail.php');

                    //print_r($_POST);

                    //defined all post value
                    $prodid = $_POST['prod_id'];
                    $amount = $_POST['amount'];

                    $sql = "SELECT * FROM product WHERE id='$prodid'";
                    
                    //get all data that id equal to prodid
                    $result = $conn->query($sql);

                    //turn the result into array
                    $dataresult = getdata_row($result);

                    //print_r($dataresult);

                    //define all data 
                    $price          = $dataresult['price'];
                    $prodname       = $dataresult['name'];
                    $proddetails    = $dataresult['details'];
                    $product_img    = $dataresult['product_img'];
                    $prodtype       = $dataresult['type'];

                    break;
                
                case 7:

                    $filename = "user/order_list.php";
                    
                    $userid = $_SESSION['userid'];

                    $sql = "SELECT * FROM order_product WHERE userid='$userid' ORDER BY id DESC";

                    //get all data that status equal to 1 (active)
                    $result = $conn->query($sql);
                    $dataresult = getdata_rowall($result);
                    
                    //echo count($dataresult);
                    //print_r($dataresult);
                    

                    break;
                
                case 8:

                    $filename = "product/listall_order.php";

                    $sql = "SELECT * FROM order_product ORDER BY id DESC";

                    //get all data that status equal to 1 (active)
                    $result = $conn->query($sql);
                    $dataresult = getdata_rowall($result);
                    
                    //echo count($dataresult);
                    //print_r($dataresult);
                    

                    break;
                
                case 9:

                    $filename = "product/edit_product.php";

                    $prodid = $_GET['prodid']; 

                    $sql = "SELECT * FROM product WHERE id='$prodid'";

                    //get all data that status equal to 1 (active)
                    $result = $conn->query($sql);
                    $dataresult = getdata_row($result);
                    
                    //echo count($dataresult);
                    //print_r($dataresult);
                    

                    break;
                
                case 100:

                    $filename = "aboutus.php";
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
    <!-- <div class="partner-logo">
        <div class="container">
        </div>
    </div> -->
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