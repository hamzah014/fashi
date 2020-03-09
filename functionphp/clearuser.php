<?php

   include('../conn.php');

   // Execute the query.
   $sql = "TRUNCATE TABLE user_login";

   $result = mysqli_query($conn, $sql);

   if($result !== FALSE)
   {
      echo("All rows have been deleted.");
   }
   else
   {
      echo("No rows have been deleted.");
   }



?>