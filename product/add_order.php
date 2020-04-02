<?php
    include('../conn.php');
    session_start();
    //print "<pre>";
    //print_r($_POST);
    //print "</pre>";
    
   //[fullname] => Muhammad Hamzah
   //[prodid] => 1
   //[address] => 10-4-14 Jalan 11/91 Taman Shamelin Perkasa,Batu 3 1/2
   //[email] => muhdhamzah121@gmail.com
   //[contactno] => 01654687
   //[prodimage] => product.jpg
   //[amount] => 8
   //[prodprice] => 300
   //[paymentmethod] => onlinebank
   //[bankname] => bankislam

    $userid             = $_SESSION['userid'];

    $fullname           = $_POST['fullname'];
    $prodid             = $_POST['prodid'];
    $address            = $_POST['address'];    
    $email              = $_POST['email'];    
    $contactno          = $_POST['contactno'];    
    $prodimage          = $_POST['prodimage'];        
    $amount             = $_POST['amount'];    
    $prodprice          = $_POST['prodprice'];        
    $paymentmethod      = $_POST['paymentmethod'];            
    $bankname           = $_POST['bankname'];
    
    $tracking_id = "ORD" . $prodid . rand(1000,99999)  ;

    $total_price = $prodprice * $amount;

    $sql = "INSERT INTO order_product (userid,tracking_id,fullname,totalprice,address,email,contactno,amount,prodid,paymentmethod,bankname)
     VALUES ('$userid','$tracking_id','$fullname','$total_price','$address','$email','$contactno','$amount','$prodid','$paymentmethod','$bankname')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.php?alh=3");
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
        echo '<script>window.location.href="../index.php";</script>';
    }


?>

