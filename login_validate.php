<?php
    
    session_start();

    include('conn.php');

    if($_POST['username']!="" && $_POST['password']!=""){

        $username = $_POST['username'];
        $password = $_POST['password'];

        //print($username . " - " . $password);
        
        
        $sql = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                //echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
                $_SESSION['username'] = $row["username"];
                $_SESSION['userid'] = $row["id"];
                
                header("Location: index.php"); 

            }
        } else {
            //echo "0 results";
            header("Location: login.php"); 
        }


    }else{

        header("Location: login.php"); 

    }


?>