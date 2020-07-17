<?php

//Displaying the table which is going to be refreshed in the Ajax Script.

 require("connection.php");
 
 $sql = 'SELECT * FROM users';
		
 $query = mysqli_query($conn, $sql);

 //Table headers

 print "
 
 <div style = 'overflow-x:auto;'>
    <table id = 'users'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                </tr>
            </thead>";

 //Print out all the rows in the database
 
while($row = mysqli_fetch_array($query))
{
        echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["username"]."</td>
                </tr>";
}
 
 echo "
 	</table>
 </body>";
 
 mysqli_close($conn);
 ?>