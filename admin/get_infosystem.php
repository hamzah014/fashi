<?php


    $servername2 = "localhost";
    $username2 = "root";
    $password2 = "";
    $dbname2 = "anne_lippie";

    // Create connection
    $conn2 = new mysqli($servername2, $username2, $password2, $dbname2);
    // Check connection
    if ($conn2->connect_error) {
        die("Connection failed: " . $conn2->connect_error);
    }else{
        //die("Connection good ");
    }


    function getdata_row2($result){

        //for return the result into one array

        $index = 0;
        $details = [];
        while ($row = $result->fetch_assoc()) {
            $details = $row;
            $index++;
        }

        return $details;

    }

    $sql = "SELECT * FROM infosystem WHERE id=1";
                    
    //get all data that status equal to 1 (active)
    $result = $conn2->query($sql);

    //turn the result into array
    $dataresult = getdata_row2($result);

    //print "<pre>";
    //print_r($dataresult);
    //print "</pre>";

    $info_id              = $dataresult['id'];      
    $info_address         = $dataresult['address'];      
    $info_contactno       = $dataresult['contactno'];          
    $info_email           = $dataresult['email'];          
    $info_shopname        = $dataresult['shopname'];      
    $info_writer          = $dataresult['writer'];      
    $info_aboutus              = $dataresult['aboutus'];      



?>