<?php

//Displaying the D3 table to visualise the amount of games in stock

require("connection.php");
$sql = "SELECT * FROM stock";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM stock";
$result2 = $conn->query($sql);

if ($result->num_rows>0){

    $sum = 0;

    while($row = $result->fetch_assoc()){

        $sum = $sum + $row["Quantity"]; //Finding the total number of games

    }
}
if ($result2->num_rows>0){
    while($row = $result2->fetch_assoc()){
        $tablewidth = ($row["Quantity"])*100/$sum; //Finding total percentage
        echo "</br>".$row['VideoGameName']." has :<b> " .$row["Quantity"]." Avaliable Copies</b>, being: ".round($tablewidth,2).
        " percent of the total current stock.<svg width='100%' height='60'><rect width='".$tablewidth."%' height = '50' style = 'fill:#ffffffa1;stroke-width:0;
        '/></br></svg>";
    }
}
?>