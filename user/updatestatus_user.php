<?php
    include('../conn.php');
    //print_r($_POST);

    $actions    = $_POST['actions'];
    $userid     = $_POST['userid'];
    $sql        = "";

    if($actions=="deactivate"){

        $sql = "UPDATE user SET 
        status='0'
        WHERE id='$userid'";

    }else{
        
        $sql = "UPDATE user SET 
        status='1'
        WHERE id='$userid'";

    }


    if ($conn->query($sql) === TRUE) {
        //echo "yessss done";
        echo 1;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo 0;
    }


?>