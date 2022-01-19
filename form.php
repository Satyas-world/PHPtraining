<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    
</head>
<body>
    <form action="submit.php" method="GET">
    <center><h2>Registration Form</h2>
        <p>plese fill this form to register </p>
        <hr/></center>

        <label for="fn"><b>First name :</b></label><br>
        <input type="text" placeholder="First name" name="fn" id="fn" required/><br>
        
        <label for="ln"><b>Last name    : </b></label><br>
        <input type="text" placeholder="Last name" name="ln" id="ln" required/><br>

        <label for="email"><b>Email     :  </b></label><br>
        <input type="email" placeholder="Enter your email" name="email" id="email" required/><br>

        <label for="User_id"><b>User_id :</b></label><br>
        <input type="text" placeholder="Select a user name" name="User_id" id="User_id" required/><br>

        <label for="psw"><b>Password :</b></label><br>
        <input type="Password" placeholder="Enter Password" name="psw" id="psw" required/><br><br>
        <hr/>
        <button type="submit">Registration</button>

</body>
</html>