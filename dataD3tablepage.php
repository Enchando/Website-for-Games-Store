<?php
//Making sure that the session is still active, if not, redirect to login.
require("utils/connection.php");

session_start();
if (!isset($_SESSION['appuser'])) {
    header("Location: login.php");
    die();
}
//Getting all the data from the stock table.
$sql = 'SELECT * FROM stock';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Database</title>
        <!--Adding in the stylesheets-->
        <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/datastyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/newnavigationstyle.css">
        
        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    </head>

    <body class = "bg">
        <a class = "button1" href = "logout.php">Logout</a>
        <h3>Table of Stock</h3>

        <div class = "nav"> <!--Navigation bar-->
                <ul>
                    <li class = "home"><a href = "homepage.php">Home</a></li>
                    <li class = "database"><a href = "datahomepage.php">Database</a>
                        <ul> <!-- Drop Down links -->
                            <li><a href = "datahomepage.php">Adjust Stocks</a></li>
                            <li><a href = "newgamepage.php">Add New Game</a></li>
                            <li><a href = "dataD3tablepage.php">Tabulation</a></li>
                        </ul>
                    </li>
                    <li><a href = "usershomepage.php">Users</a></li>
                </ul>
        </div>
        <div class = "back"> <!--Displaying the data from the database in a table.-->
            <?php require("utils/d3Table.php"); ?>
        </div>


    </body>
</html>