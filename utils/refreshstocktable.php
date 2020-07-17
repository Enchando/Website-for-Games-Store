<?php

//Displaying the table which is going to be refreshed in the Ajax Script.

 require("connection.php");
 
 $sql = 'SELECT * FROM stock';
		
 $query = mysqli_query($conn, $sql);

 //Table headers

 print "
 
 <div style = 'overflow-x:auto;'>
    <table id = 'stock'>
            <thead>
                <tr>
                     <th>ID</th>
                    <th>Video Game</th>
                    <th>Company</th>
                    <th>Quantity</th>
                </tr>
            </thead>";

 
//Print out all the rows in the database
while($row = mysqli_fetch_array($query))
{
        echo "<tr>
                    <td>".$row["ID"]."</td>
                    <td>".$row["VideoGameName"]."</td>
                    <td>".$row["Company"]."</td>
                    <td>".$row["Quantity"]."</td>
                </tr>";
}
 
 echo "
 	</table>
 </body>";
 
 mysqli_close($conn);
 ?>