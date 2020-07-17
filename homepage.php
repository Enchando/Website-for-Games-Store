<?php
//Making sure that the session is still active, if not, redirect to login.
session_start();
if (!isset($_SESSION['appuser'])) {
    header("Location: login.php");
    die();
}

?>

<!DOCTYPE html>
<html>

    <head>
        <!--Adding in the stylesheets-->
        <link rel="stylesheet" href="/jb974/coursework/CSS/mystyle.css">
        <link rel="stylesheet" href="/jb974/coursework/CSS/newnavigationstyle.css">

        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
    <body class = "bg">
        <a href = "logout.php" class = "button1" >Logout</a>
        <h1>Welcome</h1>
        <h2>Games Stock Management System</h2>

        <div class = "nav"> <!--Navigation bar-->
                <ul>
                    <li class = "home"><a href = "homepage.php">Home</a></li>
                    <li class = "database"><a href = "datahomepage.php">Database</a>
                        <ul> <!-- Drop Down links -->
                            <li><a href = "datahomepage.php">Adjust Stock</a></li>
                            <li><a href = "newgamepage.php">Add New Game</a></li>
                            <li><a href = "dataD3tablepage.php">Tabulation</a></li>
                        </ul>
                    </li>
                    <li><a href = "usershomepage.php">Users</a></li>
                </ul>
        </div>
        <h6></h6>
    </body>
</html>
