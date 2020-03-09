<?php

    if(isset($_POST['username'])){

        $username  = $_POST['username'];
        $password  = $_POST['password'];



        header("Location: ../login.php");

    }else{
        header("Location: ../login.php");
    }



?>