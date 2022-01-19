
<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black ;
  border-collapse: collapse;
}
</style>
</head>
<body>
<h2>Registration <form action=""></form></h2>

     <table style="width:100%">
     <tr>
            <th>First name:</th>
            <th>Last name: </th>
            <th>User_id</th>
            <th>Email</th>
        </tr>
         <tr>
             <td>A</td>
             <td>1</td>
             <td>hi</td>        
             <td>a1@gmail.com</td>                        
         </tr>

         <tr>
             <td>B</td>
             <td>2</td>
             <td>by</td>
             <td>b2@gmail.com</td>
         </tr>
         <tr>
             <td>C</td>
             <td>3</td>
             <td>cee</td>
             <td>c3@gmail.com</td>
        </tr>
     </table>
</body>
</html>