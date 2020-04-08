<?php

    include('../conn.php');

    
    $sql = "SELECT * FROM infosystem WHERE id=1";
                    
    //get all data that status equal to 1 (active)
    $result = $conn->query($sql);

    //turn the result into array
    $dataresult = getdata_row($result);

    print "<pre>";
    print_r($dataresult);
    print "</pre>";

    $id              = $dataresult['id'];      
    $address         = $dataresult['address'];      
    $contactno       = $dataresult['contactno'];          
    $email           = $dataresult['email'];          
    $shopname        = $dataresult['shopname'];      
    $writer          = $dataresult['writer'];      
    $aboutus         = $dataresult['aboutus'];      



?>

<form action="update_info.php" method="post">

    <input hidden type="text" name="infoid" id="infoid" value="<?php echo $id; ?>">

    <br>
    <br>

    Writer Name
    <input type="text" name="writer" id="writer" value="<?php echo $writer; ?>">

    <br>
    <br>

    Shop Name
    <input type="text" name="shopname" id="shopname" value="<?php echo $shopname; ?>">

    <br>
    <br>

    Address
    <textarea name="address" id="address" cols="30" rows="10"><?php echo $address; ?></textarea>

    <br>
    <br>

    Contact No.
    <input type="text" name="contactno" id="contactno" value="<?php echo $contactno; ?>">

    <br>
    <br>

    Email
    <input type="email" name="email" id="email" value="<?php echo $email; ?>">

    <br>
    <br>

    About Us
    <textarea name="aboutus" id="aboutus" cols="30" rows="10"><?php echo $aboutus; ?></textarea>

    <br>

    <button type="submit">Update</button>



</form>