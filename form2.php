<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
table, th, td {
  border: 1px solid black ;
  border-collapse: collapse;
}
</style>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['name'])) 
    echo $_SESSION['name'];
else 
    header("location: form.php");
foreach($userData as $key => $values) {
    echo "<tr>";
        echo "<td>"; 
            echo $values['fname']; 
        echo "</td>";
        echo "<td>";
            echo $values['lname'];
        echo "</td>";
        echo "<td>";
            echo $values['User_id'];
        echo "</td>";       
        echo "<td>";
            echo $values['Email'];
        echo "</td>";                        
    echo '</tr>';

}

?>
    
</table>    
</body>
</html>