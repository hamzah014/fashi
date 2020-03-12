 
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "anne_lippie";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        //die("Connection good ");
    }

    function getdata_rowall($result){

        //for return the result into multiple array

        $index = 0;
        $details = [];
        while ($row = $result->fetch_assoc()) {
            $details[$index] = $row;
            $index++;
        }

        return $details;

    }

    function getdata_row($result){

        //for return the result into one array

        $index = 0;
        $details = [];
        while ($row = $result->fetch_assoc()) {
            $details = $row;
            $index++;
        }

        return $details;

    }



?>