<?php
    include('../conn.php');

    //print_r($_POST);

    $orderid   = $_POST['orderid'];

    $sql = "UPDATE order_product SET 
    status='success' 
    WHERE id='$orderid'";

    if ($conn->query($sql) === TRUE) {
        echo 1;
        //header("Location: ../index.php?alh=1");
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo 0;
    }


?>