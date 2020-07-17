<?php

$servername = "emps-sql.ex.ac.uk";
$username = "jb974";
$password = "jb974";
$database = "jb974" ;

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
  //echo "Connected successfully <br />";
}


?>
