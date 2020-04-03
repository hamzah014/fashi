<?php
    include('../conn.php');
    //print_r($_POST);

    $prodid    = $_POST['prodid'];

    $sql = "DELETE FROM product 
            WHERE id='$prodid'";


    if ($conn->query($sql) === TRUE) {
        //echo "yessss done";
        echo 1;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo 0;
    }


?>