<?php

  //Adding in stock to the database 

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require('connection.php') ;
  
  $quantity = htmlentities($_POST['Quantity']); //Using HTMLEntities so that no code can be ran from the input box.
  $videogamename = htmlentities($_POST['VideoGameName']);
  
  $original = "SELECT * FROM stock WHERE VideoGameName = '$videogamename'";
  $result = $conn->query($original);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity = $row["Quantity"] + $quantity; //Adding on to the original database value.
  }
  
  $sql="UPDATE stock SET Quantity='$quantity' WHERE VideoGameName = '$videogamename'";

  if($conn->query($sql)===TRUE){
    echo "Stock Updated!";
    die();
  }else {
    echo "Error";
  }
  
  $conn->close();
  


?>