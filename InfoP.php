<html>
<head>
</head>

<body>


<table>

<tr>
<td>Name</td>
<td>Age</td>
<td>GPA</td>
<?php
$conn = mysqli_connect("localhost","root","","college");
if($conn-> connect_error)
      {  
	    die("connection failed:".$conn->connect_error)
       }
$sql="Select Name,Age,GPA from Student_info";
$result=$conn-> query($sql);
       if($result-> num_rows > 0)
           {
	          while($row = $result-> fetch_assoc()){echo "<tr><td>".$row["Name"]."</td><td>".$row["Age"]."</td><td>.$row["GPA"]."</td></tr>";}
             echo "</table>";
            else
               {echo "0 result";}
	
           }
   $conn-> close();	



?>
 </table>

 </body>

 </html>