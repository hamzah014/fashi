<?php
    include('../conn.php');
    print_r($_POST);

    $id              = $_POST['infoid'];      
    $address         = $_POST['address'];      
    $contactno       = $_POST['contactno'];          
    $email           = $_POST['email'];          
    $shopname        = $_POST['shopname']; 
    $writer          = $_POST['writer']; 

    $sql = "UPDATE infosystem SET 
    address='$address', 
    contactno='$contactno', 
    email='$email', 
    writer='$writer', 
    shopname='$shopname' 
    WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "yessss done";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


?>