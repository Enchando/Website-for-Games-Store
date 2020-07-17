<?php
//Making sure that the session is still active, if not, redirect to login.
require("utils/connection.php");
session_start();
if (!isset($_SESSION['appuser'])) {
    header("Location: login.php");
    die();
}

$sql = 'SELECT * FROM users';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
        <!--Adding in the stylesheets-->
        <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/datastyle.css">
        <link rel="stylesheet" type="text/css" href="CSS/newnavigationstyle.css">

        <!--JavaScript/Ajax Script Codes-->
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="js/userSearchBar.js"></script>
        <script src="js/deleteUser.js"></script>
        <script src="js/addUser.js"></script>
        <script src="js/refreshUsersTable.js"></script>

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

        <div id = "wrapper"> <!--Form for adding in a new user to the database-->
            <form name = "add_user" class = "add_form" method="post">
                <div>
                    <h5>Add User:<h5>
                    <h4>Username:</h4>
                        <input type="text" name="username" id = "username">
                    <h4>User's Password:</h4>
                        <input type = "password" name="password" id = "password">
                    <div>
                        <button type="button" class = "submit2" onclick = "addUser()">Add User</button> <!--Calling function-->
                    </div>
                </div>
            </form>

            <form name = "remove_user" class = "remove_form" method="post"> <!--Form for removing users from the database-->
                <div>
                    <h5>Remove User:<h5>
                    <h4>Username:</h4>
                        <input type="text" name="username" id = "username2">
                    <h4>Confirm Password:</h4>
                        <input type = "password" name="password" id = "password2">
                    <div>
                        <button type="button" class = "submit2" onclick = "deleteUser()">Delete User</button> <!--Calling function-->
                    </div>
                </div>
            </form>
        </div>

        <!--Search Bar-->
        <input id="searchBar" type="text" onkeyup="return searchBar()" placeholder="Find User...">
        <!--Table from the Database-->
        <script>refreshUserTable();</script>
        <div id="results"></div>
    </body>
</html>