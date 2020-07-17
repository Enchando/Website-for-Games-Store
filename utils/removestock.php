<?php

  //Removing stock from the database

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require('connection.php') ;
  
  $quantity = htmlentities($_POST['Quantity']);//Using HTMLEntities so that no code can be ran from the input box.
  $videogamename = htmlentities($_POST['VideoGameName']); 
  
  $original = "SELECT * FROM stock WHERE VideoGameName = '$videogamename'";
  $result = $conn->query($original);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity = $row["Quantity"] - $quantity; //Removing from the original database value.

    //Checking if the result of this equation will result in a value less than 0.
    
    if ($quantity < 0) { 
        echo "Please enter a valid amount!";

    //If the amount inserted is valid

    } else { 
      $sql="UPDATE stock SET Quantity='$quantity' WHERE VideoGameName = '$videogamename'";

      if($conn->query($sql)===TRUE){
        echo "Stock Updated!";
        die();
      }else {
        echo "Error";
      }
      
      $conn->close();
    }
  }

?>