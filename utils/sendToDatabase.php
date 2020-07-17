<?php

// Adding a new game into the database

include("connection.php");

$VideoGameName = htmlentities($_POST["VideoGameName"]); //Using HTMLEntities so that no code can be ran from the input box.
$Company = htmlentities($_POST["Company"]);
$Quantity = htmlentities($_POST["Quantity"]);

$stmt = $conn->prepare("INSERT INTO stock(VideoGameName, Company, Quantity)
                        VALUES(?,?,?)");
$stmt->bind_param('ssi', $VideoGameName,$Company,$Quantity);


if($stmt->execute()){
    $res = "Data Inserted Successfully:";
    echo json_encode($res);
    $stmt->close();
}
else{
    $error = "Not Inserted";
    echo json_encode($error);
}


?>