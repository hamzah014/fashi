<?php

    include('../conn.php');

    if(isset($_POST['username'])){

        $username  = $_POST['username'];
        $password  = $_POST['password'];
        $fullname  = $_POST['fullname'];
        
        //insert into database
        $sql = "INSERT INTO user (username, password, role, fullname)
                VALUES ('$username', '$password', 'public', '$fullname')";

        $result = $conn->query($sql);
        
        //print_r($result);

        echo '<script>alert("Register successfully");</script>';

        //redirect to index
        header("Location: ../login.php");

    }else{
        header("Location: ../login.php");
    }



?>