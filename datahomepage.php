<?php
//Making sure that the session is still active, if not, redirect to login.
require("utils/connection.php");
session_start();
if (!isset($_SESSION['appuser'])) {
    header("Location: login.php");
    die();
}

$sql = 'SELECT * FROM stock';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}

//include("utils/displayTable.php")
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
        <script src="js/dataSearchBar.js"></script>
        <script src="js/addQuantity.js"></script>
        <script src="js/removeQuantity.js"></script>
        <script src="js/refreshStockTable.js"></script>

        <meta name = "viewport" content = "width = device-width, initial-scale=1.0">
    </head>

    <body class = "bg">
        <a class = "button1" href = "logout.php">Logout</a>
        <h3>Database</h3>

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

        <div id = "wrapper"> <!--Form for adding in more stock to the database -->
            <form name = "add_form" class = "add_form" method="post">
                <div>
                    <h5>Add Stock:<h5>
                    <h4>Video Game Name:</h4>
                        <input type="text" name="VideoGameName" id = "VideoGameName">
                    <h4>Quantity:</h4>
                        <input type = "text" name="Quantity" id = "Quantity">
                    <div>
                        <button type="button" class = "submit2" onclick = "addData()">Submit</button>
                    </div>
                </div>
            </form>

            <form name="remove_form" class = "remove_form" method="post"> <!-- Form for removing stock from the database-->
                <div>
                    <h5>Remove Stock:<h5>
                    <h4>Video Game Name:</h4>
                        <input type="text" name="VideoGameName2" id ="VideoGameName2">
                    <h4>Quantity:</h4>
                        <input type = "text" name="Quantity2" id = "Quantity2">
                    <div>
                        <button type="button" class = "submit2" onclick = "removeData()">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <!--Search Bar-->
        <input id='searchBar' type='text' onkeyup='return searchBar()' placeholder='Find Video Game...'>

        <!--Displaying the Stock Table-->
        <script>refreshTable();</script>
  

        <div id="results"></div>


    </body>
</html>