<?php

    $target_dir = "../images/product/";
    $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
        
        include('../conn.php');

        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

        //insert all data if images is successfully save inside file

        $name           = $_POST['name'];
        $details        = $_POST['details'];
        $type           = $_POST['type'];
        $price          = $_POST['price'];
        $product_img    = basename($_FILES["product_img"]["name"]);

        $sql = "INSERT INTO product (name,details,type,price,product_img)
                VALUES ('$name','$details','$type','$price','$product_img')";

        $result = $conn->query($sql);
        //echo("Error description: " . $conn -> error);
        echo '<script>alert("Add product successfully");</script>';

        //redirect to index
        header("Location: ../index.php?alh=4");


    } else {
        //return back if images is unsuccessfully save inside file
        //redirect to index
        header("Location: ../index.php?alh=4");
    }



?>