<?php
    session_start();
    if($_POST['username']!="" && $_POST['password']!=""){

        $username = $_POST['username'];
        $password = $_POST['password'];

        //print($username . " - " . $password);

        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $password;

        header("Location: index.php"); 

    }else{

        header("Location: login.php"); 

    }


?>