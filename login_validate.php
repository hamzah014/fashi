<?php
    
    session_start();

    include('conn.php');

    if($_POST['username']!="" && $_POST['password']!=""){

        $username = $_POST['username'];
        $password = $_POST['password'];

        //print($username . " - " . $password);
        
        //find username and password in database
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
                
                //check whether the acc is activate or not
                if($row['status']==0){
                    //if the acc is not deactive
                    echo "<script>alert('Sorry your account is already deactivated. Please contact us to activate your account back.');</script>";
                    echo "<script>window.location.href = 'login.php';</script>";

                }else{
                    //if the acc is active

                    //set session for user
                    $_SESSION['username'] = $row["username"];
                    $_SESSION['userid'] = $row["id"];
                    $_SESSION['userrole'] = $row["role"];

                    echo "<script>alert('Hi Welcome back, " . $row["username"] . ".');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";

                }
 

            }
        } else {
            //if username and password doesnt match with database
            echo "<script>alert('Your username or password is incorrect. Please try again later.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }


    }else{

        header("Location: login.php"); 

    }


?>