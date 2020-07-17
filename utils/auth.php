<?php

//Authorising the user when logging in, by checking the username and the password against 
//what is already in the database.

session_start();

require('connection.php') ;


if ( isset ($_POST["username"]) && isset($_POST["password"]))
{
  $username = htmlentities($_POST["username"]) ; //Using HTMLEntities so that code can't be ran in the input box.
  $password = htmlentities($_POST["password"]) ;
  validateUser($conn, $username, $password) ; //Running the function below.

}
else
{
  echo "You have not entered a valid username or password" ;
  header('Location: ../login.php');
}


function validateUser($conn, $username, $password)
{
  $username = $conn->real_escape_string($username); //Check if its a legal SQL Statement

  $sql ="SELECT * FROM users WHERE username = '$username'";

  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        $hashed_password = $row["password"];

        if ($hashed_password === crypt($password, $hashed_password)) //Checking if the two crpyted passwords match
        {
          $_SESSION["appuser"] = $username ; //Creating session that will be checked
          header("Location: ../homepage.php");//Redirect to the homepage
          exit();
        }
        else
        {
          $error = "Invalid Password" ;
          $_SESSION["apperror"] = $error ;
          header("Location: ../login.php");
        }
    }

  }
  else
  {
    $error = "Username not found in the database" ;
    $_SESSION["apperror"] = $error ;
    header("Location: ../login.php");
  }
  $conn->close();
}

?>
