<?php
//Making sure that the session is still active, if not, redirect to login.
require("utils/connection.php");
session_start();
if (!isset($_SESSION['appuser'])) {
    header("Location: login.php");
    die();
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

        <!--JavaScript/Ajax Script Codes-->
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="js/newEntry.js"></script>

        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    </head>

    <body class = "bg">
        <a class = "button1" href = "logout.php">Logout</a>
        <h3 class = "shadow">Add New Game</h3>

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

        
        <form id = "addtodatabase" method="post"> <!--Adding in a new game to the database-->
            <div>
                <h4>Video Game Name:</h4>
                    <input type="text" name="VideoGameName" id="VideoGameName">
                <h4>Company:</h4>
                    <input type="text" name="Company" id = "Company">
                <h4>Quantity</h4>
                    <input type = "text" name="Quantity" id = "Quantity">
                <div style = "text-align:center;">
                    <button type="button" class = "submit2" onclick = "newEntry()">Submit</button> <!--Calling Javascript-->
                </div>
            </div>
        </form>
    </body>
</html>