<?php
    include('../conn.php');
    
    /* 
    print '<pre>';
    print_r($_POST);
    print '</pre>';

    print_r($_FILES);
     */

    $prodid  = $_POST['prodid'];             
    $name    = $_POST['name'];             
    $details = $_POST['details'];             
    $type    = $_POST['type'];         
    $price   = $_POST['price'];         

    //check whether user change new image by checking input files type
    if($_FILES['product_img']['size']==0){
        //echo 'takda';

        //set sql statement without updating product image
        $sql = "UPDATE product SET 
                name='$name', 
                details='$details', 
                type='$type', 
                price='$price'
                WHERE id='$prodid'";

    }else{

        //echo 'ada';

        $target_dir = "../images/product/";
        $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $product_img    = basename($_FILES["product_img"]["name"]);

        //echo $imageFileType;

        //defined new name for image that generate by us
        $imagename = "PRD" . $prodid . date("Ymdhis") . "." . $imageFileType;

        //echo $imagename;

        //move the image into folder image/product
        move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_dir . $imagename);

        //set sql statement with updating product image
        $sql = "UPDATE product SET 
                name='$name', 
                details='$details', 
                type='$type', 
                price='$price', 
                product_img='$imagename' 
                WHERE id='$prodid'";


    }
    
    
    if ($conn->query($sql) === TRUE) {
        //echo "yessss done";
        echo '<script>alert("Product has been successfully updated.";</script>';
        echo '<script>window.location.href="../index.php?alh=3";</script>';
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo '<script>alert("Sorry, error occured! Please try again. Thanks");</script>';
        echo '<script>window.history.back();</script>';
    }

    

?>