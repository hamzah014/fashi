<?php

    if(isset($_SESSION['userid']) && isset($_SESSION['username'])){

        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM user WHERE id='$userid' && username='$username'";
                    
        //get all data that status equal to 1 (active)
        $result = $conn->query($sql);

        //turn the result into array
        $dataresult = getdata_row($result);

        //print_r($dataresult);

        $fullname   = $dataresult['fullname'];
        $password   = $dataresult['password'];
        $birthdate  = $dataresult['birthdate'];
        $email      = $dataresult['email'];
        $contactno  = $dataresult['contactno'];
        $role       = $dataresult['role'];
        $address    = $dataresult['address'];


    }

?>

