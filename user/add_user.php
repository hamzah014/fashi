<?php

    include('../conn.php');

    if(isset($_POST['username'])){

        $username  = $_POST['username'];
        $password  = $_POST['password'];
        
        //insert into database
        $sql = "INSERT INTO user_login (username, password, role)
                VALUES ('$username', '$password', 'public')";

        $result = $conn->query($sql);
        
        //print_r($result);

        echo '<script>alert("Register successfully");</script>';

        //redirect to index
        header("Location: ../login.php");

    }else{
        header("Location: ../login.php");
    }



?>