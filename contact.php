<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 
// error_reporting(E_all);
// ini_set('display_errors',1);
$con = mysqli_connect('localhost', 'root', '','myDB');

if(mysqli_connect_error()) {
	echo "Error " . mysqli_connect_error();
}
else {
	$txtfirstname = $_POST['txtfirstname'];
	$txtlastname = $_POST['txtlastname'];
	$txtEmail = $_POST['txtEmail'];

	$sql = "INSERT INTO userdata (firstname,lastname,Email) VALUES ('$txtfirstname','$txtlastname', '$txtEmail' )";

	$rs = mysqli_query($con, $sql);

	if($rs)
	{
		echo "Contact Records Inserted";
	}
	else{
		echo($rs);
	}
}

?>
</body>
</html>