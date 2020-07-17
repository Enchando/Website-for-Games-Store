<?php
     // Deleting a user from the database
     
     require("connection.php");
     $user = htmlentities($_POST["username"]);
 
     $sql = "DELETE FROM users WHERE username = '$user'" ;
 
 
     if ($conn->query($sql) === TRUE)
     {
         echo "User Removed!";
         exit();
     }
     else
     {
         echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
     }
?>