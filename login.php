<?php
//Making sure that the session is still active, if not, redirect to login.
session_start();


if ( isset($_SESSION['appuser']))
{
  header('Location: homepage.php');
}

else if ( isset($_SESSION['apperror'] ))
{
  $error = $_SESSION['apperror'] ;
  //Remove session variables
  session_unset();
  // Destroy the session
  session_destroy();
}

 ?>


<!DOCTYPE html>
<html>
  <head>
    <!--Adding in the stylesheets-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link href="/jb974/coursework/CSS/loginstyle.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name = "viewport" content = "width = device-width, initial-scale=1.0">

    <!--JavaScript/Ajax Script Codes-->
    <script src="js/checklogin.js"></script>
  
    <title>Login Page</title>
  </head>

  <body>
    <!-- Main login image -->
    <center><img src = "http://students.emps.ex.ac.uk/jb974/coursework/CSS/GoogleIcons/ic_account_circle_white_48px.svg" class = "picture"></center>

    <center><p class = "maintitle">Games Database </p></center>

    <!-- Login form -->
    <div id = "parent">
      <!-- Checking the input is valid by running the authorization file -->
      <form id= "form_login" name="loginForm" action="/jb974/coursework/utils/auth.php" method="post" onsubmit = "return validateForm()">
        <input type="text" name="username" value="" placeholder = "Username">
        <p></p>
        <input type="password" name="password" value="" placeholder = "Password">
        <p></p>
        <input type="submit" value="Submit" class = "submitlogin">
      </form>
    </div>
  </body>
</html>




































<?php

/*
//Password received from a user
$user_input = 'webApp01' ;

//Generate our randdom Salt
$rand = openssl_random_pseudo_bytes(36);
$salt = '$2a$10$1qAz2wSx3eDc4rFv5tGb5e4jVuld5/KF2Kpy.B8D2XoC031sReFGi' . strtr(base64_encode($rand), array('_' => '.', '~' => '/'));

//This is the hashed password which would be stored in our db
$hashed_password = crypt('webApp01', $salt);

//Check to see if our password is equal to our user input
if ($hashed_password === crypt($user_input, $hashed_password))
{
  echo "match" ;
}

else
{
  echo "no match" ;
}




function hash_equals($str1, $str2)
    {
        if(strlen($str1) != strlen($str2))
        {
            return false;
        }
        else
        {
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--)
            {
                $ret |= ord($res[$i]);
            }
            return !$ret;
        }
    }
    */
?>
