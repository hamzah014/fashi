<?php

    include('../conn.php');

    //print "<pre>";
    //print_r($_POST);
    //print "</pre>";


    $userid     = $_POST['userid'];
    $fullname   = $_POST['name'];
    $birthdate  = $_POST['birthdate'];
    $email      = $_POST['email'];
    $contactno  = $_POST['phone'];
    $address    = $_POST['address'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql = "UPDATE user SET 
    fullname='$fullname',
    birthdate='$birthdate',
    email='$email',
    contactno='$contactno', 
    address='$address', 
    username='$username', 
    password='$password' 
    WHERE id='$userid'";

    if ($conn->query($sql) === TRUE) {
        //echo "yessss done";
        header("Location: ../index.php?alh=1");
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
        echo '<script>window.location.href="../index.php?alh=1";</script>';
    }



?>