<?php
    //Addding a new user and making the input password secure using salting and SHA512 Hashing.

    require("connection.php");
    $user = htmlentities($_POST["username"]);
    $pass = htmlentities($_POST["password"]);
    $salt = substr(str_shuffle("./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz012345‌​6789"), 0, 8); //Generating random salt for password.
    $hashed_password = crypt($pass, '$6$'.$salt); //Using SHA512 Password hashing.


    $sql = "INSERT INTO users (id, username, password) VALUES (NULL , '$user' , '$hashed_password')" ;


    if ($conn->query($sql) === TRUE)
    {
        echo "New User Added!";
        exit();
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error . "<br />";
    }
?>