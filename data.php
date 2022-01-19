<!DOCTYPE html>
<html>
    <head> 
        <style>
          
            table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
        table, th, td {
  border: 1px solid black ;
  
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
</style></head>

<body>
  

    

<?php



$conn = mysqli_connect('localhost', 'root', '','myDB');


$query = "SELECT * FROM userdata"; 
$result = mysqli_query($conn, $query);


echo "<table>
    <tr>
    
    <th> id </th>
    <th> firstname </th>
    <th> lastname</th>
    <th> Email</th>
    <th> action </th>
    </tr>";
while($row = mysqli_fetch_array($result)){   
    
echo "    
    <tr>
      <td>"  .$row['id']. " </td>
      
    
      <td>"   .$row['firstname']. "</td>
      <td> "  .$row['lastname']." </td>
      <td> " .$row['Email']. "</td>";

  echo "<td>";
  echo "<a href=/delete.php?id=" . $row['id'] . ">";
  
  echo "Delete";
  echo "</a> <br>";
  echo "<a href=/update.php?id=" . $row['id'] . ">";
  echo "update";
  echo "</a>";
  echo "</td>";

   echo "</tr>";
}
echo "</table>";



mysqli_close();
?>

</body>
</html>