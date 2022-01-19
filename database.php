<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
</head>

<body>
<fieldset>
<legend>Contact Form</legend>
<form name="frmContact" method="post" action="contact.php">
<p>
<label for="Name">firstname </label>
<input type="text" name="txtfirstname" id="txtfirstname">
</p>
<p>
<label for="Name">lastname </label>
<input type="text" name="txtlastname" id="txtlastname">
</p>
<p>
<label for="email">Email</label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>